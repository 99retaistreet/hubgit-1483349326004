<?php
include 'db_const.php';
SESSION_START();

  $Mobile_No=$_SESSION['Mobile_No'];

	$CUST_ID=$_SESSION['CUST_id'];

echo 'mobileno'; echo$Mobile_No;
echo 'cust_id'; echo $CUST_ID;

$sql = "SELECT * FROM RETAIL_CUST  where MOBILE_NO='$Mobile_No' and CUST_ID='$CUST_ID' LIMIT 1 ";
$stmt = db2_prepare($conn, $sql);
$result = db2_execute($stmt);
while ($row = db2_fetch_assoc($stmt)) {
     
    echo    $row['NAME'];
}
?>
