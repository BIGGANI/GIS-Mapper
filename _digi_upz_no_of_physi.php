<?php
$main=array(" ","'");
$replace=array("space","comma");
$divisions_q=mysql_query("SELECT *,COUNT(*) AS cnnt from class_wise
WHERE staff_professional_category=2
AND district_id='$page'
GROUP BY upazilla_id
ORDER BY cnnt ASC");
$div_datalist="";
 //Hash to RGB Converter
 $indi_color_ = ereg_replace("#", "", $indi_color);
 $indi_color2_ = ereg_replace("#", "", $indi_color2);
		$indi_color_F = array();
		$indi_color2_F = array();
 
		if(strlen($indi_color_) == 3 && strlen($indi_color2_) == 3 ) {
			$indi_color_F['r'] = hexdec(substr($indi_color_, 0, 1) . $r);
			$indi_color_F['g'] = hexdec(substr($indi_color_, 1, 1) . $g);
			$indi_color_F['b'] = hexdec(substr($indi_color_, 2, 1) . $b);

			$indi_color2_F['r'] = hexdec(substr($indi_color2_, 0, 1) . $r);
			$indi_color2_F['g'] = hexdec(substr($indi_color2_, 1, 1) . $g);
			$indi_color2_F['b'] = hexdec(substr($indi_color2_, 2, 1) . $b);
		}
		else if(strlen($indi_color_) == 6 && strlen($indi_color2_) == 6 ) {
			$indi_color_F['r'] = hexdec(substr($indi_color_, 0, 2));
			$indi_color_F['g'] = hexdec(substr($indi_color_, 2, 2));
			$indi_color_F['b'] = hexdec(substr($indi_color_, 4, 2));
			
			$indi_color2_F['r'] = hexdec(substr($indi_color2_, 0, 2));
			$indi_color2_F['g'] = hexdec(substr($indi_color2_, 2, 2));
			$indi_color2_F['b'] = hexdec(substr($indi_color2_, 4, 2));
		}
 		else {
			echo "Color Problem";
			}
		$indi_color=$indi_color_F;
		$indi_color2=$indi_color2_F;
//Dynamic Color gen___
$c1 = array($indi_color['r'],$indi_color['g'],$indi_color['b']); // Color 1
$c2 = array($indi_color2['r'],$indi_color2['g'],$indi_color2['b']); // Color 2
$nc = 5; // Number of colors to display.
$dc = array(($c2[0]-$c1[0])/($nc-1),($c2[1]-$c1[1])/($nc-1),($c2[2]-$c1[2])/($nc-1)); // Step between colors


function rgb2hex($rgb) {
   $hex = "";
   $hex .= str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
   $hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
   $hex .= str_pad(dechex($rgb[2]), 2, "0", STR_PAD_LEFT);

   return $hex; // returns the hex value including the number sign (#)
}
$cL= array();
$i=0;
while($i<$nc){
	
    //$c="<div style=\"width:200px;height:50px;background-color:rgb(".round($c1[0]+$dc[0]*$i).",".round($c1[1]+$dc[1]*$i).",".round($c1[2]+$dc[2]*$i).");\">".$i."</div> # ".$c; // Output
	$rc=round($c1[0]+$dc[0]*$i);
	$gc=round($c1[1]+$dc[1]*$i);
	$bc=round($c1[2]+$dc[2]*$i); // Output
		$rgb= array($rc, $gc, $bc);
		$hex = rgb2hex($rgb);
		$color{$i}=$hex;
$i++;
}
//Dynamic Color gen___END
//$cnnt_sort=0;
while($divisions_qr=mysql_fetch_object($divisions_q)){
 //$NoOfFaci=mysql_query("Select * from organization where division_id='$divisions_qr->division_id'");
 $all_NoOfFaci_q=mysql_query("SELECT *,COUNT(*) AS cnnt from class_wise
WHERE staff_professional_category=2
AND district_id='$page'
GROUP BY upazilla_id
ORDER BY cnnt DESC LIMIT 1");
 $all_NoOfFaci_qr=mysql_fetch_object($all_NoOfFaci_q);
 $all_NoOfFaci=$all_NoOfFaci_qr->cnnt;
 
 $distname=$divisions_qr->upzname;
 $distname=str_replace($main,$replace,$distname);
 
 $div=$distname."_div_NoOfFaci";
 ${$div}=$divisions_qr->cnnt;
 
 $divid="div_".$divisions_qr->upazilla_id;
 ${$divid}=$divisions_qr->upazilla_id;
 
 $divOpac=$distname."_div_Opac";
 ${$divOpac_}=(${$div})/$all_NoOfFaci;
 ${$divOpac}=1;
 //${$divOpac}=${$divOpac}/100;
 $percent_data=round(${$divOpac_}*100, 0);
// $bg_color_value=round(${$divOpac}*100, 2);
 $divO=0;
 $divColor=$distname."_divColor";
	if($percent_data>0 && $percent_data<=20){
 ${$divColor}=$color[0];}
 	else if($percent_data>=21 && $percent_data<=40){
 ${$divColor}=$color[1];}
	else if($percent_data>=41 && $percent_data<=60){
 ${$divColor}=$color[2];}
 	else if($percent_data>=61 && $percent_data<=80){
 ${$divColor}=$color[3];}
 	else if($percent_data>=81 && $percent_data<=100){
 ${$divColor}=$color[4];}
 	else { 
	${$divColor}=$color[0];
	//echo "Color Problem";
	}
 $lgnd="
<div style=\"text-align:center; width:100px; height:30px; background-color:#".$color[0]."; color:white;\">1-20%</div>
<div style=\"text-align:center;width:100px; height:30px; background-color:#".$color[1]."; color:white;\">21-40%</div>
<div style=\"text-align:center;width:100px; height:30px; background-color:#".$color[2]."; color:white;\">41-60%</div>
<div style=\"text-align:center;width:100px; height:30px; background-color:#".$color[3]."; color:white;\">61-80%</div>
<div style=\"text-align:center;width:100px; height:30px; background-color:#".$color[4]."; color:white;\">81-100%</div>
<div style=\"text-align:center;width:100px; height:30px; background-color:#000000; color:white;\">No Data(0%)</div><br/>";
$div_datalist="
 	<span style=\"margin-right:4px; border: 2px solid #FFFFFF; height: 15px; width:15px; background-color:#".${$divColor}.";\"> &nbsp; &nbsp;</span>
 <span style=color:#".${$divColor}.";>".$divisions_qr->upzname." Upazila # ".${$div}."</span><br/>".$div_datalist;
 $txt_lgnd="<span style=\"color:#".${$div}.";\">This Map is showing ".$indiname."<br/># ".$here."</span>";
 //$cnnt_sort++;
}
?>