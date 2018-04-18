<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$db=mysqli_connect('localhost','root','tiger','arpita') or die("error connecting to database".mysqli_error($db));

$query="select username,password from login where username='$username' and password='$password'";
$result=mysqli_query($db,$query) or die("error querying database");
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if($row==TRUE)
{
header('location:vote.html');
}
else
{
echo "incorrect username or password";
}
