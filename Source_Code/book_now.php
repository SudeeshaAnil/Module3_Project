<?php
//define variables and set to empty values
$fname=$lname=$email=$mobile="";
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lame'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    
}
if(isset($_POST['fname']))
if(isset($_POST['lname']))
if(isset($_POST['email']))
if(isset($_POST['mobile']))
{
echo "<h2>Your Input:</h2>";
echo "Your Name is", $fname;
echo "<br>";
echo "Your Email is", $email;
echo "<br>";
echo "Your Mobile Number is", $mobile;
echo "<br>";
}
?>
