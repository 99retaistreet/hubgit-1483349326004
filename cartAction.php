<?php
// initialize shopping cart class
include 'Cart.php';

$cart = new Cart;

// include database configuration file
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
        $redirectLoc = $insertItem?'viewCart.php':'billing.php';
        header("Location: ".$redirectLoc);
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
