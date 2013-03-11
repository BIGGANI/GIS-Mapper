<?php
if($_GET['q']=="hrm"){
?>
	<div>
    <select name="indi">
    <option value="">Select Indicator</option>
    <option value="Class I Staff">Class I Staff</option>
	<option value="Class II Staff">Class II Staff</option>
	<option value="Class III Staff">Class III Staff</option>
	<option value="Class IV Staff">Class IV Staff</option>
	<option value="No. of Nurses">No. of Nurses</option>
	<option value="No. of physicians">No. of physicians</option>
	<option value="Total Staff">Total Staff</option>
    </select>
    </div>
<?	
}
else if($_GET['q']=="oth"){
?>
<div>
    <select name="indi">
    <option value="">Select Data Element</option>
    <option value="No. of Facility">No. of Gov. Health Facility</option>
    </select>
</div>
 <?
}
else { echo "<div> </div>"; }
 ?>