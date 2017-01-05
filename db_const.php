<?php
	
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
	
	# check connection
	
	
?>
