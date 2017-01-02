<?php
session_start();

//require 'db_const.php';
//code modified from https://github.com/ibmjstart/wp-bluemix-objectstorage/blob/master/classes/swift.php
$vcap = getenv("VCAP_SERVICES");
$data = json_decode($vcap, true);
$creds = $data['Object-Storage']['0']['credentials'];
$auth_url = "https://identity.open.softlayer.com" . '/v3'; //keystone v3
$region = "dallas";
$userId = "a95f736f4c224fbf86962f3d10766762";
$password = "Bg3m.I8AJ^H~el9[";
$projectId = "e283fcb86dbb4286a524064bb689f889";
$openstack = new OpenStack\OpenStack([
			    'authUrl' => $auth_url,
			    'region'  => $region,
			    'user'    => [
			        'id'       => $userId,
			        'password' => $password
			    ],
			    'scope'   => [
			    	'project' => [
			    		'id' => $projectId
			    	]
			    ]
			]);
//creates the container if it does not already exist
$openstack->objectStoreV1()->createContainer(['name' => 'Rohit']);
$container = $openstack->objectStoreV1()
                       ->getContainer('Rohit');
                       
//found on http://stackoverflow.com/questions/16888722/get-content-of-file-uploaded-by-user-before-saving
$fileContent = file_get_contents($_FILES["file"]["tmp_name"]);
$options = [
    'name'    => $_FILES['file']['name'],
    'content' => $fileContent
];



$name =$_FILES["file"]["name"];
//$content=$options['content'];
//echo "$content";
//echo '<img src= "'.$containe .'" height=200 width=150>';

//echo "<hr />Image File Uploaded : <br /><img src="$options['name']" style="width:100%  " />";
$container->createObject($options);

//found on http://stackoverflow.com/questions/14810399/php-form-redirect
//header( 'Location:billing.php' ) ;

session_start();


 $Store_Id='1465804506';
$pres_id=time();
//echo $password;

require("db_const.php");





$stmt = db2_prepare($conn,"INSERT INTO RETAIL_PRISCRIPTION(PRISCRIPTION,IMAGE,STORE_ID) VALUES('$pres_id','$name','$Store_Id')");




if (!db2_execute($stmt)) {
    printf("%s\n", db2_stmt_error($stmt));
    $err = db2_stmt_errormsg();
    die($err . "\n");
}
//echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
           



?>

