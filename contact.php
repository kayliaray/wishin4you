<?php
$name =$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];
$msg="Name: $name <br>
Phone: $phone<br>
Email: $email<br>
Message: $message";

mail("contact@wishin4you.com","A New Message from Wishin4You",$msg);
header("Location:'contact_confirm.html'");
?>