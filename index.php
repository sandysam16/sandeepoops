<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'init.php';
if(isset($_POST["singup"])){

  $data = [
      'id' => 1,
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'password' => $_POST['password'],
      'cpassword' => $_POST['cpassword']
    ];

    $source->Query("INSERT INTO users (name,email,password) VALUES (?,?,?)", [$data['name'],$data['email'],$data['password']]);
    $source->Query("UPDATE users SET name = '".$data['name']."', email = '".$data['email']."', password = '".$data['password']."' WHERE id = 1");
    $source->Query("DELETE FROM users WHERE id=1");



} 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Singup Form</title>
 <link rel="stylesheet" href="assets/css/style.css">
 <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
</head>
<body>
 
 <div class="container">
  <div class="form">
   <div class="form-section">
    <form action="" method="post">
     <div class="group">
      <h3 class="heading">Create account</h3>
     </div>
     <div class="group">
      <input type="text" name="name" class="control" placeholder="Enter Name...">
     </div>
     <div class="group">
      <input type="email" name="email" class="control" placeholder="Enter Email..">
     </div>
     <div class="group">
      <input type="password" name="password" class="control" placeholder="Create Password...">
     </div>
     <div class="group">
      <input type="password" name="cpassword" class="control" placeholder="Confirm Password...">
     </div>
     <div class="group m20">
      <input type="submit" name="singup" class="btn" value="Create account &rarr;">
     </div>
     <div class="group m20">
      <a href="login.php" class="link">Already have an account ?</a>
     </div>
    </form>
   </div>
  </div>
 </div>


</body>
</html>
