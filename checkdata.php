<?php
require("db_const.php");

if(isset($_POST['mobile_no'];))
{
 $mobile_no=$_POST['mobile_no'];

 $checkdata=" SELECT MOBILE_NO FROM RETAIL_CUST WHERE MOBILE_NO='$mobile_no' ";

$result = db2_prepare($conn, $checkdata);
       db2_execute($result);


 if(db2_num_rows($result)>0)
 {
  echo "Mobile Number Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}

if(isset($_POST['e_mail']))
{
 $e_mail=$_POST['e_mail'];

 $checkdata=" SELECT E_MAIL FROM RETAIL_CUST WHERE E_MAIL='$e_mail' ";
  $result = db2_prepare($conn, $checkdata);
       db2_execute($result);


 if(db2_num_rows($result)>0)
 {
  echo "E_Mail Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}


?>
