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

<img class="map" src="./upz/blnk.jpg" height="700px" width="700px" usemap="#dist_Noakhali" />
<map name="dist_Noakhali">

<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Hatiya_divColor!=""){echo $Hatiya_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Hatiya_div_Opac)){echo $Hatiya_div_Opac; } else{ echo $divO;} ?>","shadow":false,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Hatiya Upazila &nbsp; <?
if(isset($Hatiya_div_NoOfFaci)){ echo $Hatiya_div_NoOfFaci;}
?>" alt="Hatiya Upazila" coords="431,447,435,448,440,449,447,450,453,452,460,454,461,458,461,461,461,466,463,472,463,477,463,480,465,486,467,489,471,493,473,498,475,501,477,506,481,511,483,516,485,520,486,524,487,527,488,530,490,535,492,539,492,544,493,545,494,549,495,551,496,558,495,564,495,573,494,584,492,593,491,600,492,605,492,610,492,615,491,618,489,622,489,624,484,631,480,637,476,642,470,646,464,647,460,646,453,650,449,654,445,660,444,665,440,669,436,673,434,677,430,682,425,684,420,686,415,686,406,687,400,687,394,684,392,678,391,672,393,667,396,662,400,654,403,648,406,643,411,640,413,637,411,634,411,631,412,630,412,624,414,618,414,611,416,607,418,601,418,596,418,589,419,584,419,578,419,571,420,561,420,557,420,552,420,548,420,545,418,542,418,538,418,534,419,530,419,525,420,520,420,516,420,509,419,504,418,499,415,494,412,489,411,483,413,477,415,469,415,466,417,459,418,457,419,453,421,449,427,446,429,447,437,448" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Subarnachar_divColor!=""){echo $Subarnachar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Subarnachar_div_Opac)){echo $Subarnachar_div_Opac; } else{ echo $divO;} ?>","shadow":false,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Subarnachar Upazila &nbsp; <?
if(isset($Subarnachar_div_NoOfFaci)){ echo $Subarnachar_div_NoOfFaci;}
?>" alt="Subarnachar Upazila" coords="374,267,375,272,373,275,373,282,373,287,374,290,381,294,389,296,393,299,392,304,394,309,395,314,393,319,387,324,384,327,381,333,380,337,377,343,380,352,383,355,386,359,388,365,388,370,390,376,390,382,396,383,403,384,409,384,414,384,422,384,430,384,440,385,448,385,460,385,466,386,469,390,473,388,478,385,485,387,493,391,497,394,502,398,510,402,517,404,525,408,531,410,539,413,546,416,555,418,563,419,570,419,581,418,590,417,593,413,593,408,590,402,586,394,581,387,578,382,571,367,568,365,565,361,559,353,555,348,549,346,544,344,538,342,532,339,531,336,526,331,519,326,515,323,511,319,509,317,505,317,501,314,497,311,492,307,492,303,492,300,488,297,483,294,477,292,476,287,471,291,467,290,459,289,454,288,448,287,442,286,437,286,433,288,430,289,427,289,424,286,420,284,415,282,412,281,406,279,399,277,396,274,389,270,384,268,377,268" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Companiganj_divColor!=""){echo $Companiganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Companiganj_div_Opac)){echo $Companiganj_div_Opac; } else{ echo $divO;} ?>","shadow":false,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Companiganj Upazila &nbsp; <?
if(isset($Companiganj_div_NoOfFaci)){ echo $Companiganj_div_NoOfFaci;}
?>" alt="Companiganj Upazila" coords="541,186,546,184,548,182,550,181,552,179,556,181,560,181,563,177,566,175,569,172,569,170,575,171,581,171,583,171,584,167,586,165,590,167,594,166,597,164,599,163,604,163,605,161,608,163,609,167,609,169,613,172,611,175,607,180,608,182,602,182,600,185,606,187,609,189,605,191,604,196,604,201,604,206,604,209,601,206,590,209,589,213,594,214,596,215,598,220,598,223,604,226,605,229,597,227,591,227,589,231,591,234,596,238,600,243,604,246,609,248,612,247,617,246,621,242,626,240,628,246,629,251,634,255,640,259,643,263,647,264,651,266,655,268,658,268,660,270,666,273,669,276,674,278,677,280,677,285,678,292,679,301,679,306,679,313,676,311,669,309,662,308,658,306,650,304,640,303,636,301,630,300,622,299,615,299,614,304,613,310,610,319,610,324,607,329,605,333,602,337,598,339,593,343,592,346,582,350,575,351,569,353,563,351,558,350,554,348,551,346,545,344,539,342,535,339,530,335,522,328,516,322,512,319,511,317,508,316,503,315,497,309,494,305,494,301,496,297,498,293,499,290,503,288,503,285,504,282,505,280,507,278,511,276,516,276,521,277,529,279,534,281,537,281,541,283,543,283,549,285,555,285,557,283,556,278,554,275,551,273,544,271,550,268,554,266,555,262,556,260,555,258,554,256,551,254,547,252,544,250,543,244,540,240,540,235,544,227,543,223,545,221,545,216,546,213,544,208,543,204,541,200,540,195,541,189,543,185" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Kabirhat_divColor!=""){echo $Kabirhat_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Kabirhat_div_Opac)){echo $Kabirhat_div_Opac; } else{ echo $divO;} ?>","shadow":false,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Kabirhat Upazila &nbsp; <?
if(isset($Kabirhat_div_NoOfFaci)){ echo $Kabirhat_div_NoOfFaci;}
?>" alt="Kabirhat Upazila" coords="499,181,501,184,504,188,509,188,514,188,519,185,521,182,527,180,532,179,536,179,539,183,539,187,539,191,539,194,538,198,540,204,544,209,545,211,545,215,543,219,542,222,541,226,540,231,538,234,538,240,540,246,542,249,542,252,547,254,552,257,554,260,552,265,547,269,544,271,550,273,554,277,555,280,556,285,553,285,550,284,544,281,539,281,535,279,528,278,525,277,520,276,516,275,512,276,508,276,506,276,505,281,501,287,496,291,496,296,494,300,492,298,490,296,484,296,482,294,478,289,476,285,476,280,476,275,476,271,477,265,477,260,477,256,476,247,475,240,477,236,480,231,480,226,483,218,486,216,486,213,486,210,484,203,483,199,487,197,491,200,494,200,499,198,501,195,500,192,497,189,495,187,495,184,497,181" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($NoakhalispaceSadar_divColor!=""){echo $NoakhalispaceSadar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($NoakhalispaceSadar_div_Opac)){echo $NoakhalispaceSadar_div_Opac; } else{ echo $divO;} ?>","shadow":false,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Noakhali Sadar Upazila &nbsp; <?
if(isset($NoakhalispaceSadar_div_NoOfFaci)){ echo $NoakhalispaceSadar_div_NoOfFaci;}
?>" alt="Noakhali Sadar Upazila" coords="496,180,493,184,493,187,496,190,497,196,494,200,487,196,481,199,484,206,485,211,484,216,482,215,480,223,479,228,478,231,477,237,474,235,475,244,475,251,475,261,475,268,475,274,475,280,473,287,469,290,466,290,461,288,451,285,445,285,440,283,437,285,430,288,426,289,425,284,417,280,408,278,402,275,399,275,393,272,391,268,383,267,376,266,372,263,365,253,360,249,353,244,349,239,337,234,332,230,327,229,324,223,320,220,322,217,326,217,331,217,335,217,341,218,342,216,342,212,345,209,351,207,352,205,352,201,354,198,355,193,352,191,352,186,357,185,362,186,364,184,369,184,373,180,379,183,383,186,386,186,387,190,396,191,399,191,401,190,403,189,404,186,407,182,413,179,417,180,423,181,430,181,433,183,435,185,435,182,435,180,438,177,439,173,441,172,446,173,450,174,457,172,461,176,465,179,469,179,474,179,480,179,483,179,487,179,490,178,495,182" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Begumganj_divColor!=""){echo $Begumganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Begumganj_div_Opac)){echo $Begumganj_div_Opac; } else{ echo $divO;} ?>","shadow":false,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Begumganj Upazila &nbsp; <?
if(isset($Begumganj_div_NoOfFaci)){ echo $Begumganj_div_NoOfFaci;}
?>" alt="Begumganj Upazila" coords="385,116,388,119,389,120,391,120,394,120,398,123,401,123,405,124,409,123,411,122,413,119,415,116,415,114,416,111,420,111,425,112,434,112,435,114,440,114,445,115,451,115,458,117,462,117,465,120,470,121,478,122,482,121,487,121,490,120,492,118,493,114,494,111,501,112,510,112,512,113,513,116,510,117,507,119,511,122,511,124,508,127,508,132,510,135,511,138,513,141,516,142,520,144,521,145,523,147,524,151,521,153,522,156,523,160,521,164,518,166,515,170,516,172,513,177,510,179,506,181,502,182,500,180,497,179,492,178,487,177,483,179,481,177,475,177,470,178,463,180,462,175,459,171,453,172,451,173,445,173,442,171,439,170,437,175,436,177,436,179,433,182,430,180,422,179,419,181,416,180,415,177,410,180,404,182,402,188,399,188,395,190,389,189,385,185,380,185,377,182,376,178,378,173,380,170,380,167,377,165,375,162,378,159,377,156,378,153,379,148,381,143,380,141,384,136,386,131,385,125,384,119,388,118" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Senbag_divColor!=""){echo $Senbag_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Senbag_div_Opac)){echo $Senbag_div_Opac; } else{ echo $divO;} ?>","shadow":false,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Senbag Upazila &nbsp; <?
if(isset($Senbag_div_NoOfFaci)){ echo $Senbag_div_NoOfFaci;}
?>" alt="Senbag Upazila" coords="476,50,480,48,484,47,487,45,491,48,493,51,495,55,498,53,502,58,505,60,508,59,511,57,515,57,517,57,518,55,521,54,526,54,528,58,529,58,532,55,535,54,539,55,539,58,541,61,547,62,551,61,552,64,552,67,552,69,552,71,556,73,554,76,557,80,556,85,554,90,554,97,554,104,553,110,553,116,551,124,550,129,555,132,554,136,554,143,555,148,554,153,556,160,556,164,552,165,547,166,548,170,552,174,551,178,545,180,543,185,540,183,538,179,535,177,531,178,526,180,519,181,516,183,514,187,509,187,503,186,500,180,506,182,509,180,513,178,516,174,517,171,518,166,522,164,524,160,524,157,522,154,524,151,525,148,525,144,521,142,516,141,512,140,512,135,509,133,508,128,511,127,513,125,513,122,507,119,513,117,514,114,513,111,516,111,518,108,515,105,513,105,511,101,507,101,504,100,502,96,502,89,500,87,499,85,496,87,493,85,492,83,490,81,487,79,484,77,483,74,478,73,474,75,471,74,469,71,467,67,466,65,466,62,469,59,471,57,473,55,474,53,476,51" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Sonaimuri_divColor!=""){echo $Sonaimuri_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Sonaimuri_div_Opac)){echo $Sonaimuri_div_Opac; } else{ echo $divO;} ?>","shadow":false,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Sonaimuri Upazila &nbsp; <?
if(isset($Sonaimuri_div_NoOfFaci)){ echo $Sonaimuri_div_NoOfFaci;}
?>" alt="Sonaimuri Upazila" coords="409,35,405,39,400,45,395,47,391,53,389,54,387,55,386,57,385,61,386,63,386,66,386,68,386,72,387,76,386,77,385,79,387,83,388,86,387,88,386,90,386,93,388,95,389,96,391,100,391,104,391,108,390,110,385,112,387,115,390,117,393,118,397,120,403,122,409,121,411,118,412,114,414,112,414,110,417,109,423,111,428,110,434,111,437,113,441,112,448,113,449,113,455,114,458,115,463,115,467,117,472,119,483,120,489,119,492,112,494,111,501,111,509,111,516,109,514,107,511,104,511,102,505,101,502,98,500,96,499,92,499,89,499,86,492,86,490,83,488,81,484,79,480,79,481,75,476,75,473,75,467,74,467,70,464,65,464,61,467,59,469,58,472,56,475,55,475,50,471,51,467,51,462,51,456,52,454,53,452,52,448,53,441,54,436,55,436,51,433,49,428,50,425,50,424,47,421,46,417,46,413,43,413,39,412,37,411,34" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Chatkhil_divColor!=""){echo $Chatkhil_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Chatkhil_div_Opac)){echo $Chatkhil_div_Opac; } else{ echo $divO;} ?>","shadow":false,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Chatkhil Upazila &nbsp; <?
if(isset($Chatkhil_div_NoOfFaci)){ echo $Chatkhil_div_NoOfFaci;}
?>" alt="Chatkhil Upazila" coords="384,114,385,111,389,108,390,102,390,98,385,94,383,91,387,87,383,81,385,77,385,72,384,68,385,65,384,60,383,57,387,55,388,53,392,49,396,44,399,41,403,37,408,32,408,26,408,22,401,27,399,27,396,24,391,22,386,23,382,21,377,21,373,21,375,17,374,12,371,10,363,12,358,14,353,17,353,22,353,26,348,29,347,32,350,36,349,42,344,42,341,41,340,45,333,46,330,50,332,57,328,56,324,55,323,56,324,61,329,63,328,70,331,70,324,74,318,75,314,82,312,87,318,95,325,91,330,95,335,101,338,100,341,104,348,107,353,102,356,106,359,112,366,117,367,106,372,118,377,117,385,114" href="#" />
</map>
</div>