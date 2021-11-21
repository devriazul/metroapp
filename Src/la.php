<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["courseName"])) {
	$query ="SELECT * FROM trainers WHERE course_name = '" . $_POST["courseName"] . "' AND trainer_level='3' ";
	$results = $db_handle->runQuery($query);
?>
<?php
	foreach($results as $state) {
?>
	<option value="<?php echo $state["unique_id"]; ?>"><?php echo $state["full_name"]; ?></option>
<?php
	}
}
?>