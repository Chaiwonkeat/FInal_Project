<?php
$account = simplexml_load_file('sell.xml');

if(isset($_POST['submitSave'])) {

	foreach($products->product as $product){
		if($product['id']==$_POST['id']){
			$product->name = $_POST['name'];
			$product->price = $_POST['price'];
			break;
		}
	}
	file_put_contents('sell.xml', $products->asXML());
	header('location:profile.php');
}

foreach($products->product as $product){
	if($product['id']==$_GET['id']){
		$id = $product['id'];
		$name = $product->name;
		$price = $product->price;
		break;
	}
}

?>
<form method="post">
	<div class="forms">
        <div class="row">
            <div class="col-sm-6"> <label class="labels">Name</label><input type="text" > </div>
            <div class="col-sm-6"> <label class="labels">Birthday Date</label> <input type="date" readonly value="20-07-19992"> </div>
        </div>
        <div class="row">
            <div class="col-sm-6"> <label class="labels">Gender</label><input type="radio" value="Male">
			<label> Male</label>
			<label class="labels">Gender</label><input type="radio" value="Female">
			<label> Female</label>
			</div>
            <div class="col-sm-6"> <label class="labels">Address</label> <input type="text" readonly value="Doe"> </div>
        </div>
        <div class="row">
            <div class="col-sm-6"> <label class="labels">Email</label><input type="email" readonly value="John"> </div>
            <div class="col-sm-6"> <label class="labels">Password</label> <input type="password" readonly value="Doe"> </div>
        </div>
		<div class="right"><input type="submit" value="Edit" name="submitSave"></div>
	</div>
</form>