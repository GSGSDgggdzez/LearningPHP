<?php
// session start
session_start();
// include connection file
include 'connection.php';
// sanitize user input
$user_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$user_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$user_phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
// protect password
$User_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$User_password = hash('md5', $User_password);
// creation of ID
function randomizeUserName()
{
    $randomString = '';
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789&é#';
    $charactersLength = strlen($characters);
    for ($i = 0; $i < 12; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$ID = randomizeUserName($user_email);
// id session
$_SESSION['id'] = $ID;
// sending to database
$sql = "INSERT INTO `register`(`ID`, `Name`, `E-mail`, `Tel`, `Password`) VALUES ('$ID','$user_name','$user_email','$user_phone','$User_password')";
mysqli_query($conn, $sql);
mysqli_close($conn);
// session 
$_SESSION['email']=$user_email;
$_SESSION['password']=$User_password;
// redirect to login page
if ('submit') {
    // redirect to login page
    header("Location: login.php");
}



?>
