<?php
/**
 * Central service catalogue.
 *
 * Single source of truth for:
 *   - the desktop "Services" mega dropdown (header.php)
 *   - the mobile burger / offcanvas menu (footer.php)
 *   - the footer "Services" 2-column widget (footer.php)
 *   - the 10 service detail pages (service-template.php)
 *
 * Array key = page slug = file name without the .php extension.
 */

$services = [

    /* ---------------------------------------------------------------- 01 */
    'security-guard-services' => [
        'name'  => "Security Guard Services",
        'icon'  => "ri-shield-user-line",
        'image' => "assets/images/about-s-img.png",

        'banner_heading_html' => "MANNED GUARDING THAT <span>DETERS</span><br>BEFORE IT DEFENDS",
        'banner_text'         => "Licensed, uniformed officers stationed where your risk actually sits. Static posts, mobile patrols and out-of-hours cover — briefed on your site, supervised from our control room, and accountable every single shift.",

        'intro_sub'          => "WHAT WE DO",
        'intro_heading_html' => "OFFICERS TRAINED FOR<br><span>YOUR SITE, NOT A TEMPLATE</span>",
        'intro_p1'           => "A guard is only as effective as the brief behind them. Every Murtuza officer is deployed against a written site-specific assignment instruction — access points, escalation contacts, patrol routes and reporting duties — built from a physical survey of your premises rather than a generic template.",
        'intro_p2'           => "We cover retail floors, corporate receptions, warehouses, construction compounds and residential estates. Officers are GPS-tracked on patrol, check in to our 24/7 control room on a fixed cycle, and file digital shift reports you can read the same morning.",
        'features'           => [
            "SIA licensed and BS 7858 vetted officers",
            "Site-specific assignment instructions",
            "GPS-tracked patrols with timed checkpoints",
            "Same-day cover for absence or emergencies",
            "Digital shift and incident reporting",
            "Supervisor spot-checks on every contract",
        ],

        'adv_sub'          => "SERVICE ADVANTAGES",
        'adv_heading_html' => "GUARDING <span>ADVANTAGES</span>",
        'adv_desc'         => "From a single overnight officer to a full multi-shift rota, every deployment is delivered by vetted professionals working to clear, written protocols.",
        'adv_items'        => [
            ['icon' => "ri-shield-line",      'title' => "STATIC SECURITY POSTS",  'text' => "Round-the-clock uniformed officers stationed at your premises to deter unauthorised access, monitor entry points, and enforce site protocols."],
            ['icon' => "ri-time-line",        'title' => "MOBILE PATROL SERVICES", 'text' => "Scheduled and randomised vehicle patrols covering multiple locations. Visible deterrence with a detailed incident log after every shift."],
            ['icon' => "ri-moon-line",        'title' => "OUT-OF-HOURS COVER",     'text' => "Nights, weekends and shutdown periods covered by officers briefed specifically for low-traffic, high-risk operating windows."],
            ['icon' => "ri-user-follow-line", 'title' => "KEYHOLDING & RESPONSE",  'text' => "We hold your keys and attend alarm activations so your staff never have to answer a call-out at three in the morning."],
            ['icon' => "ri-file-list-3-line", 'title' => "TRANSPARENT REPORTING",  'text' => "Every patrol, visitor and incident is logged digitally and delivered to your inbox — no paper books, no missing hours."],
            ['icon' => "ri-team-line",        'title' => "DEDICATED SUPERVISION",  'text' => "A named account manager and roaming supervisor keep standards consistent across every officer on your contract."],
        ],
    ],

    /* ---------------------------------------------------------------- 02 */
    'executive-protection-services' => [
        'name'  => "Executive Protection Services",
        'icon'  => "ri-user-star-line",
        'image' => "assets/images/security-action-1.png",

        'banner_heading_html' => "DISCREET PROTECTION FOR<br><span>HIGH-PROFILE</span> PRINCIPALS",
        'banner_text'         => "Close protection officers who blend into the room instead of dominating it. Residence security, travel logistics and advance work — planned quietly, executed precisely, reported to you alone.",

        'intro_sub'          => "WHAT WE DO",
        'intro_heading_html' => "LOW PROFILE OUTSIDE —<br><span>FULLY PLANNED INSIDE</span>",
        'intro_p1'           => "Effective close protection is ninety percent preparation. Before a principal moves, our team completes route reconnaissance, venue advance checks, medical and hospital mapping, and a documented threat assessment covering the specific exposure of that individual.",
        'intro_p2'           => "Our CPOs are SIA close-protection licensed, first-aid qualified and selected for judgement as much as physical capability. Many hold military or police backgrounds, and all are trained to operate in corporate, family and public-facing environments without drawing attention.",
        'features'           => [
            "SIA close protection licensed operatives",
            "Written threat and exposure assessments",
            "Advance venue and route reconnaissance",
            "Residential security team deployments",
            "Secure travel and airport handling",
            "Strict confidentiality and NDA cover",
        ],

        'adv_sub'          => "SERVICE ADVANTAGES",
        'adv_heading_html' => "PROTECTION <span>ADVANTAGES</span>",
        'adv_desc'         => "Whether the requirement is a single evening engagement or permanent family cover, the planning discipline behind it never changes.",
        'adv_items'        => [
            ['icon' => "ri-user-star-line",      'title' => "CLOSE PROTECTION OFFICERS",  'text' => "Individually assigned CPOs for executives, dignitaries and public figures — briefed on the principal, the schedule and the risk picture."],
            ['icon' => "ri-home-4-line",         'title' => "RESIDENTIAL SECURITY TEAMS", 'text' => "Permanent or rotating cover at private residences, with controlled access, perimeter checks and household staff screening."],
            ['icon' => "ri-flight-takeoff-line", 'title' => "SECURE TRAVEL SUPPORT",      'text' => "Airport meet-and-greet, hotel advance checks and destination liaison so movement between countries carries no gap in cover."],
            ['icon' => "ri-search-eye-line",     'title' => "ADVANCE RECONNAISSANCE",     'text' => "Venues, routes and access points surveyed ahead of arrival, with contingency routing and medical facilities identified in writing."],
            ['icon' => "ri-user-heart-line",     'title' => "FAMILY & SCHOOL RUN COVER",  'text' => "Discreet protection for spouses and children, structured so daily routine and privacy stay intact."],
            ['icon' => "ri-lock-2-line",         'title' => "ABSOLUTE CONFIDENTIALITY",   'text' => "Every operative signs binding non-disclosure terms. Schedules, addresses and movements never leave the assigned team."],
        ],
    ],

    /* ---------------------------------------------------------------- 03 */
    'armed-escort-secure-transportation' => [
        'name'  => "Armed Escort and Secure Transportation",
        'icon'  => "ri-truck-line",
        'image' => "assets/images/security-action-2.png",

        'banner_heading_html' => "HIGH-VALUE MOVEMENT,<br><span>PROTECTED</span> END TO END",
        'banner_text'         => "Armed escort and cash-in-transit capability for the journeys that cannot go wrong. Vetted crews, tracked vehicles, planned routes and live control-room oversight from collection to signature.",

        'intro_sub'          => "WHAT WE DO",
        'intro_heading_html' => "EVERY ROUTE PLANNED —<br><span>EVERY MILE MONITORED</span>",
        'intro_p1'           => "Transit is where high-value assets are most exposed. We plan primary and alternate routes, vary timings, brief crews on choke points and hand-over procedure, and keep the vehicle under live tracking with a control-room operator watching the whole run.",
        'intro_p2'           => "Crews are armed only where lawfully permitted and appropriate to the risk, and always operate to documented rules of engagement. From bullion and pharmaceuticals to sensitive documents and plant equipment, the chain of custody is recorded at every hand-over.",
        'features'           => [
            "Licensed and lawfully authorised armed crews",
            "Primary and contingency route planning",
            "Live GPS vehicle tracking to the control room",
            "Documented chain of custody at every hand-over",
            "Cash and valuables in transit cover",
            "Convoy and multi-vehicle escort capability",
        ],

        'adv_sub'          => "SERVICE ADVANTAGES",
        'adv_heading_html' => "TRANSPORT <span>ADVANTAGES</span>",
        'adv_desc'         => "Single collections or standing daily runs — the planning, tracking and reporting discipline is identical on both.",
        'adv_items'        => [
            ['icon' => "ri-truck-line",       'title' => "ARMED ESCORT CONVOYS",   'text' => "Escort vehicles and crews accompanying high-value or high-risk loads, with rehearsed contingency actions for every leg of the route."],
            ['icon' => "ri-safe-2-line",      'title' => "CASH IN TRANSIT",        'text' => "Secure collection and delivery of cash and valuables for retail, banking and hospitality clients, with full reconciliation on arrival."],
            ['icon' => "ri-road-map-line",    'title' => "ROUTE RISK PLANNING",    'text' => "Routes assessed for exposure and congestion, timings varied to defeat pattern-of-life surveillance, alternates briefed before departure."],
            ['icon' => "ri-gps-line",         'title' => "LIVE VEHICLE TRACKING",  'text' => "Every movement is visible to our 24/7 control room, with duress signalling and automatic escalation on route deviation."],
            ['icon' => "ri-file-shield-line", 'title' => "CHAIN OF CUSTODY",       'text' => "Sealed handling, signed hand-overs and time-stamped records so accountability for the asset is never ambiguous."],
            ['icon' => "ri-team-line",        'title' => "VETTED, LICENSED CREWS", 'text' => "Drivers and escorts hold current licensing, advanced driving qualification and BS 7858 screening without exception."],
        ],
    ],

    /* ---------------------------------------------------------------- 04 */
    'event-security-management' => [
        'name'  => "Event Security Management",
        'icon'  => "ri-calendar-event-line",
        'image' => "assets/images/security-action-3.png",

        'banner_heading_html' => "CROWDS MANAGED.<br>EVENTS <span>UNINTERRUPTED</span>.",
        'banner_text'         => "From a 200-guest conference to a 20,000-capacity festival — stewarding, search, VIP handling and emergency planning delivered by an SIA-badged team that has done it before.",

        'intro_sub'          => "WHAT WE DO",
        'intro_heading_html' => "PLANNED WEEKS AHEAD —<br><span>DELIVERED ON THE DAY</span>",
        'intro_p1'           => "Event security starts long before the doors open. We produce crowd-flow modelling, zone plans, search and ingress procedures, and a written emergency and evacuation plan agreed with your venue, licensing authority and event organiser.",
        'intro_p2'           => "On the day, officers work to a zoned deployment with radio discipline, a mobile command position and a single escalation chain. Post-event, you receive a full incident and headcount report — the evidence your licence review and insurers will ask for.",
        'features'           => [
            "SIA badged stewards and door supervisors",
            "Crowd flow modelling and zone planning",
            "Search, screening and ingress management",
            "Written evacuation and emergency plans",
            "Radio-linked on-site command position",
            "Post-event incident and attendance reporting",
        ],

        'adv_sub'          => "SERVICE ADVANTAGES",
        'adv_heading_html' => "EVENT <span>ADVANTAGES</span>",
        'adv_desc'         => "Conferences, concerts, exhibitions, sporting fixtures and private functions — scaled to the audience, never improvised.",
        'adv_items'        => [
            ['icon' => "ri-group-line",         'title' => "CROWD MANAGEMENT",     'text' => "Trained stewards controlling flow, queue and density across entrances, concourses and exit routes for audiences of any scale."],
            ['icon' => "ri-scan-line",          'title' => "SEARCH & SCREENING",   'text' => "Bag search, wanding and prohibited-item control delivered at pace, so security never becomes the bottleneck at your gates."],
            ['icon' => "ri-vip-crown-line",     'title' => "VIP & ARTIST LIAISON", 'text' => "Dedicated escort and green-room control for performers, speakers and guests, coordinated with their own teams in advance."],
            ['icon' => "ri-alarm-warning-line", 'title' => "EMERGENCY PLANNING",   'text' => "Written evacuation, invacuation and medical escalation plans rehearsed with your venue before the first guest arrives."],
            ['icon' => "ri-walkie-talkie-line", 'title' => "ON-SITE COMMAND",      'text' => "A mobile command position with radio-linked zone leads gives one clear escalation chain from the floor to the organiser."],
            ['icon' => "ri-file-chart-line",    'title' => "POST-EVENT REPORTING", 'text' => "Attendance figures, incident logs and ejection records compiled into a single report for licensing and insurance review."],
        ],
    ],

    /* ---------------------------------------------------------------- 05 */
    'cctv-surveillance-solutions' => [
        'name'  => "CCTV Surveillance Solutions",
        'icon'  => "ri-webcam-line",
        'image' => "assets/images/security-action-4.png",

        'banner_heading_html' => "EYES ON SITE —<br><span>AROUND THE CLOCK</span>",
        'banner_text'         => "Design, installation and live monitoring of CCTV that someone actually watches. Analytics-driven alerts, trained operators and evidential-quality footage when you need to prove what happened.",

        'intro_sub'          => "WHAT WE DO",
        'intro_heading_html' => "CAMERAS ARE ONLY HALF —<br><span>MONITORING IS THE REST</span>",
        'intro_p1'           => "Unwatched recording tells you what you lost. Live monitoring stops you losing it. Our command centre operators watch client cameras in real time, verify analytics alerts, and escalate to keyholders, patrol officers or police within an agreed response window.",
        'intro_p2'           => "We survey coverage against your actual risk, specify camera type and placement, and commission systems that produce evidential-quality images at the identification distances that matter. Retention, access logging and privacy compliance are built in from day one.",
        'features'           => [
            "Coverage surveys mapped to real site risk",
            "IP, thermal and ANPR camera specification",
            "24/7 live monitoring by trained operators",
            "AI analytics with verified alarm escalation",
            "Evidential-quality footage and secure retention",
            "Data protection and privacy impact compliance",
        ],

        'adv_sub'          => "SERVICE ADVANTAGES",
        'adv_heading_html' => "SURVEILLANCE <span>ADVANTAGES</span>",
        'adv_desc'         => "New installations, system upgrades, or monitoring of the cameras you already own — all three are supported.",
        'adv_items'        => [
            ['icon' => "ri-tv-line",          'title' => "24/7 REMOTE MONITORING",   'text' => "Live surveillance watched by trained analysts from our command centre, with immediate escalation protocols for any flagged activity."],
            ['icon' => "ri-camera-lens-line", 'title' => "SYSTEM DESIGN & INSTALL",  'text' => "Camera type, placement and lighting specified against identification distances — not guesswork, and not sold by the box."],
            ['icon' => "ri-brain-line",       'title' => "AI VIDEO ANALYTICS",       'text' => "Line-crossing, loitering and object-left detection filters noise so operators respond to events rather than watching empty frames."],
            ['icon' => "ri-car-line",         'title' => "ANPR & VEHICLE CONTROL",   'text' => "Number-plate recognition on gates and car parks, with whitelist automation and alerting on flagged vehicles."],
            ['icon' => "ri-database-2-line",  'title' => "SECURE EVIDENCE RETENTION",'text' => "Tamper-evident storage, access logging and rapid export in a format that stands up to insurer and police scrutiny."],
            ['icon' => "ri-tools-line",       'title' => "MAINTENANCE & UPTIME",     'text' => "Scheduled servicing and health monitoring so failed cameras are found by us, not discovered after an incident."],
        ],
    ],

    /* ---------------------------------------------------------------- 06 */
    'electronic-security-systems' => [
        'name'  => "Electronic Security Systems",
        'icon'  => "ri-cpu-line",
        'image' => "assets/images/security-action-5.png",

        'banner_heading_html' => "INTEGRATED SYSTEMS<br>THAT <span>WORK TOGETHER</span>",
        'banner_text'         => "Intruder alarms, perimeter detection, fire and life-safety interfaces and building integration — specified, installed, certified and maintained by one accountable team.",

        'intro_sub'          => "WHAT WE DO",
        'intro_heading_html' => "ONE PLATFORM —<br><span>NOT FIVE DISCONNECTED BOXES</span>",
        'intro_p1'           => "Most sites accumulate security technology one purchase at a time, and end up with alarms, cameras and door controllers that cannot talk to each other. We design integrated systems where a detection event automatically calls up the right camera, locks the right door and reaches the right person.",
        'intro_p2'           => "Every installation is commissioned, documented and certified, then connected to our alarm receiving centre for verified response. Maintenance contracts include scheduled servicing, remote health checks and a guaranteed engineer attendance window.",
        'features'           => [
            "Intruder alarm design and certification",
            "Perimeter and external detection systems",
            "Fire and life-safety system interfacing",
            "Building management system integration",
            "Alarm receiving centre connection",
            "Planned maintenance with response SLAs",
        ],

        'adv_sub'          => "SERVICE ADVANTAGES",
        'adv_heading_html' => "TECHNOLOGY <span>ADVANTAGES</span>",
        'adv_desc'         => "Specified against your risk register, installed to standard, and maintained by the same people who designed it.",
        'adv_items'        => [
            ['icon' => "ri-alarm-warning-line", 'title' => "INTRUDER ALARM SYSTEMS", 'text' => "Graded intruder detection designed to the risk and certified on completion, with verified signalling to our receiving centre."],
            ['icon' => "ri-radar-line",         'title' => "PERIMETER DETECTION",    'text' => "Beams, fence sensors and thermal analytics that catch an approach at the boundary rather than at the front door."],
            ['icon' => "ri-fire-line",          'title' => "FIRE SYSTEM INTERFACE",  'text' => "Life-safety integration so alarm activation releases the right doors and routes the right people, without defeating security."],
            ['icon' => "ri-building-2-line",    'title' => "BMS INTEGRATION",        'text' => "Security tied into lighting, HVAC and building management so out-of-hours activity triggers a coordinated response."],
            ['icon' => "ri-signal-tower-line",  'title' => "ALARM RECEIVING CENTRE", 'text' => "Signals land with operators who verify before escalating — cutting false call-outs and keeping police response credible."],
            ['icon' => "ri-tools-line",         'title' => "SERVICE & MAINTENANCE",  'text' => "Planned preventative servicing, remote diagnostics and contracted engineer attendance times on every supported system."],
        ],
    ],

    /* ---------------------------------------------------------------- 07 */
    'access-control-screening' => [
        'name'  => "Access Control & Screening",
        'icon'  => "ri-lock-password-line",
        'image' => "assets/images/who-we-are.png",

        'banner_heading_html' => "THE RIGHT PEOPLE IN.<br>EVERYONE ELSE <span>OUT</span>.",
        'banner_text'         => "Credential control, biometric entry, turnstile management and physical screening — so who is inside your building at any moment is a fact you can prove, not an assumption.",

        'intro_sub'          => "WHAT WE DO",
        'intro_heading_html' => "CONTROLLED ENTRY —<br><span>WITH A FULL AUDIT TRAIL</span>",
        'intro_p1'           => "Access control fails at the edges: propped doors, shared passes, tailgating and leavers who still hold live credentials. We design entry systems around those real failure points, then staff them so the technology is actually enforced rather than politely ignored.",
        'intro_p2'           => "Card, mobile and biometric credentials are managed against your HR joiners-and-leavers process, with zone permissions, time profiles and anti-passback configured to your operating pattern. Every movement is logged and reportable on demand.",
        'features'           => [
            "Card, mobile and biometric credentialing",
            "Turnstile, speed gate and door controller setup",
            "Anti-tailgating and anti-passback enforcement",
            "Bag search and walkthrough screening points",
            "Zone and time-profile permission management",
            "Full audit trail and occupancy reporting",
        ],

        'adv_sub'          => "SERVICE ADVANTAGES",
        'adv_heading_html' => "ACCESS <span>ADVANTAGES</span>",
        'adv_desc'         => "Technology and officers deployed together, because an unmanned barrier is only ever a suggestion.",
        'adv_items'        => [
            ['icon' => "ri-key-2-line",          'title' => "CREDENTIAL MANAGEMENT",    'text' => "Card, fob, mobile and biometric identities issued, amended and revoked in step with your joiners and leavers process."],
            ['icon' => "ri-door-lock-line",      'title' => "TURNSTILES & SPEED GATES", 'text' => "Physical entry lines specified for your throughput, with officers positioned to handle exceptions rather than block the flow."],
            ['icon' => "ri-user-search-line",    'title' => "SCREENING & BAG SEARCH",   'text' => "Trained officers conducting proportionate search and walkthrough screening at entry points, delivered courteously and consistently."],
            ['icon' => "ri-shield-keyhole-line", 'title' => "ANTI-TAILGATING CONTROL",  'text' => "Detection and enforcement on the single most common breach route — the person who walks in behind a valid pass."],
            ['icon' => "ri-time-line",           'title' => "ZONE & TIME PROFILES",     'text' => "Permissions mapped to role, area and shift pattern, so contractor and out-of-hours access is bounded by design."],
            ['icon' => "ri-file-list-3-line",    'title' => "AUDIT & OCCUPANCY DATA",   'text' => "Live occupancy for fire roll-call and a complete searchable movement history for any investigation or dispute."],
        ],
    ],

    /* ---------------------------------------------------------------- 08 */
    'reception-visitor-management' => [
        'name'  => "Reception & Visitor Management",
        'icon'  => "ri-building-4-line",
        'image' => "assets/images/security-action-1.png",

        'banner_heading_html' => "A FRONT DESK THAT<br><span>WELCOMES</span> AND SCREENS",
        'banner_text'         => "Corporate reception delivered by security-trained front-of-house officers. Professional first impression, disciplined visitor control, and a building that knows exactly who is in it.",

        'intro_sub'          => "WHAT WE DO",
        'intro_heading_html' => "FRONT OF HOUSE —<br><span>WITH SECURITY BEHIND IT</span>",
        'intro_p1'           => "Your reception is simultaneously the first thing a client sees and the single busiest breach point in the building. Our front-of-house officers are recruited for presentation and communication, then trained to the same security standard as every other officer on the contract.",
        'intro_p2'           => "Visitors are pre-registered, verified on arrival, badged, host-notified and signed out — with contractor permits, induction records and fire roll-call all handled from the same desk. Post, deliveries and meeting-room support are covered as standard.",
        'features'           => [
            "Security-trained corporate receptionists",
            "Pre-registration and host notification",
            "Photo badging and visitor sign-out control",
            "Contractor permit and induction handling",
            "Post, courier and delivery management",
            "Live fire roll-call and evacuation lists",
        ],

        'adv_sub'          => "SERVICE ADVANTAGES",
        'adv_heading_html' => "RECEPTION <span>ADVANTAGES</span>",
        'adv_desc'         => "One team covering hospitality and security, so the welcome never comes at the cost of the control.",
        'adv_items'        => [
            ['icon' => "ri-user-smile-line",     'title' => "CORPORATE FRONT OF HOUSE", 'text' => "Presentable, articulate officers who represent your brand at the door while quietly enforcing your entry policy."],
            ['icon' => "ri-id-card-line",        'title' => "VISITOR REGISTRATION",     'text' => "Pre-booked arrivals, identity verification, photo badging and automatic host notification from a single desk workflow."],
            ['icon' => "ri-hammer-line",         'title' => "CONTRACTOR CONTROL",       'text' => "Permits to work, induction records and escorted access so third parties never move unsupervised through your building."],
            ['icon' => "ri-mail-open-line",      'title' => "POST & DELIVERY HANDLING", 'text' => "Couriers received, screened and logged, with suspicious-package procedure briefed and rehearsed for the desk team."],
            ['icon' => "ri-calendar-check-line", 'title' => "MEETING ROOM SUPPORT",     'text' => "Room readiness, guest hospitality and AV liaison handled alongside the security duties, not instead of them."],
            ['icon' => "ri-group-2-line",        'title' => "LIVE ROLL-CALL DATA",      'text' => "An accurate, current list of everyone in the building — the difference between an orderly evacuation and a headcount guess."],
        ],
    ],

    /* ---------------------------------------------------------------- 09 */
    'bulletproof-vehicle-services' => [
        'name'  => "Bulletproof Vehicle Services",
        'icon'  => "ri-shield-flash-line",
        'image' => "assets/images/security-action-2.png",

        'banner_heading_html' => "ARMOURED VEHICLES AND<br><span>DRIVERS TRAINED</span> TO USE THEM",
        'banner_text'         => "Certified B4 to B7 armoured vehicles with security-trained chauffeurs. Supplied for a single movement or a permanent fleet, maintained and certified throughout.",

        'intro_sub'          => "WHAT WE DO",
        'intro_heading_html' => "THE VEHICLE IS ONE HALF —<br><span>THE DRIVER IS THE OTHER</span>",
        'intro_p1'           => "An armoured car driven without evasive training is an expensive saloon. We supply certified protection-level vehicles together with chauffeurs trained in defensive and evasive driving, embus and debus procedure, and route discipline.",
        'intro_p2'           => "Vehicles are supplied to recognised ballistic protection standards with certification documented, and maintained on a schedule that accounts for the additional load armouring places on brakes, suspension and tyres. Short-term hire and long-term fleet management are both available.",
        'features'           => [
            "Certified B4 to B7 ballistic protection levels",
            "Evasive and defensive trained chauffeurs",
            "Run-flat tyres and reinforced suspension",
            "Short-term hire or managed fleet supply",
            "Discreet, unmarked civilian appearance",
            "Scheduled armour-rated maintenance regime",
        ],

        'adv_sub'          => "SERVICE ADVANTAGES",
        'adv_heading_html' => "VEHICLE <span>ADVANTAGES</span>",
        'adv_desc'         => "Specified against a real threat assessment rather than a catalogue, and supported for the life of the deployment.",
        'adv_items'        => [
            ['icon' => "ri-shield-flash-line",      'title' => "CERTIFIED ARMOURED FLEET", 'text' => "Vehicles supplied to documented ballistic and blast protection levels, matched to the threat assessment for your principal."],
            ['icon' => "ri-steering-2-line",        'title' => "SECURITY TRAINED DRIVERS", 'text' => "Chauffeurs qualified in evasive and defensive driving, anti-ambush procedure and correct embus and debus discipline."],
            ['icon' => "ri-eye-off-line",           'title' => "DISCREET PROFILE",         'text' => "Standard civilian bodywork and plating, so the protection is invisible from the pavement and attracts no attention."],
            ['icon' => "ri-calendar-schedule-line", 'title' => "HIRE OR FULL FLEET",       'text' => "A single airport transfer, a week of meetings, or a permanently based vehicle with a dedicated assigned driver."],
            ['icon' => "ri-tools-line",             'title' => "ARMOUR-RATED SERVICING",   'text' => "Maintenance intervals adjusted for armoured mass, with brakes, tyres and suspension inspected on a shortened cycle."],
            ['icon' => "ri-global-line",            'title' => "MULTI-CITY AVAILABILITY",  'text' => "Coordinated vehicle and driver provision across locations, so protection does not stop at the city boundary."],
        ],
    ],

    /* ---------------------------------------------------------------- 10 */
    'consultancy-risk-assessment' => [
        'name'  => "Consultancy & Risk Assessment",
        'icon'  => "ri-file-shield-line",
        'image' => "assets/images/about-s-img.png",

        'banner_heading_html' => "KNOW YOUR RISK<br>BEFORE YOU <span>BUY SECURITY</span>",
        'banner_text'         => "Independent surveys, threat assessments, penetration testing and written security strategy. Advice that tells you what to stop paying for as readily as what to add.",

        'intro_sub'          => "WHAT WE DO",
        'intro_heading_html' => "EVIDENCE FIRST —<br><span>SPEND SECOND</span>",
        'intro_p1'           => "Most security budgets are shaped by history rather than evidence. Our consultants survey the site, test the assumptions, and produce a written risk register that ranks threats by likelihood and impact — then map existing controls against it to show where you are over- and under-protected.",
        'intro_p2'           => "Deliverables are practical: a prioritised recommendation schedule with indicative costs, policy and procedure documentation, and an implementation roadmap your team can execute with or without us. Where we are not the right supplier for a recommendation, we will say so.",
        'features'           => [
            "Independent physical security surveys",
            "Threat, vulnerability and impact assessment",
            "Covert penetration and tailgating testing",
            "Policy, procedure and SOP authorship",
            "Business continuity and crisis planning",
            "Prioritised, costed recommendation schedules",
        ],

        'adv_sub'          => "SERVICE ADVANTAGES",
        'adv_heading_html' => "CONSULTANCY <span>ADVANTAGES</span>",
        'adv_desc'         => "Written for the board as readily as the facilities team — clear findings, ranked priorities, realistic costs.",
        'adv_items'        => [
            ['icon' => "ri-search-eye-line",  'title' => "SECURITY SURVEYS",        'text' => "A structured physical inspection of perimeter, entry, internal zones and procedure, documented with photographic evidence."],
            ['icon' => "ri-file-shield-line", 'title' => "THREAT & RISK REGISTERS", 'text' => "Threats ranked by likelihood and impact, with existing controls mapped so gaps and duplicated spend both become visible."],
            ['icon' => "ri-spy-line",         'title' => "PENETRATION TESTING",     'text' => "Authorised covert attempts at tailgating, social engineering and out-of-hours access that test procedure as it is actually followed."],
            ['icon' => "ri-book-open-line",   'title' => "POLICY & SOP WRITING",    'text' => "Assignment instructions, escalation procedures and security policy written in language your staff will actually use."],
            ['icon' => "ri-restart-line",     'title' => "CONTINUITY PLANNING",     'text' => "Crisis response and business continuity plans covering the incidents most likely to interrupt your specific operation."],
            ['icon' => "ri-price-tag-3-line", 'title' => "COSTED ROADMAPS",         'text' => "Recommendations sequenced by priority with indicative budget, so improvements can be phased against real funding cycles."],
        ],
    ],
];

/**
 * Escape a plain-text value for safe HTML output.
 */
if (!function_exists('e')) {
    function e($value)
    {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    }
}

/**
 * Slug of the first service — used wherever a general "Services" target is needed.
 */
if (!function_exists('first_service_slug')) {
    function first_service_slug()
    {
        global $services;
        return array_key_first($services);
    }
}
