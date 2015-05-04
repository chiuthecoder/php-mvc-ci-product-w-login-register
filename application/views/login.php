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

	<div class="container">
<div class='error'>

<?php 
 if($this->session->flashdata("login_error")) 
 {
  // echo "what is hell?";
  echo $this->session->flashdata("login_error");
 }
?>
</div>
		<h2>Login</h2>
		<form method="post" action="/users/login">
			<input type="hidden" name="action" value="login">
			<label>Email:</label>
			<input type="text" name="email">
			<label>Password:</label>
			<input type="password" name="password">
			<input type="submit" value="login">
		</form>

		<hr>
<div class='error'>
<?php 
  if($this->session->flashdata('errors'))
  {
    foreach($this->session->flashdata('errors') as $value)
    { 
?>
      <p><?= $value ?></p>
<?php   
	}
  } 
?>
</div>
<div class='success'>
<?php 
  if($this->session->flashdata('success'))
  {
    foreach($this->session->flashdata('success') as $value)
    { 
?>
      <p><?= $value ?></p>
<?php
    }
  } 
?>
</div>
		<h2>Register</h2>
		<form method="post" action="/users/create">
			<!-- <input type="hidden" name="action" value="register"> -->
			<label>First Name:</label>
			<input type="text" name="first_name">
			<label>Last Name:</label>
			<input type="text" name="last_name">
			<label>Email:</label>
			<input type="text" name="email">
			<label>Password:</label>
			<input type="password" name="password">
			<label>Confirm Password:</label>
			<input type="password" name="password_confirmation">
			<input type="submit" value="Register">
		</form>

	</div>
</div>

</body>
</html>