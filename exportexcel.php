<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_bwa";

try {
    $dbconn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $dbconn->prepare("SELECT * FROM employee ORDER BY emp_id ASC");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // untuk file Excel
    $filename = "employees.xls";

    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=$filename");
    header("Pragma: no-cache");
    header("Expires: 0");
    $separator = "\t";

    // deteksi jika ada data
    if (!empty($results)) {
        echo implode($separator, array_keys($results[0])) . "\n";
        foreach ($results as $result) {
            foreach ($result as $key => $value) {
                $result[$key] = str_replace($separator . "$", "", $result[$key]);
                $result[$key] = preg_replace("/\r\n|\n\r|\n\r/", " ", $result[$key]);
                $result[$key] = trim($result[$key]);
            }
            echo implode($separator, $result) . "\n";
        }
    }
} catch (PDOException $ex) {
    echo "Error: " . $ex->getMessage();
}
