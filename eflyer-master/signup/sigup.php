<?php
if(isset($_POST['submitSave'])) {
	$signup = simplexml_load_file('signup.xml');
	$product = $signup->addChild('name');
	$product->addChild('name', $_POST['email']);
	$product->addChild('price', $_POST['password']);
	file_put_contents('signup.xml', $signup->asXML());
	//header('location:index.php');
}
?>

<form action="" method="post">
<input type="text" name="name">
<input type="email" name="email">
<input type="password" name="password">
<button tpye="submit" name="submitSave">Create Account</button>
</form>