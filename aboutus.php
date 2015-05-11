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
<h1>About Us - The Team</h1>
<?php 
	include_once 'src/controllers/websitecontroller.php';
	$memberlist = showTeamMembers();
	define('UPLOAD_PATH', '../idcontent/team/');
?>
<ul>
<?php 
	foreach ($memberlist as $member){
		$text = '';
		if(strlen($member->getImageurl())> 2){
			$text = '<img src="'.UPLOAD_PATH.$member->getImageurl().'" width="120px" height="120px" /> <br /> ';
		}
		echo '<li><span class="title">'.$text.$member->getName().'</span> - '.$member->getDescription(); 
		echo '</li>';
	}
?>
</ul>
</div>
<div class="loginoptions">
<?php include_once 'ui/loginoptions.php';?>
</div>
<div class="block"></div>
<?php include_once 'ui/foot.php';?>
</div>
</body>
</html>