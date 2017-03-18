<?php
include "include/functions.php";

if(!empty($_REQUEST["quantity"]))
{
	addItem($_REQUEST["id"],$_REQUEST["quantity"]);
	header('location:index.php?msg=Products Successfully added');
}
else if(isset($_REQUEST['remove']))
{
	deleteItem($_REQUEST["id"]);
	header('location:viewcart.php?msg=Products Successfully Delete');
}

?>