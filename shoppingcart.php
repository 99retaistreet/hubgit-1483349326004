
<?php
	include("db_const.php");
	function get_product_name($pid,$sid){
		
		$stmt="SELECT PROD_NM FROM RETAIL_STORE_PROD WHERE STORE_ID=$sid and PROD_ID=$pid";
        $result=db2_prepare($conn,$stmt);
        db2_execute($result);
        $row = db2_fetch_assoc($result);
		return $row['PROD_NM'];
	}


	function get_price($pid,$sid){
		
		$stmt="SELECT MRP FROM RETAIL_STORE_PROD  WHERE STORE_ID=$sid and PROD_ID=$pid";
		 $result=db2_prepare($conn,$stmt);
		db2_execute($result);
		
		$row = db2_fetch_assoc($result);
		return $row['MRP'];
	}
	
         function remove_product($pid){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				unset($_SESSION['cart'][$i]);
				break;
	}
	}
		$_SESSION['cart']=array_values($_SESSION['cart']);
	}

	       function get_order_total(){
		        $max=count($_SESSION['cart']);
		        $sum=0;
		        for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
                        $sid=$_SESSION['cart'][$i]['STOREID'];
			$q=$_SESSION['cart'][$i]['qty'];
                        $Product=get_product_name($pid,$sid);
			$price=get_price($pid,$sid);
			$sum+=$price*$q;
		}
		return $sum;
	}
	function addtocart($pid,$sid,$q){
		if($sid<1 or $pid<1 or $q<1) return;
		
		if(is_array($_SESSION['cart'])){
			if(product_exists($pid)) return;
			$max=count($_SESSION['cart']);
			$_SESSION['cart'][$max]['productid']=$pid;
                        $_SESSION['cart'][$max]['STOREID']=$sid;
			$_SESSION['cart'][$max]['qty']=$q;
			
		}
		else{
		       $_SESSION['cart']=array();
                       $_SESSION['cart'][0]['productid']=$pid;
		       $_SESSION['cart'][0]['STOREID']=$sid;
		   $_SESSION['cart'][0]['qty']=$q;
			
		}
	}
	function product_exists($pid){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				$flag=1;
				break;
			}
		}
		return $flag;
	}
        
	
	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	else if($_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if($_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$sid=$_SESSION['cart'][$i]['STOREID'];

			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
			}
		}
	}

?>

<script language="javascript">
	function del(pid){
		if(confirm('Do you really mean to delete this item')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart, continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}
	
	


</script>



<form name="form1" method="post">
<input type="hidden" name="pid" />

<input type="hidden" name="command" />
	<div style="margin:0px auto; width:600px;" >
    <div style="padding-bottom:10px">
    	<h1 align="center">Your Shopping Cart</h1>

    <input type="button" class ="myButton" value="Continue Shopping" onclick="window.location='store.php'" />
  
    </div>
    	<div style="color:#F00"><?php echo $msg?></div>
    <table id="cart" class="table table-hover table-condensed">	
<table border="0" bgcolor= cellpadding="5px"class="table table-hover table-condensed" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; background-color:#CAE1FF" width="100%">
    	<?php
			if(is_array($_SESSION['cart'])){
            	echo '<tr bgcolor="#CAE1FF" style="font-weight:bold"><th style="width:20%">Serial </th>
							<th style="width:10%">Name</th>
							<th style="width:10%">Price</th>
                            <th style="width:8%">Qty</th>
							<th style="width:22%">Amount</th> 
							<th style="width:10%">Options</th></tr>';
				             $max=count($_SESSION['cart']);

                                        for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
			
                       $sid=$_SESSION['cart'][$i]['STOREID'];

					$q=$_SESSION['cart'][$i]['qty'];

					$pname=get_product_name($pid,$sid);
					if($q==0) continue;
			?>
            		<tr bgcolor="#FFFFFF"><td><?php echo $i+1?></td><td><?php echo $pname?></td>
                    <td>Rs <?php echo get_price($pid,$sid)?></td>
                    <td><input type="number" name="product<?php echo $pid?>" value="<?php echo $q?>" min="1" max="100" maxlength="3" size="2" /></td>                    
                    <td>Rs<?php echo get_price($pid,$sid)*$q?></td>
                    <td><a href="javascript:del(<?php echo $pid?>)">Remove</a></td></tr>
            <?php					
				}
			?>
<tr><td><b>Order Total: Rs<?php echo get_order_total()?></b></td><td colspan="5" align="right"><input type="button"class ="myButton" value="Clear Cart" 
onclick="clear_cart()"><input type="button" class ="myButton" value="Update Cart" onclick="update_cart()">
<input type="button" class ="myButton" value="Place Order" onclick="window.location='billing.php'"></td></tr>
			<?php
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";
			}
		?>
        </table>
    </div>
</form>
