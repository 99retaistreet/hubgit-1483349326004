<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">   

    <title>99 Retail Pvt Ltd</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">Call us now </p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>

           <div class="collapse navbar-collapse navbar-right navbar-main-collapse">


	<ul class="nav navbar-nav">
		<li class="active">
			<?php
include 'db_const.php';
SESSION_START();
  $Mobile_No=$_SESSION['Mobile_No'];
	$CUST_ID=$_SESSION['CUST_id'];
$sql = "SELECT * FROM RETAIL_CUST  where CUST_ID='$CUST_ID' LIMIT 1 ";
$stmt = db2_prepare($conn, $sql);
$result = db2_execute($stmt);
while ($row = db2_fetch_assoc($stmt)) {
     
     $name="<b>".$row['NAME'] ."</b>";
    echo"<b>";
    echo "Hello $name";
    echo "</b>";
}
?></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret">
</b>
</a>
<ul class="dropdown-menu">
<li><a href="logout.php">Logout</a></li>

</ul>
</li>
</ul>
</div>
<!-- /.navbar-collapse -->
 </div>
 <!-- /.container -->
  </nav>
