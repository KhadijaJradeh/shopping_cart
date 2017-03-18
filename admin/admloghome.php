<?php 
  include "..\include\header.php";
  include "..\include\admin.php";

?>
<div id="container">
  <div class="col-lg-6">
    <ul class="list-group">
      <li class="list-group-item list-group-item-success">
        <a href="addcat.php?un=<?php echo $username;?>">Add Product</a>
      </li>
      <li class="list-group-item list-group-item-info">
        <a href="delcart.php?un=<?php echo $username;?>">Delete Product</a>
      </li>
    </ul>
  </div>
  <div class="col-lg-6">
    <ul class="list-group">
      <li class="list-group-item list-group-item-danger">
        <a href="admlogout.php"  onclick="logoutcon();">Log out</a>
      </li>
    </ul>
  </div>
</div>

<?php
include "../include/footer.php";
?>