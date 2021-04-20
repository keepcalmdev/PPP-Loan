<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PPP Loan Requests</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>

<body>

<?php
require 'nav_top.php';
$db_fields = $ppploan->get_db_fields();
?>

<div id="page-container">
    <div id="content-wrap">
        <div class="container">
            <div class="row justify-content-center pt-5">
                <div class="header-main">
                    <h2 class="header-text">PPP Loan requests</h2>
                    <p class="sub-text">Table with PPP Loan requests</p>
                </div>
            </div>
        </div>
        <div class="mt-3 px-3">
            <table class="table table-striped" id="requests-table">
                <thead>
                    <tr>
                        <?php $columns = array(); ?>
                        <?php foreach ($db_fields as $db_field): ?>
                            <?php if($db_field["show_in_front"]): ?>
                                <th title="<?php echo $db_field["title"]; ?>"><?php echo substr($db_field["title"], 0, 12); ?></th>
                                <?php $columns[] = array("data" => $db_field['code']); ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#requests-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "ra/ajax/get_loan_requests.php",
                "type": "POST",
            },
            "columns": <?php echo json_encode($columns); ?>,
        });
    });
</script>

</body>
</html>