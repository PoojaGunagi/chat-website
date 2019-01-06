<html>
<head>
<title>login</title>
</head>
<center><body >
<h1>LOGIN HERE</h1>
<div id="frm">

<form action="new-login.php" method="POST">
<table border="1" width="400" height="300">
<tr>   <td>usn:</td>
      <td><input type="text" name="usn"></td>
</tr>
<tr>  <td>Password</td>

	      <td><input type="text" name="password"></td>
	</tr>
<tr>   <td colspan="5" align="center">  <input type="submit"  name="logoin" value="login">
 </tr>
 </table>
 </form>
</body></center>
</html>

<!doctype html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="chat";
//create connection
$conn=new MySQLi($servername,$username,$password,$dbname);
 
//check the connection
if($conn->connect_error){
die("connection failed".$conn->connect_error);
}
if(isset($_POST['usn'])){
$usnn=$_POST['usn'];
$pass =$_POST['password'];
$sql ="select * from register where usn = '".$usnn."' and password='".$pass."' LIMIT 1";
$result = $conn->query($sql);
if($result->num_rows>0){
 

                $_SESSION['usnn']=true;
header("location:main-page.php");
}
else{
echo("login failed.. incorrect username or password");
exit();
}
}
?>





