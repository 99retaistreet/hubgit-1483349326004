<?php 
//load database connection
 include 'db_const.php';
// Search from MySQL database table
$search=$_POST['search'];
$stmt = "select * from RETAIL_STORE_PROD where PROD_NM LIKE '%$search%' and STORE_ID='1472222821'  LIMIT 0 , 10";
 $result = db2_prepare($conn, $stmt);
       db2_execute($result);
// Display search result
         if (!db2_num_rows == 0) {
		 		echo "Search found :<br/>";
				echo "<table style=\"font-family:arial;color:#333333;\">";	
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Products</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Price</td></tr>";				
            while ($results = $query->fetch()) {
				echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";			
                echo $results['PROD_NM'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['MRP'];
				
				echo "</td></tr>";				
            }
				echo "</table>";		
        } else {
            echo 'Nothing found';
        }
?>
