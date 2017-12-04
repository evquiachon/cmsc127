<?php
	require_once 'config1.php';

	$sql = "SELECT username, password FROM users";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "username: " . $row["username"] . " - password: " . $row["password"]. " " . "<br>";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
?>
