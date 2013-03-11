<?php
if(isset($_SESSION['indi']) && isset($_SESSION['indi_color']) && isset($_SESSION['indi_color2']))
{
	$indi=$_SESSION['indi'];
	$indi_color=$_SESSION['indi_color'];
	$indi_color2=$_SESSION['indi_color2'];
	//$perc=$_SESSION['perc'];
//$indicator_q=mysql_query("Select * from indicator where indi_id='$indi'");	
//$indicator_qr=mysql_fetch_object($indicator_q);
//$indiname=$indicator_qr->indi_name;
$indiname=$indi;
if(isset($layer)){
if($layer=="" || $layer=="div"){
	$here="Bangladesh";
	include ("_digi_divlayer.php");
}
else if ($layer=="dist"){
		$here_q=mysql_query("Select * FROM divisions WHERE division_id='$page'");
	$here_qr=mysql_fetch_object($here_q);
	$here=$here_qr->name." Division";
	include("_digi_distlayer.php");
}
else if ($layer=="upz"){
		$here_q=mysql_query("Select *, dist.name as distname, divi.name as diviname FROM districts dist
JOIN divisions divi
ON dist.division_id=divi.division_id
WHERE dist.district_id='$page'");
	$here_qr=mysql_fetch_object($here_q);
	$here=$here_qr->diviname." Division >> ".$here_qr->distname." District";
	include("_digi_upzlayer.php");
}

}
}

else{
	$divO=.7;
	$divColor_dflt="006600";
}

$shadowColor="FFFFFF";
$borderColor="FFFFFF";
?>