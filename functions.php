<?php

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

?>