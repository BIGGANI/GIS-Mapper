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

<img class="map" src="./upz/blnk.jpg" height="700px" width="700px" usemap="#dist_Chandpur" />
<map name="dist_Chandpur">
  <area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Kachua_divColor!=""){echo $Kachua_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Kachua_div_Opac)){echo $Kachua_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Kachua Upazilla &nbsp; <?
if(isset($Kachua_div_NoOfFaci)){ echo $Kachua_div_NoOfFaci;}
?>" alt="Kachua Upazilla" coords="377,104,382,100,388,96,392,90,399,87,404,83,408,80,412,76,416,72,421,70,429,70,433,70,439,69,443,69,447,69,452,70,459,72,464,73,465,76,469,77,476,80,480,80,485,82,490,86,492,91,495,96,497,103,497,110,497,114,498,118,497,126,497,131,499,137,500,140,503,143,508,147,513,150,516,154,518,159,526,164,530,166,534,170,538,176,541,179,546,182,548,184,551,187,553,191,554,195,554,202,556,209,557,212,560,216,563,218,569,224,572,226,576,230,579,232,585,236,588,238,595,239,601,244,605,249,607,253,612,257,614,260,616,264,618,268,621,272,624,278,626,282,628,286,629,288,631,292,634,296,635,299,640,304,644,306,648,310,649,313,652,317,654,318,654,320,657,325,657,329,656,332,658,338,658,344,660,348,654,350,648,351,644,350,637,348,632,345,630,344,626,342,621,343,618,345,614,345,608,344,605,342,604,336,602,333,599,330,596,327,592,326,583,327,578,327,574,327,569,327,563,326,558,324,555,323,548,320,542,319,536,318,533,316,530,314,525,312,520,310,516,310,510,308,503,306,500,306,494,303,488,302,486,299,480,297,469,290,464,288,459,286,454,282,448,279,444,275,437,270,436,268,428,264,422,261,416,260,412,264,406,264,403,263,396,258,394,254,394,249,396,245,404,242,406,239,408,236,406,232,403,228,401,223,398,218,397,212,395,206,394,204,391,202,388,199,385,196,382,194,386,186,390,183,392,176,391,173,391,168,391,166,390,161,390,156,389,154,388,152,388,148,386,147,384,145,380,141,379,138,379,131,380,124,380,120,380,114,380,112,380,106,378,104,378,104" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Faridganj_divColor!=""){echo $Faridganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Faridganj_div_Opac)){echo $Faridganj_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Faridganj Upazilla &nbsp; <?
if(isset($Faridganj_div_NoOfFaci)){ echo $Faridganj_div_NoOfFaci;}
?>" alt="Faridganj Upazilla" coords="234,522,236,517,239,513,240,509,242,506,242,502,245,500,248,496,248,492,248,486,248,482,249,477,249,470,246,464,246,460,248,458,251,455,254,452,256,446,258,441,259,436,262,433,263,430,267,428,270,430,275,430,276,426,276,420,276,414,276,408,276,403,278,398,280,394,283,387,287,384,290,382,292,384,294,389,296,390,298,394,300,396,304,399,306,401,311,402,314,402,316,401,319,398,323,394,327,392,331,390,336,392,338,397,340,401,344,400,349,397,352,397,358,397,362,398,368,401,371,402,374,404,377,406,380,409,385,411,387,412,389,412,394,412,398,412,401,413,404,414,406,416,409,418,412,420,414,423,417,423,420,424,424,428,427,431,429,432,432,434,434,436,438,439,440,442,444,444,446,444,448,447,454,450,458,454,458,458,457,462,453,464,450,468,445,471,440,474,438,479,434,481,430,490,428,493,424,498,421,502,418,507,416,511,415,514,413,519,409,527,408,530,405,536,400,542,398,546,396,552,391,557,388,558,384,561,380,564,376,566,370,570,365,572,360,575,356,576,351,575,343,575,338,575,335,578,330,578,322,578,315,580,308,580,305,580,300,582,298,584,295,585,292,587,286,589,282,590,277,594,271,594,266,597,261,599,258,599,255,599,250,599,246,597,246,593,244,591,238,588,235,582,230,580,224,576,222,572,223,565,226,558,230,553,233,548,234,544,235,540,236,538,236,535,234,531,234,526,234,522" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Saharasthi_divColor!=""){echo $Saharasthi_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Saharasthi_div_Opac)){echo $Saharasthi_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Saharasthi Upazilla &nbsp; <?
if(isset($Saharasthi_div_NoOfFaci)){ echo $Saharasthi_div_NoOfFaci;}
?>" alt="Saharasthi Upazilla" coords="537,324,540,320,543,319,548,320,552,322,555,323,560,326,564,326,568,326,575,326,586,327,591,328,594,330,598,331,600,336,601,340,607,344,612,347,616,344,620,344,621,344,625,344,630,347,636,350,640,350,645,350,656,350,661,351,666,353,670,359,679,363,679,370,679,376,679,380,677,385,674,390,670,397,665,401,662,408,661,413,658,420,657,426,658,430,658,435,659,440,661,448,661,452,662,457,662,460,660,466,657,474,654,477,652,480,646,484,645,486,640,491,633,496,624,498,621,500,616,503,612,506,606,507,600,507,592,505,588,502,584,502,580,501,574,499,570,496,567,494,560,493,558,493,552,490,544,490,536,489,530,488,525,487,518,485,514,483,508,481,504,478,502,476,499,472,497,471,494,469,492,466,490,466,486,464,479,464,475,464,472,462,467,461,463,460,460,459,460,454,456,449,450,447,448,446,444,444,442,438,444,434,450,434,452,432,458,431,461,428,470,426,471,420,472,417,472,412,474,407,476,404,480,401,487,396,490,395,493,391,492,386,490,384,490,376,490,373,491,370,496,369,503,366,509,363,511,360,514,358,520,355,526,348,528,346,530,341,533,338,533,334,534,328,535,326,536,324" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Hajiganj_divColor!=""){echo $Hajiganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Hajiganj_div_Opac)){echo $Hajiganj_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Hajiganj Upazilla &nbsp; <?
if(isset($Hajiganj_div_NoOfFaci)){ echo $Hajiganj_div_NoOfFaci;}
?>" alt="Hajiganj Upazilla" coords="392,258,395,260,398,262,402,263,404,264,407,264,412,264,414,261,418,258,421,259,424,262,427,267,432,268,436,272,440,274,444,279,448,282,450,285,453,287,458,289,462,290,466,293,468,296,473,297,478,300,482,300,485,304,492,308,497,310,504,310,508,310,514,313,521,316,526,317,530,320,533,323,533,329,532,334,532,337,530,341,526,346,523,348,518,351,514,354,511,357,507,358,503,362,499,365,496,367,489,370,488,376,488,382,488,387,488,390,484,394,480,398,474,400,471,406,470,410,470,417,470,419,470,422,463,424,462,426,459,426,450,430,447,434,444,438,439,438,434,436,430,430,423,426,416,422,413,419,408,414,406,412,402,409,396,410,390,411,388,412,384,410,380,410,377,406,374,403,366,399,364,394,366,390,368,386,365,383,363,382,358,380,355,375,352,370,349,367,347,364,344,362,340,360,337,356,335,352,332,346,332,338,333,334,334,328,334,326,332,323,328,320,325,318,322,316,318,314,310,312,307,310,306,307,306,299,306,292,312,288,317,288,322,288,324,284,324,282,324,276,328,270,331,266,334,264,338,264,345,264,349,264,354,265,358,265,362,265,368,265,374,265,380,265,386,264,390,262,392,259" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Haimchar_divColor!=""){echo $Haimchar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Haimchar_div_Opac)){echo $Haimchar_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Haimchar Upazilla &nbsp; <?
if(isset($Haimchar_div_NoOfFaci)){ echo $Haimchar_div_NoOfFaci;}
?>" alt="Haimchar Upazilla" coords="220,578,218,574,219,569,220,562,224,557,226,551,228,548,230,545,234,539,234,534,230,530,230,524,230,521,224,521,220,522,216,522,213,523,208,526,204,522,198,520,194,518,192,518,190,516,184,512,180,510,176,508,172,504,169,502,165,504,162,508,160,508,157,508,151,504,151,508,150,509,148,510,146,511,143,512,138,510,135,506,133,502,132,500,127,498,115,494,110,490,105,490,97,484,91,486,88,486,83,486,80,486,77,486,71,484,68,488,66,490,64,496,64,500,61,505,58,509,58,511,56,516,55,518,54,520,54,524,52,528,52,532,50,534,48,535,46,535,44,540,44,542,43,547,43,550,43,553,43,556,45,561,46,564,47,568,49,573,52,578,54,582,57,588,60,593,63,598,64,593,64,589,63,586,67,588,68,594,70,597,71,602,72,608,74,610,74,614,76,619,78,623,80,630,83,633,86,635,89,639,90,642,100,644,102,646,102,649,100,652,99,657,100,660,102,661,106,664,106,666,106,668,107,670,108,674,114,678,114,684,117,690,122,690,126,690,134,690,138,690,144,688,150,688,154,687,158,686,161,683,164,681,172,676,175,670,178,662,182,660,185,655,186,651,191,642,191,638,190,630,190,622,191,613,193,608,198,602,198,598,199,596,200,592,202,589,206,586,211,582,213,581,220,581,221,580" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($MatlabbrkktUttarbrkkt2_divColor!=""){echo $MatlabbrkktUttarbrkkt2_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($MatlabbrkktUttarbrkkt2_div_Opac)){echo $MatlabbrkktUttarbrkkt2_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Matlab(Uttar) Upazilla &nbsp; <?
if(isset($MatlabbrkktUttarbrkkt2_div_NoOfFaci)){ echo $MatlabbrkktUttarbrkkt2_div_NoOfFaci;}
?>" alt="Matlab(Uttar) Upazilla" coords="67,173,72,173,77,178,76,185,76,191,80,198,82,207,83,215,85,229,90,241,96,249,104,257,114,262,122,266,132,262,137,265,144,263,151,261,165,262,174,265,188,270,194,271,192,264,186,256,177,251,176,249,182,247,185,238,186,229,188,221,196,214,200,211,206,207,213,204,218,201,222,197,217,205,204,213,204,218,207,219,216,213,228,203,230,199,232,193,232,185,235,177,240,173,248,171,250,164,252,159,257,155,264,152,268,145,270,143,273,138,277,134,278,125,276,118,272,115,264,109,262,101,258,92,256,83,252,76,249,73,242,65,227,50,206,56,186,56,167,51,154,48,150,49,143,49,135,48,131,49,123,52,115,55,103,59,96,62,86,68,81,73,77,81,76,88,77,104,82,114,83,120,83,128,86,139,82,152,80,159,74,167,67,172" href="#" />

<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($MatlabbrkktDaxinbrkkt2_divColor!=""){echo $MatlabbrkktDaxinbrkkt2_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($MatlabbrkktDaxinbrkkt2_div_Opac)){echo $MatlabbrkktDaxinbrkkt2_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Matlab(Daxin) Upazilla &nbsp; <?
if(isset($MatlabbrkktDaxinbrkkt2_div_NoOfFaci)){ echo $MatlabbrkktDaxinbrkkt2_div_NoOfFaci;}
?>" alt="Matlab(Daxin) Upazilla" coords="208,221,209,226,211,234,219,236,226,238,220,243,213,243,205,243,198,245,194,248,192,252,194,258,203,265,213,266,223,265,233,276,231,288,230,291,230,296,234,305,244,313,251,315,256,313,271,321,290,333,300,338,310,342,320,340,332,345,332,338,332,330,332,328,326,324,321,320,318,318,314,318,307,316,306,310,305,305,305,302,305,297,305,293,308,289,313,288,321,288,323,284,325,279,324,275,325,271,329,269,330,266,335,262,343,263,350,263,359,263,370,263,379,264,387,263,395,260,395,256,394,251,395,246,401,244,407,241,409,239,404,233,401,227,398,222,396,219,396,216,396,212,396,207,393,203,387,201,385,199,383,196,383,194,384,191,385,188,389,185,391,182,391,173,389,167,388,159,387,152,387,148,383,145,380,144,378,135,378,127,379,122,379,115,379,111,378,107,374,108,370,105,362,103,354,102,349,102,345,107,344,114,343,123,343,129,339,133,330,136,320,138,317,137,307,133,294,129,283,121,279,119,279,126,279,133,278,136,275,140,272,143,267,152,258,155,255,158,253,162,250,172,243,173,239,174,236,181,236,188,236,191,236,196,231,203,225,212,222,213,218,214,213,217,211,223" href="#" />
</map>
</div>