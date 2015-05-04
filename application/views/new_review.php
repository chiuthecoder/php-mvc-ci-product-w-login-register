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
	<h1>Add a new Product</h1>

	<div class="container">
		<form method="post" action="/products/create">
			<label>Name</label>
			<input type="text" name="name">
			<label>Description</label>
			<input type="text" name="description">
			<label>Price</label>
			<input type="text" name="price">
			<input type="submit" value="Create">
			<a href="/">Go Back</a>
		</form>
	</div>
</div>

</body>
</html>