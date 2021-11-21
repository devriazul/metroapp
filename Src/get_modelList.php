<?php
session_start();
include_once ('Products/Batteries.php');
$modelObj = new Metro\Products\Batteries();

$modelList = $modelObj ->assign($_POST)->getModelList();
?>
    <option value="">Select the Model</option>
<?php
	foreach($modelList as $vModel) {
	    $_SESSION['vMake'] = $_POST["vMake"];
?>
	<option value="<?php echo $vModel["vehicleModel"]; ?>"><?php echo $vModel["vehicleModel"]; ?></option>
<?php
}
?>