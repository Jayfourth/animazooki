<?php
    include("../important/connect_DB.php");

    include("../important/class.database.php");
    require_once '../../vendor/autoload.php';
    require_once('../important/connect_AWS.php');
    session_start();

    if(!isset($_SESSION['admusername'])){
        header('Location: /admin/index.php');
    }else if( $_SESSION['admaccess'] == 'Agent') {
        header('Location: /admin/index.php');
    }else {
        $admAccess = $_SESSION['admaccess'];
        $admUsername = $_SESSION['admusername'];
    }


if ($dbConnection == true) {
    $index = $_POST['index'];
    $sPcat = $_POST['pcat'];
    $sPname = $_POST['pname'];
    $sPprice = $_POST['pprice'];
    $sPquantity = $_POST['pquantity'];
    $sPdescription = $_POST['pdescription'];
    $sPphoto = $_POST['pphoto'];

    if ($sPcat == "" || $sPname == "" || $sPprice == "" || $sPquantity == "" || $sPdescription == "" || $sPphoto == "") {
        echo "Incomplete, please fill out all fields.";
        
    } else {
        try {
            $dateTime = date("Y-m-d H:i:s");
            $qUpdate = "UPDATE $dbDatabase .`products` 
            SET `category` = '{$sPcat}', `name` = '{$sPname}', `price` = '{$sPprice}', `stocks` = '{$sPquantity}', `description` = '{$sPdescription}', `image` = '{$sPphoto}', `date_modified` = '{$dateTime}', `modified_by` = '{$admUsername}'
            WHERE `id` = '{$index}'
            ";

            $eUpdate = mysqli_query($dbConnection, $qUpdate);

            if ($eUpdate == true) {
                echo "updated";
                mysqli_close($dbConnection);
            } else {
                echo "Failed to update, please call system administrator!";
                mysqli_close($dbConnection);
            }
        } catch (Exception $e) {
            echo "error";
        }
    }
} else {
    echo "Failed to connect, please call system administrator!";
}
