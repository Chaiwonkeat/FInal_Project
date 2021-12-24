<?php
if(isset($_POST['submitSave'])) {
	$signup = simplexml_load_file('login.xml');
	$product = $signup->addChild('members');
	$product->addChild('email', $_POST['email']);
	$product->addChild('pass', $_POST['pass']);
	file_put_contents('login.xml', $signup->asXML());
	header('location:index.php');
}
?>
<?php
if(isset($_GET['j'])){
	$username=$_GET['j'];
	$cookie_name = "user";
	$cookie_value = $username;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}else{
	$username="";
}

?>

<form action="" method="post">
<input type="email" name="email" value="<?php echo $username; ?>">
<input type="password" name="pass" value="">
<button tpye="submit" name="submitSave">Login</button>
</form>