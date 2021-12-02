<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/image-1.jpg" class="d-block w-100" alt="Image1">
                </div>
                <div class="carousel-item">
                    <img src="./images/image-2.jpg" class="d-block w-100" alt="Image2">
                </div>
                <div class="carousel-item">
                    <img src="./images//image-3.jpg" class="d-block w-100" alt="Image3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
        <hr>
        <h2>Show data from employee table</h2>
        <h3><a href="formtable.php" class="btn btn-link">Add Employee</a></h3>
        <h3><a href="exportexcel.php" class="btn btn-link">Export Excel</a></h3>

        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Employee Email</th>
                <th>Employee Hiredate</th>
            </tr>
            <?php
            class TableRows extends RecursiveIteratorIterator
            {
                function __construct($iterator)
                {
                    parent::__construct($iterator, self::LEAVES_ONLY);
                }
                function current()
                {
                    return "<td>" . parent::current() . "</td>";
                }
                function beginChildren()
                {
                    echo "<tr>";
                }
                function endChildren()
                {
                    echo "</tr>";
                }
            }

            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_bwa";

            try {
                $dbconn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $dbconn->prepare("SELECT * FROM employee ORDER BY emp_id ASC");
                // $stmt = $dbconn->prepare("SELECT * FROM employee WHERE emp_name LIKE '%p%'");
                $stmt->execute();

                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $key => $value) {
                    echo $value;
                }
            } catch (PDOException $ex) {
                echo "Error: " . $ex->getMessage();
            }
            $dbconn = null;
            ?>
        </table>
    </div>
</body>

</html>