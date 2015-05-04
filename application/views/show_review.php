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
	<h1>Show Product</h1>
	<div class="container">			
		<p>Name: <?= $product['name'] ?></p>
		<p>Description: <?= $product['description'] ?></p>
		<p>Price: <?= $product['price'] ?></p>
		<hr>
		<form method="post" action="/products/editReview">
			<input type="hidden" name="id" value="<?= $product['id'] ?>">
			<input type="submit" value="Edit">
		</form>
		<a href="/"><button>Go Back</button></a>
	</div>

	
</div>

</body>
</html>