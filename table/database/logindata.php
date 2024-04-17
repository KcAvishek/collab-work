<?php
session_start();
include('database/db.php');

if ($_SERVER['REQUEST_METHOD']=="POST")
{
  $email = $_POST['email'];
  $password = $_POST['pass'];

  if(!empty($email) && !empty($password) && !is_numeric($email))
  {
    $query = "select * from form where email = '$email' limit 1";
    $result = mysqli_query($con,$query);

    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data = mysqli_fetch_assoc($result);

        if($user_data['pass'] == $password)
        {
          header("Location: welcome.php");
          die;
        }
      }
    }
    echo "<script type='text/javascript'> alert ('Wrong email or password')</script>";
  } else {
    echo "<script type='text/javascript'> alert ('Wrong email or password')</script>";
  }
}
?>