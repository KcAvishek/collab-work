<?php
session_start();
$connection_register = mysqli_connect("localhost", "root", "", "register"); 
$connection_restaurant = mysqli_connect("localhost", "root", "", "restaurant");

// total booking count 
function getCount() {
    global $connection_restaurant;
    $query =   "SELECT COUNT(*) as total FROM `text`";   
 
    $result = mysqli_query($connection_restaurant, $query);
    
    if (!$result) {
        die("Query failed: " . mysqli_error($connection_restaurant));
    }

    if ($row = mysqli_fetch_assoc($result)) {
        return $row['total'];
    }
    return 0;
}

// total admin count
function getadmin() {
    global $connection_register;
    $query = "SELECT COUNT(*) as total_count FROM `form`";
    
    $result = mysqli_query($connection_register, $query);
    
    if (!$result) {
        die("Query failed: " . mysqli_error($connection_register));
    }

    if ($row = mysqli_fetch_assoc($result)) {
        return $row['total_count'];
    }
    
    return 0;
}

$query ="SELECT fname FROM 'form'"; // replace `username` with the actual column name

if (isset($_SESSION['username'])) {
    $stmt = mysqli_prepare($connection_register, $query);
    mysqli_stmt_bind_param($stmt, "s", $_SESSION['username']);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($result)) {
        $fname = htmlspecialchars($row['fname'], ENT_QUOTES, 'UTF-8');
    }
} else {
    $fname = 'fname';
}


?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar With Bootstrap</title>
  
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="index.css" />
    
  </head>

  <body>

   <!-- slide-navigaation-bar start -->

    <div class="wrapper">
      <aside id="sidebar">
        <div class="d-flex">
          <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
          </button>
          <div class="sidebar-logo">
            <a href="index.php">थाकाली-घर</a>
          </div>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="./index.php" class="sidebar-link">
              <i class="fa-solid fa-gauge"></i>
              <span>DashBoard</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed has-dropdown"
              data-bs-toggle="collapse"
              data-bs-target="#auth"
              aria-expanded="false"
              aria-controls="auth"
            >
            <i class="fa-solid fa-users"></i>
              <span>Sub-Admins</span>
            </a>
            <ul
              id="auth"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar"
            >
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Add</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Manage</a>
              </li>
            </ul>
          </li>

          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed has-dropdown"
              data-bs-toggle="collapse"
              data-bs-target="#tables"
              aria-expanded="false"
              aria-controls="auth"
            >
            <i class="fa-solid fa-table"></i>
              <span>Tables</span>
            </a>
            <ul
              id="tables"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar"
            >
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Add</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Manage</a>
              </li>
            </ul>
          </li>

          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed has-dropdown"
              data-bs-toggle="collapse"
              data-bs-target="#booking"
              aria-expanded="false"
              aria-controls="auth"
            >
              <i class="lni lni-protection"></i>
              <span>Booking</span>
            </a>
            <ul
              id="booking"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar"
            >
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">New</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Accepted</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Rejected</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">All</a>
              </li>
            </ul>
          </li>

          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-file"></i>
              <span>B/w Dates Report</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed has-dropdown"
              data-bs-toggle="collapse"
              data-bs-target="#setting"
              aria-expanded="false"
              aria-controls="auth"
            >
            <i class="fa-solid fa-gear"></i>
              <span>Account Setting</span>
            </a>
            <ul
              id="setting"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar"
            >
              <li class="sidebar-item">
                
                <a href="#" class="sidebar-link">Profile</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Change Password</a>
              </li>
            </ul>
          </li>

          <div class="sidebar-footer">
            <a href="#" class="sidebar-link">
              <i class="lni lni-exit"></i>
              <span>Logout</span>
            </a>
          </div>
        </ul>
      </aside>

         <!-- slide-navigaation-bar close -->

      <div class="main">
        <nav class="navbar navbar-expand px-4 py-3">
          <form action="#" class="d-none d-sm-inline-block"></form>
          <div class="navbar-collapse collapse">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                  <img src="account.png" class="avatar img-fluid" alt="" />

                  <!-- <p class="name">Admin</p> -->
                  <p class="name"><?php echo $fname; ?></p>
                </a>
               
              </li>
            </ul>
          </div>
        </nav>

     
       
