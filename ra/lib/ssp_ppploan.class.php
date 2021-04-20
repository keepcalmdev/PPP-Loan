<?php
namespace Ra;
use Ra\Dbt_ppploan_requests as Dbt_ppploan_requests;
use Ra\Dbt_ppploan_owners as Dbt_ppploan_owners;
use Ra\Dbt_ppploan_files as Dbt_ppploan_files;


class SSP_ppploan extends \SSP {
    /**
     * Create the data output array for the DataTables rows
     *
     *  @param  array $columns Column information array
     *  @param  array $data    Data from the SQL get
     *  @return array          Formatted data in a row based format
     */
    static function data_output ( $columns, $data )
    {
        $out = array();

        for ( $i=0, $ien=count($data) ; $i<$ien ; $i++ ) {
            $row = array();
            for ( $j=0, $jen=count($columns) ; $j<$jen ; $j++ ) {
                $column = $columns[$j];
                // Is there a formatter?
                if ( isset( $column['formatter'] ) ) {
                    if(empty($column['db'])){
                        $row[ $column['dt'] ] = $column['formatter']( $data[$i] );
                    }
                    else{
                        $row[ $column['dt'] ] = $column['formatter']( $data[$i][ $column['db'] ], $data[$i] );
                    }
                }
                else {
                    if(!empty($column['db'])){
                        $row[ $column['dt'] ] = $data[$i][ $columns[$j]['db'] ];
                    }
                    else{
                        $row[ $column['dt'] ] = "";
                    }
                }
            }
            $out[] = $row;
        }

        // to add foreign columns
        $db_fgn_fields = Dbt_ppploan_requests::get_foreign_fields();
        $request_ids = array_column($out, "id");
        if($db_fgn_fields["owners"]["show_in_front"]){
            $owners = Dbt_ppploan_owners::arrange_by_request_id( Dbt_ppploan_owners::get_by_request_ids($request_ids) );
            $owners_strs = Dbt_ppploan_owners::get_strings($owners);
            
        }else{
            $owners = false;
        }
        if($db_fgn_fields["files"]["show_in_front"]) {
            $files = Dbt_ppploan_files::arrange_by_request_id(Dbt_ppploan_files::get_by_request_ids($request_ids));
        }else{
            $files = false;
        }
        if($db_fgn_fields["tax_documents"]["show_in_front"]) {
            $tax_documents = Dbt_ppploan_files::arrange_by_request_id(Dbt_ppploan_files::get_request_documents($request_ids, "tax_documents"));
        }else{
            $tax_documents = false;
        }
        if($db_fgn_fields["articles_incorporations"]["show_in_front"]) {
            $articles_incorporations = Dbt_ppploan_files::arrange_by_request_id(Dbt_ppploan_files::get_request_documents($request_ids, "articles_incorporations"));
        }else{
            $articles_incorporations = false;
        }
        foreach ($out as &$row) {
            if($owners){
                $row["owners"] = $owners_strs[ $row["id"] ];
            }
            if($files) {
                $row["files"] = $files[$row["id"]];
            }
            if($tax_documents) {
                $row["tax_documents"] = $tax_documents[$row["id"]];
            }
            if($articles_incorporations) {
                $row["articles_incorporations"] = $articles_incorporations[$row["id"]];
            }
        }
        return $out;
    }


    /**
     * The difference between this method and the `simple` one, is that you can
     * apply additional `where` conditions to the SQL queries. These can be in
     * one of two forms:
     *
     * * 'Result condition' - This is applied to the result set, but not the
     *   overall paging information query - i.e. it will not effect the number
     *   of records that a user sees they can have access to. This should be
     *   used when you want apply a filtering condition that the user has sent.
     * * 'All condition' - This is applied to all queries that are made and
     *   reduces the number of records that the user can access. This should be
     *   used in conditions where you don't want the user to ever have access to
     *   particular records (for example, restricting by a login id).
     *
     *  @param  array $request Data sent to server by DataTables
     *  @param  array|PDO $conn PDO connection resource or connection parameters array
     *  @param  string $table SQL table to query
     *  @param  string $primaryKey Primary key of the table
     *  @param  array $columns Column information array
     *  @param  string $whereResult WHERE condition to apply to the result set
     *  @param  string $whereAll WHERE condition to apply to all queries
     *  @return array          Server-side processing response array
     */
    static function complex ( $request, $conn, $table, $primaryKey, $columns, $whereResult=null, $whereAll=null )
    {
        $bindings = array();
        $db = self::db( $conn );
        $localWhereResult = array();
        $localWhereAll = array();
        $whereAllSql = '';

        // Build the SQL query string from the request
        $limit = self::limit( $request, $columns );
        $order = self::order( $request, $columns );
        $where = self::filter( $request, $columns, $bindings );

        $whereResult = self::_flatten( $whereResult );
        $whereAll = self::_flatten( $whereAll );

        if ( $whereResult ) {
            $where = $where ?
                $where .' AND '.$whereResult :
                'WHERE '.$whereResult;
        }

        if ( $whereAll ) {
            $where = $where ?
                $where .' AND '.$whereAll :
                'WHERE '.$whereAll;

            $whereAllSql = 'WHERE '.$whereAll;
        }

        // Main query to actually get the data
        $data = self::sql_exec( $db, $bindings,
            "SELECT `".implode("`, `", self::pluck($columns, 'db'))."`
			 FROM `$table`
			 $where
			 $order
			 $limit"
        );

        // Data set length after filtering
        $resFilterLength = self::sql_exec( $db, $bindings,
            "SELECT COUNT(`{$primaryKey}`)
			 FROM   `$table`
			 $where"
        );
        $recordsFiltered = $resFilterLength[0][0];

        // Total data set length
        $resTotalLength = self::sql_exec( $db, $bindings,
            "SELECT COUNT(`{$primaryKey}`)
			 FROM   `$table` ".
            $whereAllSql
        );
        $recordsTotal = $resTotalLength[0][0];

        /*
         * Output
         */
        return array(
            "draw"            => isset ( $request['draw'] ) ?
                intval( $request['draw'] ) :
                0,
            "recordsTotal"    => intval( $recordsTotal ),
            "recordsFiltered" => intval( $recordsFiltered ),
            "data"            => self::data_output( $columns, $data )
        );
    }

}

