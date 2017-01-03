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
							
							<i class="fa fa-check fa-3x circled bg-skin"></i>
							<h4 class="h-bold"> Your Uploaded Priscription </h4>
							<p>
							The Priscription you have Uploaded should be given by the doctors consult 							</p>

                                               </ul>	</ul>
						</div>
					</div></div></div></div>
			
					

						</div>
						


					
					<div class="col-lg-6">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						          
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>Your Priscription </h3>
									</div>
									<div class="panel-body">

<?php



$fileContent = file_get_contents($_FILES["file"]["tmp_name"]);
$imageData = base64_encode(file_get_contents($_FILES["file"]["tmp_name"]));

// Format the image SRC:  data:{mime};base64,{data};


   $src = 'data:;base64,'.$imageData;
$_SESSION['fil'] = "$src";

  
 echo '<hr />Image File Uploaded : <br /><img src="'.$src.'" style="width:100%;" />';
?>

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
   
	
<div class="line">
 <section id="boxes" class="home-section paddingtop-80"> 

<div class="container">
<div class="row">
<div class="col-sm-6 col-md-4">
<div class="wow fadeInUp" data-wow-delay="0.2s">
<div class="box text-center">
							
<i class="fa fa-check fa-3x circled bg-skin"></i>
<h4 class="h-bold"><a href="#" onclick="toggle_visibility('foo1');">Want to Add Some More Medicines</h4></a>
<p>
Add some more medicines beyond your priscription 
</p>
</div>
</div>
</div>
<div class="col-sm-3 col-md-3">
<div class="wow fadeInUp" data-wow-delay="0.2s">
<div class="box text-center">
<i class="fa fa-list-alt fa-3x circled bg-skin"></i>
<h4 class="h-bold"><a href="#" onclick="toggle_visibility('foo');">Make Billing</h4></a>
<p>
Fill your address and order will be delivered at home  
</p>
</div>
</div>
</div>
				
<div class="col-sm-3 col-md-3">
<div class="wow fadeInUp" data-wow-delay="0.2s">
<div class="box text-center">
<i class="fa fa-user-md fa-3x circled bg-skin"></i>
<h4 class="h-bold">Consult A Doctor</h4>
<p>
Need A doctor Make An appiontment
</p>
</div>
</div>
</div>

</div>
<div id="foo" class="wow fadeInDown" style="display:none;">
<section id="boxes" class="home-section paddingtop-80">
<div class="container">
<div class="row">
<div class="col-sm-3 col-md-3">
<div class="well well-trans">
<div class="wow fadeInRight" data-wow-delay="0.1s">
<ul class="lead-list">		
<div class="form-wrapper">

<div class="panel panel-skin">
<div class="panel-heading">
<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>BILLING INFO</h3>
</div>
<div class="panel-body">

						
						<title>Billing Info</title>



<script language="javascript">
function FillBilling(f) {
  if(f.billingtoo.checked == true) {
   
    f.Address.value = f.address.value;
  }
}
 function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;

}	
function validate(){
		var f=document.form1;
                if(f.mobile_no.value=='')
                 {

                alert('Your phone number is required');
                f.mobile_no.focus();
return false;


}
		if(f.name.value==''){
			alert('Your name is required');
			f.name.focus();
			return false;
		}

		f.command.value='update';
		f.submit();
	}
</script>  


</head>





<body> 



<form name="form1" onsubmit="return validate()" method="POST" action="paybycash.php">
    	
<div align="center">
        <h1 align="center">Billing Info</h1> 

 
 <table  width="500" height="500" border="0"  cellpadding="1px">   

            <tr><td>Order Total:</td><td><input type="text" readonly="readonly" value="<?php session_start();
echo $_SESSION['Total'];?>" </td></tr>
             
