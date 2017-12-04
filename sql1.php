<?php
    require_once 'config1.php';

    $year = $_POST ['year'];

    $sql = "SELECT sb.senate_bill_no, sb.title, sb.status, s.name, sb.date_filed FROM senate_bill sb, senator s WHERE sb.senator_filed_id = s.senator_id AND YEAR(date_filed) = '$year'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table border=1>
        <tr>
            <th>Senate bill no</th>
            <th>Title</th>
            <th>Status</th>
            <th>Senator who filed</th>
            <th>Date filed</th>
        </tr>
        ";
        while($row = $result->fetch_assoc()) {
            echo " <tr> <td>" . $row["senate_bill_no"] . "</td> <td>" . 
            $row["title"]. "</td> <td>" . 
            $row["status"]. "</td> <td>" .
            $row["name"]. "</td> <td>" .
            $row["date_filed"]. "</td> </tr>";
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
        <p><a href="welcome.php" class="btn btn-danger">Back to Home</a></p>

    </div>    
</body>
</html>
