<?php 

$email= $_POST['email'];
$password1 = $_POST['password'];
$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];

    $servername = "localhost";
    $username = "Admin";
    $password = "";
    $db ="test";

    // Create connection
    $cn = new mysqli($servername, $username, $password,$db);

    // Check connection
    if ($cn->connect_error)
    {
        echo "Connection failed : " . $cn->connect_error;
    }
    $sql ="INSERT INTO signup(id,firstname,lastname,email,password) VALUES(null,'$firstname','$lastname','$email','$password1')";
    $results=mysqli_query($cn,$sql);
    if($results) {
      echo "successfully inserted";
    
      
    }
    else {
      echo "Not inserted:" .mysqli_error($cn);
      header("location signup.html");
      
    }
    
    ?>