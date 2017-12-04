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
        <h2>Add Senate Bill</h2> <br />
        <form action="addSenateBill.php" method="post">

            <div class="form-group">
                <label>Senate Bill No: </label>
                <input type="text" name="senate_bill_no" class="form-control">
                <label>Title: </label>
                <input type="text" name="title" class="form-control">
                <label>Status: </label>
               <select name='status' class='form-control'>
                    <option value="1st Reading">First Reading</option>
                    <option value="2nd Reading">Second Reading</option>
                    <option value="3rd Reading">Third Reading</option>
               </select>
                <label>Date Filed: </label>
                <input type="date" name="date_filed" class="form-control">
                <label>Author ID: </label>
                <?php
                    require_once '../../config1.php';
                    $sql = "SELECT DISTINCT name, senator_id FROM senator";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<select name='senator_filed_id' class='form-control'>";

                        while ($row = $result->fetch_assoc()) {
                            unset($id, $name);
                            $id = $row['senator_id'];
                            $name = $row['name']; 
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

