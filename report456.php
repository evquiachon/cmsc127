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
        <form action="sql456.php" method="post">
            <div class="form-group">
                <p>View all bills passed at the Senate on First Reading </p>
                <p>View all bills passed at the Senate on Second Reading </p>
                <p>View all bills passed at the Senate on Third Reading </p>
                <label>Select status: </label>
                <select name="status" class="form-control"> 
                    <option value="1st Reading">First Reading</option>
                    <option value="2nd Reading">Second Reading</option>
                    <option value="3rd Reading">Third Reading</option>
                </select>
            </div>    
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
             <p><a href="welcome.php" class="btn btn-danger">Go Back</a></p>
        </form>
    </div>    
</body>
</html>

