<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="">enter your roll number:</label>
    <input type="number" name="number">
    <label for="">enter your name: </label>
    <input type="text" name="name">
    <label for="">enter your email</label>
    <input type="email" name="email">
    <label for=""></label>
    <input type="password" name="pass">
    <input type="submit" value="submi">
  </form>



<?php
$servername="localhost";
$username="root";
$password= "";
$dbname="khudadad";
// craeting a connection
$conn=null;
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
  echo"connected successfully";
}
else{
  die("there was a problem connecting". mysqli_connect_error());
}
// creating a table

$sql=("INSERT INTO khan VALUES ('{$_POST["number"]}', '{$_POST["name"]}', '{$_POST["email"]}', '{$_POST["pass"]}')");
$result=mysqli_query($conn,$sql);

// checking if connection is there?
if(empty($result)){
  
  echo"data is inserted";
}
else{
  echo"data is not entered";
}




?>
  
</body>
</html>