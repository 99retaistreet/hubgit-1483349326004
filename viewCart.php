

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
            <td><a href="checkout.php"><i class="glyphicon glyphicon-menu-right"></i><img src="images/button_checkout.png"></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
</div>
