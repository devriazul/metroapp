<?php
session_start();
include_once ('vendor/autoload.php');
$batteriesObject = new Metro\Products\Batteries();

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="html 5 template">
    <meta name="author" content="tonytemplates.com">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="favicon.ico">
    <title>Metro Batteries-Book Appointment Step-3</title>
    <!-- Bootstrap core CSS -->
    <link href="css/plugins/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/bootstrap-submenu.css" rel="stylesheet">
    <link href="css/plugins/animate.min.css" rel="stylesheet">
    <link href="css/plugins/slick.css" rel="stylesheet">
    <link href="css/plugins/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <![endif]-->
    <!-- Icon Font-->
    <link href="iconfont/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:100,100i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <style>
        .youChose{border:1px solid #cdcdcd; padding: 10px; background-color: #ffffff; border-radius: 5px; }
        .vertical-tab-container{background: none !important; background-color: #E1E1E1 !important;}
    </style>

    <!-- Google map -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
</head>

<body class="home">
<!-- Loader -->
<div id="loader-wrapper">
    <div class="loader">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="loader-circle-1">
            <div class="loader-circle-2"></div>
        </div>
        <div class="needle"></div>
        <div class="loading">Loading</div>
    </div>
</div>
<!-- //Loader -->
<!-- Header -->
<header class="page-header header-sticky">
    <nav class="navbar" id="slide-nav">
        <div class="container">
            <div class="header-info-mobile">
                <div class="header-info-mobile-inside">
                    <p><i class="icon icon-locate"></i>2605 Caton Hill Road, Woodbridge, VA 22192</p>
                    <p><i class="icon icon-phone"></i>1-800-123-4567, Fax: 123-456-7890</p>
                    <p><i class="icon icon-clock"></i>Mon-Sat: 7:00 am – 6:00 pm</p>
                    <p><i class="icon icon-email"></i><a href="mailto:officeone@youremail.com">officeone@youremail.com</a></p>
                </div>
            </div>
            <div class="header-row">
                <div class="header-info-toggle"><i class="icon-arrow_down js-info-toggle"></i></div>
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
                </div>
                <div class="header-right">
                    <button type="button" class="navbar-toggle"><i class="icon icon-lines-menu"></i></button>
                    <div class="header-right-top">
                        <div class="address">
                            Monday-Saturday <span class="custom-color">7:00AM - 6:00PM</span>
                        </div>
                        <a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i class="icon-shape icon"></i><span>Appointment</span></a>
                    </div>
                    <div class="header-right-bottom">
                        <div class="header-phone"><span class="text">SCHEDULE YOUR APPOINTMENT TODAY</span><span class="phone-number">1-<span class="code">800</span>-123-4567</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slidemenu">
                <div class="row">
                    <div class="col-md-11">
                        <div class="close-menu"><i class="icon-close-cross"></i></div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php"><span>Home</span></a></li>
                            <li><a href="about.html"><span>About Us</span></a></li>
                            <li class="dropdown">
                                <a href="services.html" data-toggle="dropdown" data-submenu=""><span>Services</span><span class="ecaret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="services-1.html">Preventative Maintenance</a></li>
                                    <li><a href="services-2.html">Brake Repair & Service</a></li>
                                    <li><a href="services-3.html">Transmission Service & Repair</a></li>
                                    <li><a href="services-4.html">Tires & Wheels</a></li>
                                    <li><a href="services-5.html">Engine Services</a></li>
                                    <li><a href="services-6.html">Exhaust System</a></li>
                                </ul>
                            </li>
                            <li><a href="coupon.html"><span>Pricing & Coupons</span></a></li>
                            <li class="dropdown">
                                <a href="blog.html" data-toggle="dropdown" data-submenu=""><span>Blog</span><span class="ecaret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="blog.html">Blog Classic</a></li>
                                    <li><a href="blog-card.html">Blog Post Card</a></li>
                                    <li><a href="blog-single.html">Blog Single post</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery.html"><span>Gallery</span></a></li>
                            <li><a href="testimonials.html"><span>Testimonials</span></a></li>
                            <li><a href="faq.html"><span>FAQ</span></a></li>
                            <li><a href="shop.html"><span>Shop</span></a></li>
                            <li><a href="contact.html"><span>Contacts</span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-1">
                        <div class="search-container">
                            <input placeholder="search" type="text">
                            <a class="button">
                                <i class="icon icon-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- // Header -->
<!-- Slider -->
<div id="mainSliderWrapper" style="height: 300px !important;">
    <div id="mainSlider" >

        <div class="slide" style="height: 200px !important;">
            <div class="img--holder" style="background-image: url(images/slider/slide3.jpg);"></div>

        </div>
    </div>
</div>
<!-- Slider -->
<!-- Content  -->
<div id="pageContent">
    <!-- Under Slider Banner -->

    <!-- Block -->
    <div class="block">
        <div class="container">
            <div class="row">


                <!-- step 3 start -->

                    <div id="step3" class="col-md-9">
                        <div class="vertical-tab-container" id="tabForm">

                            <div class="vertical-tab">
                                <!-- Tires section -->
                                <div class="vertical-tab-content active">

                                    <h4>Now, You can add product/batteries here.</h4>
                                    <form id="tab1-form" method="post" action="_store.php">

                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="input-wrapper">
                                                    <label for="VehicleRegistrationNumber">Vehicle Make <span class="required">*</span></label>
                                                    <input type="text" class="input-custom input-full" name="vMake" placeholder="e.g. ALFA ROMEO" required>
                                                </div>
                                                <div class="input-wrapper">
                                                    <label for="AppointmentAddress">Vehicle Model <span class="required">*</span></label>
                                                    <input type="text" class="input-custom input-full" name="vModel" placeholder="e.g. 90" required>
                                                </div>
                                                <div class="input-wrapper">
                                                    <label for="AppointmentDate">Vehicle Year <span class="required">*</span></label>
                                                    <input type="text" class="input-custom input-full" name="vYear" placeholder="e.g. 1985 to 1988" required>
                                                </div>
                                                <div class="input-wrapper">
                                                    <label for="firstName">Vehicle Variant <span class="required">*</span></label>
                                                    <input type="text" class="input-custom input-full" name="vVariant" placeholder="e.g. .5,Petrol" required>
                                                </div>
                                                <div class="input-wrapper">
                                                    <label for="firstName">Vehicle Type <span class="required">*</span></label>
                                                    <div class="select-wrapper">
                                                        <select  name="vType" class="input-custom" required>
                                                            <option value="">Select Vehicle Type</option>
                                                            <option value="Extra Heavy Duty">Extra Heavy Duty</option>
                                                            <option value="Heavy Duty">Heavy Duty</option>
                                                            <option value="AGM">AGM</option>
                                                            <option value="Premium">Premium</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="input-wrapper">
                                                    <label for="ccaRating">CCA Rating <span class="required">*</span></label>
                                                    <input type="text" class="input-custom input-full" name="ccaRating" placeholder="e.g. 600" required>
                                                </div>

                                                <div class="input-wrapper">
                                                    <label for="partNumber">Part Number</label>
                                                    <input type="text" class="input-custom input-full" name="partNumber" placeholder="e.g. 5526" required>
                                                </div>

                                                <div class="input-wrapper">
                                                    <label for="warranty">Warranty</label>
                                                    <div class="select-wrapper">
                                                        <select  name="warranty" class="input-custom" required>
                                                            <option value="">Select Warranty</option>
                                                            <option value="1">1 Year</option>
                                                            <option value="2">2 Year</option>
                                                            <option value="3">3 Year</option>
                                                            <option value="4">4 Year</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-wrapper">
                                                    <label for="price">Price <span class="required">*</span></label>
                                                    <input type="text" class="input-custom input-full" name="price" placeholder="e.g. 399" required>
                                                </div>
                                                <div class="input-wrapper">
                                                    <label for="comment">Comment <span class="required">*</span></label>
                                                    <input type="text" class="input-custom input-full" name="comment" placeholder="e.g. Battery is good!" required>
                                                </div>
                                            </div>
                                        </div>

                                        <input type="submit" name="store_product"  class="btn btn-success"  value="Add a Battery"/>
                                    </form>

                                </div>

                                <!-- Tires section -->


                            </div>
                        </div>
                    </div>


                <!-- step 3 end -->




                <div class="divider-lg visible-sm visible-xs"></div>

                <!--right sidebar start-->
                <div class="col-md-3">
                    <h5 class="text-center-md">How to Add a product</h5>

                    <ul class="marker-list-sm column-sm-2">
                        <li>24 Month / 24,000km Nationwide Warranty</li>
                        <li>ASE Certified Technicians</li>
                        <li>Customer Rewards Program</li>
                        <li>24-Hour Roadside Assistance</li>
                        <li>Courtesy Local Shuttle Service</li>
                        <li>Courtesy Loaner Vehicle</li>
                    </ul>

                </div>
                <!--right sidebar end-->
            </div>
        </div>
    </div>
    <!-- //Block -->
    <!-- How It Works -->

    <!-- //How It Works -->
    <!-- Services Block -->
    <div class="block">
        <div class="container">
            <h2 class="h-lg text-center">Why Choose Certified Service?</h2>
            <p class="info text-center">We partnered with RepairPal to bring you the most sophisticated fair-price estimates </p>
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="text-icon">
                        <div class="icon-wrapper"><span><i class="icon icon-technology"></i><span class="icon-hover"></span></span>
                        </div>
                        <h3 class="title">Estimates</h3>
                        <p class="text">We bring you the most accurate and fair-price service estimates</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="text-icon">
                        <div class="icon-wrapper"><span><i class="icon icon-tool"></i><span class="icon-hover"></span></span>
                        </div>
                        <h3 class="title">Trusted</h3>
                        <p class="text">Trusted Service Centers
                            <br> are certified for high quality
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="text-icon">
                        <div class="icon-wrapper"><span><i class="icon icon-diploma"></i><span class="icon-hover"></span></span>
                        </div>
                        <h3 class="title">Guarantees</h3>
                        <p class="text">Covers parts and labor on qualifying repairs and services for
                            <br>24 months/24,000 miles
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Services Block -->
    <!-- Testimonials Block -->

    <!-- //Testimonials Block -->
    <!-- Statistics Block -->

    <!-- //Statistics Block -->
    <!-- Recalls Block -->

    <!-- //Recalls Block -->
    <!-- Appointment Block -->

    <!-- //Appointment Block -->
</div>
<!-- // Content  -->
<!-- Footer -->
<div class="page-footer">
    <div class="footer-content">
        <div class="footer-col-left">
            <div class="inside">
                <div class="footer-phone">
                    <h2 class="h-phone">Call: <span class="number">1-800-1234567</span></h2>
                </div>
                <div class="contact-info"><i class="icon icon-locate"></i>2605 Caton Hill Road, Woodbridge, VA 22192
                </div>
                <div class="contact-info"><i class="icon icon-clock"></i>Monday-Saturday <span class="color">7:00AM - 6:00PM</span> Sunday Closed
                </div>
                <div class="contact-info"><i class="icon icon-email"></i><a href="mailto:officeone@youremail.com">officeone@youremail.com</a>
                </div>
                <div class="social-links">
                    <ul>
                        <li>
                            <a class="icon icon-facebook-logo" href="#"></a>
                        </li>
                        <li>
                            <a class="icon icon-twitter-logo" href="#"></a>
                        </li>
                        <li>
                            <a class="icon icon-instagram-logo" href="#"></a>
                        </li>
                        <li>
                            <a class="icon icon-google-plus-logo" href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-col-right">
            <div id="footer-map" class="footer-map"></div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">© 2017 Car Repair Services, <span class="clearfix visible-xs"></span>All Rights Reserved</div>
            <div class="footer-bottom-right hidden-xs"><a href="#">Privacy Policy</a></div>
        </div>
    </div>
</div>
<div class="back-to-top"><a href="#top"><span class="icon icon-transport"></span></a></div>
<!-- //Footer -->
<div class="darkout-menu"></div>
<!--Get Form Info-->
<div class="modal modal-info fade" id="tab1Modal">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-9">
                        <h3>The Tires Price</h3>
                    </div>
                    <div class="col-xs-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                <ul class="marker-list-sm marker-list-italic">
                    <li><b>Price:</b> $49.95</li>
                    <li><b>Your discount:</b> -20%</li>
                    <li><b>Total Price:</b> $39.95</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //Get Form Info -->
<!--Get Form Info-->
<div class="modal modal-info fade" id="tab2Modal">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-9">
                        <h3>Oil Change Price</h3>
                    </div>
                    <div class="col-xs-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                <ul class="marker-list-sm marker-list-italic">
                    <li><b>Price:</b> $49.95</li>
                    <li><b>Your discount:</b> -20%</li>
                    <li><b>Total Price:</b> $39.95</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //Get Form Info -->
<!--Get Form Info-->
<div class="modal modal-info fade" id="tab3Modal">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-9">
                        <h3>Batteries Price</h3>
                    </div>
                    <div class="col-xs-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                <ul class="marker-list-sm marker-list-italic">
                    <li><b>Price:</b> $49.95</li>
                    <li><b>Your discount:</b> -20%</li>
                    <li><b>Total Price:</b> $39.95</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //Get Form Info -->
<!--Get Form Info-->
<div class="modal modal-info fade" id="tab4Modal">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-9">
                        <h3>Brakes Price</h3>
                    </div>
                    <div class="col-xs-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                <ul class="marker-list-sm marker-list-italic">
                    <li><b>Price:</b> $49.95</li>
                    <li><b>Your discount:</b> -20%</li>
                    <li><b>Total Price:</b> $39.95</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //Get Form Info -->
<!--Get Form Info-->
<div class="modal modal-info fade" id="tab5Modal">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-9">
                        <h3>Aligment Price</h3>
                    </div>
                    <div class="col-xs-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                <ul class="marker-list-sm marker-list-italic">
                    <li><b>Price:</b> $49.95</li>
                    <li><b>Your discount:</b> -20%</li>
                    <li><b>Total Price:</b> $39.95</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //Get Form Info -->
<!--Get Recalls-->
<div class="modal modal-info fade" id="getRecallsModal">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-9">
                        <h3>Recalls, Investigations & Complaints</h3>
                    </div>
                    <div class="col-xs-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                <ul class="marker-list-sm marker-list-italic">
                    <li>Lorem ipsum dolor sit amet, consectetur</li>
                    <li>Repellendus alias unde tempore assumenda fugiat</li>
                    <li>Blanditiis impedit repellat, quos minus dolorem autem</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //Get Recalls -->
<!-- Appointment Form -->
<div class="modal fade" id="appointmentForm">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header"><a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i class="icon-shape icon"></i><span>Appointment</span></a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <h2>Schedule <span class="color">Auto Service</span></h2>
                    <p>To schedule an appointment with your friendly neighborhood experts at Car Repair Services, give us a call at 1-800-123-4567 or fill out the form below with your information and requested services. One of our team members will get back to you as soon as possible to confirm your appointment. </p>
                    <div class="divider"></div>
                    <form id="appointment-form" class="contact-form form-horizontal" name="contactform" method="post">
                        <div id="successAppointment" class="successform">
                            <p>Your message was sent successfully!</p>
                        </div>
                        <div id="errorAppointment" class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <h5>Contact information</h5>
                        <div class="form-inline">
                            <div>
                                <input type="text" name="name" class="form-control input-custom" value="" placeholder="First name">
                            </div>
                            <div>
                                <input type="text" name="lastname" class="form-control input-custom" value="" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-inline">
                            <div>
                                <input type="text" name="phone" class="form-control input-custom" value="" placeholder="Phone number">
                            </div>
                            <div>
                                <input type="text" name="email" class="form-control input-custom" value="" placeholder="Your E-mail">
                            </div>
                        </div>
                        <div class="divider"></div>
                        <h5>Appointment details</h5>
                        <div class="form-inline">
                            <div class="datetimepicker-wrap">
                                <input type="text" name="date" class="form-control input-custom datetimepicker" placeholder="">
                            </div>
                            <div class="timepicker-wrap">
                                <input type="text" name="time" class="form-control input-custom timepicker" placeholder="">
                            </div>
                        </div>
                        <div class="form-inline">
                            <div>
                                <input name="autoinfo" type="text" class="form-control input-custom" value="" placeholder="Vehicle Year, Make and Model">
                            </div>
                            <div class="form-inline">
                                <div class="select-wrapper">
                                    <select name="select1" class="input-custom">
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                    </select>
                                </div>
                                <div>
                                    <input name="kilometers" type="text" class="form-control input-custom" value="" placeholder="Current Kilometers">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline">
                            <textarea name="message" class="form-control textarea-custom" placeholder="Service Required"></textarea>
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="col-sm-4 col-md-3 bootstrap-datetimepicker-widget">
                                <button type="submit" id="submit" class="btn btn-lg"><span>SUBMIT</span></button>
                            </div>
                            <div class="divider visible-xs"></div>
                            <div class="col-sm-8 col-md-9">
                                <p><i>Please note that the date and time you requested may not be available. We will contact you to confirm your actual appointment details.</i></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Appointment Form -->

<script>
    function gateAQuote(that) {
        if (that.value == "Get A Quote") {
            document.getElementById("step2").style.display = "block";
            document.getElementById("step1").style.display = "none";
        }else if(that.value == "Previous Step"){
            document.getElementById("step2").style.display = "none";
            document.getElementById("step1").style.display = "block";
        } else {
            document.getElementById("step1").style.display = "none";
        }
    }
</script>

<!-- External JavaScripts -->
<script src="js/jquery.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/plugins/slick.min.js"></script>
<script src="js/plugins/jquery.form.js"></script>
<script src="js/plugins/jquery.validate.min.js"></script>
<script src="js/plugins/moment.js"></script>
<script src="js/plugins/bootstrap-datetimepicker.min.js"></script>
<script src="js/plugins/jquery.waypoints.min.js"></script>
<script src="js/plugins/jquery.countTo.js"></script>
<!-- Custom JavaScripts -->
<script src="js/custom.js"></script>
<script src="js/forms.js"></script>
</body>

</html>
<p><i>All prices include battery delivery, installation and recycling of your old battery</i>
