<?php

if(!$_SESSION['admin'])
{
      header("location:index.php");
      exit;
}
?>
<script language="javascript">
	function logoutcon()
	{
		var conlog = confirm('Are you sure you want to log out !!');
		if(conlog)
			window.location="admlogout.php";
		else
			return false;
	}

	function isConfirmlog()
	{
		var r = confirm('Are you sure you want to log out !!');
		if(!r)
		{
			return false;
		}
		else
		{
			alert(window.location='admlogout.php');
		}
	}

	function check()
	{
		if(document.getElementById("txt_cat").value =="")
		{
			alert('Please Enter Category !!'); 
			document.getElementById("txt_cat").focus();
			return false;
		}
		if(document.getElementById("txt_subcat").value =="")
		{
			alert('Please Enter Sub Category !!');
			document.getElementById("txt_subcat").focus();
			return false;
		}
		if(document.getElementById("ta_catdcpn").value =="")
		{
			alert('Please Fill Description of Category !!');
			document.getElementById("ta_catdcpn").focus();
			return false;
		}
	} 
</script>
