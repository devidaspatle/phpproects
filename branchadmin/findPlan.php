<?php 
include_once("includes/db_config.php");
 $diagnosisid = $_GET['plan_type'];
////echo "SELECT * FROM zb_investigations_master where  diagnosis_id_id = '".$diagnosisid."' order by id desc";
//die;
$resultInvestigations = mysqli_query($con, "SELECT * FROM zb_investigations_master where  diagnosis_id_id = '".$diagnosisid."' order by id desc");

													 
?>	 <select id="investigations" name="investigations" class="form-control" required>

		<option value="">Select Investigations</option>
         <?php 
		
		while($investigations = mysqli_fetch_array($resultInvestigations))
		{
		?>
		<option value="<?php  echo $investigations['investigations_id'];?>">
			<?php echo $investigations['investigations_name'];?></option>	
		<?php }?>
	</select>