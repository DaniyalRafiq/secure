<?php
require_once 'services-data.php';

$page          = basename($_SERVER['PHP_SELF'], '.php');
$isServicePage = array_key_exists($page, $services);
$servicesHome  = first_service_slug() . '.php';
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
                            <a class="nav-link <?php if ($page == 'about-us') { echo 'active'; } ?>" href="about-us.php">About Us</a>
                        </li>

                        <!-- Custom Services Dropdown -->
                        <li class="nav-item custom-dropdown-wrapper">
                            <a class="nav-link custom-dropdown-toggle <?php if ($isServicePage) { echo 'active'; } ?>" href="<?php echo $servicesHome; ?>">
                                Services <i class="ri-arrow-down-s-line dropdown-arrow"></i>
                            </a>

                            <div class="custom-dropdown-menu">
                                <div class="services-grid">
                                    <?php foreach ($services as $navSlug => $navService): ?>
                                    <a href="<?php echo $navSlug; ?>.php" class="service-item <?php if ($page == $navSlug) echo 'active'; ?>">
                                        <div class="service-icon"><i class="<?php echo e($navService['icon']); ?>"></i></div>
                                        <span class="service-title"><?php echo e($navService['name']); ?></span>
                                    </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'clients') { echo 'active'; } ?>" href="clients.php">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'contact-us') { echo 'active'; } ?>" href="contact-us.php">Contact Us</a>
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
                            <form method="POST" action="signup.php" class="needs-validation" novalidate>
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
                                                <?php foreach ($services as $navSlug => $navService): ?>
                                                <option value="<?php echo $navSlug; ?>"><?php echo e($navService['name']); ?></option>
                                                <?php endforeach; ?>
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
