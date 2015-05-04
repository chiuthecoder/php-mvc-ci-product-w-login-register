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
	<h1>Remove a Product</h1>
	<div class="container">
		<form method="post" action="/products/destroy">
			<input type="hidden" name="id" value="<?= $product['id'] ?>">
			<p>Are you sure you want to remove the following product?</p>
			<p>Name: <?= $product['name'] ?></p>
			<p>Description: <?= $product['description'] ?></p>
			<p>Price: <?= $product['price'] ?></p>

			<hr>
			<a href="/"><button>No</button></a>
			<input type="submit" value="Yes">
		</form>
	</div>

</div>

</body>
</html>