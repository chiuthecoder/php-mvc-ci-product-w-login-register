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
	<p>
	<a href="/users">Login/Register</a>

	</p>
<div class="wrapper">
	<h1>Products</h1>
	<p>
	<a href="/products/newProduct">Add a new Product</a>
	</p>
	<div class="container">
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Description</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
<!--START LOOP-->
<?php
				foreach ($products as $product) {
?>
				<tr>
					<td><?= $product['name'] ?></td>
					<td><?= $product['description'] ?></td>
					<td><?= $product['price'] ?></td>
					<td>
						<form method="post" action="/products/showReview/<?= $product['id'] ?>">
							<input type="hidden" name="id" value="<?= $product['id'] ?>">
							<input type="submit" value="Show">
						</form>
						<form method="post" action="/products/editReview/<?= $product['id'] ?>">
							<input type="hidden" name="id" value="<?= $product['id'] ?>">
							<input type="submit" value="Edit">
						</form>
						<form method="post" action="/products/destroyReview/<?= $product['id'] ?>">
							<input type="hidden" name="id" value="<?= $product['id'] ?>">
							<input type="submit" value="Remove">
						</form>
					</td>
				</tr>
<?php
				}
?>
<!--END LOOP-->
			</tbody>
		</table>
	</div>
</div>

</body>
</html>