<?php include_once ('../vendor/autoload.php'); 
$appointmentObject = new Metro\Products\Batteries();
$appointmentDetails = $appointmentObject->assign($_REQUEST)->getAppointmentDetailsWithProductDetails();
?>
    <?php require_once 'header.php'; ?>

        <?php require_once 'sidebar.php'; ?>

            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div class="header">
                    <h1 class="page-header">
                             Appointment Details
                        </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Appointment</a></li>
                        <li> <a href="newAppointment.php"> New Appointment</a></li> 
                        <li class="active">Appointment Details</li>
                    </ol>

                </div>

                <div id="page-inner">

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Appointment Details
                                </div>
                                <div class="panel-body">
                                    <?php 
                                if(!empty($appointmentDetails)){ ?>

                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="" style="width:60%">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2" style="background-color:#cdcdcd;">Customer Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                            foreach($appointmentDetails as $appointment) { ?>
                                                        <tr class="odd gradeX">
                                                            <td width="50%">Name</td>
                                                            <td>
                                                                <?php echo ucfirst($appointment["firstName"]). " " .ucfirst($appointment['lastName']); ?>
                                                            </td>
                                                        </tr>

                                                        <tr class="odd gradeX">
                                                            <td>Email</td>
                                                            <td>
                                                                <?php echo $appointment["email"]; ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>Phone</td>
                                                            <td>
                                                                <?php echo $appointment["phone"]; ?>
                                                            </td>
                                                        </tr>

                                                        <tr class="odd gradeX">
                                                            <td>Delivary Address</td>
                                                            <td>
                                                                <?php echo 'Street: '.ucfirst($appointment["streetAddress"]); ?>
                                                                    <br>
                                                                    <?php echo 'City: '.ucfirst($appointment["city"]); ?>
                                                            </td>
                                                        </tr>

                                                        <tr class="odd gradeX">
                                                            <td>Appointment Date</td>
                                                            <td>
                                                                <?php echo $appointment["appointmentDate"]; ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>Appointment Time</td>
                                                            <td>
                                                                <?php echo $appointment["appointmentTime"]; ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th colspan="2"></th>
                                                        </tr>

                                                        <tr>
                                                            <th colspan="2" style="background-color:#cdcdcd;">Product Details</th>
                                                        </tr>


                                                        <tr class="odd gradeX">
                                                            <td>Vehicle Name</td>
                                                            <td>
                                                                <?php echo ucfirst($appointment["vehicleMake"]); ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>Vehicle Model</td>
                                                            <td>
                                                                <?php echo ucfirst($appointment["vehicleModel"]); ?>
                                                            </td>
                                                        </tr>

                                                        <tr class="odd gradeX">
                                                            <td>Vehicle Year</td>
                                                            <td>
                                                                <?php echo ucfirst($appointment["vehicleYear"]); ?>
                                                            </td>
                                                        </tr>

                                                        <tr class="odd gradeX">
                                                            <td>Vehicle Variant</td>
                                                            <td>
                                                                <?php echo ucfirst($appointment["vehicleVariant"]); ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>Vehicle Type</td>
                                                            <td>
                                                                <?php echo ucfirst($appointment["vehicleType"]); ?>
                                                            </td>
                                                        </tr>

                                                        <tr class="odd gradeX">
                                                            <td>Vehicle Color</td>
                                                            <td>
                                                                <?php echo ucfirst($appointment["vehicleColor"]); ?>
                                                            </td>
                                                        </tr>

                                                        <tr class="odd gradeX">
                                                            <td>Vehicle Registration Number</td>
                                                            <td>
                                                                <?php echo ucfirst($appointment["vehicleRegNum"]); ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>Batteries CCA Rating </td>
                                                            <td>
                                                                <?php echo ucfirst($appointment["ccaRating"]); ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>Batteries Part Number</td>
                                                            <td>
                                                                <?php echo ucfirst($appointment["partNumber"]); ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>Batteries Warranty</td>
                                                            <td>
                                                                <?php echo ucfirst($appointment["warranty"]).' Year'; ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>Batteries Price</td>
                                                            <td>
                                                                <?php echo '$'.ucfirst($appointment["price"]); ?>
                                                            </td>
                                                        </tr>

                                                        <tr class="odd gradeX">
                                                            <td colspan="2"></td>
                                                           
                                                        </tr>

                                                        <tr class="odd gradeX">
                                                            <td><a href="newAppointment.php" title="Another Appointment">Another Appointment</a></td>
                                                            <td>
                                                                <a href="cretateCustomer.php" >Delivared this Battery</a>
                                                            </td>
                                                        </tr>
                                                        

                                                     
                                                        

                                                                <?php
                                          }
                                        ?>

                                                </tbody>
                                            </table>
                                        </div>

                                        <?php }else {
                                    echo 'data nai';
                                }

                             ?>

                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                    <!-- /. ROW  -->

                </div>

                <!-- Modal -->
                <div class="modal fade" id="showSingleAppointment" tabindex="-1" role="dialog" aria-labelledby="showSingleAppointmentLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="showSingleAppointmentLabel">Appointment Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php require_once 'footer.php'; ?>