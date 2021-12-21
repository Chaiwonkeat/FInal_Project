<?php
if(isset($_POST['submitSave'])) {
	$signup = simplexml_load_file('contact.xml');
	$product = $signup->addChild('customer');
	$product->addChild('firstname', $_POST['firstname']);
	$product->addChild('lastname', $_POST['lastname']);
    $product->addChild('email', $_POST['email']);
    $product->addChild('phone', $_POST['phone']);
    $product->addChild('comments', $_POST['comments']);
	file_put_contents('contact.xml', $signup->asXML());
	//header('location:index.php');
}
?>

<form action="" method="post">
<input type="firstname" name="firstname">
<input type="lastname" name="lastname">
<input type="email" name="email">
<input type="phonenumber" name="phone">
<input type="comments" name="comments">
<button tpye="submit" name="submitSave">Submit</button>
</form>