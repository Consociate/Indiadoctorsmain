<!DOCTYPE html>
<html lang="en">
<head>
<title>IndiaDoctors - Networking Indian Doctors</title>
<?php include_once 'ui/head.php';?>
</head>
<body>
<?php include_once 'ui/fb.php';?>
<div class="banner"></div>
<div class="page">
<div class="logo">
<?php include_once 'ui/logo.php';?>
</div>
<div class="nav">
<?php include_once 'ui/nav.php';?>
</div>
<div class="content">
<h1>Contact Us</h1>
<h2>via Email</h2>
<p>Feel free to drop in us an email at contactus@indiadoctors.org for any queries that you might have.</p>
<h2>on the Social Media - Stay connected with us</h2>
<p><a href="https://www.facebook.com/pages/indiadoctorsOrg/151347528368037"><img src="images/fb.png" /></a> on facebook<br />
<a href="https://twitter.com/Indiadoctorsorg"><img src="images/tw.png" /></a> on twitter<br />
<a href=""><img src="images/li.png" /></a> on linkedin</p>
<h2>Send us a message</h2>
<?php 
	if(isset($_GET['eid'])){
		$eid = $_GET['eid'];
		if($eid == 1){
			echo '<p class="success-message">We have recieved your email. We will get in touch with you regarding the same very soon.</p>';
		}
	}
?>
<div id="contactusform">
<form name="contact-us" method="post" action="contact-mail.php">
<label for="name">Name: </label><input type="text" name="name" id="name" placeholder="Type your name.."/>
<label for="name">Email: </label><input type="text" name="email" id="email" placeholder="you@you.com"/>
<label for="name">Message: </label><textarea name="message" id="message" ></textarea>
<input type="submit" class="see-more" value="Submit" />
</form>
</div>

</div>
<div class="loginoptions">
<?php include_once 'ui/loginoptions.php';?>
</div>
<div class="block"></div>
<?php include_once 'ui/foot.php';?>
</div>
</body>
</html>