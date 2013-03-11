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

<img class="map" src="./upz/blnk.jpg" height="700px" width="700px" usemap="#dist_Netrakona" />
<map name="dist_Netrakona">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Durgapur_divColor!=""){echo $Durgapur_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Durgapur_div_Opac)){echo $Durgapur_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Durgapur Upazila &nbsp; <?
if(isset($Durgapur_div_NoOfFaci)){ echo $Durgapur_div_NoOfFaci;}
?>" alt="Durgapur Upazila" coords="126,160,127,168,125,180,126,186,131,196,143,201,152,208,163,210,176,213,186,219,190,226,197,231,202,239,213,242,227,242,233,238,232,230,229,221,229,213,235,210,245,210,254,210,255,205,252,196,251,181,257,175,265,172,270,164,277,158,278,152,277,142,274,137,273,127,272,117,268,106,263,97,256,89,256,70,253,47,251,45,240,44,234,44,223,44,211,47,201,43,193,36,186,28,178,23,169,20,156,26,148,37,140,51,138,57,132,72,130,84,128,95,124,105,118,119,112,129,106,135,112,148,121,150,128,158,127,164" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Kalmakanda_divColor!=""){echo $Kalmakanda_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Kalmakanda_div_Opac)){echo $Kalmakanda_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Kalmakanda Upazila &nbsp; <?
if(isset($Kalmakanda_div_NoOfFaci)){ echo $Kalmakanda_div_NoOfFaci;}
?>" alt="Kalmakanda Upazila" coords="257,47,254,41,254,38,260,32,268,28,278,22,283,21,291,30,303,38,318,50,332,53,350,55,371,51,389,50,404,46,419,43,430,39,438,35,446,35,450,35,442,50,440,56,438,67,436,78,436,87,437,95,440,102,443,109,446,115,449,118,453,124,456,135,449,141,442,141,427,139,420,139,414,146,412,151,412,161,413,172,421,186,429,199,432,209,439,213,441,219,438,232,436,243,438,252,437,255,429,255,417,257,404,260,392,262,369,267,364,267,353,266,351,255,349,246,337,235,331,231,322,232,313,234,302,239,290,244,279,242,272,234,264,229,254,216,254,213,256,208,254,199,252,193,252,186,259,181,262,174,268,171,282,161,283,157,283,152,281,142,278,137,272,134,276,125,272,113,269,106,265,101,261,93,260,84,258,72,256,64,254,54,254,53,254,48" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Purbadhala_divColor!=""){echo $Purbadhala_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Purbadhala_div_Opac)){echo $Purbadhala_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Purbadhala Upazila &nbsp; <?
if(isset($Purbadhala_div_NoOfFaci)){ echo $Purbadhala_div_NoOfFaci;}
?>" alt="Purbadhala Upazila" coords="231,245,222,245,207,244,201,239,197,234,191,226,178,218,163,214,152,211,144,210,137,201,124,193,120,190,111,190,92,183,84,184,75,177,72,171,67,167,59,166,48,168,37,174,32,176,24,177,20,181,14,183,13,188,13,197,17,207,23,219,36,223,44,230,48,237,50,247,48,257,47,265,53,274,62,280,64,286,64,297,64,307,69,319,71,328,75,336,83,342,87,352,95,358,98,368,96,374,96,381,102,391,102,399,102,409,113,411,132,415,139,417,157,421,177,429,180,427,174,414,171,396,167,386,162,358,167,338,172,327,176,312,182,291,191,282,200,274,217,271,228,266,234,263,235,249,230,247" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($NetrokonaspaceSadar_divColor!=""){echo $NetrokonaspaceSadar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($NetrokonaspaceSadar_div_Opac)){echo $NetrokonaspaceSadar_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Netrokona Sadar Upazila &nbsp; <?
if(isset($NetrokonaspaceSadar_div_NoOfFaci)){ echo $NetrokonaspaceSadar_div_NoOfFaci;}
?>" alt="Netrokona Sadar Upazila" coords="236,245,238,234,234,225,233,219,231,213,239,211,250,211,256,213,254,222,263,229,272,235,270,242,271,252,274,262,281,267,288,271,299,277,306,280,318,284,329,291,329,294,329,303,320,315,315,322,309,334,307,337,299,349,295,364,295,378,289,391,282,407,282,420,276,435,275,443,266,440,258,435,252,432,237,435,217,438,208,444,190,444,184,444,178,434,177,418,173,411,169,403,169,397,167,389,164,375,163,367,162,358,165,346,165,339,169,330,174,317,177,304,180,298,186,291,189,287,193,282,199,280,207,280,211,278,218,276,224,273,224,267,230,262,231,259,233,257,239,243" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Barhatta_divColor!=""){echo $Barhatta_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Barhatta_div_Opac)){echo $Barhatta_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Barhatta Upazila &nbsp; <?
if(isset($Barhatta_div_NoOfFaci)){ echo $Barhatta_div_NoOfFaci;}
?>" alt="Barhatta Upazila" coords="273,240,282,247,292,246,302,241,309,239,322,234,329,234,338,239,345,245,348,254,348,265,354,269,360,270,366,270,376,270,382,269,392,266,406,262,420,259,432,259,435,262,436,273,435,279,435,285,433,295,433,303,436,309,439,318,440,326,444,328,450,327,459,323,463,322,468,323,474,327,481,330,493,333,499,338,491,340,485,344,480,346,475,348,468,351,462,355,448,362,431,369,426,370,407,374,394,377,381,383,365,384,345,384,325,383,298,380,298,365,301,357,301,351,304,343,309,338,314,333,319,327,322,321,327,311,333,306,334,302,337,294,334,289,325,288,319,282,309,280,305,277,293,271,285,267,281,261,279,256,277,253,275,248,274,241" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Atpara_divColor!=""){echo $Atpara_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Atpara_div_Opac)){echo $Atpara_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Atpara Upazila &nbsp; <?
if(isset($Atpara_div_NoOfFaci)){ echo $Atpara_div_NoOfFaci;}
?>" alt="Atpara Upazila" coords="300,385,308,386,317,385,327,387,339,386,349,386,358,387,368,386,380,387,393,384,401,381,412,378,418,376,419,386,415,397,415,409,412,420,410,426,417,435,422,439,425,447,428,458,434,466,437,456,444,456,454,459,462,463,471,471,474,481,481,492,478,495,468,502,456,508,451,512,448,514,440,514,434,513,429,505,423,502,413,500,402,500,394,503,380,504,372,502,356,501,343,498,332,494,326,489,316,484,310,478,306,469,301,462,292,459,278,460,271,454,272,446,281,440,279,431,284,424,284,420,282,412,283,405,287,401,292,390,296,386,302,386" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Kendua_divColor!=""){echo $Kendua_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Kendua_div_Opac)){echo $Kendua_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Kendua Upazila &nbsp; <?
if(isset($Kendua_div_NoOfFaci)){ echo $Kendua_div_NoOfFaci;}
?>" alt="Kendua Upazila" coords="253,436,262,444,271,450,274,458,279,461,287,461,299,465,305,471,312,480,320,486,324,492,331,495,340,496,353,501,365,504,369,505,374,511,374,518,374,527,377,537,379,546,384,552,389,565,396,574,401,583,406,590,408,597,408,609,404,619,398,620,387,619,378,619,375,622,357,632,341,636,329,640,320,643,306,645,290,648,289,657,279,654,274,647,271,641,266,630,258,621,252,620,243,609,239,604,233,597,227,590,215,578,204,576,200,571,184,559,184,547,184,535,181,520,184,510,187,498,190,486,189,476,187,466,185,458,173,455,188,448,197,447,210,445,221,443,227,440,236,440,244,438,257,436" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Mohanganj_divColor!=""){echo $Mohanganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Mohanganj_div_Opac)){echo $Mohanganj_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Mohanganj Upazila &nbsp; <?
if(isset($Mohanganj_div_NoOfFaci)){ echo $Mohanganj_div_NoOfFaci;}
?>" alt="Mohanganj Upazila" coords="425,376,422,386,416,398,416,409,416,415,414,420,415,428,418,431,423,435,429,439,429,454,430,457,432,460,437,455,440,452,447,455,455,458,460,459,465,464,469,466,474,472,480,481,481,488,487,489,497,486,508,482,513,481,527,482,537,483,545,481,554,477,564,473,571,466,580,460,585,457,591,452,600,447,605,436,609,431,613,423,616,418,615,407,601,412,592,418,581,415,578,407,578,400,577,387,582,384,586,372,586,362,582,353,576,344,562,337,547,332,539,328,528,329,520,332,510,335,503,338,496,340,490,345,484,348,476,354,465,357,450,361,447,364,433,372,429,373,425,378" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Madan_divColor!=""){echo $Madan_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Madan_div_Opac)){echo $Madan_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Madan Upazila &nbsp; <?
if(isset($Madan_div_NoOfFaci)){ echo $Madan_div_NoOfFaci;}
?>" alt="Madan Upazila" coords="379,509,386,510,393,505,396,505,404,505,413,505,422,509,425,516,432,518,439,518,447,518,453,518,461,511,464,509,469,507,475,504,481,502,491,508,498,515,504,517,508,521,509,528,512,533,515,543,519,548,524,554,525,561,528,566,528,579,523,590,525,600,523,610,515,614,506,612,494,613,483,615,473,620,468,626,455,631,434,630,426,628,408,626,411,615,414,603,412,596,410,589,405,581,399,577,394,569,391,564,389,558,387,549,381,541,379,534,377,523,377,518,380,507" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Khaliajhuir_divColor!=""){echo $Khaliajhuir_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Khaliajhuir_div_Opac)){echo $Khaliajhuir_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Khaliajhuir Upazila &nbsp; <?
if(isset($Khaliajhuir_div_NoOfFaci)){ echo $Khaliajhuir_div_NoOfFaci;}
?>" alt="Khaliajhuir Upazila" coords="497,496,484,503,496,509,506,513,512,521,516,526,518,534,517,546,521,553,526,561,528,565,529,573,529,584,527,587,526,596,527,602,526,611,529,621,540,622,553,623,565,623,569,623,574,619,578,612,584,607,590,604,601,600,616,600,628,599,645,598,647,601,653,597,654,594,658,590,662,581,676,574,679,566,684,557,686,547,683,537,678,529,667,528,651,529,641,523,630,516,618,508,611,496,609,487,606,475,606,465,610,447,613,440,617,419,607,427,603,440,594,451,591,455,584,462,581,465,576,471,572,474,554,484,548,485,538,485,530,488,523,487,506,489,496,497,496,499" href="#" />
</map>
</div>