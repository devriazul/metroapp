<?php include_once ('../vendor/autoload.php'); 
$appointmentObject = new Metro\Products\Batteries();
$getNewAppointment = $appointmentObject->getAppointmentList();
?>
<?php require_once 'header.php'; ?>

<?php require_once 'sidebar.php'; ?>

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                            New Appointment List
                        </h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Appointment</a></li>
                <li class="active">New Appointment</li>
            </ol>

        </div>

        <div id="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            New Appointment List
                        </div>
                        <div class="panel-body">
                        <?php if(!empty($getNewAppointment)){ ?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                            foreach($getNewAppointment as $newAppointment) { ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $newAppointment["appointmentDate"]; ?></td>
                                                    <td><?php echo $newAppointment["appointmentTime"]; ?></td>
                                                     <td><?php echo ucfirst($newAppointment["firstName"]); ?> <?php echo ucfirst($newAppointment["lastName"]); ?></td>
                                                    <td><?php echo $newAppointment["email"]; ?></td>
                                                    <td><?php echo $newAppointment["phone"]; ?></td>
                                                    <td><?php echo ucfirst($newAppointment["streetAddress"]); ?></td>
                                                    <td>
                                                    <a href="showAppointment.php?aid=<?php echo $newAppointment["aid"]; ?>" class="">Details</a>
                                                    </td>
                                                </tr>                                                       
                                        <?php
                                          }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        <?php }else{ echo 'Appointment table empty';} ?>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <!-- /. ROW  -->

        </div>        



        <?php require_once 'footer.php'; ?>