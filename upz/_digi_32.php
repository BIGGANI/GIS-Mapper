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

<img class="map" src="./upz/blnk.jpg" height="700px" width="700px" usemap="#dist_dinajpur" />
<map name="dist_dinajpur">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Birganj_divColor!=""){echo $Birganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Birganj_div_Opac)){echo $Birganj_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Birganj Upazila &nbsp; <?
if(isset($Birganj_div_NoOfFaci)){ echo $Birganj_div_NoOfFaci;}
?>" alt="Birganj Upazila" coords="91,123,95,118,96,114,95,109,95,105,103,105,104,100,105,94,111,91,120,90,120,83,120,78,116,72,117,66,118,55,122,49,127,44,137,42,144,36,147,33,156,39,162,44,167,47,177,48,183,43,184,37,184,32,188,26,196,19,202,16,208,18,216,25,221,32,226,37,233,41,241,41,249,39,252,45,252,57,252,66,258,73,261,82,263,95,261,106,266,119,272,131,270,141,266,151,260,159,260,173,266,181,263,187,258,187,251,188,244,185,238,182,234,178,230,180,231,187,228,191,223,184,219,180,214,179,206,183,205,186,199,184,195,182,190,180,183,185,179,189,174,185,170,181,166,175,161,173,154,171,150,167,146,162,143,153,142,147,136,143,129,144,125,146,116,147,112,143,106,143,101,138,96,131,91,125" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Khansama_divColor!=""){echo $Khansama_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Khansama_div_Opac)){echo $Khansama_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Khansama Upazila &nbsp; <?
if(isset($Khansama_div_NoOfFaci)){ echo $Khansama_div_NoOfFaci;}
?>" alt="Khansama Upazila" coords="249,38,254,35,261,37,267,37,270,43,273,47,273,53,274,60,278,69,278,77,280,87,283,93,289,93,296,94,303,97,310,105,315,110,322,116,325,123,330,133,331,141,332,149,333,157,333,170,334,180,339,185,349,195,352,200,351,204,344,206,338,208,333,211,323,208,320,211,315,213,305,211,300,216,294,219,282,220,267,221,258,221,252,221,252,211,256,206,260,200,262,194,265,188,267,183,263,178,259,172,260,164,261,158,266,153,270,148,270,139,272,131,268,124,265,117,262,109,262,99,263,90,262,81,258,75,255,70,252,65,251,55,251,47,249,41" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Kaharol_divColor!=""){echo $Kaharol_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Kaharol_div_Opac)){echo $Kaharol_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Kaharol Upazila &nbsp; <?
if(isset($Kaharol_div_NoOfFaci)){ echo $Kaharol_div_NoOfFaci;}
?>" alt="Kaharol Upazila" coords="109,143,115,146,120,147,126,146,132,144,139,146,142,152,146,163,150,169,159,173,168,179,173,186,178,190,184,185,190,182,197,183,200,186,207,185,210,180,214,179,222,182,226,187,229,189,230,183,233,178,241,181,244,186,252,187,262,186,262,191,261,197,256,202,255,206,254,211,250,218,247,222,241,229,234,234,224,239,216,241,209,245,200,246,194,244,190,248,184,247,179,243,173,239,166,240,161,235,154,233,143,233,135,231,127,231,122,231,116,227,110,223,105,220,104,215,106,209,107,201,105,195,104,189,102,179,100,169,100,161,100,155,105,148,108,144" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Bochaganj_divColor!=""){echo $Bochaganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Bochaganj_div_Opac)){echo $Bochaganj_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Bochaganj Upazila &nbsp; <?
if(isset($Bochaganj_div_NoOfFaci)){ echo $Bochaganj_div_NoOfFaci;}
?>" alt="Bochaganj Upazila" coords="90,123,93,127,97,131,99,137,105,143,110,143,103,149,101,153,98,159,100,167,100,177,104,187,107,199,106,210,105,217,108,221,116,226,121,231,112,239,109,245,104,246,102,250,95,258,90,258,85,263,86,270,84,279,82,286,75,289,69,293,61,298,58,302,52,302,54,292,52,287,46,281,42,276,46,270,48,263,47,258,40,257,38,252,30,249,26,246,20,245,19,240,20,235,15,228,15,220,14,214,16,210,17,204,14,198,13,189,13,184,14,177,18,172,21,167,23,162,26,154,33,151,39,151,46,151,50,151,56,148,62,153,63,159,69,162,73,158,78,156,82,160,85,155,87,151,83,147,81,141,82,132,84,127,88,125" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Birol_divColor!=""){echo $Birol_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Birol_div_Opac)){echo $Birol_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Birol Upazila &nbsp; <?
if(isset($Birol_div_NoOfFaci)){ echo $Birol_div_NoOfFaci;}
?>" alt="Birol Upazila" coords="51,303,58,302,62,298,68,296,73,291,81,287,85,282,84,271,86,261,93,258,99,255,102,250,105,246,109,245,110,241,116,239,118,234,124,233,130,231,137,232,143,233,151,233,158,234,164,239,169,240,176,241,184,248,190,249,196,245,202,247,198,254,196,259,192,267,189,271,191,277,190,282,188,289,190,295,193,302,185,307,182,313,182,321,179,327,177,334,185,340,184,346,182,353,178,356,174,362,170,365,171,373,164,375,161,379,158,386,159,393,159,400,154,401,147,400,138,401,131,397,120,399,117,396,118,385,115,380,112,376,108,380,105,375,98,371,90,368,86,361,85,353,79,347,71,347,62,344,56,339,50,333,48,326,46,316,48,308,50,303" href="#" />
  
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($DinajpurspaceSadar_divColor!=""){echo $DinajpurspaceSadar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($DinajpurspaceSadar_div_Opac)){echo $DinajpurspaceSadar_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Dinajpur Sadar Upazila &nbsp; <?
if(isset($DinajpurspaceSadar_div_NoOfFaci)){ echo $DinajpurspaceSadar_div_NoOfFaci;}
?>" alt="Dinajpur Sadar Upazila" coords="160,398,159,391,160,385,163,379,167,374,171,374,170,369,170,365,179,357,183,350,184,344,180,336,179,330,182,324,182,312,189,306,194,303,191,294,190,287,190,282,190,277,190,271,192,266,196,259,199,254,202,247,208,246,218,243,225,240,230,237,239,232,245,225,252,220,256,225,264,234,266,238,270,246,269,255,269,266,271,276,268,285,269,292,267,300,264,308,260,314,256,318,254,323,251,332,250,341,254,352,259,359,267,362,274,361,279,367,280,378,282,385,280,391,279,396,286,402,288,408,277,411,271,411,265,410,269,404,263,402,254,404,249,408,245,409,243,417,239,423,234,424,222,425,215,425,211,421,201,422,195,421,194,413,197,408,188,406,179,407,175,400,168,399,161,398" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Chirirbandar_divColor!=""){echo $Chirirbandar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Chirirbandar_div_Opac)){echo $Chirirbandar_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Chirirbandar Upazila &nbsp; <?
if(isset($Chirirbandar_div_NoOfFaci)){ echo $Chirirbandar_div_NoOfFaci;}
?>" alt="Chirirbandar Upazila" coords="283,386,282,379,281,373,279,368,273,363,264,361,257,357,255,351,251,344,252,335,254,325,259,318,264,310,268,300,269,291,269,284,272,278,270,269,271,257,271,244,263,236,257,228,252,221,272,222,281,221,293,221,300,214,305,213,314,213,321,209,332,210,344,207,351,205,355,211,354,216,360,221,365,227,368,234,373,244,374,251,370,256,361,260,357,265,354,272,351,276,349,284,349,291,341,297,337,306,337,311,334,323,336,327,338,335,340,344,340,357,341,372,344,379,348,391,352,398,353,405,339,408,329,410,321,412,314,404,313,394,315,385,306,388,295,392,289,391,284,387" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Parbatipur_divColor!=""){echo $Parbatipur_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Parbatipur_div_Opac)){echo $Parbatipur_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Parbatipur Upazila &nbsp; <?
if(isset($Parbatipur_div_NoOfFaci)){ echo $Parbatipur_div_NoOfFaci;}
?>" alt="Parbatipur Upazila" coords="353,404,352,397,346,391,346,385,343,379,341,374,343,367,342,359,342,349,338,336,336,324,337,311,340,301,346,296,350,285,350,278,353,272,359,264,367,259,372,251,371,238,365,230,366,223,372,222,377,231,380,234,384,239,400,241,407,242,410,253,410,263,410,272,410,281,416,286,426,287,431,292,438,296,448,298,453,300,457,307,454,312,454,320,461,326,470,336,475,344,483,352,492,357,508,360,518,361,525,373,530,382,523,384,519,391,513,396,511,401,505,402,500,396,492,394,486,390,481,395,475,396,470,395,465,398,465,403,468,407,462,412,459,417,453,417,449,411,443,408,435,407,432,410,428,414,424,418,416,420,409,420,400,417,392,416,385,411,383,408,377,404,372,410,371,414,368,414,364,415,360,416,354,410,352,406" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Fulbari_divColor!=""){echo $Fulbari_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Fulbari_div_Opac)){echo $Fulbari_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Fulbari Upazila &nbsp; <?
if(isset($Fulbari_div_NoOfFaci)){ echo $Fulbari_div_NoOfFaci;}
?>" alt="Fulbari Upazila" coords="328,412,333,408,340,407,347,405,354,407,359,415,367,415,373,408,377,405,383,409,390,413,399,417,408,419,421,421,429,415,434,410,438,407,444,410,450,413,457,418,462,418,459,426,456,430,452,436,445,442,449,446,451,451,456,457,460,462,452,467,444,471,434,473,430,468,421,465,414,462,409,465,404,468,407,476,407,482,404,485,397,488,389,488,383,488,374,489,366,489,358,494,350,496,343,499,340,501,338,486,337,480,330,478,323,472,326,468,333,463,332,457,332,449,336,445,341,440,339,434,336,428,333,420,328,414" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Birampur_divColor!=""){echo $Birampur_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Birampur_div_Opac)){echo $Birampur_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Birampur Upazila &nbsp; <?
if(isset($Birampur_div_NoOfFaci)){ echo $Birampur_div_NoOfFaci;}
?>" alt="Birampur Upazila" coords="338,502,344,499,350,496,360,494,363,490,371,488,379,488,392,488,403,487,407,482,406,476,405,470,411,466,416,462,423,467,429,467,432,472,439,472,443,472,451,475,455,482,460,486,466,491,470,498,472,504,473,511,476,519,476,525,474,532,469,536,463,540,459,542,451,539,443,537,438,536,433,529,427,526,421,528,424,535,429,543,419,542,409,543,397,542,391,540,387,533,384,526,380,524,373,526,369,530,365,523,358,520,358,515,348,512,343,507,339,502" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Hakimpur_divColor!=""){echo $Hakimpur_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Hakimpur_div_Opac)){echo $Hakimpur_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Hakimpur Upazila &nbsp; <?
if(isset($Hakimpur_div_NoOfFaci)){ echo $Hakimpur_div_NoOfFaci;}
?>" alt="Hakimpur Upazila" coords="430,543,426,535,423,529,429,527,432,529,439,536,446,537,453,539,461,540,472,536,476,531,478,524,485,529,487,536,488,543,491,547,501,552,511,552,517,558,524,562,529,564,541,565,549,566,555,572,568,573,568,582,570,590,575,599,569,605,562,601,551,604,546,605,537,601,535,595,527,588,520,586,510,589,504,590,496,587,487,584,478,582,470,578,464,573,464,568,467,562,469,559,465,552,460,544,452,544,445,543,440,542,434,544,429,542" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Nawabganj_divColor!=""){echo $Nawabganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Nawabganj_div_Opac)){echo $Nawabganj_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Nawabganj Upazila &nbsp; <?
if(isset($Nawabganj_div_NoOfFaci)){ echo $Nawabganj_div_NoOfFaci;}
?>" alt="Nawabganj Upazila" coords="566,572,558,572,551,569,546,565,537,566,530,565,525,564,520,559,512,555,505,552,496,552,492,547,488,543,486,534,483,529,478,524,476,519,474,513,470,503,468,495,463,489,460,484,455,482,451,475,446,474,453,469,460,464,456,457,452,452,447,444,452,437,457,431,460,424,462,420,459,418,463,413,467,408,465,403,466,398,474,398,480,396,484,393,489,394,494,395,501,398,506,403,513,400,519,392,523,385,529,384,533,392,532,400,536,410,537,418,539,430,544,437,545,445,548,454,553,459,560,465,568,466,575,466,580,471,571,473,571,477,577,484,584,489,593,490,601,492,608,495,615,498,620,504,627,507,633,511,627,517,622,523,617,530,612,538,604,540,596,541,595,546,588,550,582,551,577,555,570,559,570,563,566,570" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Ghoraghat_divColor!=""){echo $Ghoraghat_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Ghoraghat_div_Opac)){echo $Ghoraghat_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Ghoraghat Upazila &nbsp; <?
if(isset($Ghoraghat_div_NoOfFaci)){ echo $Ghoraghat_div_NoOfFaci;}
?>" alt="Ghoraghat Upazila" coords="574,604,575,598,570,593,569,586,566,573,572,562,574,556,584,550,593,551,595,541,603,541,610,538,614,532,619,524,627,518,631,512,638,514,641,519,634,522,632,526,636,532,644,534,645,542,650,550,659,549,662,552,666,560,669,566,669,573,675,582,680,592,685,596,688,603,682,614,676,615,671,616,660,617,653,615,640,617,633,614,621,612,614,612,603,608,591,609,583,607,576,605" href="#" />
</map>
</div>