<html>
<body>

<?php $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "info@littlehardyinnovators.com";
$subject = "Contact Form from the LHI Website";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Oops... there was an error somewhere.  Please double check and try again!");

echo "Thank You!" . " -" . "<a href='index.htm' style='text-decoration:none;color:#E3361F;'> Return To Home Page</a>";
?>

</body>
</html>
 