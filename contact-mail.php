<?php




//send mail
$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

    $to      = 'contactus@indiadoctors.org';
$subject = 'MAIL FROM CONTACT US PAGE';
$message = '
<html>
<head>
  <title>Contact Us Indiadoctors.org</title>
</head>
<body>
  <p>You have got a message from: '.$name.'</p>
  <p>Email: '.$email.'</p>
  <p>Message: '.$message.'</p>
</body>
</html>
';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From: Indiadoctors.org <contactus@indiadoctors.org>' . "\r\n";

@mail($to, $subject, $message, $headers);
 
header('Location: contact.php?eid=1');

?>