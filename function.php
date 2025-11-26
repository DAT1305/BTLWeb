<?php 
    require 'database.php';
    function getDatatable($tableName ){
        $getdatasql = "SELECT * FROM $tableName";
        $querydata =  $conn->query($getdatasql);
        $fetchdata = $querydata->fetch_assoc();

    };


?>
