<?php
//define variables and set to empty values
$name=$email=$phone=$enquiry="";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $enquiry=$_POST['enquiry'];
}
if(isset($_POST['name']))
if(isset($_POST['email']))
if(isset($_POST['phone']))
if(isset($_POST['enquiry']))
{
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $enquiry;
}
?>
