<?php
session_start();
include_once ('vendor/autoload.php');
//require_once("Src/dbcontroller.php");
$batteriesObject = new Metro\Products\Batteries();

//$db_handle = new DBController();
//$query ="SELECT * FROM tbl_batteries";
//$results = $db_handle->runQuery($query);

//$makeLists = $batteriesObject->getMakeList();

?>

<?php require_once("header.php"); ?>

<!-- Content  -->
<div id="pageContent">
    <!-- Under Slider Banner -->

    <!-- Block -->
    <div class="block">
        <div class="container">
            <div class="row">

              <!--step 2 start-->

                    <div id="step2" class="col-md-9">
                        <div class="vertical-tab-container" id="tabForm">

                            <div class="vertical-tab">
                                <!-- Tires section -->
                                <div class="vertical-tab-content active">
                                    <?php
                                    //require_once("Src/debug.php");
                                    if(isset($_REQUEST['btnsubmitstep1']) || isset($_REQUEST['preStep2'])){ //check if form was submitted
                                        ?>

                                        <a href="index.php"><input type="button" name="preStep1" id="preStep1" class="" value="Previous Step"/></a>
                                        <br><br>

                                        <p>Step 2 of 3</p>
                                        <h4>Okay, great! Here are the batteries that suit your car.</h4>

                                            <?php    $make = $_POST['vMake']; //get input text
                                            $_SESSION['make'] = $make;
                                            $model = $_POST['vModel']; //get input text
                                            $_SESSION['model'] = $model;
                                            $year = $_POST['vYear']; //get input text
                                            $_SESSION['year'] = $year;
                                            $variant = $_POST['vVariant']; //get input text
                                            $_SESSION['vVariant'] = $variant;


                                            ?>

                                            <div class="youChose">
                                                <b>You chose:</b> <br>
                                                Make Name: <b> <?php echo $make; ?></b> <br>
                                                Model: <b> <?php echo $model; ?></b><br>
                                                Year: <b> <?php echo $year; ?></b> <br>
                                                Variant: <b> <?php echo $variant; ?></b>

                                            </div>
                                            <br>
                                            <p><i>All prices include battery delivery, installation and recycling of your old battery</i></p>
                                           <?php
                                           $getBatteriesTypeInfo = $batteriesObject->assign($_REQUEST)->getBatteriesTypeInfo();


                                           if(isset($getBatteriesTypeInfo)){
                                               foreach ($getBatteriesTypeInfo as $getType){ ?>
                                                   <form id="tab1-form" method="post" action="step3.php">

                                                   <h4><?php echo $getType['vehicleType']; ?></h4>
                                                   <div class="row youChose">
                                                       <div class="col-md-4">
                                                           <div class="contact-info">
                                                               <h5>Type</h5>
                                                               <?php echo $getType['vehicleType']; ?>
                                                           </div>
                                                       </div>
                                                       <div class="col-md-4">
                                                           <div class="contact-info">
                                                               <h5>CCA Rating</h5>
                                                               <?php echo $getType['ccaRating'];?>
                                                           </div>
                                                       </div>
                                                       <div class="col-md-4">
                                                           <div class="contact-info">
                                                               <h5>Warranty</h5>
                                                               <?php echo $getType['warranty'];?>Year
                                                           </div>
                                                       </div>

                                                       <div class="col-sm-4">
                                                           <div class="contact-info">
                                                               <h5>Part Number</h5>
                                                               <?php echo $getType['partNumber'];?>
                                                           </div>
                                                       </div>
                                                       <div class="col-sm-4">
                                                           <div class="contact-info">
                                                               <h5>Price</h5>
                                                               $<?php echo $getType['price'];?>
                                                           </div>
                                                       </div>
                                                   </div>
                                                       <input type="hidden" name="vehicleType" value="<?php echo $getType['vehicleType']; ?>">
                                                       <input type="hidden" name="ccaRating" value="<?php echo $getType['ccaRating']; ?>">
                                                       <input type="hidden" name="warranty" value="<?php echo $getType['warranty']; ?>">
                                                       <input type="hidden" name="partNumber" value="<?php echo $getType['partNumber']; ?>">
                                                       <input type="hidden" name="price" value="<?php echo $getType['price']; ?>">
                                                     <input type="hidden" name="productId" value="<?php echo $getType['uId']; ?>">
                                                       <br>
                                                       <input type="submit" name="btnsubmitstep2"  class="btn btn-block"  value="Book an appointment for this battery"/>
                                                   <br><br>
                                                   </form>
                                          <?php     }
                                           }else{
                                               echo 'error';
                                           }

                                           ?>

                                            <br><br>



                                    <?php }else{
                                        echo "Plz fillup step 1 first <br>";
                                        echo '<a href="index.php">goto step 1</a>';
                                    } ?>

                                </div>




                            </div>
                        </div>
                    </div>

                <!-- step 2 end-->

                
            </div>
        </div>
    </div>

</div>
<!-- // Content  -->

<?php require_once("footer.php"); ?>
