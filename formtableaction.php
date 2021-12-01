<?php
$username = "root";
$password = "";
$host = "localhost";
$dbname = "db_bwa";

$emp_name = isset($_POST['emp_name']) ? $_POST['emp_name'] : '';
$emp_email = isset($_POST['emp_email']) ? $_POST['emp_email'] : '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    try {
        $dbconn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $dbconn->prepare("INSERT INTO employee (emp_name, emp_email) VALUES (
        :emp_name, :emp_email
    )");
        $stmt->bindParam(':emp_name', $emp_name);
        $stmt->bindParam(':emp_email', $emp_email);
        $stmt->execute();
        echo "Insert data into employee is succesful!";
    } catch (PDOException $ex) {
        echo "Error on Table insertion: " . $ex->getMessage();
    }
    $dbconn = null;
}
