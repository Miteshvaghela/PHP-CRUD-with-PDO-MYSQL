<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
<section id="form">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-5">
        <img src="./utils/img/login.jpg" alt="Login image" class="img-fluid"/>
            </div>
            <div class="col-lg-4 align-self-center">
                <h2>Webian login</h2>
                <h3>Sign into your account.</h3>
                <div class="form">
                        <div class="control form-floating mt-3 mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="control form-floating mt-3 mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="control mt-3 mb-3 text-center">
                            <button type="submit" class="submit-btn">Login</button>
                        </div>
                        <div class="control">
                            <a href="./forgetPassword.php" class="link">Forgot password?</a><br/>
                            <span>Don't have account yet?</span><a href="./register.php" class="link">Register here</a>
                        </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6 text-center">
                <h4>Copyrights reserved @ funtechstic.com</h4>
            </div>
        </div>
    </div>
</section>

<?php 
    include('./header.php');
?>
</body>
</html>