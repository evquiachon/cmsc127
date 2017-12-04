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
        <h2>Search House Bill</h2> <br />
        <form action="searchHouseBill.php" method="post">

            <div class="form-group">
                <label>House Bill No: </label>
                <input type="text" name="house_bill_no" class="form-control">
            </div>    
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
             <p><a href="../../bill.php" class="btn btn-danger">Go Back</a></p>
        </form>
    </div>    
</body>
</html>

