<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar With Bootstrap</title>
  
    <!-- icon-link -->
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
       <!-- icon-link -->

       <!-- boostrap-link-css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  <!-- boostrap-link-css -->

  <!-- font-awesome-link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
 <!-- font-awesome-link -->


 <!-- css-link -->
    <link rel="stylesheet" href="Das-total-admins.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css">
  <!-- css-link -->


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
            <a href="index.html">रेस्टुरेन्ट</a>
          </div>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            
            <a href="index.php" class="sidebar-link">
            <!-- <a href="./Team_Project/in" class="sidebar-link"> -->
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
                  <p class="name">Niraj</p>
                </a>
               
              </li>
            </ul>
          </div>
        </nav>

        <div class="content-wrapper">
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6" id="manage-sub">
                  <h4>Manage Sub Admins</h4>
                </div>

                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"> 
                      <!-- <a href="/Team_Project/index.php">Home</a> -->
                      <a href="index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active"> Manage Sub Admins</li>
                  </ol>
                </div>
              </div>

            </div>       <!--/.contained-fluid close --> 
          </section>
        </div>
     
        
        <!-- data-table-start -->
       
<div class="container-fluid das-table">
  <div class="row">
    <div class="col-12">
<div class="data_table table-responsive">
  

  <table id="example" class="display nowrap table-bordered" style="width:100%" overflow-x:auto;>
    <thead class="examples">
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011-04-25</td>
            <td>$320,800</td>
        </tr>
        <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011-07-25</td>
            <td>$170,750</td>
        </tr>

        <tr>
            <td>Lael Greer</td>
            <td>Systems Administrator</td>
            <td>London</td>
            <td>21</td>
            <td>2009-02-27</td>
            <td>$103,500</td>
        </tr>
        
    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </tfoot>
</table>

</div>
    </div>
  </div>
</div>

 <!-- data-table-end -->


      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

 
<!-- Javascript link -->

    <script src="Das-total-admins.js"></script>
    
  <script  src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script> 
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>





<!-- Javascript link -->

</body>
</html>
