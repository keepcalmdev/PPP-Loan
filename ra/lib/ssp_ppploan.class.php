<?php
namespace Ra;
use Ra\Dbt_ppploan_requests as Dbt_ppploan_requests;
use Ra\Dbt_ppploan_owners as Dbt_ppploan_owners;
use Ra\Dbt_ppploan_files as Dbt_ppploan_files;


class SSP_ppploan extends \SSP {

    /**
     * Ordering
     *
     * Construct the ORDER BY clause for server-side processing SQL query
     *
     *  @param  array $request Data sent to server by DataTables
     *  @param  array $columns Column information array
     *  @return string SQL order by clause
     */
    static function order ( $request, $columns )
    {
        $order = '';

        if ( isset($request['order']) && count($request['order']) ) {
            $orderBy = array();
            $dtColumns = self::pluck( $columns, 'dt' );

            for ( $i=0, $ien=count($request['order']) ; $i<$ien ; $i++ ) {
                // Convert the column index into the column data property
                $columnIdx = intval($request['order'][$i]['column']);
                $requestColumn = $request['columns'][$columnIdx];

                $columnIdx = array_search( $requestColumn['data'], $dtColumns );
                $column = $columns[ $columnIdx ];

                if ( $requestColumn['orderable'] == 'true' ) {
                    $dir = $request['order'][$i]['dir'] === 'asc' ?
                        'ASC' :
                        'DESC';

                    $orderBy[] = Dbt_ppploan_requests::get_table_name() . '.`'.$column['db'].'` '.$dir;
                }
            }

            if ( count( $orderBy ) ) {
                $order = 'ORDER BY '.implode(', ', $orderBy);
            }
        }

        return $order;
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

        // get bussiness owners
        $joinOwners = sprintf(" LEFT JOIN %1\$s ON %1\$s.request_id = %2\$s.id", Dbt_ppploan_owners::get_table_name(), Dbt_ppploan_requests::get_table_name() );
        $dbFieldsOwners = Dbt_ppploan_owners::get_db_fields();
        $selectOwners = array();
        foreach ($dbFieldsOwners as $field) {
            if($field["show_in_front"]){
                $selectOwners[] = sprintf("JSON_ARRAYAGG(%1\$s.%2\$s) AS owners_%2\$s", Dbt_ppploan_owners::get_table_name(), $field["code"]);
            }
        }
        $selectOwnersSql = '';
        if($selectOwners){
            $selectOwnersSql = ", " . implode(", ", $selectOwners);
        }

        // get files
        $joinFiles = sprintf(" LEFT JOIN %1\$s ON %1\$s.request_id = %2\$s.id", Dbt_ppploan_files::get_table_name(), Dbt_ppploan_requests::get_table_name() );
        $dbFieldsFiles = Dbt_ppploan_files::get_db_fields();
        $selectFiles = array();
        foreach ($dbFieldsFiles as $field) {
            if($field["show_in_front"]){
                $selectFiles[] = sprintf("JSON_ARRAYAGG(%1\$s.%2\$s) AS files_%2\$s", Dbt_ppploan_files::get_table_name(), $field["code"]);
            }
        }
        $selectFilesSql = '';
        if($selectFiles){
            $selectFilesSql = ", " . implode(", ", $selectFiles);
        }
        //

        $group_by = " GROUP BY " . Dbt_ppploan_requests::get_table_name() . ".id";

        // Main query to actually get the data
        $sql = "SELECT " . Dbt_ppploan_requests::get_table_name() .".`" . implode("`, " . Dbt_ppploan_requests::get_table_name() . ".`", self::pluck($columns, 'db')) . "`
            $selectOwnersSql
            $selectFilesSql
            FROM `$table`
            $joinOwners
            $joinFiles
            $where
            $group_by
            $order
            $limit";
        
        fppr($sql , __FILE__.' $sql ');

        $data = self::sql_exec( $db, $bindings, $sql );

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

