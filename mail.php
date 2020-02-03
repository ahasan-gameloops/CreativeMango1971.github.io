<?php

$email = "creativemango1971@gmail.com";
$subject = $_POST['subject'];
$message = $_POST['message'];

if (mail($email,$subject,$message)
{
    die("success");
} else {
    die("failed");
}

?>