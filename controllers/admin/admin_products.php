<?php
    include("../important/connect_DB.php");

    session_start();

    if(!isset($_SESSION['admusername'])){
        header('Location: /admin/login/index.php');
    }else{
        $admAccess = $_SESSION['admaccess'];
    }

    $qSelect = "SELECT * FROM $dbDatabase .`products` WHERE `date_archived` IS NULL ORDER BY `id` DESC";
    $eSelect = mysqli_query($dbConnection, $qSelect);

    if ($eSelect == true) {
        try{ 
            $sHtml = "
                    <table id='admin_prod_tbl' class='table table-striped table-hover'>
                        <tr>
                            <th style='display:none'>Product ID</th>  
                            <th>Product Category</th>
                            <th>Product Image</th>
                            <th>Product Name</th>    
                            <th>Product Description</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                ";
            while($rows = mysqli_fetch_array($eSelect)) {

                $sHtml .= "<tr>
                        <td style='display:none'>".$rows['id']."</td>
                        <td>".$rows['category']."</td>
                        <td class='adPListImgCont'><img class='adPListImg' loading='lazy' id='imgtest' src='../../admin/listing/product_img/".$rows['image']."'></td>
                        <td>".$rows['name']."</td>
                        <td class='prod_desc'>".$rows['description']."</td>
                        <td>".$rows['price']."</td>
                        <td>".$rows['stocks']."</td>
                        <td>
                            <button class='btn btn-info' onclick=modify('".$rows['id']."')>Modify</button>&nbsp;
                            <button class='btn btn-danger' onclick=archive('".$rows['id']."')>Delete</button>
                        </td>
                    ";
            }

            $sHtml .= "</table>
                <button id='addProduct' onclick='addProduct()'>Add Product</button>
                ";
            
            echo $sHtml;
        } catch (Exception $e){
            echo "error";
            mysqli_close($dbConnection);
        }
    } else {
        echo "Failed to connect, please call system administrator!";
    }
