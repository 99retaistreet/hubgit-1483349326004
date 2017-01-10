<?php
include 'db_const.php';
$sql = "SELECT * FROM RETAIL_CUST ";
$stmt = db2_prepare($conn, $sql);
$result = db2_execute($stmt);

while ($row = db2_fetch_assoc($stmt)) {
     
    echo    $row['NAME'];
}
?>
