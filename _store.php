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
    <title>Car Repair Services & Auto Mechanic HTML website template</title>
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
        .youChose{border:1px solid #cdcdcd; padding: 10px; background-color: #dddddd; border-radius: 5px; }
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

                <!-- step 4 start -->
                <?php
                if(isset($_REQUEST['store_product'])){ //check if form was submitted
                    ?>
                    <div id="step4" class="col-md-9">
                        <div class="vertical-tab-container" id="tabForm">

                            <div class="vertical-tab">
                                <!-- Tires section -->
                                <div class="vertical-tab-content active">

                                    <?php

                                 require_once("Src/debug.php");


                                    $hasProduct = $batteriesObject->assign($_REQUEST)->hasProduct();

                                    if(!$hasProduct){
                                        $storeData = $batteriesObject->assign($_REQUEST)->productStore();
                                        if($storeData){ ?>
                                            <h6 style="color: green;">Successfully added a product.</h6>
                                            <a href="createProduct.php">Add Another...</a>
                                        <?php }else{ ?>
                                            <h5 style="color: red;">Some data is missing...</h5>
                                            <a href="createProduct.php">Please try again</a>
                                        <?php }

                                    }else{
                                        echo 'This product already added';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }else{
                    echo '<h3>404</h3>';
                    echo '<a href="index.php">Go to Home</a>';
                } ?>

                <!-- step 4 end -->

            </div>
        </div>
    </div>
    <!-- //Block -->
    <!-- How It Works -->


</div>
<!-- // Content  -->
<!-- Footer -->

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
