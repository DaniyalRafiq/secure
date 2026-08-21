<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <?php include 'links.php' ?>
    <link rel="stylesheet" href="assets/css/noman.css" />
</head>

<body class="contact-page">
    <!-- header -->
    <?php include 'header.php' ?>
    <!-- End header -->

    <!-- section page banner -->
    <section class="page-banner-section">
        <div class="container">
            <nav class="breadcrumb-nav">
                <a href="index.php">Home</a>
                <span class="separator">&#8226;</span>
                <span class="current">Contact Us</span>
            </nav>
            <div class="page-banner-content">
                <h1>GET IN TOUCH WITH US</h1>
                <p>
                    Posuere consectetur laoreet elit elementum non leo vestibulum et. Orci suspendisse
                    gravida libero sed eget fermentum mi in porttitor. Sit viverra vitae arcu vel vitae.
                </p>
                <ul class="hero-tags">
                    <li class="hero-tag"><i class="ri-checkbox-circle-fill"></i> SIA Licensed</li>
                    <li class="hero-tag"><i class="ri-checkbox-circle-fill"></i> ISO 9001 Certified</li>
                    <li class="hero-tag"><i class="ri-checkbox-circle-fill"></i> 24/7 Command Centre</li>
                    <li class="hero-tag"><i class="ri-checkbox-circle-fill"></i> Fully Insured</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End section -->

    <!-- section contact form & direct contact -->
    <section class="contact-form-section">
        <div class="container">
            <div class="row">
                <!-- Left Column: Form -->
                <div class="col-lg-7 col-md-12">
                    <div class="contact-form-header">
                        <span class="sub-title">SEND A MESSAGE</span>
                        <div class="main-heading white-heading">
                            <h2>GET A FREE <span>SECURITY QUOTE</span></h2>
                        </div>
                        <p class="description">
                            Fill in the form and a senior security consultant will contact you within 60
                            minutes during business hours, or first thing the next business day.
                        </p>
                    </div>

                    <div class="contact-form-card">
                        <form method="POST" action="get-quote" class="needs-validation" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="contactFullName" class="form-label">FULL NAME *</label>
                                    <input type="text" class="form-control" id="contactFullName" name="name"
                                        placeholder="John Smith" pattern="[A-Za-z ]+" required>
                                    <span class="invalid-feedback">Please enter your full name.</span>
                                </div>

                                <div class="col-md-6">
                                    <label for="contactEmail" class="form-label">EMAIL ADDRESS *</label>
                                    <input type="email" class="form-control" id="contactEmail" name="email"
                                        placeholder="john@company.com" required>
                                    <span class="invalid-feedback">Please enter a valid email address.</span>
                                </div>

                                <div class="col-md-6">
                                    <label for="contactPhone" class="form-label">PHONE NUMBER</label>
                                    <input type="tel" class="form-control" id="contactPhone" name="phone"
                                        placeholder="+44 7700 900 000">
                                </div>

                                <div class="col-md-6">
                                    <label for="contactCompany" class="form-label">COMPANY / ORGANISATION</label>
                                    <input type="text" class="form-control" id="contactCompany" name="company"
                                        placeholder="ACME Corp Ltd">
                                </div>

                                <div class="col-12">
                                    <label for="contactService" class="form-label">SERVICE REQUIRED *</label>
                                    <select class="form-select form-control" id="contactService" name="service" required>
                                        <option value="" selected disabled>Select Service Required</option>
                                        <?php require_once 'services-data.php'; foreach ($services as $optSlug => $optService): ?>
                                        <option value="<?php echo $optSlug; ?>"><?php echo e($optService['name']); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="invalid-feedback">Please select a required service.</span>
                                </div>

                                <div class="col-12">
                                    <label for="contactMessage" class="form-label">MESSAGE *</label>
                                    <textarea class="form-control" id="contactMessage" name="message" rows="5"
                                        placeholder="Tell us about your site, number of locations, estimated headcount, or any specific requirements..."
                                        required></textarea>
                                    <span class="invalid-feedback">Please tell us about your requirements.</span>
                                </div>

                                <div class="col-12">
                                    <p class="privacy-note">By submitting this form you agree to our privacy policy.
                                        We never share your data with third parties, and responses are handled with
                                        strict confidentiality.</p>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-theme w-100">
                                        SEND MESSAGE — GET FREE QUOTE <i class="ri-arrow-right-s-line"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right Column: Direct Contact Info -->
                <div class="col-lg-5 col-md-12">
                    <div class="contact-info-card">
                        <div class="response-highlight-box">
                            <div class="icon-box">
                                <i class="ri-timer-flash-line"></i>
                            </div>
                            <div>
                                <span class="response-title">60-MINUTE RESPONSE</span>
                                <span class="response-tag">Guaranteed during business hours</span>
                                <p>Every enquiry is reviewed by a senior consultant — not a call centre. We assess
                                    your needs and provide a tailored response, not a generic brochure.</p>
                            </div>
                        </div>

                        <h4 class="direct-contact-title">DIRECT CONTACT</h4>
                        <ul class="direct-contact-list">
                            <li class="direct-contact-item">
                                <div>
                                    <span class="contact-label">Emergency Line</span>
                                    <a href="tel:+448001234567" class="contact-value">+44 (0) 800 123 4567</a>
                                </div>
                                <span class="contact-tag tag-red">24/7</span>
                            </li>

                            <li class="direct-contact-item">
                                <div>
                                    <span class="contact-label">Office</span>
                                    <a href="tel:+442079460958" class="contact-value">+44 (0) 20 7946 0958</a>
                                </div>
                                <span class="contact-tag tag-outline">MON–FRI 8AM–6PM</span>
                            </li>

                            <li class="direct-contact-item">
                                <div>
                                    <span class="contact-label">Email</span>
                                    <a href="mailto:info@murtuzasecurity.co.uk" class="contact-value">info@murtuzasecurity.co.uk</a>
                                </div>
                                <span class="contact-tag tag-outline">REPLY WITHIN 2 HRS</span>
                            </li>

                            <li class="direct-contact-item">
                                <div>
                                    <span class="contact-label">New Business</span>
                                    <a href="mailto:sales@murtuzasecurity.co.uk" class="contact-value">sales@murtuzasecurity.co.uk</a>
                                </div>
                                <span class="contact-tag tag-outline">QUOTES & PROPOSALS</span>
                            </li>
                        </ul>

                        <div class="contact-info-image">
                            <img src="assets/images/who-we-are.png" alt="Murtuza Security Officer On Site">
                            <div class="img-caption">
                                <span class="caption-title">Licensed &middot; Insured &middot; ISO 9001</span>
                                <span class="caption-desc">All officers background-checked &amp; SIA certified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section -->

    <!-- section locations map -->
    <section class="locations-section">
        <div class="container">
            <div class="locations-header">
                <div>
                    <span class="sub-title">OUR LOCATIONS</span>
                    <div class="main-heading white-heading">
                        <h2>FIND YOUR <span>NEAREST OFFICE</span></h2>
                    </div>
                </div>
                <p class="description">We operate nationally with regional offices providing local knowledge and
                    rapid deployment.</p>
            </div>

            <div class="row g-2 align-items-stretch">
                <!-- Map Graphic -->
                <div class="col-lg-6 col-md-12">
                    <div class="map-panel">
                        <svg viewBox="0 0 240 260" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <line x1="70" y1="30" x2="82" y2="95" stroke="rgba(255,255,255,0.15)" stroke-width="1.5" stroke-dasharray="4 4" />
                            <line x1="82" y1="95" x2="115" y2="90" stroke="rgba(255,255,255,0.15)" stroke-width="1.5" stroke-dasharray="4 4" />
                            <line x1="82" y1="95" x2="100" y2="160" stroke="rgba(255,255,255,0.15)" stroke-width="1.5" stroke-dasharray="4 4" />
                            <line x1="100" y1="160" x2="150" y2="215" stroke="rgba(255,255,255,0.15)" stroke-width="1.5" stroke-dasharray="4 4" />

                            <circle cx="70" cy="30" r="5" fill="#fff" />
                            <text x="70" y="18" text-anchor="middle" class="map-pin-label">GLASGOW</text>

                            <circle cx="115" cy="90" r="5" fill="#fff" />
                            <text x="130" y="86" text-anchor="start" class="map-pin-label">LEEDS</text>

                            <circle cx="82" cy="95" r="5" fill="#fff" />
                            <text x="55" y="88" text-anchor="end" class="map-pin-label">MANCHESTER</text>

                            <circle cx="100" cy="160" r="5" fill="#fff" />
                            <text x="82" y="153" text-anchor="end" class="map-pin-label">BIRMINGHAM</text>

                            <circle cx="150" cy="215" r="8" fill="#D01C24" />
                            <circle cx="150" cy="215" r="13" fill="none" stroke="#D01C24" stroke-width="1.5" opacity="0.5" />
                            <text x="150" y="238" text-anchor="middle" class="map-pin-label" fill="#ffffff">LONDON HQ</text>
                        </svg>

                        <h3 class="map-caption-title">NATIONWIDE COVERAGE</h3>
                        <p class="map-caption-list">London &middot; Manchester &middot; Birmingham &middot; Leeds &middot; Glasgow</p>
                    </div>
                </div>

                <!-- Office Cards -->
                <div class="col-lg-6 col-md-12">
                    <div class="office-card office-card-border-1">
                        <h4 class="office-title">London HQ</h4>
                        <p class="office-address">14 Security House, Canary Wharf, London E14 5AB</p>
                        <a href="tel:+442079460958" class="office-phone">+44 (0) 20 7946 0958</a>
                        <span class="office-hours">Mon–Fri 8AM–6PM</span>
                    </div>

                    <div class="office-card office-card-border-2">
                        <h4 class="office-title">Manchester</h4>
                        <p class="office-address">22 Northern Quarter, Manchester M1 1JD</p>
                        <a href="tel:+441619460300" class="office-phone">+44 (0) 161 946 0300</a>
                        <span class="office-hours">Mon–Fri 8AM–6PM</span>
                    </div>

                    <div class="office-card office-card-border-3">
                        <h4 class="office-title">Birmingham</h4>
                        <p class="office-address">5 Bridge Place, Birmingham B1 2JS</p>
                        <a href="tel:+441219460300" class="office-phone">+44 (0) 121 946 0300</a>
                        <span class="office-hours">Mon–Fri 8AM–6PM</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section -->

    <?php include 'faq.php' ?>
    <!-- end -->

    <!-- footer -->
    <?php include 'footer.php' ?>
    <!-- end -->

</body>

</html>