<tr><td>Phone:</td><td><input type="text" name="mobile_no" required maxlength="10" onkeypress="javascript:return isNumber(event)" </td></tr>
            <tr><td>Your Name:</td><td><input type="text" name="name"  /></td></tr>
            <tr><td>Email:</td><td><input type="text" name="e_mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  </td></tr>
            <tr><td>Shipping Address:</td><td><textarea name="shippingaddress" cols="20" rows="5" ... ></textarea></td></tr>
            <tr><td>CheckBox:</td><td><input type="checkbox" name="billingtoo" onclick="FillBilling(this.form)">
              Check this box if Billing Address and Shipping are the same</td></tr>
                 
             <tr><td>Billing Address:</td><td><textarea name= "billingaddress" cols="20" rows="5" ... ></textarea></td></tr>
            
            
            <tr><td>&nbsp;</td><td><input type="submit"class ="myButton" value="Confirm Order"  /></td></tr>
        </table>
	</div>
</div>
</form>
</body>
	
</form>
				</div></div>
					</div>
				</div>
				</div>
				</div></div></div>
			
		

	</section></div>
	
	<div id="foo1" class="wow fadeInDown" style="display:none;">
<section id="boxes" class="home-section paddingtop-80">

<div class="wow fadeInRight" data-wow-delay="0.1s">
<div class="panel panel-skin">
<div class="panel-heading">
<h3 class="panel-title"><span class="fa fa-pencil-square-o">
</span> Medicines Available In Stores </h3>
</div>
<div class="panel-body">
						
<?php
// include database configuration file
include 'db_const.php';
?>

    
   



<link href="style.css" rel="stylesheet">

<style type="text/css">




.btnLink{
	display: inline-block;
	padding: 10px 20px;
	border: 1px solid #006699;
	border-radius: 4px;
	background-color: #00978DF;
	color: White;
	text-decoration: none;
	font-family: Arial,Helvetica,sans-serif;
	font-size: 12px;
	box-shadow: 0 3px 4px 1px rgpa(0,0,0,.2) inset;
	box-shadow: 2px 2px 4px 1px rgpa(0,0,0,.5);
	background-image:-webkit-linear-gradient(top,#006B9F,#0FB1FF);
	background-image: linear-gradient(to Bottom,#006B9F,#0FB1FF);
	
	
}
.pg-normal { 
color: #000000; 
font-size: 15px; 
cursor: pointer; 
background: #C2B280; 
padding: 2px 4px 2px 4px; 
}

.pg-selected { 
color: #fff; 
font-size: 15px; 
background: #C2B280; 
padding: 2px 4px 2px 4px; 
}

</style>



<script type="text/javascript">




function Pager(tableName, itemsPerPage) {

this.tableName = tableName;

this.itemsPerPage = itemsPerPage;

this.currentPage = 1;

this.pages = 0;

this.inited = false;

this.showRecords = function(from, to) {

var rows = document.getElementById(tableName).rows;

// i starts from 1 to skip table header row

for (var i = 1; i < rows.length; i++) {

if (i < from || i > to)

rows[i].style.display = 'none';

else

rows[i].style.display = '';

}

}

this.showPage = function(pageNumber) {

if (! this.inited) {

alert("not inited");

return;

}

var oldPageAnchor = document.getElementById('pg'+this.currentPage);

oldPageAnchor.className = 'pg-normal';

this.currentPage = pageNumber;

var newPageAnchor = document.getElementById('pg'+this.currentPage);

newPageAnchor.className = 'pg-selected';

var from = (pageNumber - 1) * itemsPerPage + 1;

var to = from + itemsPerPage - 1;

this.showRecords(from, to);

}

this.prev = function() {

if (this.currentPage > 1)

this.showPage(this.currentPage - 1);

}

this.next = function() {

if (this.currentPage < this.pages) {

this.showPage(this.currentPage + 1);

}

}

this.init = function() {

var rows = document.getElementById(tableName).rows;

var records = (rows.length - 1);

this.pages = Math.ceil(records / itemsPerPage);

this.inited = true;

}

this.showPageNav = function(pagerName, positionId) {

if (! this.inited) {

alert("not inited");

return;

}

var element = document.getElementById(positionId);

var pagerHtml = '<span onclick="' + pagerName + '.prev();" class="pg-normal">< </span> ';

for (var page = 1; page <= this.pages; page++)

pagerHtml += '<style id="pg' + page + '" class="pg-normal;"></style> ';

pagerHtml += '<span onclick="'+pagerName+'.next();" class="pg-normal"> ></span>';

element.innerHTML = pagerHtml;

}

}
</script>
<SCRIPT TYPE="text/javascript"> 
function popup(mylink, windowname) 
{
	if (! window.focus)return true;
	var href; if (typeof(mylink) == 'string') href=mylink; 
	else href=mylink.href; 
	window.open(href, windowname, 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=800,height=500'); 
	return false; 
	} 
	</SCRIPT>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>
<script>

$(document).ready(function() {	

	//select all the a tag with name equal to modal
	$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		
		//Get the A tag
		var id = $(this).attr('href');
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 
	
	});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			

	$(window).resize(function () {
	 
 		var box = $('#boxes .window');
 
        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
      
        //Set height and width to mask to fill up the whole screen
        $('#mask').css({'width':maskWidth,'height':maskHeight});
               
        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();

        //Set the popup window to center
        box.css('top',  winH/2 - box.height()/2);
        box.css('left', winW/2 - box.width()/2);
	 
	});
	
});

</script>
<style>


a {color:#333; text-decoration:none}
a:hover {color:#ccc; text-decoration:none}

#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}
  


#boxes #dialog1 {
  width:375px; 
  height:203px;
}

#dialog1 .d-header {
  background:url(images/login-header.png) no-repeat 0 0 transparent; 
  width:375px; 
  height:150px;
}

#dialog1 .d-header input {
  position:relative;
  top:60px;
  left:100px;
  border:3px solid #cccccc;
  height:22px;
  width:200px;
  font-size:15px;
  padding:5px;
  margin-top:4px;
}

