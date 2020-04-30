<?php
/* Template Name: Custom Registration Page */

// Custom Registration Validation
if ($_POST) {
	$username = $wpdb->prepare(trim($_POST['txtUserName']));
	$email = $wpdb->prepare(trim($_POST['txtEmail']));
	$password = $wpdb->prepare(trim($_POST['txtPassword']));
	$confirmPassword = $wpdb->prepare(trim($_POST['txtConfirmPassword']));
}


$error = array();
if ($strpos($username, ' ') == true) {
	$error['username_space'] = 'Do not put space while typing Username';
}
if (empty($username) ) {
	$error['username_empty'] = 'Username is required';
}
if (username_exists($username)) {
	$error['username_exists'] = 'Username already exists with this name, Try another one';
}
if (!is_mail($email)) {
	$error['email_valid'] = 'Not Valid email';
}
if (email_exists($email)) {
	$error['email_existence'] = 'email already exists';
}
if (strcmp($password, $confirmPassword) !==0) {
	$error['password'] = 'Password did not match';
}

print_r($error);
?>
<form method="post">
	<p>
	    <label>Enter Username:</label>
		<div><input type="text" id="txtUserName" name="txtUserName" placeholder="Username"></div>
	</p>
	<p>
	    <label>Enter Email:</label>
		<div><input type="email" id="txtEmail" name="txtEmail" placeholder="Email"></div>
	</p>
	<p>
	    <label>Enter Password:</label>
		<div><input type="password" id="txtPassword" name="txtPassword" placeholder="Password"></div>
	</p>
	<p>
	    <label>Confirm Password:</label>
		<div><input type="password" id="txtConfirmPassword" name="txtConfirmPassword" placeholder="Confirm Password"></div>
	</p>

	<input type="submit" name="btnSubmit" />

</form>