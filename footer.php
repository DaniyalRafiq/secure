<?php
require_once 'services-data.php';

$page         = basename($_SERVER['PHP_SELF'], '.php');
$servicesHome = first_service_slug() . '.php';
?>
<!-- footer -->
<!-- Pre-Footer CTA Banner -->
<section class="pre-footer-cta">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-center">
            <div class="col-lg-7 col-md-12 left-col">
                <div class="cta-text-wrapper">
                    <h2 class="cta-title">READY TO SECURE<br>YOUR PREMISES?</h2>
                    <p class="cta-subtitle">Get a free risk assessment and custom security proposal — no obligation, no
                        pressure.</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 right-col">
                <div class="cta-btn-group">
                    <a href="tel:+10000000000" class="btn btn-white-solid">CALL US NOW</a>
                    <a href="mailto:info@example.com" class="btn btn-outline-white">EMAIL US <i
                            class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Site Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row gy-4">
            <!-- Column 1: Brand & Contact -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="footer-widget brand-widget">
                    <a href="index.php" class="footer-logo">
                        <img src="assets/images/logo.png" alt="Murtuza Security Logo">
                    </a>
                    <p class="brand-desc">
                        Professional security services protecting businesses, communities, and critical assets since
                        2004. Licensed, trained, and always on duty.
                    </p>
                    <ul class="contact-links list-unstyled">
                        <li>
                            <i class="ri-phone-fill"></i>
                            <a href="tel:+10000000000">+1 (000) 000-0000</a>
                        </li>
                        <li>
                            <i class="ri-mail-fill"></i>
                            <a href="mailto:info@example.com">info@example.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Column 2: Services (2 items per row) -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="footer-widget">
                    <h4 class="widget-title">SERVICES</h4>
                    <ul class="footer-menu footer-menu-2col list-unstyled">
                        <?php foreach ($services as $navSlug => $navService): ?>
                        <li><a href="<?php echo $navSlug; ?>.php"><?php echo e($navService['name']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- Column 3: Company -->
            <div class="col-lg-2 col-md-6 col-12">
                <div class="footer-widget">
                    <h4 class="widget-title">COMPANY</h4>
                    <ul class="footer-menu list-unstyled">
                        <li><a href="about-us.php">About Company</a></li>
                        <li><a href="about-us.php#our-history">Our History</a></li>
                        <li><a href="clients.php">Our Clients</a></li>
                        <li><a href="<?php echo $servicesHome; ?>">All Services</a></li>
                        <li><a href="contact-us.php">Careers</a></li>
                    </ul>
                </div>
            </div>

            <!-- Column 4: Support -->
            <div class="col-lg-2 col-md-6 col-12">
                <div class="footer-widget">
                    <h4 class="widget-title">SUPPORT</h4>
                    <ul class="footer-menu list-unstyled">
                        <li><a href="contact-us.php">Contact Us</a></li>
                        <li><a href="tel:+10000000000">Emergency Line</a></li>
                        <li><a href="contact-us.php">Request a Quote</a></li>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="terms-and-conditions.php">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-6 col-12 text-center text-md-start">
                    <p class="copyright-text">© 2026 Murtuza Security Services. All rights reserved.</p>
                </div>
                <div class="col-md-6 col-12 text-center text-md-end mt-3 mt-md-0">
                    <div class="social-links">
                        <a href="#" aria-label="LinkedIn">in</a>
                        <a href="#" aria-label="Facebook">fb</a>
                        <a href="#" aria-label="Twitter">tw</a>
                        <a href="#" aria-label="YouTube">yt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Website JS -->
<script src="assets/js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Slick Carousel JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>
<!-- AOS JS -->
<script src="assets/js/aos.js"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>

<!-- Offcanvas Side Bar (mobile / tablet burger menu) -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <a href="index.php"><img src="assets/images/logo.png" alt="logo"></a>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'index') echo 'active'; ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'about-us') echo 'active'; ?>" href="about-us.php">About Us</a>
            </li>

            <!-- Services accordion -->
            <li class="nav-item">
                <a class="nav-link mobile-submenu-toggle <?php echo array_key_exists($page, $services) ? '' : 'collapsed'; ?>"
                    data-bs-toggle="collapse" href="#mobileServicesMenu" role="button"
                    aria-expanded="<?php echo array_key_exists($page, $services) ? 'true' : 'false'; ?>"
                    aria-controls="mobileServicesMenu">
                    Services <i class="ri-arrow-down-s-line submenu-arrow"></i>
                </a>
                <ul class="mobile-submenu collapse list-unstyled <?php if (array_key_exists($page, $services)) echo 'show'; ?>"
                    id="mobileServicesMenu">
                    <?php foreach ($services as $navSlug => $navService): ?>
                    <li>
                        <a href="<?php echo $navSlug; ?>.php" class="<?php if ($page == $navSlug) echo 'active'; ?>">
                            <i class="<?php echo e($navService['icon']); ?>"></i>
                            <span><?php echo e($navService['name']); ?></span>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'clients') echo 'active'; ?>" href="clients.php">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'contact-us') echo 'active'; ?>" href="contact-us.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'privacy-policy') echo 'active'; ?>" href="privacy-policy.php">Privacy Policy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'terms-and-conditions') echo 'active'; ?>" href="terms-and-conditions.php">Terms &amp; Conditions</a>
            </li>
        </ul>
        <div class="mt-3">
            <a href="contact-us.php" class="btn btn-theme w-100">Get Started</a>
        </div>
    </div>
</div>
<!-- end -->
