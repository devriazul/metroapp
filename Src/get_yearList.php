<?php
session_start();
include_once ('Products/Batteries.php');
$yearObj = new Metro\Products\Batteries();

$_POST['vMake'] = $_SESSION['vMake'];
$yearList = $yearObj ->assign($_POST)->getYearList();
?>
    <option value="">Pick the Year</option>
<?php
	foreach($yearList as $vYear) {
        $_SESSION['vModel'] = $_POST["vModel"];
?>
	<option value="<?php echo $vYear["vehicleYear"]; ?>"><?php echo $vYear["vehicleYear"]; ?></option>
<?php } ?>