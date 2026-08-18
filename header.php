<?php
$page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!-- <?php include 'top-bar.php' ?> -->
<header class="header">
    <nav class="navbar navbar-expand-xl navbar-dark stroke bg-transparent">
        <div class="container">
            <div class="header-wrapper d-flex align-items-center justify-content-between w-100">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo.png" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'index') {
                                echo 'active';
                            } ?>" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == '#') {
                                echo 'active';
                            } ?>" href="#">About Us</a>
                        </li>
                        <li class="nav-item dropdown navdesktop">
                            <a class="nav-link <?php if ($page == '#') {
                                echo 'active';
                            } ?>" href="#">
                                Services <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-navdesktop" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Service 1</a></li>
                                <li><a class="dropdown-item" href="#">Service 2</a></li>
                                <li><a class="dropdown-item" href="#">Service 3</a></li>
                                <li><a class="dropdown-item" href="#">Service 4</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == '#') {
                                echo 'active';
                            } ?>" href="#">
                                Clients
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link <?php if ($page == '#') {
                                echo 'active';
                            } ?>" href="#">
                                Blog
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == '#') {
                                echo 'active';
                            } ?>" href="#">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="my-2 my-lg-0 d-xl-block d-none">
                    <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal"
                        class="btn btn-theme">Get Started</a>
                </div>
            </div>

        </div>
    </nav>
</header>

<!-- popup -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md model-sec">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="model-discount">
                            <div class="d-block text-center align-items-center">
                                <div class="animate-div"><span>Sign Up And Avail 50% Discount</span></div>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <hr>
                            <form method="POST" action="signup" class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" class="form-control model-input" placeholder="Enter Name"
                                                pattern="[A-Za-z ]+" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control model-input"
                                                placeholder="Enter Email" name="email"
                                                pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Contact No.</label>
                                            <input type="number" class="form-control model-input"
                                                placeholder="Enter Contact No." name="phone"
                                                onkeypress="if(this.value.length==12) return false;" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Service</label>
                                            <select class="form-control form-select model-input" id="mySelect"
                                                required="" name="service">
                                                <option selected="" disabled="" value="">Select Service</option>
                                                <option value="Assignment">Assignment</option>
                                                <option value="Dissertation">Dissertation</option>
                                                <option value="Research Paper">Research Paper</option>
                                                <option value="Thesis">Thesis</option>
                                                <option value="Online Exam">Online Exam</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <button type="submit" class="btn btn btn-theme mt-1 w-100">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->