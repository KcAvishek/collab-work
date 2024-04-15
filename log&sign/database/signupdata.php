<?php
session_start();
include('database/db.php');
if ($_SERVER['REQUEST_METHOD']=="POST")
{
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $Gender = $_POST['gender'];
  $Email = $_POST['email'];
  $Password = $_POST['pass'];

  if(!empty($Email) && !empty($Password) && !is_numeric($Email))
  {
    $query = "insert into form (fname, lname, gender, email, pass) values ('$firstname','$lastname','$Gender','$Email','$Password')";

    mysqli_query ($con, $query);
    echo "<script type='text/javascript'> alert ('Successfully Register')</script>";
  }
  else
  {
    echo "<script type='text/javascript'> alert ('please insert vaild DATA')</script>";
  }
}
?>