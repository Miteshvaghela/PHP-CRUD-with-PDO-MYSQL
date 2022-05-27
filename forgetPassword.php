<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget password</title>
    <style>
        .submit-btn{border-radius:0px; background:#000; color:#fff; width:350px;padding:1rem 2rem; font-size:18px;}
        .submit-btn:hover{background:#fff; color:#000;}
 
        .form-floating > label{
            padding:0.3rem .75rem !important;
            font-size:12px;
        }
    </style>
</head>
<body>
    <section id="form">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-4">
                    <img src="./utils/img/login.jpg" alt="Login image" class="img-fluid"/>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="block">
                        <h2>Forget password</h2>
                        <h3>Enter email to recieve password reset link.</h3>
                    </div>
                    <div class="form">
                        <div class="control">
                        <div class="control form-floating mt-3 mb-3">
                                <label for="" class="form-label">Email address</label>
                                <input type="text" class="form-control"/>
                            </div>
                            
                        </div>
                        <div class="control mt-3 mb-3 text-center">
                            <button type="submit" class="submit-btn">Submit</button>
                            <a href="./login.php" class="link">Back</a>
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

    require_once('./header.php');

?>
</body>
</html>