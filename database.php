<?php
  $servername="localhost";
  $username="root";
  $password="";
  $db="practise";

  // create connection 
  $conn = mysqli_connect($servername, $username, $password,$db);
  // To check the connection between the database and the server
  if(!$conn){
    die("Connection error :::").mysqli_connect_error();
  }
  // else{
  //   echo "Connection successful";
  // }
?>