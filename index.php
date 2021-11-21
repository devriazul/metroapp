<?php
session_start();
include_once ('vendor/autoload.php');
require_once("Src/dbcontroller.php");
$batteriesObject = new Metro\Products\Batteries();

$db_handle = new DBController();
$query ="SELECT * FROM tbl_batteries";
$results = $db_handle->runQuery($query);

$makeLists = $batteriesObject->getMakeList();

?>

<?php require_once("header.php"); ?>

	<!-- Content  -->
	<div id="pageContent">
		<!-- Under Slider Banner -->

		<!-- Block -->
		<div class="block">
			<div class="container">
				<div class="row">



                    <!-- step 1 start-->
					<div id="step1" class="col-md-9">

						<div class="vertical-tab-container" id="tabForm">

							<div class="vertical-tab">
								<!-- Tires section -->
								<div class="vertical-tab-content active">							
							<?php 
								if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
									echo $_SESSION['msg'];
									unset($_SESSION['msg']);
								}
								?>
									<p>Step 1 of 3</p>
									<h2>Let's begin! Choose your vehicle.</h2>
									<form id="tab1-form" method="post" action="step2.php">
										<div class="form-group">
											<div class="select-wrapper">
												<select  name="vMake" class="input-custom" onChange="getModel(this.value)" required>
													<option value="">Select the make</option>
                                                    <?php
                                                    foreach($makeLists as $makeList) {
                                                        ?>
                                                        <option value="<?php echo $makeList["vehicleMake"]; ?>"><?php echo $makeList["vehicleMake"]; ?></option>
                                                        <?php
                                                    }
                                                    ?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select id="modelList" name="vModel" class="input-custom" onChange="getYear(this.value)" required>
                                                    <option value="">Select the Model</option>
													<option></option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select id="yearList" name="vYear" class="input-custom" onChange="getVariant(this.value)" required>
													<option value="">Pick the year</option>
													<option></option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<div class="select-wrapper">
												<select id="variantList" name="vVariant" class="input-custom" required>
													<option value="">To finish, the variant</option>
													<option></option>
												</select>
											</div>
										</div>
<!--										<a class="btn btn-lg btn-full" data-toggle="modal" data-target="#tab1Modal"><span>Get A Quote</span></a>-->
                                        <input type="submit" name="btnsubmitstep1"  class="btn btn-success"  value="Get A Quote"/>
                                    </form>
								</div>

								<!-- Tires section -->


							</div>
						</div>

					</div>
                    <!-- step 1 end-->


                </div>
            </div>
        </div>
 
     
    </div>
    <!-- // Content  -->
   

<?php require_once("footer.php"); ?>