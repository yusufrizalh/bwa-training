<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Employee</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <div class="container">
        <h2>Form Add New Employee</h2>
        <h3><a href="showtable.php" class="btn btn-link">Show Employees</a></h3>

        <form action="formtableaction.php" method="post">
            <div class="form-group">
                <label for="emp_name">Name</label>
                <input type="text" class="form-control name=" emp_name" placeholder="Enter your name here" required>
            </div>
            <div class="form-group">
                <label for="emp_email">Email</label>
                <input type="email" class="form-control name=" emp_email" placeholder="Enter email address here" required>
            </div>
            <input type="submit" class="btn btn-outline-info" value="Save">
        </form>
    </div>
</body>

</html>