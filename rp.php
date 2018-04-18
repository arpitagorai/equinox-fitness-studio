<?php
$username=$_POST['username'];
$password=$_POST['password'];
$db=mysqli_connect('localhost','root','tiger','arpita') or die("error connecting to database".mysqli_error($db));

$b="select * from login";
$result= mysqli_query($db,$b) or die('error');
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo '<form id="myform">';
	echo'<input type="radio" name="candidate" id="name1" value="'.$row['username'].'"/>'.$row['username'].'<br />';
 
//print_r($row)."<br/>";
}
?>
