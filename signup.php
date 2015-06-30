<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="stylesheets/index.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">

    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <title>Discard - Sign Up</title>
</head>
<body>
	<?php
		$headers = "From: hello@discardapp.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		$customerSubject = $_POST['storeName'].", welcome to Discard";
		$agentSubject = $_POST['storeName']." signup";
		$standardMessage = "Hi, <br />";
		$standardMessage .= "You are now part of Discard family. Congratulations, you've got FREE service from us as an appreciation from your agent. Our $250 start-up service charge is waived. Please confirm the information below. If it needs correction, let us know.<br />";
		$standardMessage .= "<h4>Store Information</h4>";
		$standardMessage .= "<b>Name: </b>";
		$standardMessage .= $_POST['storeName']."<br />";
		$standardMessage .= "<b>Address: </b>";
		$standardMessage .= $_POST['storeAddress']."<br />";
		$standardMessage .= "<b>Phone: </b>";
		$standardMessage .= $_POST['storePhone']."<br />";
		$standardMessage .= "<b>Email: </b>";
		$standardMessage .= $_POST['storeEmail']."<br />";
		$standardMessage .= "<b>Website: </b>";
		$standardMessage .= $_POST['storeWebsite']."<br />";
		$standardMessage .= "<b>Category: </b>";
		$standardMessage .= $_POST['storeCategory']."<br />";
		$standardMessage .= "<h4>Administrator Information</h4>";
		$standardMessage .= "<b>Email: </b>";
		$standardMessage .= $_POST['adminEmail']."<br />";
		$standardMessage .= "<h4>Card Information</h4>";
		$standardMessage .= "<b>Type: </b>";
		$standardMessage .= $_POST['cardType']."<br />";
		$standardMessage .= "<b>Days To Expiry: </b>";
		$standardMessage .= $_POST['cardExpireInDays']."<br />";
		$standardMessage .= "<b>Perks Description: </b>";
		$standardMessage .= $_POST['cardPerks']."<br />";
		$standardMessage .= "<b>Stamp Count till Redeem: </b>";
		$standardMessage .= $_POST['stampCount']."<br />";
		$standardMessage .= "<h4>Account Manager Information</h4>";
		$standardMessage .= "<b>Email: </b>";
		$standardMessage .= $_POST['accountManagerEmail']."<br />";
		$customerMessage = $standardMessage."<br /> To start using Discard, please email us a highest resolution image file of your store logo (minimum 500px by 500px). Images of your stamp (minimum 50px by 50px), if applicable. <br />Should you need any assistant, email us any time!";
		$agentMessage = $standardMessage."<br /> Please include above customer in your daily report, and deposit the initial set-up fee to designated bank account for the system admin to create a new account.";
		
		mail($_POST['adminEmail'], $customerSubject, $customerMessage, $headers);
		mail($_POST['accountManagerEmail'], $agentSubject, $agentMessage, $headers);
		mail("hello@discardapp.com", $agentSubject, $standardMessage, $headers);
	?>
	<div id="signup-confirmation-container">
		<h2>Sign up completed <br /> </h2>
		You should receive a confirmation email very soon. <br />
		Thank you for joining us! <br /><br />
		
		<div>
			<h4>Store Information</h4>
			<div class="row">
				<div class="col-md-6">
					<span>Name</span>
				</div>
				<div class="col-md-6">
					<span><?php echo $_POST['storeName'] ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<span>Address</span>
				</div>
				<div class="col-md-6">
					<span><?php echo $_POST['storeAddress'] ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<span>Phone</span>
				</div>
				<div class="col-md-6">
					<span><?php echo $_POST['storePhone'] ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<span>Email</span>
				</div>
				<div class="col-md-6">
					<span><?php echo $_POST['storeEmail'] ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<span>Website</span>
				</div>
				<div class="col-md-6">
					<span><?php echo $_POST['storeWebsite'] ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<span>Category</span>
				</div>
				<div class="col-md-6">
					<span><?php echo $_POST['storeCategory'] ?></span>
				</div>
			</div>
			<h4>Administrator Information</h4>
			<div class="row">
				<div class="col-md-6">
					<span>Email</span>
				</div>
				<div class="col-md-6">
					<span><?php echo $_POST['adminEmail'] ?></span>
				</div>
			</div>
			<h4>Card Information</h4>
			<div class="row">
				<div class="col-md-6">
					<span>Type</span>
				</div>
				<div class="col-md-6">
					<span><?php echo $_POST['cardType'] ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<span>Days To Expiry</span>
				</div>
				<div class="col-md-6">
					<span><?php echo $_POST['cardExpireInDays'] ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<span>Perks Description</span>
				</div>
				<div class="col-md-6">
					<span><?php echo $_POST['cardPerks'] ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<span>Stamp Count till Redeem</span>
				</div>
				<div class="col-md-6">
					<span><?php echo $_POST['stampCount'] ?></span>
				</div>
			</div>
			<h4>Account Manager Information</h4>
			<div class="row">
				<div class="col-md-6">
					<span>Email</span>
				</div>
				<div class="col-md-6">
					<span><?php echo $_POST['accountManagerEmail'] ?></span>
				</div>
			</div>
		</div>
		<a href="http://discardapp.com/">Go back to Discard </a>
	</div>
</body>
</html>