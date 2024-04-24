<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- boostrap-link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
     <!-- boostrap-link -->

     <!-- fonts-link -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
<!-- fonts-link -->

<!-- link-css -->
    <link rel="stylesheet" href="styles.css" />
    <!-- link-css -->


    <title>Thakali House</title>
  </head>
  <body>
    <!-- navigation menu start-->

    <header class="header">
      <nav>
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#">
              <img
                src="assets/logo-dark.png"
                alt="logo"
                class="nav__logo-dark"
                id="logo"
              />
              <img
                src="assets/logo-white.png"
                alt="logo"
                class="nav__logo-white"
              />
            </a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home">HOME</a></li>
          <li><a href="#special">SPECIAL</a></li>
          <li><a href="#menu">MENU</a></li>
          <li><a href="#event">ABOUT</a></li>
          <li><a href="#contact">CONTACT US</a></li>
          <button
            type="button"
            class="btn1"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
          >
            Book Us
          </button>
        </ul>
      </nav>
      <div class="section__container header__container" id="home">
        <div class="header__image">
          <img src="assets/nepali.png" alt="header" />
        </div>
        <div class="header__content">
          <h2>स्वागत छ ! तपाईलाई</h2>
          <h1>Thakali<br /><span>Ghar</span></h1>
        </div>
      </div>
    </header>
    <!-- navigation menu end-->

    <!-- Modal table start  -->
    <div
      class="modal fade"
      id="exampleModal"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <button
            type="button"
            class="btn-close btn-modal"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
          <div class="modal-body">
            <h4 class="text-warning text-center">BookBite</h4>

            <form action="code.php" method="POST">
              <div class="modal-body">
                <div class="mb-3">
                  <label for="validationDefault01" class="form-label"
                    >Name</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="name"
                    placeholder="Enter your Name"
                    id="validationDefault01"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="validationDefault02" class="form-label"
                    >Email</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    aria-describedby="emailHelp"
                    name="email"
                    placeholder="Enter your Email"
                    id="validationDefault02"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="validationDefault03" class="form-label"
                    >Phone No</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="phone"
                    placeholder="Enter your Phone Number"
                    id="validationDefault03"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="validationDefault04" class="form-label"
                    >Booking Date</label
                  >
                  <input
                    type="date"
                    class="form-control"
                    name="booking_date"
                    id="validationDefault04"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="validationDefault05" class="form-label"
                    >Booking Time</label
                  >
                  <input
                    type="time"
                    class="form-control"
                    name="booking_time"
                    id="validationDefault05"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="validationDefault06" class="form-label"
                    >Number of Adults</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="adults"
                    placeholder="Select number of adults"
                    id="validationDefault06"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="validationDefault07" class="form-label"
                    >Number of Children</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="children"
                    placeholder="Select number of children"
                    id="validationDefault07"
                    required
                  />
                </div>

                <div class="text-center my-4">
                  <button
                    type="submit"
                    name="save_data"
                    class="btn btn-warning text-white"
                  >
                    Submit
                  </button>
                </div>

                <div class="text-center status my-2">
                  <p>
                    Check Booking
                    <a href="check.html" class="text-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Status</a>
                  </p>
                  <p>
                    Admin Panel
                    <a href="login.php" class="text-warning">Login here</a>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal table end  -->
    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
      <div class="modal-body">
      
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Search by booking no" style="width: 93%;" required>
          </div>
          <button type="submit" class="btn btn-outline-warning text-center">Search</button>
        </form>

      </div>
      
    </div>
  </div>
