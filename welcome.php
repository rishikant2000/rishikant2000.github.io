<?php
$to      = 'gowtham.geds@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: $email'. "\r\n" .
    'Reply-To: $email' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>

<html>
    <body>
        Welcome: <?php echo $_POST['name']; ?><br>
        Email: <?php echo $_POST['email']; ?><br>
        <?php echo "Welcome to Ged Solution"; ?>
    </body>
</html>