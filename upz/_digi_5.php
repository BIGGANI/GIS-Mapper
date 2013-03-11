<div id="mapdiv" style="cursor: crosshair; margin:0px auto; border:0;">
<? if(isset($_SESSION['indi']) && isset($_SESSION['indi_color']))
{ ?>
<div class="mapright" id="lgnd" ><? if(isset($indiname)){ echo $txt_lgnd; }?>
<p>
<?php
if(isset($div_datalist)){
echo $lgnd;
echo $div_datalist;
}
?>
</p>
</div>
<?	} ?>

<img class="map" src="./upz/blnk.jpg" width="700" height="700" usemap="#Jamalpur" border="0" />
<map name="Jamalpur">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Dewanganj_divColor!=""){echo $Dewanganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Dewanganj_div_Opac)){echo $Dewanganj_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Dewanganj Upazila &nbsp; <?
if(isset($Dewanganj_div_NoOfFaci)){ echo $Dewanganj_div_NoOfFaci;}
?>" alt="Dewanganj Upazila" coords="238,73,242,81,246,87,251,95,253,107,255,120,255,130,256,150,255,157,252,166,247,168,239,169,232,169,227,173,222,177,219,184,214,193,212,198,208,207,199,222,200,228,206,228,211,227,216,228,221,232,230,235,241,239,246,239,253,243,259,247,271,254,273,261,276,266,281,266,291,270,296,268,295,260,295,254,297,247,299,242,303,240,310,238,317,232,322,232,327,230,328,224,321,220,317,209,313,195,311,182,306,176,302,164,300,143,299,134,301,126,303,119,307,111,314,109,316,100,317,90,312,85,311,74,306,67,306,63,306,57,307,47,308,34,308,27,305,23,296,18,287,10,278,10,272,13,276,21,279,25,282,32,279,38,277,45,268,50,257,54,243,60,239,64,237,73,241,78,245,85" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Bakshiganj_divColor!=""){echo $Bakshiganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Bakshiganj_div_Opac)){echo $Bakshiganj_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Bakshiganj Upazila &nbsp; <?
if(isset($Bakshiganj_div_NoOfFaci)){ echo $Bakshiganj_div_NoOfFaci;}
?>" alt="Bakshiganj Upazila" coords="301,132,301,126,308,121,310,117,314,115,319,117,326,121,327,124,330,129,335,137,339,141,348,146,347,157,344,164,343,170,347,174,351,175,356,174,363,171,379,171,382,173,389,178,392,186,394,195,390,207,388,221,385,234,382,251,380,256,374,269,370,269,360,267,354,267,346,265,341,258,337,251,334,241,330,234,331,230,329,223,324,216,322,211,321,201,319,201,318,192,315,183,311,179,305,171,305,163,305,149,305,142,304,136,304,128,304,121" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Islampur_divColor!=""){echo $Islampur_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Islampur_div_Opac)){echo $Islampur_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Islampur Upazila &nbsp; <?
if(isset($Islampur_div_NoOfFaci)){ echo $Islampur_div_NoOfFaci;}
?>" alt="Islampur Upazila" coords="200,228,209,230,218,234,226,234,233,237,238,239,248,241,255,244,259,248,264,252,269,258,273,263,278,267,280,270,291,272,299,271,300,264,300,260,300,253,302,249,304,244,312,241,320,238,327,236,330,240,333,248,340,255,342,261,349,265,354,268,364,270,371,271,372,278,372,281,373,289,376,292,376,300,374,308,370,313,362,326,360,332,362,343,364,354,368,365,360,371,351,371,343,370,335,361,325,352,323,343,318,329,314,317,312,308,307,297,298,295,295,295,289,306,281,317,273,328,265,339,257,348,245,354,232,358,225,365,221,375,213,380,194,379,186,372,184,363,184,348,179,336,180,325,182,310,183,299,181,291,181,280,182,270,182,258,185,247,190,241,193,236,196,230,197,228,212,232" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Madarganj_divColor!=""){echo $Madarganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Madarganj_div_Opac)){echo $Madarganj_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Madarganj Upazila &nbsp; <?
if(isset($Madarganj_div_NoOfFaci)){ echo $Madarganj_div_NoOfFaci;}
?>" alt="Madarganj Upazila" coords="196,379,205,380,217,378,223,376,236,375,250,377,260,378,264,385,271,392,275,398,280,407,283,413,282,424,279,434,278,438,274,443,273,451,277,456,284,463,286,468,290,474,297,479,305,485,311,494,315,499,310,507,297,509,286,513,281,513,275,508,264,506,254,505,244,505,230,505,218,499,210,492,205,483,197,473,192,464,189,458,184,447,186,443,187,437,193,434,201,431,200,425,195,423,189,418,189,414,190,402,194,400,197,394,197,390,195,385,194,380,201,380" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Melandaha_divColor!=""){echo $Melandaha_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Melandaha_div_Opac)){echo $Melandaha_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Melandaha Upazila &nbsp; <?
if(isset($Melandaha_div_NoOfFaci)){ echo $Melandaha_div_NoOfFaci;}
?>" alt="Melandaha Upazila" coords="304,479,307,470,313,466,314,463,322,463,336,464,346,464,346,458,343,448,344,441,347,431,347,420,349,403,348,392,349,386,351,384,356,386,358,386,362,386,364,378,369,368,366,366,354,369,347,370,339,366,326,356,324,350,319,340,317,332,314,325,312,315,308,310,305,299,301,296,296,300,290,310,283,319,280,323,275,331,271,336,263,346,254,349,249,349,244,355,236,357,230,359,222,369,236,371,243,373,251,373,258,373,264,375,268,381,271,388,275,393,278,397,282,403,284,407,285,415,285,425,282,433,278,444,279,447,282,459,291,468,299,475,305,481,307,484" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($JamalpurspaceSadar_divColor!=""){echo $JamalpurspaceSadar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($JamalpurspaceSadar_div_Opac)){echo $JamalpurspaceSadar_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Jamalpur Sadar Upazila &nbsp; <?
if(isset($JamalpurspaceSadar_div_NoOfFaci)){ echo $JamalpurspaceSadar_div_NoOfFaci;}
?>" alt="Jamalpur Sadar Upazila" coords="352,390,361,393,368,396,377,400,380,406,387,415,395,415,402,414,408,414,420,418,428,424,438,424,446,425,450,427,451,431,453,439,457,444,461,440,464,436,468,428,474,426,478,421,487,423,498,425,506,429,513,432,517,436,522,444,527,448,527,453,524,458,521,464,518,470,519,477,520,483,512,483,507,485,503,490,503,496,502,506,498,510,492,514,491,517,488,522,485,516,477,514,473,516,465,515,461,519,455,524,446,526,439,530,436,531,427,531,423,534,419,540,411,553,404,564,398,566,391,569,383,568,382,563,377,553,368,549,358,546,355,538,355,528,353,521,345,512,340,506,337,500,333,495,321,497,314,498,310,487,310,482,310,476,315,471,321,466,333,466,343,466,349,463,350,458,347,452,349,447,346,440,348,433,349,425,349,413,349,406,350,402,351,391,355,389,362,398" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Sarisabari_divColor!=""){echo $Sarisabari_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Sarisabari_div_Opac)){echo $Sarisabari_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Sarisabari Upazila &nbsp; <?
if(isset($Sarisabari_div_NoOfFaci)){ echo $Sarisabari_div_NoOfFaci;}
?>" alt="Sarisabari Upazila" coords="320,501,324,500,330,499,335,502,338,506,342,514,344,516,348,521,353,529,354,538,357,547,364,552,371,555,367,559,363,559,355,558,351,559,345,564,345,571,345,579,349,588,353,594,353,600,353,607,348,611,342,615,338,624,335,628,332,632,325,632,320,633,320,640,321,647,322,652,316,658,309,664,306,672,301,680,294,687,290,690,277,691,269,692,260,692,256,688,258,682,265,675,266,669,264,660,260,654,257,647,255,637,262,632,267,629,268,625,270,621,268,612,265,607,264,602,266,597,273,596,275,589,275,582,275,574,275,572,276,564,277,558,277,550,277,541,274,532,267,530,260,530,249,533,237,533,233,526,227,518,239,515,249,508,257,510,267,510,277,515,292,515,299,513,309,508,316,504,324,502,331,502,340,507,345,515" href="#" />
</map>
</div>