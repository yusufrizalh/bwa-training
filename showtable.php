<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Employee</title>
</head>

<body>
    <h2>Show data from employee table</h2>
    <h3>Add Employee</h3>

    <table border="1" width="70%">
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

            $stmt = $dbconn->prepare("SELECT * FROM employee ORDER BY emp_name DESC");
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
</body>

</html>