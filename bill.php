<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
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

 
 <table  width="500" height="500" border="0"  cellpadding="1px"  style="background-color: #6495ED">   

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

</html>