<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medicio landing page template for Health niche</title>
	
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
					<p class="bold text-right">Call us now +62 008 65 001</p>
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

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#intro">Home</a></li>
				<li><a href="#service">Service</a></li>
				<li><a href="#doctor">Doctors</a></li>
				<li><a href="#facilities">Facilities</a></li>
				<li><a href="#pricing">Pricing</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>More <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="index.html">Home form</a></li>
					<li><a href="index-video.html">Home video</a></li>
					<li><a href="index-cta.html">Home CTA</a></li>
					<li><a href="https://bootstrapmade.com">Download</a></li>
				  </ul>
				</li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">Hemas medical group</h2>
					</div>
					
	
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
                                 <div class="well well-trans">
<div class="wow fadeInRight" data-wow-delay="0.1s">
<ul class="lead-list">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							
							<h4 class="h-bold"><a href="#" onclick="toggle_visibility('foo');">Upload Your Priscription</h4>
							<h1>Order Preview</h1>
    <table border="0" class="table_fields"  id="tablepaging"cellpadding="2px" cellspacing="20px" width="600px">
    <thead>
        <tr class="table_fields_top">
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        session_start();
        
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
            	
$_SESSION['Prod_Nm']=$item["PROD_NM"];
$_Session['Price']=$item["price"];
$_Session['Qty']=$item["qty"];
$_Session['Subtotal']=$item["subtotal"];
$_Session['Prod_Id']=$item["PROD_ID"]
?>
        
       <tr class="table_fields_top">
            <td><?php echo $item["PROD_NM"]; ?></td>
            <td><?php echo 'Rs'.$item["price"].''; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo 'Rs'.$item["subtotal"].''; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){
            	$_SESSION['Total']=$cart->total();
            	?>
            <td class="text-center"><strong>Total <?php echo 'Rs'.$cart->total().''; ?></strong></td>
            <?php } ?>
    
        <a href="index.php">  Continue Shopping</a>
       
    
    
    <td> <a href="bill.php">Place Order</a></td>
</tr>

    </tfoot>
    </table>

                                               </ul>	</ul>
						</div>
					</div></div></div></div>
			
					

						</div>
						


					<div id="foo" style="display:none;">
					<div class="col-lg-6">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						          
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Upload Your Priscription <small>(It's free!)</small></h3>
									</div>
									<div class="panel-body">
				<form action="upload.php" method="post" enctype="multipart/form-data" class="pure-form">
		<input type="file" name="files[]" multiple="multiple" id="files">
		<input type="submit" value="Upload" class="pure-button pure-button-primary">
	</form>
	
	<!-- progress bar -->
	<div class="progress">
		<div class="bar"></div >
		<div class="percent">0%</div >
	</div>

</div> later</p>
									
									</form>
								</div>
							</div>				
						</div>
						</div>
						</div>
					</div>					
				</div>		
			</div>
		</div>		
    </section>
	
	<!-- /Section: intro -->

	<!-- Section: boxes -->
    <
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>
<script type="text/javascript" src="progressbar/jquery.min.js"></script>
	<script type="text/javascript" src="progressbar/jquery.form.min.js"></script>
	
	<!-- main script -->
	<script type="text/javascript" src="progressbar/script.js"></script>
<script type="text/javascript">
<!--
    function toggle_visibility(id) {
      
        var e = document.getElementById(id);
    
        e.style.display = "block";
     
}
//-->
</script>
</body>

</html>
