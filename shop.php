<?php
session_start();
// Connect to the database 
include 'connection.php';

// Get the record with the given ID
$id = $_SESSION['imageID'];
$sql = "SELECT * FROM `upload` WHERE `ID` ='$id'";

$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
echo "No record found";
exit;
}

// Fetch the record into $row
$row = mysqli_fetch_assoc($result);

?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title"><?php echo $row['iterm_name']; ?></h5>
        <p class="card-text">
            Old Price: <?php echo $row['old_price']; ?><br>
            New Price: <?php echo $row['new_price']; ?>
        </p>
        <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['iterm_name']; ?>">
        <p class="card-text">
            <small class="text-muted">Uploaded by <?php echo $row['user_name']; ?></small>
        </p>
    </div>
</div>