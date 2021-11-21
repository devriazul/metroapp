<?php
session_start();
include_once ('vendor/autoload.php');
$batteriesObject = new Metro\Products\Batteries();

?>

<?php require_once("header.php"); ?>

<!-- Content  -->
<div id="pageContent">
    <!-- Under Slider Banner -->

    <!-- Block -->
    <div class="block">
        <div class="container">
            <div class="row">

                <!-- step 3 start -->
                <?php
                if(isset($_REQUEST['btnsubmitstep2'])){ //check if form was submitted
                    ?>
                    <div id="step3" class="col-md-9">
                        <div class="vertical-tab-container" id="tabForm">

                            <div class="vertical-tab">
                                <!-- Tires section -->
                                <div class="vertical-tab-content active">
                                    <form id="tab1-form" method="post" action="step2.php">
                                        <input type="hidden" name="vMake" class="btn btn-success" value="<?php echo $_SESSION['make']; ?>" />
                                        <input type="hidden" name="vModel" class="btn btn-success" value="<?php echo $_SESSION['model']; ?>" />
                                        <input type="hidden" name="vYear" class="btn btn-success" value="<?php echo $_SESSION['year']; ?>" />
                                        <input type="hidden" name="vVariant" class="btn btn-success" value="<?php echo $_SESSION['vVariant']; ?>" />
                                        <input type="submit" name="preStep2" id="preStep2" class="" value="Previous Step" />
                                    </form>
                                    <p>Step 3 of 3</p>
                                    <h4>Now, enter the details for your appointment.</h4>
                                    <form id="tab1-form" method="post" action="step4.php">
                                        <?php

                                        $_REQUEST['vMake'] = $_SESSION['make'];

                                        $_REQUEST['vModel'] = $_SESSION['model'];

                                        $_REQUEST['vYear'] =  $_SESSION['year'];

                                        $_REQUEST['vVariant'] = $_SESSION['vVariant'];
                                        $_REQUEST['vehicleType'] = $_POST['vehicleType'];
                                        $_REQUEST['ccaRating'] = $_POST['ccaRating'];
                                        $_REQUEST['warranty'] = $_POST['warranty'];
                                        $_REQUEST['partNumber'] = $_POST['partNumber'];
                                        $_REQUEST['price'] = $_POST['price'];
                                        $_REQUEST['productId'] = $_POST['productId'];

                                        //require_once("Src/debug.php");
                                        ?>

                                            <div class="youChose">
                                                You are booking the following battery:
                                                <br>
                                                <b> Type:  <?php echo $_POST['vehicleType']; ?></b>,
                                                <b> CCA Rating <?php echo $_POST['ccaRating']; ?></b>,
                                                <b> Warranty : <?php echo $_POST['warranty']; ?> Year</b>,
                                                <b> Part Number:  <?php echo $_POST['partNumber']; ?></b>
                                                <br>
                                                <br> Price: <b> $<?php echo $_POST['price']; ?></b>
                                                <br>
                                                <br> For the vehicle
                                                <br>
                                                <b> <?php echo $_SESSION['make']; ?></b>,
                                                <b> <?php echo $_SESSION['model']; ?></b>,
                                                <b> <?php echo $_SESSION['year']; ?></b>,
                                                <b> <?php echo $_SESSION['vVariant']; ?></b>

                                            </div>
                                            <br>
                                            <br>

<div class="row">
    <div class="col-sm-7">
        <div class="input-wrapper">
            <label for="VehicleRegistrationNumber">Vehicle Registration Number <span class="required">*</span></label>
            <input type="text" class="input-custom input-full" name="vehicleRegNum" placeholder="e.g. ARG-12345" required>
        </div>        
    </div>
    <div class="col-sm-5">
        <div class="input-wrapper">
            <label for="vehicleColor">Vehicle Colour <span class="required">*</span></label>
            <input type="text" class="input-custom input-full" name="vehicleColor" placeholder="e.g. Black" required>
        </div>
    </div>

    <div class="col-sm-7">
        <div class="input-wrapper">
            <label for="AppointmentAddress">The appointment address <span class="required">*</span></label>
            <input type="text" class="input-custom input-full" name="streetAddress" placeholder="Street Address e.g. 24 Sample Street" required>
        </div>       
    </div>
    <div class="col-sm-5">
        <div class="input-wrapper">
            <label for="city">Suburb / City</label>
            <input type="text" class="input-custom input-full" name="city" placeholder="e.g. Melbourne" value="Melbourne">
        </div>
    </div>

    <div class="col-sm-7">
        <div class="input-wrapper">
            <label for="AppointmentDate">The date and time for your appointment will be on <span class="required">*</span></label>
            <input type="date" class="input-custom input-full" name="appointmentDate" placeholder="01/01/2019" required>
        </div>       
    </div>
    <div class="col-sm-5">
        <div class="input-wrapper">
            <br>
            <div class="select-wrapper">
                <select name="appointmentTime" class="input-custom" required>
                    <option value="">Select the Time</option>
                    <option value="9:00am to 11:00am">9:00am to 11:00am</option>
                    <option value="9:30am to 11:30am">9:30am to 11:30am</option>
                    <option value="10:00am to 12:00pm">10:00am to 12:00pm</option>
                    <option value="10:30am to 12:30pm">10:30am to 12:30pm</option>
                </select>
            </div>
        </div>
    </div>

    <div class="col-sm-7">
        <div class="input-wrapper">
            <label for="VehicleRegistrationNumber">Vehicle Registration Number <span class="required">*</span></label>
            <input type="text" class="input-custom input-full" name="vehicleRegNum" placeholder="e.g. ARG-12345" required>
        </div>        
    </div>
    <div class="col-sm-5">
        <div class="input-wrapper">
            <label for="vehicleColor">Vehicle Colour <span class="required">*</span></label>
            <input type="text" class="input-custom input-full" name="vehicleColor" placeholder="e.g. Black" required>
        </div>
    </div>

    <div class="col-sm-7">
        <div class="input-wrapper">
            <label for="firstName">First Name <span class="required">*</span></label>
            <input type="text" class="input-custom input-full" name="firstName" placeholder="John" required>
        </div>       
    </div>
    <div class="col-sm-5">
        <div class="input-wrapper">
            <label for="lastName">Last Name <span class="required">*</span></label>
            <input type="text" class="input-custom input-full" name="lastName" placeholder="e.g. Smith" required>
        </div>
    </div>

    <div class="col-sm-7">
        <div class="input-wrapper">
            <label for="email">Email <span class="required">*</span></label>
            <input type="email" class="input-custom input-full" name="email" placeholder="john.smith@gmail.com" required>
        </div>       
    </div>
    <div class="col-sm-5">
        <div class="input-wrapper">
            <label for="phone">Phone <span class="required">*</span></label>
            <input type="text" class="input-custom input-full" name="phone" placeholder="e.g. 0400 000 000" required>
        </div>
    </div>
   
</div>                                            
<p>All prices include battery delivery, installation and recycling of your old battery</p>

 <input type="hidden" name="productId" class="btn btn-success" value="<?php echo $_POST['productId']; ?>" required/>
  <input type="submit" name="btnsubmitstep3" class="btn btn-success" value="Book appointment" />
</form>

                                </div>

                                <!-- Tires section -->

                            </div>
                        </div>
                    </div>
                    <?php }else{
                        header("Location: index.php");
                        } ?>

                        <!-- step 3 end -->

                        <!--                    right sidebar end-->
            </div>
        </div>
    </div>

</div>
<!-- // Content  -->



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

