<?php
 error_reporting(0);
 session_start();
 session_destroy();
 if ($_SESSION['message']) {
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
    
    alert('$message');
    
    </script>";
 }


//127.0.0.1:80/dashboard/
?>




<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Student Management System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    </head>
    <body>
       <nav>
        <label class="logo">Student Portal</label>
        <ul>
            <li> <a href="">Home</a></li>
            <li> <a href="">Contact</a></li>
            <li> <a href="">Admission</a></li>
            <li> <a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
       </nav>
       <div class="section1">
         <label class="img_text">We Teact Students With Care</label>
        <img class="main_img" src="school_management.jpg" alt="their is some error plz wait">

       </div>
       <div class="container">
         <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="school2.jpg" alt="">
                </div>
                <div class="col-md-8">
                    <h1>Welcome to your College</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia cumque sapiente voluptatibus? Ad non aliquid unde laudantium ipsa, placeat quia perspiciatis cum assumenda explicabo ducimus eum qui optio recusandae facere ea! Quae vel voluptas eveniet quas corrupti repudiandae repellendus accusantium mollitia fugit. Ex corporis adipisci consequatur necessitatibus delectus exercitationem deserunt fugit laudantium quo facere ipsa sunt voluptates, labore maxime, recusandae porro, obcaecati unde sapiente iusto. Vel ab ipsa saepe eos, quod sunt voluptatibus porro explicabo ipsam rem ea consequatur! Et nesciunt optio, modi corporis commodi, ullam fugit dicta consequuntur eligendi quo officia tenetur deserunt fuga officiis? Necessitatibus alias nobis voluptatum.</p>
                    

                </div>
            
         </div>
       </div>
       <center>
        <h1>Our Teachers</h1>
        <div class="container">
            <div class="row">
              <div class="col-md-4">

                 
                 <img class="teacher" src="teacher1.jpg" alt="">
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam nostrum ratione veniam nobis fugit, nulla eveniet adipisci modi possimus. At commodi quas nam asperiores debitis earum quod, repellendus dicta quis amet voluptatum vel labore harum dolores quos similique dolor.</p>
              </div>  
              
              <div class="col-md-4">

                 
                 <img class="teacher" src="teacher2.jpg" alt="">
                 <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam beatae unde possimus molestiae minus inventore! Excepturi ratione libero veniam cum repellat modi tempora velit, iste saepe, numquam totam obcaecati adipisci eaque illo officia accusantium rem inventore vitae. Doloremque, suscipit placeat.</p>
              </div> 
              
              <div class="col-md-4">

                
                 <img class="teacher" src="teacher3.jpg" alt="">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente modi, consectetur tenetur, optio veritatis praesentium nihil mollitia, quidem dolorum ipsam doloremque quo. Veniam adipisci tempore praesentium blanditiis! Vero, amet quas, fuga ipsum nam porro quo error perspiciatis officia nulla quia.</p>
              </div>  
            
            </div>

        </div>
       </center>


       <center>
        <h1>Our Courses</h1>
        <div class="container">
            <div class="row">
              <div class="col-md-4">

                 
                 <img class="teacher" src="web.jpg" alt="">
                  <h3>Web Development</h3>
              </div>  
              
              <div class="col-md-4">

                 
                 <img class="teacher" src="graphic.jpg" alt="">
                 <h3>Graphics Design</h3>
              </div> 
              
              <div class="col-md-4">

                
                 <img class="teacher" src="marketing.png" alt="">
                 <h3>Marketing Studies</h3>
              </div>  
            
            </div>

        </div>
       </center>

       <center>
        <h1 class="adm">Admission Form</h1>
       </center>

       <div align="center" class="admission_form"></div>

       <form action="data_check.php" method="POST">
         <div class="adm_int">
            <label class="label_text">Name</label>
            <input class="input_deg" type="text" name="name">
         </div>

         <div class="adm_int">
            <label class="label_text">Email</label>
            <input class="input_deg" type="text" name="email">
         </div>

         <div class="adm_int">
            <label class="label_text">Phone</label>
            <input class="input_deg" type="number" name="phone">
         </div>

         <div class="adm_int">
            <label class="label_text">Message</label>
            <textarea class="input_txt" name="message"></textarea>
         </div>

         <div class="adm_int">
            <input class="btn btn-primary" type="Submit" id="submit" value="apply" name="apply">
            
         </div>

       </form>

       <footer>
         <h3 class="footer_txt">All @copyright reserved by Web Technology</h3>
       </footer>
        <script src="" async defer></script>
        <a href="login.php"></a>
    </body>
</html>