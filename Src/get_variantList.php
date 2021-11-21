<?php
session_start();
include_once ('Products/Batteries.php');
$variantObj = new Metro\Products\Batteries();

$_POST['vMake'] = $_SESSION['vMake'];
$_POST['vModel'] = $_SESSION['vModel'];
$variantList = $variantObj ->assign($_POST)->getVariantList();
?>
    <option value="">To finish, the variant</option>
<?php
	foreach($variantList as $vVariant) {
        $_SESSION['vYear'] = $_POST['vYear'];
?>
	<option value="<?php echo $vVariant["vehicleVariant"]; ?>"><?php echo $vVariant["vehicleVariant"]; ?></option>
<?php } ?>


