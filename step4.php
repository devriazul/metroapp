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

                <!-- step 4 start -->
                <?php
                if(isset($_REQUEST['btnsubmitstep3'])){ //check if form was submitted
                    ?>
                    <div id="step4" class="col-md-9">
                        <div class="vertical-tab-container" id="tabForm">

                            <div class="vertical-tab">
                                <!-- Tires section -->
                                <div class="vertical-tab-content active">

                                    <?php

                                // require_once("Src/debug.php");

                                    $chkProduct = $batteriesObject->assign($_REQUEST)->chkProduct();

                                    if($chkProduct){
                                        $storeData = $batteriesObject->assign($_REQUEST)->store();
                                        if($storeData){ 
                                            $_SESSION['msg'] = '<p style="color: green;">Successfully Book an appointment. Our Support Team will contact to you quickly...</p>';
                                            header("Location: index.php");
                                            ?>
                                            
                                        <?php }else{ 
                                            $_SESSION['msg'] = '<p style="color: red;">Some data is missing..Please try again</p>';
                                            ?>
                                        <?php }

                                    }else{
                                        echo 'Data nai';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!-- step 4 end -->

            </div>
        </div>
    </div>
    <!-- //Block -->
 
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

<?php require_once("footer.php"); ?>
