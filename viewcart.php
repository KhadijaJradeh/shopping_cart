<?php
include "include/header.php";
$items = getCartItems();

if(isset($_POST['submitMain']))
{
  header("location:address.php");
 }
 ?>
<table class="table" >
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Quantity</th>
			<th>Price</th>
		</tr>
	</thead>
	<?php
	foreach($items as $item){
		?>
	      <tbody> 
		      <tr>
			      <td><?php echo $item["id"]?></td>
			      <td><?php echo $item["product"]?></td>
			      <td><?php echo $item["quantity"]?></td>
			      <td><?php echo $item["price"]?></td>
			      <td>
			      	<div>
			      		<form method="post" action="manage.php?id=<?php echo $item["id"]?>">
				  			<input type="submit" name="remove" class=" btn-primary btn-md" value="Remove" >
				  		</form>
				  	</div>
				  </td>
			  </tr>
          </tbody>
	<?php } ?>
</table>
<form action="" method="post">
 <input type="submit"  id="submitMain" name="submitMain" value="Order"  >

<?php 
include "include/footer.php";
?>