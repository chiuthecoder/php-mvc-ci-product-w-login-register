<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Marketplace</title>
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<div class="wrapper">
	<h1>Edit a Product</h1>
	<div class="container">
		<form method="post" action="/products/update">
			<input type="hidden" name="id" value="<?= $product['id'] ?>">
			<label>Name</label>
			<input type="text" name="name" value="<?= $product['name']; ?>">
			<label>Description</label>
			<input type="text" name="description" value="<?= $product['description']; ?>">
			<label>Price</label>
			<input type="text" name="price" value="<?= $product['price']; ?>"

			<hr>
			<a href="/"><button>Go Back</button></a>
			<input type="submit" value="Update">
		</form>


</div>

</body>
</html>