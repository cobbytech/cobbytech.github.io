<?php


$host="127.0.0.1:8080";
$username="root";
$password="";
$db="cobby";



$conn=mysql_connect($host,$username,$password);
if(!conn) {
  echo "Not connect to server";
}
if(mysql_select_db($conn,$db))
{
  echo "Not selected ";
}
$Email=_POST("Email");
$firstName=_POST["FirstName"];
$lastName =_POST["LastName"];
$password =_POST["Password"];

$sql= "INSERT INTO cobby  login (FirstName,LastName,Email,Password) VALUES ('$firstName','$lastName','$Email','$password')";

if(!mysql_query($conn,$sql)) 
 {
   echo "Not inserted";

 }
 else {
  echo "Inserted";
 }
header("refresh:2; url="signup.html")
?>