#dialog1 .d-blank {
  float:left;

  width:267px; 
  height:53px;
}

#dialog1 .d-login {
  float:left;
  width:108px; 
  height:53px;
}

</style>
<table id="tablepaging" class="table_fields" cellspacing="5px" width="150px" >
  
        <?php
       $count=0;
        //get rows query
        $stmt = "SELECT * FROM RETAIL_STORE_PROD WHERE STORE_ID='1472222821'";
       $result = db2_prepare($conn, $stmt);
       db2_execute($result);
           
        if(!empty($stmt)){
        
            while($row = db2_fetch_assoc($result)){
if($count == 3) {
                $count = 0;
                echo "</tr> <tr>";
        }
         echo "<td>"                
                
        ?>

        	 
            <td><b><?php echo $row['PROD_NM']?></b><br /><br />
            		
                    Price:<big style="color:green">
                    	Rs<?php echo $row['MRP']?></big><br /><br />
                   
                 
 <a class="btnLink" href="?action=addToCart&PROD_ID=<?php echo $row["PROD_ID"]; ?>#dialog1"> name="modal">Add to cart</a></in>
                  </td></td>
		
        
 

        <?php 
        
        $count++;
        }
 
       }
 else
       { ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
        </table>
    

<div id="pageNavPosition" style="padding-top: 20px" align="center">
</div>
<script type="text/javascript">
var pager = new Pager('tablepaging',1);
pager.init();
pager.showPageNav('pager', 'pageNavPosition');
pager.showPage(1);   
</script>
    
 </form>

</div>
</div>
</div>
</div>
</div>
</section>
</div>

    </div>
</div>
    
<div id="boxes">


<!-- Start of Login Dialog -->  
<div id="dialog1" class="window">
  <div class="d-header">
   

<?php
// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;
include 'db_const.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['PROD_ID'])){
        $productID = $_REQUEST['PROD_ID'];
        // get product details
        $stmt = "SELECT * FROM RETAIL_STORE_PROD WHERE PROD_ID = '$productID'";
          $result = db2_prepare($conn, $stmt);
          db2_execute($result);
        $row = db2_fetch_assoc($result);
 
        $itemData = array(
            'PROD_ID' => $row['PROD_ID'],
            'PROD_NM' => $row['PROD_NM'],
            'MRP' => $row['MRP'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        //$redirectLoc = $insertItem?'viewCart.php';
        //header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['PROD_ID'])){
        $itemData = array(
            'rowid' => $_REQUEST['PROD_ID'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['PROD_ID'])){
        $deleteItem = $cart->remove($_REQUEST['PROD_ID']);
        header("Location: viewCart.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
        // insert order details into database
           // insert order items into database
           // $insertOrderItems = $db->multi_query($sql);
            
            
        
    }
}


?>
   <title>Shopping Cart</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{padding: 50px;}
    input[type="number"]{width: 20%;}
    
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: #87CEFA;
    color: white;
    

    
}
    </style>
    <script>
    function updateCartItem(obj,PROD_ID){
        $.get("cartAction.php", {action:"updateCartItem", PROD_ID:PROD_ID, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
</head>
<body>
<div class="container">
    <h1>Shopping Cart</h1>
    <table border="0" class="table_fields"  id="t01" cellpadding="2px" cellspacing="20px" style="width:100%">
    
        <tr class="table_fields_top">
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>&nbsp;</th>
        </tr>
    
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr class="table_fields_top">
            <td><?php echo $item["PROD_NM"]; ?></td>
            <td><?php echo 'Rs'.$item["MRP"].' '; ?></td>
           
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo 'Rs'.$item["subtotal"].''; ?></td>
            <td>
                <!--<a href="cartAction.php?action=updateCartItem&id=" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>-->
                <a href="cartAction.php?action=removeCartItem&PROD_ID=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><img border="0" alt="Delete_button.png" src="Delete_button.png" width="50" height="50"></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Your cart is empty.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a class="btn btn-primary" href="billing.php"><i class="glyphicon glyphicon-menu-left"></i> <img src="images/button_continue-shopping.png"></a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total: <?php echo 'RS'.$cart->total().''; ?></strong></td>
            
           <td><a href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'" <i class="glyphicon glyphicon-menu-right"></i> <img src="images/button_checkout.png"> </a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
</div>
	<style>

.black_overlay {
  display: none;
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  background-color: black;
  z-index: 1001;
  -moz-opacity: 0.8;
  opacity: .80;
  filter: alpha(opacity=80);
}
.white_content {
 display: none;
  position: absolute;
  top: 25%;
  left: 25%;
  width: 75%;
  height: 75%;
  padding: 16px;
  border: 16px solid skyblue ;	
  background-color: white;
  z-index: 1002;
  overflow: auto;
	-webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}
	
@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}
		

</style>
  <div id="light" class="white_content">
    

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
    
 
       
    
    
    <td> <a href="bill.php">Place Order</a></td>
</tr>

    </tfoot>
    </table>

  </div>
  <div id="fade" class="black_overlay"></div>
    
  </div>
  <div class="d-blank"></div>
  <div class="d-login"><input type="image" alt="Login" title="Login" src="images/login-button.png"/></div>
</div>
<!-- End of Login Dialog -->  



<!-- Start of Sticky Note -->

<!-- End of Sticky Note -->



<!-- Mask to cover the whole screen -->
  <div id="mask"></div>
</div>



</body>
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

 <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
 
 <!-- adding jquery form plugin --> 
 <script src="//oss.maxcdn.com/jquery.form/3.50/jquery.form.min.js"></script>
<script type="text/javascript">

function toggle_visibility(id) {
            if (document.getElementById('foo')) {

                if (document.getElementById('foo1').style.display == 'none') {
                    document.getElementById('foo1').style.display = 'block';
                    document.getElementById('foo').style.display = 'none';
                }
                else {
                    document.getElementById('foo1').style.display = 'none';
                    document.getElementById('foo').style.display = 'block';
                }
            }
}




</script>


</body>




<?php
require("footer.php");
?>
</html>
