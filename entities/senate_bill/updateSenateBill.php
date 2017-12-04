<?php
	require_once '../../config1.php';

	$senate_bill_no1 = $_POST ['senate_bill_no1'];

	$senate_bill_no2 = $_POST ['senate_bill_no2'];
	$title = $_POST ['title'];
	$status = $_POST ['status'];
	$date_filed = $_POST ['date_filed'];
	$senator_filed_id = $_POST ['senator_filed_id'];

	$sql = "UPDATE senate_bill SET senate_bill_no='$senate_bill_no2',
	title='$title',
	status='$status',
	date_filed='$date_filed',
	senator_filed_id='$senator_filed_id'
	 WHERE senate_bill_no='$senate_bill_no1'";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <p><a href="../../welcome.php" class="btn btn-danger">Back to Home</a></p>

    </div>    
</body>
</html>

