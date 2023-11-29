<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="login.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</head>
<body background="school2.jpg" class="img_deg">
    

        <center>
            <div class="form_deg">

                <center class="title_deg">
                   Login Form 

                   <h3>
                    <?php
                        
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION['loginMessage'];
                    ?>
                   </h3>
                </center>
                <form action="login_check.php" method="POST" class="login_form">
                    <div>
                        <label class="label_deg">Username</label>
                        <input type="text" name="username">
                    </div>

                    <div>
                        <label class="label_deg">Password</label>
                        <input type="password" name="password">
                    </div>

                    <div>
                        
                        <input class="btn btn-primary" type="submit" name="submit" value="login">
                    </div>
                </form>
            </div>
        </center>
</body>
</html>