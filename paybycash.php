<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>99 retail Solution Pvt Ltd</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
      <link href="simpletreemenu.js" rel="stylesheet"  />
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
					<p class="bold text-right">Call us now ---</p>
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

           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
						


					
					<div class="col-lg-6">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						          
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>your Overall Summary </h3>
									</div>
									<div class="panel-body" width="100%">

<?php
// include databse configuration file
include 'db_const.php';
// initializ shopping cart class
include 'Cart.php';

$cart = new Cart;
// redirect to home if cart is empty
// set customer ID in session
?>

    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    
    table {
  font-family: "Helvetica Neue", Helvetica, sans-serif
}
caption {
  text-align: left;
  color: silver;
  font-weight: bold;
  text-transform: uppercase;
  padding: 2px;
}
thead {
  background: SteelBlue;
  color: white;
}
th,
td {
  padding: 2px 8px;
}
tbody tr:nth-child(even) {
  background: WhiteSmoke;
}
tbody tr td:nth-child(2) {
  text-align:center;
}
tbody tr td:nth-child(3),
tbody tr td:nth-child(4) {
  text-align: right;
  font-family: monospace;
}
tfoot {
  background: SeaGreen;
  color: white;
  text-align: right;
}
tfoot tr th:last-child {
  font-family: monospace;
}
   
    .table{width: 50%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 20px;}
    .footBtn{width: 50%;float: left;}
    .orderBtn {float: right;}
    </style>
</head>
<body>
<h1>Order Summary</h1>
<div class="container">

       <?php
        session_start();
  
  //-------sending customer information-----------//
  
$name=$_POST['name'];
$Mobile_No =$_POST['mobile_no'];
$E_mail =$_POST['e_mail'];
$ShippingAddress =$_POST['shippingaddress'];
$BillingAddress =$_POST['billingaddress'];
    ?>
    <table>
    <tr><th>Name:</th><td><?php echo $name; ?></td></tr>
<tr><th>Mobile_NO:</th><td><?php echo $Mobile_No; ?></td></tr>
<tr><th>E_Mail:</th><td><?php echo $E_mail; ?></td></tr>
<tr><th>ShippingAddress:</th><td><?php echo $ShippingAddress; ?></td></tr>
<tr><th>BillingAddress:</th><td><?php echo $BillingAddress; ?></td></tr>
     
   <table>
  
  <thead>
   <tr class="table_fields_top">
            <th>ORDER_ID</th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
  </thead>
  <tbody>
    
    
        <?php
  
  //-------sending customer information-----------//
  
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            $TRI_VALUE=time();
            $Order_Id= time()*10;
            $ordertotal=$_SESSION['Total'];
             //$bussinessdate = date('Y-m-d H:i:s');
            foreach($cartItems as $item){
            	
$_SESSION['Prod_Nm']=$item["PROD_NM"];
$_Session['Price']=$item["price"];
$_Session['Qty']=$item["qty"];
$_Session['Subtotal']=$item["subtotal"];
$_SESSION['Prod_Id']=$item["PROD_ID"];
$stmt=db2_prepare($conn,"INSERT INTO RETAIL_STR_BILL_DETAILS_INTERNET(TRI_ID,ORDERID,STORE_ID,MOBILE_NO,SHIPING_ADDR,BILL_ADDR,PRODUCT_ID,PROD_NM,MRP,QTY)VALUES('$TRI_VALUE','$Order_Id','1462908501','$Mobile_No','$ShippingAddress','$BillingAddress','{$_SESSION['Prod_Id']}','{$_SESSION['Prod_Nm']}','{$_Session['Price']}','{$_Session['Qty']}')");
//*End Of query*// 
if (!db2_execute($stmt)) {
    printf("%s\n", db2_stmt_error($stmt));
    $err = db2_stmt_errormsg();
}
?>


<td><?php echo $Order_Id; ?></td>
            <td><?php echo $item["PROD_NM"]; ?></td>
            <td><?php echo 'Rs'.$item["price"].''; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo 'Rs'.$item["subtotal"].''; ?></td>
   </tr>
        <?php }
        $result=db2_prepare($conn,"INSERT INTO RETAIL_STR_BILL_MASTER_INTERNET(TRI_ID,STORE_ID,NAME,MOBILE_NO,TOTAL,SHIPING_ADDR,BILL_ADDR) VALUES($TRI_VALUE,'1472222821','$name','$Mobile_No','$ordertotal', '$ShippingAddress','$BillingAddress')");
if (!db2_execute($result)) {
   printf("%s\n", db2_stmt_error($result));
    $err = db2_stmt_errormsg();
    
}
        
        }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
      
   
    
    <tfoot>
        <tr>
      <th colspan="4">Grand Total</th>
      <?php if($cart->total_items() > 0){ ?>
            <td><strong> <?php echo 'Rs'.$cart->total().''; ?></strong></td>
            <?php } ?>
    </tr>

    </tfoot>
   </table>
    </table>



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
