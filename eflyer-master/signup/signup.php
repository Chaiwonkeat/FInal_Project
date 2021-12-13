<?php
if(isset($_POST['submitSave'])) {
	$signup = simplexml_load_file('signup.xml');
	$product = $signup->addChild('members');
	$product->addChild('name', $_POST['name']);
	$product->addChild('email', $_POST['email']);
	$product->addChild('pass', $_POST['pass']);
	file_put_contents('signup.xml', $signup->asXML());
	//header('location:index.php');
}
?>

<form action="" method="post">
<input type="text" name="name">
<input type="email" name="email">
<input type="password" name="pass">
<button tpye="submit" name="submitSave">Create Account</button>
</form>