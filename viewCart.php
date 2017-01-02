

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
  width: 50%;
  height: 50%;
  padding: 16px;
  border: 16px solid blue;
  background-color: white;
  z-index: 1002;
  overflow: auto;
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
. <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a>
  </div>
  <div id="fade" class="black_overlay"></div>

