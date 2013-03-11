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

<img class="map" src="./upz/blnk.jpg" height="700px" width="700px" usemap="#dist_Khagrachori" />
<map name="dist_Khagrachori">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Lakshmichari_divColor!=""){echo $Lakshmichari_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Lakshmichari_div_Opac)){echo $Lakshmichari_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Lakshmichari Upazila &nbsp; <?
if(isset($Lakshmichari_div_NoOfFaci)){ echo $Lakshmichari_div_NoOfFaci;}
?>" alt="Lakshmicharis Upazila" coords="338,581,345,582,350,581,352,578,354,576,359,574,363,571,370,571,378,571,384,573,385,578,386,582,387,587,388,591,388,596,388,604,385,608,384,617,384,623,388,638,395,650,401,663,399,670,392,675,387,675,382,675,382,679,380,684,379,690,369,692,363,691,359,691,356,684,350,687,347,686,342,689,335,686,331,687,329,683,329,677,328,666,329,659,331,651,336,652,336,650,333,643,327,642,323,642,320,647,315,648,318,642,316,639,318,636,321,632,321,625,321,620,323,616,328,613,331,608,336,602,336,596,333,594,335,589,338,587,338,582" href="#">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Manikchari_divColor!=""){echo $Manikchari_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Manikchari_div_Opac)){echo $Manikchari_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Manikchari Upazila &nbsp; <?
if(isset($Manikchari_div_NoOfFaci)){ echo $Manikchari_div_NoOfFaci;}
?>" alt="Manikchari Upazila" coords="334,578,332,586,328,591,328,599,335,597,331,604,327,609,324,611,321,615,319,623,316,633,314,636,313,639,307,638,301,635,301,631,301,628,292,628,285,628,283,632,281,635,279,641,276,637,274,633,266,623,262,614,260,604,258,595,255,588,253,582,249,579,264,579,268,575,272,569,275,563,283,561,295,560,299,559,303,561,307,567,312,573,316,575,322,576,328,579,335,579,336,579,339,581" href="#">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Ramgarh_divColor!=""){echo $Ramgarh_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Ramgarh_div_Opac)){echo $Ramgarh_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Ramgarh Upazila &nbsp; <?
if(isset($Ramgarh_div_NoOfFaci)){ echo $Ramgarh_div_NoOfFaci;}
?>" alt="Ramgarh Upazila" coords="380,507,384,515,385,523,382,531,380,540,375,542,368,539,366,540,364,543,364,547,363,551,358,555,351,558,344,562,338,568,342,574,342,578,334,577,328,574,320,576,319,573,315,567,311,566,304,560,303,557,301,554,291,558,283,559,276,560,271,563,269,565,267,570,265,575,258,579,253,579,243,578,235,572,230,568,232,559,235,553,235,545,236,538,237,536,237,531,235,521,232,513,230,506,232,501,237,496,244,491,251,482,254,482,257,489,260,495,266,499,270,503,272,509,277,513,281,516,287,515,293,515,301,520,306,523,316,532,325,526,329,521,334,518,348,515,365,512,372,510,376,508,378,507" href="#">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Dighinala_divColor!=""){echo $Dighinala_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Dighinala_div_Opac)){echo $Dighinala_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Dighinala Upazila &nbsp; <?
if(isset($Dighinala_div_NoOfFaci)){ echo $Dighinala_div_NoOfFaci;}
?>" alt="Dighinala Upazila" coords="441,448,452,445,462,445,466,441,471,437,478,433,482,435,488,437,496,433,501,430,504,425,500,419,496,415,492,410,492,404,488,393,483,386,478,377,476,367,474,355,472,332,470,311,469,291,452,280,432,267,426,262,436,251,445,243,451,238,464,231,471,226,475,223,473,207,471,183,468,167,460,138,446,104,436,85,433,83,428,83,419,82,412,80,408,76,402,75,399,73,393,68,387,51,383,39,380,29,374,31,370,31,366,34,365,39,365,46,368,54,361,54,357,57,355,60,357,74,360,86,362,91,358,92,362,101,366,132,370,147,374,153,374,157,370,158,369,163,371,165,376,168,376,175,375,178,375,187,374,200,372,205,379,213,381,231,382,246,385,267,387,288,396,313,395,326,398,339,404,359,407,369,415,388,424,409,432,427,439,443,443,447,459,445" href="#">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Matiranga_divColor!=""){echo $Matiranga_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Matiranga_div_Opac)){echo $Matiranga_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Matiranga Upazila &nbsp; <?
if(isset($Matiranga_div_NoOfFaci)){ echo $Matiranga_div_NoOfFaci;}
?>" alt="Matiranga Upazila" coords="291,272,290,267,292,260,292,248,292,242,286,242,285,249,281,253,280,248,274,243,270,243,275,256,275,263,275,268,271,271,268,276,270,281,260,289,249,297,245,302,254,305,258,307,257,310,253,314,257,324,261,326,261,329,264,336,262,337,267,342,269,351,271,355,272,357,273,364,273,371,278,378,278,383,281,387,283,391,283,398,282,406,286,414,287,416,287,423,285,427,286,431,291,432,296,434,299,435,293,439,291,444,284,450,279,454,275,453,273,452,269,452,267,455,271,463,270,473,267,475,266,476,264,473,263,470,261,474,260,477,257,479,256,481,260,494,268,498,274,502,275,510,280,516,293,512,298,520,306,523,311,526,318,531,325,523,331,516,342,514,355,511,366,509,375,506,382,505,375,485,372,475,368,464,365,454,366,446,368,435,354,416,342,405,336,392,329,381,313,368,304,362,301,347,299,328,299,306,297,297,295,295,293,287,291,280,291,276,291,270" href="#">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Mohalchari_divColor!=""){echo $Mohalchari_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Mohalchari_div_Opac)){echo $Mohalchari_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Mohalchari Upazila &nbsp; <?
if(isset($Mohalchari_div_NoOfFaci)){ echo $Mohalchari_div_NoOfFaci;}
?>" alt="Mohalchari Upazila" coords="444,461,448,466,451,472,453,477,458,484,461,494,465,507,467,516,468,520,462,522,458,524,451,530,444,532,440,536,437,542,434,554,429,561,423,566,415,568,411,568,407,573,403,583,399,594,390,598,390,594,389,590,388,586,387,583,386,578,386,574,385,570,378,568,370,567,359,569,352,573,348,578,345,573,342,570,340,565,348,561,359,554,365,552,366,540,375,542,382,540,384,536,384,533,385,527,386,522,389,519,381,500,379,493,384,490,394,488,403,486,407,486,410,482,413,479,416,477,422,473,429,470,437,466,442,464,444,464" href="#">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Panchari_divColor!=""){echo $Panchari_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Panchari_div_Opac)){echo $Panchari_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Panchari Upazila &nbsp; <?
if(isset($Panchari_div_NoOfFaci)){ echo $Panchari_div_NoOfFaci;}
?>" alt="Panchari Upazila" coords="372,202,366,201,362,208,359,209,351,209,348,209,342,215,331,223,322,231,311,240,304,244,302,250,302,260,300,266,294,268,292,274,292,284,297,290,299,303,299,315,299,328,301,341,302,353,310,363,316,369,324,379,332,385,336,387,340,382,342,380,344,378,346,368,347,360,353,355,362,352,375,344,386,334,395,327,395,322,393,313,391,306,387,299,385,292,383,280,381,269,380,249,378,235,377,226,376,219,372,212,368,209,364,209" href="#">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($KhagracharispaceSadar_divColor!=""){echo $KhagracharispaceSadar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($KhagracharispaceSadar_div_Opac)){echo $KhagracharispaceSadar_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Khagrachari Sadar Upazila &nbsp; <?
if(isset($KhagracharispaceSadar_div_NoOfFaci)){ echo $KhagracharispaceSadar_div_NoOfFaci;}
?>" alt="Khagrachari Sadar Upazila" coords="337,388,341,384,344,379,346,373,346,365,349,360,357,355,365,355,371,348,380,341,386,338,393,332,396,341,397,350,400,358,405,368,408,377,412,389,416,396,420,411,429,426,435,440,440,451,443,459,434,462,424,470,416,474,408,481,396,484,387,488,381,491,376,485,371,469,368,452,369,437,369,434,364,425,356,415,351,409,343,405,338,398,338,394,341,389" href="#">
</map>
</div>