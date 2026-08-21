<?php
/**
 * Shared layout for every service detail page.
 *
 * A service page only needs to set $serviceSlug and include this file:
 *
 *   <?php
 *   $serviceSlug = 'security-guard-services';
 *   include 'service-template.php';
 *
 * Structure, components and styling are identical for all 10 services —
 * only the copy defined in services-data.php changes.
 */

require_once 'services-data.php';

$slug    = isset($serviceSlug) ? $serviceSlug : basename($_SERVER['PHP_SELF'], '.php');
$service = isset($services[$slug]) ? $services[$slug] : $services[first_service_slug()];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo e($service['name']); ?></title>
    <meta name="description" content="<?php echo e($service['banner_text']); ?>" />
    <?php include 'links.php' ?>
    <link rel="stylesheet" href="assets/css/noman.css" />
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ?>
    <!-- End header -->

    <!-- section page banner -->
    <section class="page-banner-section">
        <div class="container">
            <nav class="breadcrumb-nav">
                <a href="index.php">Home</a>
                <span class="separator">&gt;</span>
                <span class="current"><?php echo e($service['name']); ?></span>
            </nav>
            <div class="page-banner-content">
                <h1><?php echo $service['banner_heading_html']; ?></h1>
                <p>
                    <?php echo e($service['banner_text']); ?>
                </p>
                <div class="page-banner-btn-group">
                    <a href="contact-us.php" class="btn btn-theme">GET A FREE ASSESSMENT</a>
                    <a href="#service-process" class="btn btn-theme white-btn">HOW IT WORKS <i
                            class="ri-arrow-right-s-line"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End section -->

    <!-- section who we are -->
    <section class="who-we-are about-who-we-are">
        <div class="container">
            <div class="row"> <!-- Content Right Column -->
                <div class="col-lg-6 col-md-12">
                    <div class="who-we-are-content">
                        <span class="sub-title"><?php echo e($service['intro_sub']); ?></span>
                        <div class="main-heading">
                            <h2><?php echo $service['intro_heading_html']; ?></h2>
                        </div>
                        <p class="description">
                            <?php echo e($service['intro_p1']); ?>
                        </p>
                        <p class="description">
                            <?php echo e($service['intro_p2']); ?>
                        </p>

                        <ul class="feature-list row gy-2">
                            <?php foreach ($service['features'] as $feature): ?>
                            <li class="col-md-6">
                                <i class="ri-checkbox-circle-line"></i>
                                <span><?php echo e($feature); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                        <a href="contact-us.php" class="btn btn-theme">
                            REQUEST COMPANY PROFILE <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
                <!-- Image Left Column -->
                <div class="col-lg-6 col-md-12">
                    <div class="who-we-are-image-wrapper">
                        <div class="main-image">
                            <img src="<?php echo e($service['image']); ?>"
                                alt="<?php echo e($service['name']); ?>" class="img-fluid">
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>
    <!-- End section -->
    <section class="services-section">
        <div class="container">
            <!-- Section Header Row -->
            <div class="row align-items-end">
                <div class="col-lg-7 col-md-12">
                    <div class="mvv-header m-0">
                        <span class="sub-title"><?php echo e($service['adv_sub']); ?></span>
                        <div class="main-heading white-heading">
                            <h2><?php echo $service['adv_heading_html']; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="services-header-description">
                        <p><?php echo e($service['adv_desc']); ?></p>
                    </div>
                </div>
            </div>

            <!-- Services Items Grid Row -->
            <div class="row services-grid-row">
                <?php foreach ($service['adv_items'] as $index => $item): ?>
                <!-- Service Item <?php echo $index + 1; ?> -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="services-item-box">
                        <span class="services-item-number"><?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></span>
                        <div class="services-item-icon">
                            <i class="<?php echo e($item['icon']); ?>"></i>
                        </div>
                        <h3 class="services-item-title"><?php echo e($item['title']); ?></h3>
                        <p class="services-item-text"><?php echo e($item['text']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- section mission vision values -->


    <section class="process-section" id="service-process">
        <div class="container">
            <!-- Section Heading Row -->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 text-center">
                    <div class="process-header-content">
                        <div class="main-heading">
                            <span class="sub-title">Our Process</span>
                            <h2>FROM INQUIRY TO <span>PROTECTED IN 4 STEPS</span></h2>
                            <p>We remove every friction point between your security need and <br> the officer on your
                                door.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Process Steps Grid Row -->
            <div class="row process-steps-row">
                <!-- Step 01 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="process-step-item">
                        <div class="step-number-box">
                            <span>01</span>
                        </div>
                        <h3 class="step-title">Initial Consultation</h3>
                        <p class="step-desc">Tell us about your location, risk level, and requirements. Our security
                            consultant reaches out within 24 hours.</p>
                    </div>
                </div>

                <!-- Step 02 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="process-step-item">
                        <div class="step-number-box">
                            <span>02</span>
                        </div>
                        <h3 class="step-title">Site Risk Assessment</h3>
                        <p class="step-desc">Our team conducts a thorough on-site survey, identifying vulnerabilities
                            and optimal guard deployment points.</p>
                    </div>
                </div>

                <!-- Step 03 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="process-step-item">
                        <div class="step-number-box">
                            <span>03</span>
                        </div>
                        <h3 class="step-title">Custom Security Plan</h3>
                        <p class="step-desc">We deliver a detailed proposal with staffing levels, patrol routes,
                            technology recommendations, and transparent pricing.</p>
                    </div>
                </div>

                <!-- Step 04 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="process-step-item">
                        <div class="step-number-box">
                            <span>04</span>
                        </div>
                        <h3 class="step-title">Deployment &amp; Monitoring</h3>
                        <p class="step-desc">Officers are briefed and deployed. Ongoing supervision, reporting, and
                            performance reviews keep standards high.</p>
                    </div>
                </div>
            </div>

            <!-- Onboarding Banner Box (Place inside any section/container) -->
            <div class="onboarding-banner-box mt-5">
                <div class="row align-items-center gy-3">
                    <!-- Left Text Content -->
                    <div class="col-lg-9 col-md-8 col-12">
                        <span class="banner-sub-title">AVERAGE ONBOARDING TIME</span>
                        <h3 class="banner-title">
                            FROM CONTRACT SIGN TO FIRST OFFICER ON POST: <span>48–72 HOURS</span>
                        </h3>
                    </div>

                    <!-- Right Action Button -->
                    <div class="col-lg-3 col-md-4 col-12 text-md-end text-start">
                        <a href="contact-us.php" class="btn btn-theme">START NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ser-01">
        <div class="container">
            <!-- Section Header Row -->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <div class="ser-01-header text-center">
                        <span class="sub-title">BY THE NUMBERS</span>
                        <div class="main-heading white-heading">
                            <h2>TRUSTED ACROSS <span>EVERY INDUSTRY</span></h2>
                        </div>
                        <p class="description">
                            From retail to real estate, from private events to government facilities — Murtuza Security
                            has the credentials and track record to protect what matters most.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Counter Grid Row -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ser-01-counter-box">
                        <span class="top-line"></span>
                        <h3 class="counter-number" data-count="850" data-decimals="0" data-suffix="+">850+</h3>
                        <p class="counter-label">ACTIVE CLIENTS</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ser-01-counter-box">
                        <span class="top-line"></span>
                        <h3 class="counter-number" data-count="1200" data-decimals="0" data-suffix="+">1,200+</h3>
                        <p class="counter-label">GUARDS DEPLOYED</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ser-01-counter-box">
                        <span class="top-line"></span>
                        <h3 class="counter-number" data-count="99.8" data-decimals="1" data-suffix="%">99.8%</h3>
                        <p class="counter-label">INCIDENT RESOLUTION RATE</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ser-01-counter-box">
                        <span class="top-line"></span>
                        <h3 class="counter-number" data-count="2" data-decimals="0" data-suffix="MIN">2MIN</h3>
                        <p class="counter-label">AVG. RESPONSE TIME</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End section -->



    <!-- End section -->

    <section class="sec-table">
        <div class="container">
            <div class="main-heading text-center"><span class="sub-title">Why We're Different</span>
                <h2>
                    MURTUZA VS. <span>THE REST</span>
                </h2>
            </div>

            <!-- Comparison Table Wrapper -->
            <div class="comparison-table-wrapper">
                <div class="table-responsive">
                    <table class="table comparison-table">
                        <thead>
                            <tr>
                                <th class="th-feature">FEATURE</th>
                                <th class="th-brand text-center">MURTUZA SECURITY</th>
                                <th class="th-typical text-center">TYPICAL AGENCY</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="feature-name">SIA Licensed Officers</td>
                                <td class="status-col text-center"><i class="ri-checkbox-circle-line icon-check"></i>
                                </td>
                                <td class="status-col text-center"><span class="text-varies">Varies</span></td>
                            </tr>
                            <tr>
                                <td class="feature-name">24/7 Command Centre Monitoring</td>
                                <td class="status-col text-center"><i class="ri-checkbox-circle-line icon-check"></i>
                                </td>
                                <td class="status-col text-center"><i class="ri-close-circle-line icon-cross"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-name">Real-time Client Dashboard</td>
                                <td class="status-col text-center"><i class="ri-checkbox-circle-line icon-check"></i>
                                </td>
                                <td class="status-col text-center"><i class="ri-close-circle-line icon-cross"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-name">Dedicated Account Manager</td>
                                <td class="status-col text-center"><i class="ri-checkbox-circle-line icon-check"></i>
                                </td>
                                <td class="status-col text-center"><i class="ri-close-circle-line icon-cross"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-name">GPS-Tracked Officers</td>
                                <td class="status-col text-center"><i class="ri-checkbox-circle-line icon-check"></i>
                                </td>
                                <td class="status-col text-center"><i class="ri-close-circle-line icon-cross"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-name">Emergency Same-Day Substitution</td>
                                <td class="status-col text-center"><i class="ri-checkbox-circle-line icon-check"></i>
                                </td>
                                <td class="status-col text-center"><i class="ri-close-circle-line icon-cross"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-name">On-Site Risk Assessment Included</td>
                                <td class="status-col text-center"><i class="ri-checkbox-circle-line icon-check"></i>
                                </td>
                                <td class="status-col text-center"><i class="ri-close-circle-line icon-cross"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-name">Monthly Performance Audits</td>
                                <td class="status-col text-center"><i class="ri-checkbox-circle-line icon-check"></i>
                                </td>
                                <td class="status-col text-center"><i class="ri-close-circle-line icon-cross"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-name">ISO 9001 Certified Operations</td>
                                <td class="status-col text-center"><i class="ri-checkbox-circle-line icon-check"></i>
                                </td>
                                <td class="status-col text-center"><i class="ri-close-circle-line icon-cross"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-name">NSI Gold Approved</td>
                                <td class="status-col text-center"><i class="ri-checkbox-circle-line icon-check"></i>
                                </td>
                                <td class="status-col text-center"><i class="ri-close-circle-line icon-cross"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-results">
        <div class="container">
            <!-- Main Heading (Global Structure) -->
            <div class="main-heading text-center  white-heading">
                <span class="sub-title">CASE STUDIES</span>
                <h2>
                    RESULTS THAT <span>SPEAK FOR THEMSELVES</span>
                </h2>
                <p>
                    Three real deployments. Three organisations that needed real protection — and got it.
                </p>
            </div>

            <!-- Case Study Cards Stack -->
            <div class="case-studies-list">

                <!-- Card 1 (Image Left) -->
                <div class="case-study-card">
                    <div class="row g-0 align-items-stretch">
                        <div class="col-lg-4 col-md-12">
                            <div class="card-img-box">
                                <img src="assets/images/result-img-1.png" alt="Corporate Security" class="card-img">
                                <span class="category-badge">CORPORATE</span>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="card-body-content">
                                <h3 class="card-title">KESTREL CAPITAL GROUP — SECURING 3 LONDON HQS</h3>

                                <div class="row challenge-solution-row">
                                    <div class="col-md-4 col-12">
                                        <div class="info-block">
                                            <span class="info-label">CHALLENGE</span>
                                            <p>A leading financial firm needed 24/7 static coverage across three central
                                                London offices following a series of tailgating incidents and an
                                                attempted data-room breach.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="info-block">
                                            <span class="info-label">SOLUTION</span>
                                            <p>We deployed 8 SIA-licensed officers across three sites on staggered
                                                rotations, introduced biometric access logging, and installed a direct
                                                channel to our command centre for instant escalation.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="info-block">
                                            <span class="info-label">RESULT</span>
                                            <p>Zero incidents in 18 months. 40% reduction in unauthorised access
                                                attempts within 60 days.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer-metrics">
                                    <div class="metrics-group">
                                        <div class="metric-item">
                                            <span class="metric-num">18MO</span>
                                            <span class="metric-lbl">INCIDENT-FREE</span>
                                        </div>
                                        <div class="metric-item">
                                            <span class="metric-num">40%</span>
                                            <span class="metric-lbl">FEWER BREACHES</span>
                                        </div>
                                        <div class="metric-item">
                                            <span class="metric-num">3</span>
                                            <span class="metric-lbl">SITES SECURED</span>
                                        </div>
                                    </div>
                                    <a href="clients.php" class="case-study-link">
                                        FULL CASE STUDY <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 (Image Right) -->
                <div class="case-study-card">
                    <div class="row g-0 align-items-stretch flex-lg-row-reverse">
                        <div class="col-lg-4 col-md-12">
                            <div class="card-img-box">
                                <img src="assets/images/result-img-2.png" alt="Events Security" class="card-img">
                                <span class="category-badge badge-right">EVENTS</span>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="card-body-content">
                                <h3 class="card-title">LONDON TECH SUMMIT — 12,000 ATTENDEE EVENT</h3>

                                <div class="row challenge-solution-row">
                                    <div class="col-md-4 col-12">
                                        <div class="info-block">
                                            <span class="info-label">CHALLENGE</span>
                                            <p>An annual conference required seamless crowd management, VIP escort
                                                coordination, and rapid escalation capability across 6 concurrent
                                                session halls at ExCeL London.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="info-block">
                                            <span class="info-label">SOLUTION</span>
                                            <p>32 officers deployed with detailed zone assignments, radio-linked to our
                                                mobile command unit on site. Pre-event walkthrough, rehearsed evacuation
                                                routes, and briefed on VIP movement schedules.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="info-block">
                                            <span class="info-label">RESULT</span>
                                            <p>Zero safety incidents. Post-event client NPS: 98. Re-booked for next 3
                                                annual events.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer-metrics">
                                    <div class="metrics-group">
                                        <div class="metric-item">
                                            <span class="metric-num">32</span>
                                            <span class="metric-lbl">OFFICERS DEPLOYED</span>
                                        </div>
                                        <div class="metric-item">
                                            <span class="metric-num">0</span>
                                            <span class="metric-lbl">SAFETY INCIDENTS</span>
                                        </div>
                                        <div class="metric-item">
                                            <span class="metric-num">98</span>
                                            <span class="metric-lbl">CLIENT NPS</span>
                                        </div>
                                    </div>
                                    <a href="clients.php" class="case-study-link">
                                        FULL CASE STUDY <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 (Image Left) -->
                <div class="case-study-card">
                    <div class="row g-0 align-items-stretch">
                        <div class="col-lg-4 col-md-12">
                            <div class="card-img-box">
                                <img src="assets/images/result-img-3.png" alt="Construction Security" class="card-img">
                                <span class="category-badge">CONSTRUCTION</span>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="card-body-content">
                                <h3 class="card-title">RIVERSIDE QUARTER DEVELOPMENT — SITE PROTECTION</h3>

                                <div class="row challenge-solution-row">
                                    <div class="col-md-4 col-12">
                                        <div class="info-block">
                                            <span class="info-label">CHALLENGE</span>
                                            <p>A £200M residential development project needed overnight protection
                                                against plant theft, vandalism, and trespassing across a 4-hectare open
                                                site in East London.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="info-block">
                                            <span class="info-label">SOLUTION</span>
                                            <p>6 overnight officers with GPS-tracked patrol routes, perimeter alarm
                                                monitoring, and a lone-worker check-in system reporting to our 24/7
                                                control room every 20 minutes.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="info-block">
                                            <span class="info-label">RESULT</span>
                                            <p>Plant theft eliminated. Two attempted break-ins intercepted and
                                                perpetrators detained for police.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer-metrics">
                                    <div class="metrics-group">
                                        <div class="metric-item">
                                            <span class="metric-num">£0</span>
                                            <span class="metric-lbl">THEFT SINCE DEPLOYMENT</span>
                                        </div>
                                        <div class="metric-item">
                                            <span class="metric-num">2</span>
                                            <span class="metric-lbl">BREAK-INS INTERCEPTED</span>
                                        </div>
                                        <div class="metric-item">
                                            <span class="metric-num">6MO</span>
                                            <span class="metric-lbl">CONTINUOUS COVERAGE</span>
                                        </div>
                                    </div>
                                    <a href="clients.php" class="case-study-link">
                                        FULL CASE STUDY <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End section -->

    <?php include 'testimonials.php' ?>
    <?php include 'faq.php' ?>
    <?php include 'contat-cta.php' ?>
    <!-- end -->

    <!-- footer -->
    <?php include 'footer.php' ?>
    <!-- end -->

</body>

</html>
