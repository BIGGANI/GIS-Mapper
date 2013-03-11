<?php
ini_set ( 'max_execution_time', 1200);
$main=array(" ","'");
$replace=array("space","comma");
if($indiname=="No. of Facility"){
include ("_digi_dist_no_of_faci.php");
}
else if ($indiname=="No. of physicians"){
	include("_digi_dist_no_of_physi.php");
}
else if ($indiname=="Total Staff"){
	include("_digi_dist_total_stf.php");
}
else if ($indiname=="Class I Staff"){
	include("_digi_dist_cls1_stf.php");
}
else if ($indiname=="Class II Staff"){
	include("_digi_dist_cls2_stf.php");
}
else if ($indiname=="Class III Staff"){
	include("_digi_dist_cls3_stf.php");
}
else if ($indiname=="Class IV Staff"){
	include("_digi_dist_cls4_stf.php");
}
else if ($indiname=="No. of Nurses"){
	include("_digi_dist_no_nurses.php");
}
else{
	echo "Please Select an Indicator";
}
?>