</div>

    <!-- special-dishes start -->
    <section class="container image" id="special">
      <div class="text-center ">
        <h1>Species Dishes</h1>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12 dishes1">
          <div class="image-wrapper">
            <img
              src="assets/nepali_dishes.png"
              class="img-fluid"
              alt="image1"
            />
            <div class="content">
              <h2 style="color: rgb(255, 153, 0)">Nepalese Dishes</h2>
              <p>
                Exploring Nepalese dishes variety of Nepalese food diversity
                with momo dumplings, dal bhat.
              </p>
            </div>
          </div>  <!-- image-wrapper -->
        </div> <!-- dishes1 close -->

        <div class="col-lg-4 col-md-6 col-12 dishes2">
          <div class="image-wrapper">
            <img
              src="assets/indian_dishes.png"
              class="img-fluid"
              alt="image2"
            />
            <div class="content">
              <h2 style="color: rgb(255, 153, 0)">Indian dishes</h2>
              <p>
                Delve into the diverse world of Indian cuisine, from aromatic
                biryanis to flavorful curries and spicy samosas.
              </p>
            </div>
          </div><!-- image-wrapper -->
        </div> <!-- dishes2 close -->

        <div class="col-lg-4 col-md-6 col-12 dishes3">
          <div class="image-wrapper">
            <img
              src="assets/chines_dishes.png"
              class="img-fluid"
              alt="image3"
            />
            <div class="content">
              <h2 style="color: rgb(255, 153, 0)">Chinese dishes</h2>
              <p>
                Embark on a culinary journey through Chinese cuisine, savoring
                dishes like savory stir-fries, and flavorful noodles.
              </p>
            </div>
          </div>
        </div><!-- image-wrapper -->
      </div>  <!-- dishes2 close -->
    </section>
    <!-- Special dishes end -->


    <!-- our menu items start -->
    <section class="section__container order__container" id="menu">
      <h2 class="section__header">CHOOSE and ENJOY</h2>
      <div class="container items">
        <div class="row">
          <h1 class="text-center">Our Menu</h1>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <img src="assets/momo.png" alt="image3" />
            <div class="text-center">
              <h3>Momo</h3>
              <p>Rs.130</p>
            </div>
          </div> <!-- Momo close -->
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <img src="assets/Grilled Chicken Breast.png" alt="image3" />
            <div class="text-center">
              <h3>Grilled Chicken Breas</h3>
              <p>Rs.300</p>
            </div>
          </div><!-- Grilled Chicken Breas close-->
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <img src="assets/Vegetable Stir-Fry.png" alt="image3" />
            <div class="text-center">
              <h3>Vegetable Stir-Fry</h3>
              <p>Rs.140</p>
            </div>
          </div> <!-- Vegetable Stir-Fry close -->


          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <img src="assets/Beef Lasagna.png" alt="image3" />
            <div class="text-center">
              <h3>Beef Lasagna</h3>
              <p>Rs.240</p>
            </div>
          </div> <!-- Beef Lasagna close -->
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <img src="assets/Shrimp Scampi.png" alt="image3" />
            <div class="text-center">
              <h3>Shrimp Scampi</h3>
              <p>Rs.340</p>
            </div>
          </div> <!-- Shrimp Scampi close -->
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <img src="assets/Margherita Pizza.png" alt="image3" />
            <div class="text-center">
              <h3>Margherita Pizza</h3>
              <p>Rs.400</p>
            </div>
          </div> <!-- Margherita Pizza close -->
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <img src="assets/Spaghetti Carbonara.png" alt="image3" />
            <div class="text-center">
              <h3>Spaghetti Carbonara</h3>
              <p>RS.250</p>
            </div>
          </div> <!-- Spaghetti Carbonara close-->


          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <img src="assets/Grilled Salmon Fillet.png" alt="image3" />
            <div class="text-center">
              <h3>Grilled Salmon Fillet</h3>
              <p>Rs.330</p>
            </div>
          </div> <!-- Grilled Salmon Fille close -->
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <img src="assets/Mushroom Risotto.png" alt="image3" />
            <div class="text-center">
              <h3>Mushroom Risotto</h3>
              <p>Rs.200</p>
            </div>
          </div> <!-- Mushroom Risotto close -->
        </div> <!-- row close-->
      </div> <!-- items close -->
    </section>
    <!-- Our menu items end-->

    <!-- about of thakali start -->
    <section class="section__container event__container" id="event">
      <div class="event__content">
        <div class="event__image">
          <img src="assets/event.png" alt="event" />
        </div>
        <div class="event__details">
          <h3>1988 AD</h3>
          <h2 class="section__header">ABOUT</h2>
          <p class="section__description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita
            eaque aperiam ullam sunt tempora voluptatibus doloremque veniam sit.
            Tempora et perferendis quisquam. Tempora, voluptate tempore sint ut
            eos saepe corrupti. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Iste ipsa aliquam, labore non accusamus amet quo
            voluptatum ab reprehenderit. Ratione odit, tempore harum dolor eius
            recusandae autem eaque deleniti necessitatibus?
          </p>
        </div>
      </div>
    </section>
    <!-- about of thakali end-->

    <!-- contact page start -->
    <section class="reservation" id="contact">
      <div class="container">
        <h3 class="text-center text-warning">Contact Me!</h3>
        <form method="POST" id="form" class="row g-3">
          <input
            type="hidden"
            name="access_key"
            value="bb19c88d-58c1-43df-b906-f7cbf41f7477"
          />
          <div class="col-md-6">
            <label for="firstName" class="form-label">First Name</label>
            <input
              type="text"
              class="form-control"
              id="firstName"
              name="firstName"
              placeholder="First Name"
              required
            />
          </div>  <!--firstName close -->


          <div class="col-md-6">
            <label for="lastName" class="form-label">Last Name</label>
            <input
              type="text"
              class="form-control"
              id="lastName"
              name="lastName"
              placeholder="Last Name"
              required
            />
          </div> <!--lastName close -->
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="Email"
              required
            />
          </div> <!--email close -->


          <div class="col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input
              type="text"
              class="form-control"
              id="phone"
              name="phone"
              placeholder="+(977)"
              required
            />
          </div>  <!--phone close -->
          <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input
              type="text"
              class="form-control"
              id="address"
              name="address"
              placeholder="Address"
              required
            />
          </div>  <!--address close -->


          <div class="col-md-12">
            <label for="message" class="form-label">Message</label>
            <textarea
              class="form-control"
              id="message"
              name="message"
              placeholder="Type your message here"
              rows="3" required
            ></textarea>
          </div>  <!--message close -->
          <div class="my-4">
            <button type="submit" class="btn btn-outline-warning">
              Submit
            </button>
          </div>
        </form>
      </div>
      <div id="result"></div>
    </section>
    <!-- contact page end -->


    
    <!-- footer start -->
    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__logo">
          <img src="assets/logo-white.png" alt="logo" />
        </div>
        <div class="footer__content">
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit,
            vitae. Minima provident beatae praesentium quos, esse inventore,
            harum expedita odio molestiae ullam, assumenda odit quod amet facere
            quisquam quidem rerum? Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Soluta fugit veritatis fugiat voluptas minus
            tenetur incidunt aliquam quisquam nihil. Assumenda, commodi iure!
            Nihil,
          </p>
          <div>
            <ul class="footer__links">
              <li>
                <span><i class="ri-map-pin-2-fill"></i></span>
                Kathmandu,Nepal, 500089
              </li>
              <li>
                <span><i class="ri-mail-fill"></i></span>
                thakalighar@gmail.com
              </li>
            </ul>
            <div class="footer__socials">
              <a href="#"><i class="ri-facebook-circle-fill"></i></a>
              <a href="#"><i class="ri-instagram-fill"></i></a>
              <a href="#"><i class="ri-twitter-fill"></i></a>
              <a href="#"><i class="ri-whatsapp-fill"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © THAKALI GHAR. All rights reserved.
      </div>
    </footer>
    <!-- footer end-->

    <!-- javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
    <!-- javascript link -->
  </body>
</html>
