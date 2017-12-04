<?php
	require_once '../../config1.php';

	$senator_id1 = $_POST ['senator_id1'];

	$senator_id2 = $_POST ['senator_id2'];
	$name = $_POST ['name'];
	$party = $_POST ['party'];
	$province = $_POST ['province'];
	$position = $_POST ['position'];

	$sql = "UPDATE senator SET senator_id='$senator_id2',
	name='$name',
	party='$party',
	province='$province',
	position='$position'
	 WHERE senator_id='$senator_id1'";

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

