<?php require_once("database.php"); ?>

<?php
  if(!isset($_POST['submit'])){
    die("Error occur");
  }else{
    $name = $_POST['name'];
    $email= $_POST['email'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO `form`(`Name`, `Email`, `Password`) values('$name', '$email', '$pass')";
    $result = mysqli_query($conn, $sql);
    if(!$result){
      die("Data isnot inserted!!!");
    }
    // else{
    //   echo "Data inserted successfully ...";
    // }
    mysqli_close($conn);

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form in PHP</title>
  <style><?php include "form.css"; ?></style>
</head>
<body>
  <div class="container">
    <form action="" method="post">
      <input type="text" name="name" id="name">
      <label for="name">Name</label>
      <input type="email" name="email" id="email">
      <label for="email">Email</label>
      <input type="password" name="password" id="password">
      <label for="password">Password</label>
      <input type="submit" value="Submit" name="submit">
    </form>
  </div>
</body>
</html>