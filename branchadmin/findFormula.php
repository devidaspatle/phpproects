<?php 

include_once("includes/db_config.php");

$formulaid = $_GET['formulaid'];

////echo "SELECT * FROM zb_investigations_master where  diagnosis_id_id = '".$diagnosisid."' order by id desc";

//die;

$resultFormulas = mysqli_query($con, "SELECT * FROM formulas where  id = '".$formulaid."'");

$rowFormulas = mysqli_fetch_array($resultFormulas);

													 

?>	 <input type="text" name="price"  class="form-control" style="width:100px;" value="<?php echo $rowFormulas['formulas_rate'];?>" />