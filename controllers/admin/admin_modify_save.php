<?php
    session_start();

    if(!isset($_SESSION['admusername'])){
        header('Location: /admin/');
        exit();
    }else if( $_SESSION['admaccess'] == 'Agent') {
        header('Location: /admin/');
        exit();
    }else {
        $admAccess = $_SESSION['admaccess'];
        $admUsername = $_SESSION['admusername'];
    }
    
    include("../important/class.database.php");
    require_once '../../vendor/autoload.php';
    require_once('../important/connect_AWS.php');
    

    
    use Aws\S3\S3Client;
    
    // S3 client configuration
    $client = new S3Client([
        'version' => 'latest',
        'region' => 'ap-southeast-1',
        'credentials' => [
            'key' => $accessKeyId,
            'secret' => $secretAccessKey,
        ],
    ]);
    
    $AllImgs = [];
    // Check if files are uploaded
    try{
    if(isset($_FILES['file'])) {
        $files = $_FILES['file'];
    
        // Loop through up to 4 files
        for ($i = 0; $i < min(4, count($files['name'])); $i++) {
            // Check if file is an image
            if (substr($files['type'][$i], 0, 5) === 'image') {
                $fileName = $files['name'][$i];
                $fileTmpName = $files['tmp_name'][$i];
    
                // Generate a unique file name
                $newFileName = uniqid('', true) . '.' . strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                //14 uid + 8 
                // Determine content type based on file extension
                $contentType = mime_content_type($fileTmpName);
    
                // Upload file to S3 bucket with metadata
                $result = $client->putObject([
                    'Bucket' => $bucketName,
                    'Key' => 'products/' .$newFileName,
                    'Body' => fopen($fileTmpName, 'rb'),
                    'ACL' => 'public-read',
                    'ContentType' => $contentType,
                ]);
    
                // Generate the URL of the uploaded file
                $url = $result->get('ObjectURL');
    
                $FinURL = $distDomain.$s3Folder.$newFileName;
                // array_push($myArray, "apple");
                // $AllImgs = $FinURL;
                // echo $FinURL. '<br/>';
                $strFinURL = $FinURL;
                // echo 'string is'.$strFinURL. '<br/>';
                array_push($AllImgs, $strFinURL);
            } else {
                // return false;
                // exit();
            }
        }
    }
    } catch (Aws\S3\Exception\S3Exception $e) {
        if ($e->getAwsErrorCode() === 'RequestTimeTooSkewed') {
            $_SESSION['error'] = '<br>'.'Level : '.$admAccess.'<br>'.'Admin User : '.$admUsername.'<br>'.'Request Time Too Skewed'.'<br>'.'Your device time is behind, Please update to real time or sync time'.'<br>'.$e->getAwsErrorCode();
            header("Location: error_logger.php");
            exit();
        } else {
            $_SESSION['error'] = '<br>'.'Level : '.$admAccess.'<br>'.'Admin User : '.$admUsername.'<br>'.$e->getAwsErrorCode();
            header("Location: error_logger.php");
            exit();
        }
    }catch(Exception $err){
        $_SESSION['error'] = '<br>'.'Level : '.$admAccess.'<br>'.'Admin User : '.$admUsername.'<br>'.$err->getMessage();
        header("Location: error_logger.php");
        exit();
    }

    try{

        // $ChangeProduct = new Product;
        // $ChangeInfo = $ChangeProduct->modify();
        // $ConDB = new ClassDbConn;
        // $eCon = $ConDB->NewCon();

        $sizez = $_POST['modSizes'];
        $sizez = explode(', ', strtoupper($sizez));
        $sizez = json_encode($sizez);

        $variation = $_POST['modVariation'];
        $variation = explode(', ', strtoupper($variation));
        $variation = json_encode($variation);

        $AllImgs = json_encode($AllImgs);

        $of = ['id' => $_POST['modId']];
        $productData = [
            "name" => $_POST['modName'],
            "category" => $_POST['modCategory'],
            "series" => $_POST['modSeries'],
            "price" => $_POST['modPrice'],
            "stocks" => $_POST['modStocks'],
            "sizes" => $sizez,
            "variation" => $variation,
            "description" => $_POST['modDescription'],
            "designer" => $_POST['modDesigner'],
            "manufacturer" => $_POST['modManufacturer'],
            "images" => $AllImgs,
            "date_modified" => date("Y-m-d H:i:s"),
            "modified_by" => $_SESSION['admusername'],
        ];

        // ($mysql, $table, $values, $where)
        $ChangeProduct = new Product;
        $ChangeInfo = $ChangeProduct->modify($of, $productData);
        // $eInsert = $ConDB->Update($eCon, "products", $productData);
        if($ChangeInfo == 'true'){
            header('Location: ../../admin/dashboard/?status=success');
            exit();
        }else{
            header('Location: ../../admin/dashboard/?status=failed');
            exit();
        }
        header('Location: ../../admin/dashboard/?status=success');

    } catch(Exception $e) {
        $_SESSION['error'] = '<br>'.'Level : '.$admAccess.'<br>'.'Admin User : '.$admUsername.'<br>'.$e->getMessage();
        header("Location: error_logger.php");
        exit();
    }





































// <?php
//     include("../important/connect_DB.php");

//     include("../important/class.database.php");
//     require_once '../../vendor/autoload.php';
//     require_once('../important/connect_AWS.php');
//     session_start();

//     if(!isset($_SESSION['admusername'])){
//         header('Location: /admin/index.php');
//     }else if( $_SESSION['admaccess'] == 'Agent') {
//         header('Location: /admin/index.php');
//     }else {
//         $admAccess = $_SESSION['admaccess'];
//         $admUsername = $_SESSION['admusername'];
//     }


// if ($dbConnection == true) {
//     $index = $_POST['index'];
//     $sPcat = $_POST['pcat'];
//     $sPname = $_POST['pname'];
//     $sPprice = $_POST['pprice'];
//     $sPquantity = $_POST['pquantity'];
//     $sPdescription = $_POST['pdescription'];
//     $sPphoto = $_POST['pphoto'];

//     if ($sPcat == "" || $sPname == "" || $sPprice == "" || $sPquantity == "" || $sPdescription == "" || $sPphoto == "") {
//         echo "Incomplete, please fill out all fields.";
        
//     } else {
//         try {
//             $dateTime = date("Y-m-d H:i:s");
//             $qUpdate = "UPDATE $dbDatabase .`products` 
//             SET `category` = '{$sPcat}', `name` = '{$sPname}', `price` = '{$sPprice}', `stocks` = '{$sPquantity}', `description` = '{$sPdescription}', `image` = '{$sPphoto}', `date_modified` = '{$dateTime}', `modified_by` = '{$admUsername}'
//             WHERE `id` = '{$index}'
//             ";

//             $eUpdate = mysqli_query($dbConnection, $qUpdate);

//             if ($eUpdate == true) {
//                 echo "updated";
//                 mysqli_close($dbConnection);
//             } else {
//                 echo "Failed to update, please call system administrator!";
//                 mysqli_close($dbConnection);
//             }
//         } catch (Exception $e) {
//             echo "error";
//         }
//     }
// } else {
//     echo "Failed to connect, please call system administrator!";
// }
