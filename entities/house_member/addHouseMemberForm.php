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
        <h2>Add House Member</h2> <br />
        <form action="addHouseMember.php" method="post">

            <div class="form-group">
                <label>House Member ID: </label>
                <input type="text" name="house_member_id" class="form-control">
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

