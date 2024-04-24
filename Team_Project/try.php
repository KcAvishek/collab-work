<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "Register") or die(mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="navbar-collapse collapse">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                <?php if ($gender == "Male"): ?>
                    <img src="male.png" class="avatar img-fluid" alt="male" />
                <?php else: ?>
                    <img src="female.png" class="avatar img-fluid" alt="female" />
                <?php endif; ?>
                <p class="name"><?php echo $name; ?></p>
            </a>
            <?php if ($gender == "Male"): ?>
                <div>Male specific content here</div>
            <?php else: ?>
                <div>Female or other genders specific content here</div>
            <?php endif; ?>
        </li>
    </ul>
</div>

</body>
</html>
