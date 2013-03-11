<?php
ini_set ( 'max_execution_time', 1200);
$main=array(" ","'");
$replace=array("space","comma");
if($indiname=="No. of Facility"){
include ("_digi_upz_no_of_faci.php");
}
else if ($indiname=="No. of physicians"){
	include("_digi_upz_no_of_physi.php");
}
else if ($indiname=="Total Staff"){
	include("_digi_upz_total_stf.php");
}
else if ($indiname=="Class I Staff"){
	include("_digi_upz_cls1_stf.php");
}
else if ($indiname=="Class II Staff"){
	include("_digi_upz_cls2_stf.php");
}
else if ($indiname=="Class III Staff"){
	include("_digi_upz_cls3_stf.php");
}
else if ($indiname=="Class IV Staff"){
	include("_digi_upz_cls4_stf.php");
}
else if ($indiname=="No. of Nurses"){
	include("_digi_upz_no_nurses.php");
}
else{
	echo "Please Select an Indicator";
}
?>