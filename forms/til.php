<?php
if (isset($_POST['submit']))
{$name = $_POST['name'];
$mailform = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "kataiboonatech@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have a message".$name".\n\n".$message;

mail($mailTo, $name, $txt, $headers);

header("Location: index.html?MessageSent")
}
?>