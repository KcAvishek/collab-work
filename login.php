<?php
require 'log&sign/logindata.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- -------------fonts------------------ -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
<!-- ----------------- for bootstrap  ------------------ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="log&sign/style.css">
</head>
<body>
    <!-- ----------login html----------- -->
    <div class="login">
        <h1>Login </h1>  
        <form method="post"> 
            <label>Email</label>
            <input type="email" name="email" required> 
            <label>Password</label>
            <div class="password1">
                <input type="password" id ="password" name="pass" required> 
            </div> 
            <input type="submit" name="submit" value="Submit"> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, libero.</p>
        </form>
        <p>Not have an account? <a href="signup.php" style="text-decoration: none;">Sign up Here</a><p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
