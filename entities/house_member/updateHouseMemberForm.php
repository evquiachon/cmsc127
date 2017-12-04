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
        <form action="updateHouseMember.php" method="post">

            <div class="form-group">
                <h3>Search</h3>
                <label>Find House Member: </label>
                <?php
                    require_once '../../config1.php';
                    $sql = "SELECT DISTINCT house_member_id, name FROM house_member";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        echo "<select name='house_member_id1' class='form-control'>";

                        while ($row = $result->fetch_assoc()) {
                            unset($id, $name);
                            $id = $row['house_member_id'];
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
                <label>House Member ID: </label>
                <input type="text" name="house_member_id2" class="form-control">
                <label>Name: </label>
                <input type="text" name="name" class="form-control">
                <label>Party List: </label>
                <input type="text" name="party_list" class="form-control">
                <label>Province: </label>
                <input type="text" name="province" class="form-control">
                <label>District: </label>
                <input type="text" name="district" class="form-control">
            </div>    
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
             <p><a href="houseMember.php" class="btn btn-danger">Go Back</a></p>
        </form>
    </div>    
</body>
</html>

