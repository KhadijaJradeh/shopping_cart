<?php
// Sessions
session_start();


// Database
$servername = "127.0.0.1";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"ccart");
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//mysql_select_db("ccart");

function getCategories()
{
	global $conn;
	$sql = mysqli_query($conn,'SELECT * FROM category ORDER BY name ASC');
	$items=array();
	while($row=mysqli_fetch_array($sql))
	{
		$items[$row["id"]] = $row;
	}
	return $items;
}
function getProducts($category=0)
{
	global $conn;
	$query = 'SELECT * FROM tableproduct';
	if($category>0)
	{
		$query .= ' WHERE product_id='.$category;
	}
	$query .= ' ORDER BY id ASC';
	$sql = mysqli_query($conn,$query);
	$items=array();
	while($row=mysqli_fetch_array($sql))
	{
		$items[$row["id"]] = $row;
	}
	return $items;
}

function getOneProduct($id)
{
	global $conn;
	$sql = mysqli_query($conn,'SELECT * FROM tableproduct where id='.$id);
	return mysqli_fetch_array($sql);
}

function getCartItems()
{
	global $conn;
	$sql = mysqli_query($conn,'SELECT P_order.*,tableproduct.name as product FROM P_order inner join tableproduct on P_order.product_id=tableproduct.id ORDER BY id ASC');
	$items=array();
	while($row=mysqli_fetch_array($sql))
	{
		$items[$row["id"]] = $row;
	}
	return $items;
}

function addItem($id,$quantity)
{
	global $conn;
	$product = getOneProduct($id);
	$q='INSERT INTO P_order(product_id,quantity,price) VALUES("'.$id.'","'.$quantity.'","'.$product['price'].'")';
	mysqli_query($conn,$q);
}

function deleteItem($id)
{
	global $conn;
	$q="DELETE FROM P_order WHERE id=" .$id;
	mysqli_query($conn,$q);
}

function getUser($username)
{
	global $conn;
	$sql = mysqli_query($conn,'SELECT * FROM user WHERE User='.$username);
	//return mysqli_fetch_array($sql);
}

function saveUser($data)
{
	global $conn;
	if (empty($data["name"]) || empty($data["email"]) || empty($data["password"]) || empty($data["address"])) {
		return "Incomplete Information";
	}

	if (isset($data["name"]) && isset($data["phone"]) && isset($data["email"])
		&& isset($data["password"])
		&& isset($data["address"])
	) {
		//check username in db
		$results = getUser($data["name"]);
		if (!empty($results['id'])) {
			return "Incomplete Information";
		}

		$user     = "{$data['name']}";
		$email    = "{$data['email']}";
		$address  = "{$data['address']}";
		$password = "{$data['password']}";
		$phone    = "{$data['phone']}";

		$sql
			= "INSERT INTO users(name,address,password,email,phone) VALUES('$user','$address','$password','$email','$phone')";
		$t = mysqli_query($conn,$sql);
		if ($t) {
			return "success";
		} else {
			return "error in entering";
		}
	}
}

function login($username,$password)
{
	global $conn;
	$sql = mysqli_query($conn,"SELECT * FROM t_admin_mst WHERE adm_username = '$username' AND adm_password = '$password' ");
	$admin = mysqli_fetch_array($sql);
	if($admin['adm_username'])
	{
		$_SESSION['admin']=$admin;
		return true;
	}
	return false;
}

function addProduct($name,$code,$image,$price,$description)
{
	global $conn;
	$q="INSERT INTO tableproduct(name,code,image,price,description) VALUES ('$name','$code','$image','.$price.','$description')";
	$t = mysqli_query($conn,$q);
	if ($t) {
		return true;
	}
	return false;
}

function deleteProduct($code)
{
	global $conn;
	$q="DELETE FROM tableproduct WHERE code='" .$code."'";
	$t = mysqli_query($conn,$q);
	if ($t) {
		return true;
	}
	return false;
}




?>