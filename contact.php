<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>SeeScotland</title>
	<link href="public/grid.css" type="text/css" rel="stylesheet"/>
	<link href="public/style.css" type="text/css" rel="stylesheet"/>
	<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT%7COpen+Sans' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	
	<style type="text/css">
	#contact_nav {
		border-bottom: 3px solid #760000;
	</style>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".info").click(function(){
			alert("The information you give us will be stricly used for statistical purpose, in order for us to know better our costumer and respond efficiently to your needs.");
		});
	});
	</script>
</head>

<body>
	<div  class="container_12">
		<?php include("header.php"); ?>
		<h1>Contact Us</h1>
		<form method="post" name="contactMe" onsubmit="return validateForm();" action="https://homepages.abdn.ac.uk/dcorsar/pages/post.php">
			<fieldset>
				<legend><strong>Personal Details</strong></legend>
				<p><u>Name</u> :</p>
				<input type="text" name="name" id="name" size="30"/>
				<div id="namerequired"></div>
				<p><u>E-Mail</u> :</p>
				<input type="text" name="email" id="email" size="30"/>
				<div id="emailrequired"></div>
				<p><u>Gender</u> : <img class="info" src="public/info.png" alt="infobubble"/></p>
				<input type="radio" name="gender" value="male"/>
				Male
				<input type="radio" name="gender" value="female"/>
				Female
				<input type="radio" name="gender" value="non"/>
				Don't want to share
				<p><u>Age</u> : <img class="info" src="public/info.png" alt="infobubble"/></p>
				<select name="pays" id="pays">
					<option value="unknown">Don't want to share</option>
					<option value="under18">Under 18</option>
					<option value="18-25">18-25</option>
					<option value="26-35">26-35</option>
					<option value="36-45">36-45</option>
					<option value="46-55">46-55</option>
					<option value="56-65">56-65</option>
					<option value="67-75">67-75</option>
					<option value="over75">Over 75</option>
				</select>
			</fieldset>
			<fieldset>
				<legend><strong>Message</strong></legend>
				<textarea name="message" id="message" rows="6" cols="70">Write your message here</textarea>
				<div id="messagerequired"></div>
			</fieldset>
			<p>
			<input type="submit" value="Submit your message"/>
			<input type="reset" value="Clear the form"/>
			</p>
			<input type="hidden" name="username" id="username" value="u01bag14"/>
			<input type="hidden" name="webmasteremail" id="webmasteremail" value="b.a.gupta.14@aberdeen.ac.uk"/>
			<input type="hidden" name="homepage" id="homepage" value="https://homepages.abdn.ac.uk/b.a.gupta.14/assessment/home.php"/>
		</form>
	</div>
	<div class="container_12">
		<?php include 'footer.php' ?>
	</div>

<script type="text/javascript">
	<!--
	function validateRequired(field, alerttxt)
	{
		if  (field.value == "" || field.value == null) {
			$("#name").css("background-color", "red");
			$("#namerequired").html(alerttxt);
			$("#namerequired").css("color", "red");
			return false;
		} else {
			$("#name").css("background-color", "white");
			$("#namerequired").html(null);
			return true;
		}
	}
	function validateRequired2(field, alerttxt)
	{
		if  (field.value == "" || field.value == null|| field.value== "Write your message here") {
			$("#message").css("background-color", "red");
			$("#messagerequired").html(alerttxt);
			$("#messagerequired").css("color", "red");
			return false;
		} else {
			$("#message").css("background-color", "white");
			$("#messagerequired").html(null);
			return true;
		}
	}
	function validateEmail(field, alerttxt)
	{
		var at_pos= field.value.indexOf("@");
		var dot_pos= field.value.lastIndexOf(".");
		if (at_pos<1 || dot_pos<2) {
			$("#email").css("background-color", "red");
			$("#emailrequired").html(alerttxt);
			$("#emailrequired").css("color", "red");
			return false;
		} else {
			$("#email").css("background-color", "white");
			$("#emailrequired").html(null);
			return true;
		}
	}
	function validateForm()
	{
		if (validateRequired(document.forms["contactMe"]["name"], "You need to enter your name.") == false) {
			return false;
		}
		if(validateEmail(document.forms["contactMe"]["email"], "You need to enter a correct e-mail address.") == false) {
			return false;
		}
		if (validateRequired2(document.forms["contactMe"]["message"], "You need to type a message.") == false) {
			return false;
		}
		return true;
	}
	//-->
</script>
</body>

</html>