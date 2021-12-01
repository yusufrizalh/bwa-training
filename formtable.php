<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Employee</title>
</head>

<body>
    <h2>Form Add New Employee</h2>
    <h3><a href="showtable.php">Show Employees</a></h3>

    <form action="formtableaction.php" method="post">
        <label for="emp_name">Name</label>
        <input type="text" name="emp_name" placeholder="Enter your name here" required>
        <br>
        <label for="emp_email">Email</label>
        <input type="email" name="emp_email" placeholder="Enter email address here" required>
        <br>
        <input type="submit" value="Save">
    </form>
</body>

</html>