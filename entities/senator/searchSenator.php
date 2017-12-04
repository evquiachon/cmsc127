<?php
    require_once '../../config1.php';

    $senator_name = $_POST ['senator_name'];

    $sql = "SELECT * FROM senator WHERE name LIKE '%$senator_name%' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table border=1>
        <tr>
            <th>Senator ID</th>
            <th>Name</th>
            <th>Party</th>
            <th>Province</th>
            <th>Position</th>
        </tr>
        ";
        while($row = $result->fetch_assoc()) {
            echo " <tr> <td>" . $row["senator_id"] . "</td> <td>" . 
            $row["name"]. "</td> <td>" . 
            $row["party"]. "</td> <td>" .
            $row["province"]. "</td> <td>" .
            $row["position"]. "</td> </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
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
