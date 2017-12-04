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
        <form action="deleteHouseBill.php" method="post">
            <div class="form-group">
                <h3>Delete</h3>
                <label>Find House Bill No: </label>
                <?php
                    require_once '../../config1.php';
                    $sql = "SELECT DISTINCT house_bill_no, title FROM house_bill";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        echo "<select name='house_bill_no' class='form-control'>";

                        while ($row = $result->fetch_assoc()) {
                            unset($id, $name);
                            $id = $row['house_bill_no'];
                            $name = $row['title']; 
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                        echo "</select>";
                    } else {
                        echo "0 results";
                    }
                $conn->close();
                ?>
            </div>    
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
             <p><a href="../../bill.php" class="btn btn-danger">Go Back</a></p>
        </form>
    </div>    
</body>
</html>

