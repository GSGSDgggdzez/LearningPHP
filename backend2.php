<?php
session_start()
?>
<?php
// login page

// sanitize user input
$log_email = filter_input(INPUT_POST, 'email1', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$log_password = filter_input(INPUT_POST, 'password1', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// protect password
$log_password = hash('md5', $log_password);
// session
$_SESSION['email1'] = $log_email;
$_SESSION['password1'] = $log_password;
if (('login')) {
    // checking if email exists
    if ($_SESSION['email1'] == $_SESSION['email'] and $_SESSION['password1'] == $_SESSION['password']) {
        // Set the folder path 
        $folder = 'image';

        // Check if the folder already exists
        if (!is_dir($folder)) {

            // Folder does not exist, so create it
            mkdir($folder, 0755, true);
        }
        // redirect to upload page
        header("Location: upload.php");
    } else {
        echo 'email or password is incorrect';
    }
}
?>