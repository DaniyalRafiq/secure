<?php
$page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!-- <?php include 'top-bar.php' ?> -->
<header class="header">
    <nav class="navbar navbar-expand-xl navbar-dark stroke bg-transparent">
        <div class="container">
            <div class="header-wrapper d-flex align-items-center justify-content-between w-100">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo.png" alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'index') { echo 'active'; } ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'about') { echo 'active'; } ?>" href="about.php">About Us</a>
                        </li>
                        
                        <!-- Custom Services Dropdown -->
                        <li class="nav-item custom-dropdown-wrapper">
                            <a class="nav-link custom-dropdown-toggle <?php if (in_array($page, ['security-guards', 'executive-protection', 'armed-escort', 'event-security', 'cctv-surveillance', 'electronic-security', 'access-control', 'reception-visitor', 'bulletproof-vehicles', 'consultancy-risk'])) { echo 'active'; } ?>" href="services.php">
                                Services <i class="ri-arrow-down-s-line dropdown-arrow"></i>
                            </a>
                            
                            <div class="custom-dropdown-menu">
                                <div class="services-grid">
                                    <a href="security-guards.php" class="service-item <?php if ($page == 'security-guards') echo 'active'; ?>">
                                        <div class="service-icon"><i class="ri-shield-user-line"></i></div>
                                        <span class="service-title">Security Guard Services</span>
                                    </a>

                                    <a href="executive-protection.php" class="service-item <?php if ($page == 'executive-protection') echo 'active'; ?>">
                                        <div class="service-icon"><i class="ri-user-star-line"></i></div>
                                        <span class="service-title">Executive Protection Services</span>
                                    </a>

                                    <a href="armed-escort.php" class="service-item <?php if ($page == 'armed-escort') echo 'active'; ?>">
                                        <div class="service-icon"><i class="ri-truck-line"></i></div>
                                        <span class="service-title">Armed Escort and Secure Transportation</span>
                                    </a>

                                    <a href="event-security.php" class="service-item <?php if ($page == 'event-security') echo 'active'; ?>">
                                        <div class="service-icon"><i class="ri-calendar-event-line"></i></div>
                                        <span class="service-title">Event Security Management</span>
                                    </a>

                                    <a href="cctv-surveillance.php" class="service-item <?php if ($page == 'cctv-surveillance') echo 'active'; ?>">
                                        <div class="service-icon"><i class="ri-webcam-line"></i></div>
                                        <span class="service-title">CCTV Surveillance Solutions</span>
                                    </a>

                                    <a href="electronic-security.php" class="service-item <?php if ($page == 'electronic-security') echo 'active'; ?>">
                                        <div class="service-icon"><i class="ri-cpu-line"></i></div>
                                        <span class="service-title">Electronic Security Systems</span>
                                    </a>

                                    <a href="access-control.php" class="service-item <?php if ($page == 'access-control') echo 'active'; ?>">
                                        <div class="service-icon"><i class="ri-lock-password-line"></i></div>
                                        <span class="service-title">Access Control & Screening</span>
                                    </a>

                                    <a href="reception-visitor.php" class="service-item <?php if ($page == 'reception-visitor') echo 'active'; ?>">
                                        <div class="service-icon"><i class="ri-building-4-line"></i></div>
                                        <span class="service-title">Reception & Visitor Management</span>
                                    </a>

                                    <a href="bulletproof-vehicles.php" class="service-item <?php if ($page == 'bulletproof-vehicles') echo 'active'; ?>">
                                        <div class="service-icon"><i class="ri-shield-flash-line"></i></div>
                                        <span class="service-title">Bulletproof Vehicle Services</span>
                                    </a>

                                    <a href="consultancy-risk.php" class="service-item <?php if ($page == 'consultancy-risk') echo 'active'; ?>">
                                        <div class="service-icon"><i class="ri-file-shield-line"></i></div>
                                        <span class="service-title">Consultancy & Risk Assessment</span>
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'clients') { echo 'active'; } ?>" href="clients.php">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'contact') { echo 'active'; } ?>" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="my-2 my-lg-0 d-xl-block d-none">
                    <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-theme">Get Started</a>
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