<?php
    $key=$_GET['key'];
    $array = array();
   
	
if( getenv("VCAP_SERVICES") ) {
    $json = getenv("VCAP_SERVICES");
} 
# No DB credentials
else {
    echo "No vcap services available.";
    return;
}
# Decode JSON and gather DB Info
$services_json = json_decode($json,true);
$blu = $services_json["dashDB"];
if (empty($blu)) {
    echo "No dashDB service instance is bound. Please bind a dashDB service instance";
    return;
}
$bludb_config = $services_json["dashDB"][0]["credentials"];
// create DB connect string
$database = 'BLUDB';
$user = 'dash111138';
$password = 'iCju8bMumIfF';
$hostname = 'awh-yp-small02.services.dal.bluemix.net';
$port = 50000;
$conn_string = "DRIVER={IBM DB2 ODBC DRIVER};DATABASE=$database;" .
  "HOSTNAME=$hostname;PORT=$port;PROTOCOL=TCPIP;UID=$user;PWD=$password;";
$conn = db2_connect($conn_string, '', '');
	
	
	
	
           
      
                
    $query="select * from RETAIL_STORE_PROD where PROD_NM LIKE '%{$key}%'and STORE_ID='1472222821'";
 $result = db2_prepare($conn, $query);
       db2_execute($result);
    while($row=mysql_fetch_assoc($result))
    {
        ?>
    
     <td><b><?php echo $row['PROD_NM']?></b><br /><br />
            		
                    Price:<big style="color:green">
                    	Rs<?php echo $row['MRP']?></big><br /><br />
                   
                 
 <a class="btnLink" href="?action=addToCart&PROD_ID=<?php echo $row["PROD_ID"]; ?>" onClick="return popup(this, 'notes')">Add to cart</a></in>
                
    <?php
    
    }
    ?>
   

