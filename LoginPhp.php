<?php
$con = mysql_connect("localhost","root","murali");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else{

mysql_select_db("qatar", $con);

$result = mysql_query("SELECT * FROM Login where UserName = '$_GET[uname]' and Password = '$_GET[psw]'");

$count = mysql_num_rows($result);

if($count == 1) {
	header("Location:https://www.irctc.co.in/eticketing/loginHome.jsf");
	}
else {
	echo 'Invalid Credentials';
}

}
mysql_close($con);
?> 
