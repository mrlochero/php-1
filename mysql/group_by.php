<?php
include_once 'db.php';

$sql = "SELECT class_id, sum(age) AS total_age
        FROM sinhvien
        GROUP BY class_id";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_fetch_all($result);
echo '<pre>';
print_r($result2);
echo '</pre>';


