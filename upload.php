<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<form method="POST" action="backend3.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="itemName">Item Name</label>
        <input type="text" class="form-control" id="itemName" name="itemName">
    </div>

    <div class="form-group">
        <label for="oldPrice">Old Price</label>
        <input type="number" class="form-control" id="oldPrice" name="oldPrice">
    </div>

    <div class="form-group">
        <label for="newPrice">New Price</label>
        <input type="number" class="form-control" id="newPrice" name="newPrice">
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>

    <div class="form-group">
        <label for="time">Time</label>
        <input type="date" class="form-control" id="time" name="time">
    </div>

    <button type="submit" name="upload" class="btn btn-primary">Submit</button>
</form>
</body>
<script src="js/bootstrap.js"></script>
</html>