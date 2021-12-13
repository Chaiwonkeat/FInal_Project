<?php
if(isset($_POST['submitSave'])) {
	$signup = simplexml_load_file('login.xml');
	$product = $signup->addChild('members');
	$product->addChild('email', $_POST['email']);
	$product->addChild('pass', $_POST['pass']);
	file_put_contents('login.xml', $signup->asXML());
	//header('location:index.php');
}
?>

<form action="" method="post">
<input type="email" name="email">
<input type="password" name="pass">
<button tpye="submit" name="submitSave">Login</button>
</form>