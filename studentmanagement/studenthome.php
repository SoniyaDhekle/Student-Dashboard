

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="student.css">


    <?php
    
    include 'student_css.php';
    
    ?>

</head>
<body>

    <?php
    
    include 'student_sidebar.php';
    
    ?>

<!-- <header class="header">
     <a href="">Student Dashboard</a>
     <div class="logout">
     <a href="logout.php" class="btn btn-primary">Logout</a>
     </div>
     </header>
     <aside> -->
        <ul>
           

            <li>
                <a href="admission.php">Add Details</a>
            </li>

            <li>
                <a href="add_student.php">Add Students</a>
            </li>

            <li>
                <a href="view_student.php">View Students</a>
            </li>

            <li>
                <a href="">My Courses</a>
            </li>

            <li>
                <a href="">Add Certificated </a>
            </li>

            <li>
                <a href="">View Result</a>
            </li>


            <li>
                <a href="">Payment Details</a>
            </li>
        </ul>
     </aside>
     <div class="content">
        <h1>Student Dashboard</h1>
     </div>
     
</body>
</html>

