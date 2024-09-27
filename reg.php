
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<form action="backend1.php" method="post"  onsubmit="return validatePassword() ">
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Registration Form</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" required width="8">
                            </div>
                            <div class="mb-3">
                                <label for="cpassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="cpassword" name="password" required width="8">
                            </div>
                            <button type="submit"  name="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    

</body>
<script src="js/bootstrap.js"></script>
<script>
    // password validation
    function validatePassword() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("cpassword").value;

        if (password != confirmPassword) {
            alert("Passwords do not match");
            return false;
        }
        return true;
    }
    // alert
    const form = document.querySelector('form');
const submitBtn = document.querySelector('button[type="submit"]');

submitBtn.addEventListener('click', () => {
  alert('Congratulation your account has be created, you can now upload and item !'); 
});

</script>
</html>