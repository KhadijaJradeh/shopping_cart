<?php
include "include/header.php";

if (isset($_POST['register'])) {
    $return = saveUser($_POST);
    if($return=="success")
    {
        $_POST = array();
        echo "<div class='label-success'>User Registered successfully, Thank you</div>";
        header("Location:index.php");
    }
    else
    {
        echo "<div class='label-warning'>$return</div>";
    }
}

?>
<div>
    <h3>Fill the following page to register an account</h3>
    <form action="login.php" method="post">
        Username:<br> <input type="text" name="name" class="form-control" value="<?php if(isset($_POST['name'])) echo $_POST['name'] ?>"><br>
        Phone:<br> <input type="text" name="phone" class="form-control" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'] ?>"><br>
        Mail: <br><input type="text" name="email" class="form-control" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>"><br>
        Password: <br><input type="password" name="password" class="form-control" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>"><br>
        Address: <br><input type="text" name="address" class="form-control" value="<?php if(isset($_POST['address'])) echo $_POST['address'] ?>"><br></h5>
        <button type="submit" name="register" class="btn btn-primary ">Register</button>
    </form>
</div>

<?php
include "include/footer.php";
?>