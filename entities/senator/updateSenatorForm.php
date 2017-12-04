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
        <form action="updateSenator.php" method="post">

            <div class="form-group">
                <h3>Search</h3>
                <label>Find Senator: </label>
                <?php
                    require_once '../../config1.php';
                    $sql = "SELECT DISTINCT senator_id, name FROM senator";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        echo "<select name='senator_id1' class='form-control'>";

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
                <h3>Edit</h3>
                <label>Senator ID: </label>
                <input type="text" name="senator_id2" class="form-control">
                <label>Name: </label>
                <input type="text" name="name" class="form-control">
                <label>Party: </label>
                <input type="text" name="party" class="form-control">
                <label>Province: </label>
                <input type="text" name="province" class="form-control">
                <label>Position: </label>
                <input type="text" name="position" class="form-control">
            </div>    
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
             <p><a href="senator.php" class="btn btn-danger">Go Back</a></p>
        </form>
    </div>    
</body>
</html>

