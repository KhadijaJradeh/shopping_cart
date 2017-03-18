<?php
set_include_path("C:\xampp\htdocs\shop\shop\include");
include "functions.php";
$categories = getCategories();
?>

<html>
<head>
<link rel="stylesheet" href="/shop/shop/css/bootstrap.min.css">
<link rel="stylesheet" href="/shop/shop/css/main.css">
<script src="/shop/shop/js/jquery.min.js"></script>
<script src="/shop/shop/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#zaza-menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Shopping Cart</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="zaza-menu">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/shop/shop/viewcart.php">view cart </a></li>
      
       <li class="active"><a href="/shop/shop/index.php">See Products </a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="/shop/shop/admin/index.php">Admin</a></li>
        <li class="active"><a href="/shop/shop/login.php">Register </a></li>
        <li class="dropdown">
          <a href="shop/shop/index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LOGIN<span class="caret"></span></a>
          <div class="dropdown-menu" style="width:300px">
				<form action="login.php" method="POST" style="text-align:center;margin:30px;">
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">user</span>
					  <input type="text" class="form-control" name="username" placeholder="Username" >
					</div>
					<br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">password</span>
					  <input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<br>
          <a href="/shop/shop/index.php">login </a>
					<!--<input class="btn btn-success" type="submit" value="Login" >-->
				</form>
          </div>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<h1 id="header" style="color:white;">&nbsp CandyLand</h1>

<div class="clearfix"></div>

<div class="col-lg-2">
  <div id="nav" style="width: 100%">
    <h5 style="text-decoration: underline">Products Categories </h5>
    <ul style="list-style-type:circle">
        <li><a href="/shop/shop/index.php?category_id=0">All</a> </li>
        <?php foreach($categories AS $cat){?>
            <li><a href="/shop/shop/index.php?category_id=<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></a> </li>
        <?php } ?>
    </ul>
  </div>
  <div class="hidden-sm">
    <img src="/shop/shop/img/images (4).jpg" class="img-responsive">
    <img src="/shop/shop/img/images (1).jpg" class="img-responsive">
    <img src="/shop/shop/img/images (2).jpg" class="img-responsive">
  </div>
</div>

<div class="col-lg-10">
    <?php if(!empty($_REQUEST['msg'])) { ?>
        <div class="alert alert-success">
            <strong><?php echo $_REQUEST['msg']?></strong>
        </div>
    <?php } ?>