<!-- dashboard start -->


        <main class="content px-3 py-4">
          <div class="container-fluid">
            <div class="mb-3">
              <h3 class="fw-bold fs-4 mb-3">Admin Dashboard</h3>
             
              <div class="row row-cols-1 row-cols-md-3">
                
                <!-- Dashboard Sub-Admins staring -->
                <div class="col-lg-4  col-sm-6 col-12 total-admins  p-3 mb-3">
                  <div class="card " id="admins">
                    <div class="card-body py-4">
                        <i class="fa-solid fa-user-plus"></i>
                      <h5 class="mb-2  fw-bold">Sub Admins</h5>
                      <!-- <p class="mb-2 fw-bold">$72,540</p> -->
                      <p class="mb-2 fw-bold"><?= getadmin(); ?></p>
                      <div class=" more-info">
                        <a href="Das-total-admins.php">More info </a>
                      </div>
                    </div>
                  </div>
                </div>
<!-- Dashboard Sub-Admins closing -->

                <!-- Dashboard all-booking starting -->
                <div class="col-lg-4  col-sm-6 col-12  All-booking p-3 mb-3">
                  <div class="card " id="bookings">
                    <div class="card-body py-4">
                        <i class="fa-solid fa-tablet"></i>
                      <h5 class="mb-2 fw-bold">All booking</h5>
                    
                      <p class="mb-2 fw-bold"><?= getCount(); ?></p>
                      
                      <div class=" more-info">
                        <a href="All-booking.html">More info </a>
                      </div>
                    </div>
                  </div>
                </div>
 <!-- Dashboard all-booking closing -->



                <!-- Dashboard new-booking starting -->
                <div class="col-lg-4  col-sm-6 col-12 new-Bookings p-3 mb-3">
                  <div class="card" id="new-bookingss">
                    <div class="card-body py-4">
                        <i class="fa-solid fa-tablet"></i>
                      <h5 class="mb-2 fw-bold">New Bookings</h5>
                      <p class="mb-2 fw-bold">$72,540</p>
                      <div class=" more-info">
                        <a href="new-Bookings.html">More info </a>
                      </div>
                    </div>
                  </div>
                </div>
                 <!-- Dashboard new-booking closing -->

              <!-- Dashboard  accepted-Bookings  starting -->
                <div class="col-lg-4  col-sm-6 col-12 accepted-Bookings p-3 mb-3">
                  <div class="card" id="accepted">
                    <div class="card-body py-4">
                        <i class="fas fa-check"></i>
                      <h5 class="mb-2 fw-bold">Accepted Bookings</h5>
                      <p class="mb-2 fw-bold">$72,540</p>
                      <div class=" more-info">
                        <a href="accepted-Bookings.html">More info </a>
                      </div>
                    </div>
                  </div>
                </div>
 <!-- Dashboard  accepted-Bookings closing -->

                <!-- Dashboard rejected-Bookings -->
                <div class="col-lg-4  col-sm-6 col-12 rejected-Bookings p-3 mb-3">
                  <div class="card" id="rejected">
                    <div class="card-body py-4">
                        <i class="fas fa-times"></i>
                      <h5 class="mb-2 fw-bold">Rejected Bookings</h5>
                      <p class="mb-2 fw-bold">$72,540</p>
                      <div class=" more-info">
                        <a href="rejected-Bookings.html">More info </a>
                      </div>
                    </div>
                  </div>
                </div>
<!-- Dashboard rejected-Bookings -->

              </div>
            </div>
          </div>
        </main>
<!-- dashboard closing -->



      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="index.js"></script>
  </body>
</html>
