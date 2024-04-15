<?php
session_start();
include('database/db.php');

if ($_SERVER['REQUEST_METHOD']=="POST")
{
  $email = $_POST['email'];
  $password = $_POST['pass'];

  if(!empty($email) && !empty($password) && !is_numeric($email))
  {
    $query = "SELECT * FROM form WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($con, $query);

    if($result && mysqli_num_rows($result) > 0)
    {
      $user_data = mysqli_fetch_assoc($result);

      if($user_data['pass'] == $password)
      {
        echo "<script type='text/javascript'> alert ('Login successful')</script>";
        echo "<script type='text/javascript'> window.location.href = 'Team_Project/index.html'; </script>";
        
        die;
      } else {
        echo "<script type='text/javascript'> alert ('Wrong email or password')</script>";
      }
    } else {
      echo "<script type='text/javascript'> alert ('Wrong email or password')</script>";
    }
  } else {
    echo "<script type='text/javascript'> alert ('Please enter both email and password')</script>";
  }
}
?>