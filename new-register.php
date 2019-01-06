<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<center><body>
<h1>REGISTER HERE</h1>
<form action="" method="post">
<table align=center>


<tr>
<td>username:</td>
<td><input type="text" name="username" placeholder="enter your username"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 <tr>

<tr>
<td>usn:</td>
<td><input type="text" name="usn" placeholder="enter your usn"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td>semester:</td>
<td><input type="text" name="semester" placeholder="enter your sem"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td>password:</td>
<td><input type="password" name="password" value="admin"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td></td>
<td><input type="submit" name="submit" value="SignUp"></td>
</tr>
<tr>
<td>
<h1><a href="new-login.php">click here to login</a></h1></td>
</tr>
</table>
</form>
</body>
</html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="chat";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}
if(isset($_POST['submit'])){

$user = $_POST['username'];
$usnn = $_POST['usn'];
$sem = $_POST['semester'];
$pass = $_POST['password'];
$register_query = "INSERT INTO `register`( `username`, `usn`,`semester`,`password`) VALUES ('$user','$usnn','$sem','$pass')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo("  registration successful");

}else{
echo("error in registration");
}
 
}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
}
 
?>
