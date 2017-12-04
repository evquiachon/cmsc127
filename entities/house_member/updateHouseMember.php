<?php
	require_once '../../config1.php';

	$house_member_id1 = $_POST ['house_member_id1'];

	$house_member_id2 = $_POST ['house_member_id2'];
	$name = $_POST ['name'];
	$party_list = $_POST ['party_list'];
	$province = $_POST ['province'];
	$district = $_POST ['district'];

	$sql = "UPDATE house_member SET house_member_id='$house_member_id2',
	name='$name',
	party_list='$party_list',
	province='$province',
	district='$district'
	 WHERE house_member_id='$house_member_id1'";

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

