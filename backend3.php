
<?php
session_start();
 // connection
 include 'connection.php';
 // collect info
 $item_name = filter_input(INPUT_POST, 'itemName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
 $item_old_price = filter_input(INPUT_POST, 'oldPrice', FILTER_SANITIZE_NUMBER_FLOAT,);
 $item_new_price = filter_input(INPUT_POST, 'newPrice', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
 $z_name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
 $time = date("Y-m-d");
 // ID generation
 function randomizeUserName($item_name)
 {
     $randomString = '';
     $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
     $charactersLength = strlen($characters);
     for ($i = 0; $i < 15; $i++) {
         $randomString .= $characters[rand(0, $charactersLength - 1)];
     }
     return $randomString;
 }
 $ID1 = randomizeUserName($item_name);

 $_SESSION['imageID'] = $ID1;



if (isset($_POST['upload'])) {
    $image_name = $_FILES['image']['name']; 
    $filesize = $_FILES['image']['size'];
    $kb_mb = ($filesize / 1024) / 1024;
    $filetype = $_FILES['image']['type'];
    $serverlocation = $_FILES['image']['tmp_name'];
    $type = explode("/", $filetype);
    if ($type[0] <> "image") {
        $alert = '<script type="text/javascript">
        if(window.confirm("Please the file you have input is not an Image,Our syst collects only Image,try again")){
            window,location.href="upload.php";
        }
        </script>';
        echo $alert;
    } else {
        // Upload file
$target_dir = "./image/";
        $path = pathinfo($image_name);
        $path_filename_ext = $target_dir . $image_name;
        $link = '.image/' . $image_name;

        if (!move_uploaded_file($serverlocation, $path_filename_ext)) {
            $alert1 = '<script type="text/javascript">
        if(window.confirm("Please check your internet connection and try again")){
            window.location.href="shop.php";
        }
        </script>';
            echo $alert1;
        } else {
            $sql = "INSERT INTO `upload`(`ID`, `iterm_name`, `old_price`, `new_price`, `image`, `user_name`, `date`) VALUES 
                                      (' $ID1',' $item_name','  $item_old_price',' $item_new_price',' $link',' $z_name',' $time')";
            mysqli_query($conn, $sql);

                $url = "shop.php";
                header("Location: $url");
        }
    }
    
}

mysqli_close($conn);
?>
