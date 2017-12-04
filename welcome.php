<?php
    // Initialize the session
    session_start();
     
    // If session variable is not set it will redirect to login page
    if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
      header("location: login.php");
      exit;
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo $_SESSION['username']; ?></b>. Please select a query.</h1>
    </div>

    <p> <a href="report1.php">View Report 1</a> </p>
    <p> <a href="report2.php">View Report 2</a> </p>
    <p> <a href="report3.php">View Report 3</a> </p>
    <p> <a href="report456.php">View Reports 4,5, and 6</a> </p>
    <p> <a href="report789.php">View Reports 7,8, and 9</a> </p>

    <p> <a href="bill.php">Add, Delete, Search, Update Bill </a> </p>
    <p> <a href="./entities/senator/senator.php">Add, Delete, Search, Update Senator </a> </p>
    <p> <a href="./entities/house_member/houseMember.php">Add, Delete, Search, Update House Member </a> </p>

    <p><a href="logout.php" class="btn btn-danger">Log Out</a></p>
</body>
</html>

