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

<img class="map" src="./upz/blnk.jpg" height="700px" width="700px" usemap="#dist_Bandarban" />
<map name="dist_Bandarban">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($BandarbanspaceSadar_divColor!=""){echo $BandarbanspaceSadar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($BandarbanspaceSadar_div_Opac)){echo $BandarbanspaceSadar_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Bandarban Sadar Upazila &nbsp; <?
if(isset($BandarbanspaceSadar_div_NoOfFaci)){ echo $BandarbanspaceSadar_div_NoOfFaci;}
?>" alt="Bandarban Sadar Upazila" coords="115,159,118,153,122,151,123,144,123,137,123,128,120,122,120,115,118,109,118,102,118,93,116,84,114,79,110,73,108,67,104,58,104,53,106,47,110,42,112,36,112,31,112,25,120,25,124,27,132,29,136,31,139,32,144,32,150,31,154,28,158,26,165,24,170,21,175,18,181,17,188,19,190,25,190,32,190,39,190,46,190,53,188,59,188,65,189,70,191,72,195,73,196,78,194,83,194,90,196,94,200,97,204,100,207,104,211,107,210,113,208,117,202,121,197,121,191,120,188,116,184,111,180,107,177,107,172,110,168,111,165,117,165,123,165,130,164,137,166,141,168,147,170,157,174,161,178,167,181,171,183,175,186,178,187,182,191,187,193,192,196,200,199,205,201,209,203,211,204,215,206,219,208,226,210,233,210,239,207,245,203,247,199,251,193,254,188,256,182,255,178,249,176,241,174,232,170,226,166,226,158,227,152,229,147,229,145,227,146,222,147,217,146,211,145,205,142,200,141,195,137,191,136,186,132,186,128,183,125,179,124,173,124,167,122,167,117,165,115,162,115,160,114,159" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Rawangchari_divColor!=""){echo $Rawangchari_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Rawangchari_div_Opac)){echo $Rawangchari_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Rawangchari Upazila &nbsp; <?
if(isset($Rawangchari_div_NoOfFaci)){ echo $Rawangchari_div_NoOfFaci;}
?>" alt="Rawangchari Upazila" coords="190,20,194,20,201,19,206,21,211,21,218,23,224,26,230,29,235,33,238,35,246,37,250,41,254,45,256,48,260,51,266,55,270,59,272,63,274,65,276,69,280,73,283,77,286,81,289,85,292,89,294,93,296,97,298,101,300,106,300,110,302,113,303,117,304,121,302,123,300,125,296,126,291,127,285,129,279,130,274,132,271,135,266,138,261,141,254,142,250,142,245,145,240,149,235,151,231,153,227,157,223,161,220,166,220,172,220,178,220,183,219,189,216,193,214,199,211,203,208,206,204,208,202,209,200,205,198,201,196,195,194,191,190,184,186,179,182,172,179,168,178,164,176,161,171,152,168,143,166,139,166,133,165,127,164,120,168,112,173,110,177,107,182,109,184,112,190,117,194,120,199,121,204,120,207,117,211,112,210,107,208,104,205,103,202,99,198,97,196,95,195,90,194,87,194,81,196,79,196,77,195,73,191,72,187,69,187,65,188,61,188,58,188,56,190,49,190,44,190,39,190,36,190,30,190,25,194,20" href="#" />
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Ruma_divColor!=""){echo $Ruma_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Ruma_div_Opac)){echo $Ruma_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Ruma Upazila &nbsp; <?
if(isset($Ruma_div_NoOfFaci)){ echo $Ruma_div_NoOfFaci;}
?>" alt="Ruma Upazila" coords="212,243,210,237,210,233,210,227,208,223,206,218,204,215,204,211,205,207,209,203,213,199,217,194,220,190,220,183,219,176,222,167,222,162,225,159,227,156,230,154,232,152,236,152,242,151,244,147,249,143,255,143,261,141,267,140,272,136,276,131,280,131,288,128,294,127,298,125,304,125,306,123,309,128,312,132,314,139,314,146,315,153,314,158,315,163,317,169,318,173,319,179,319,183,321,187,324,192,324,197,327,200,329,206,332,212,334,216,335,222,335,227,336,230,338,233,338,239,340,243,338,247,335,249,331,251,327,253,324,255,320,257,314,259,309,263,304,264,300,267,296,267,290,267,284,268,282,271,278,272,273,271,268,271,262,273,258,275,250,278,246,283,241,284,236,285,234,285,228,286,224,283,222,275,220,271,220,263,218,258,215,251,212,245,213,245,212,243" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Lama_divColor!=""){echo $Lama_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Lama_div_Opac)){echo $Lama_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Lama Upazila &nbsp; <?
if(isset($Lama_div_NoOfFaci)){ echo $Lama_div_NoOfFaci;}
?>" alt="Lama Upazila" coords="90,408,87,402,85,397,85,393,90,391,94,390,98,388,100,383,99,381,98,373,104,372,111,374,119,374,126,372,132,370,136,363,136,359,140,356,142,352,146,348,150,344,154,343,159,341,161,336,160,331,158,325,156,319,156,314,155,309,155,304,151,303,148,303,144,307,141,313,142,317,140,327,138,335,137,338,133,339,130,341,126,339,122,336,120,332,116,329,114,325,110,322,106,318,104,316,100,315,96,315,92,313,89,311,86,307,84,301,84,296,83,291,81,287,80,284,78,279,74,275,70,271,66,267,65,263,64,258,67,255,72,251,77,251,82,250,85,247,90,246,97,247,99,250,100,255,101,261,104,265,108,266,114,265,120,264,124,261,125,256,126,250,127,245,128,242,130,239,132,235,136,233,142,233,145,229,150,229,158,230,163,228,168,228,172,228,174,233,176,240,178,248,180,253,182,256,188,257,194,256,197,255,202,251,207,248,212,243,213,249,216,255,218,258,220,264,221,271,222,277,223,281,226,285,226,288,226,293,224,301,222,306,219,313,216,320,214,326,210,331,208,337,206,343,202,346,197,351,193,351,190,353,189,357,186,363,185,367,182,372,179,376,176,382,174,387,172,393,170,401,171,407,172,411,174,413,178,419,182,423,186,427,188,432,190,437,190,440,188,442,184,445,180,445,174,446,168,447,164,451,159,453,151,453,149,451,148,448,151,442,154,437,156,433,158,430,160,427,160,421,157,419,156,415,156,411,158,409,157,407,152,404,149,409,142,409,134,408,132,407,129,407,126,407,122,408,120,409,118,410,116,409,113,407,110,407,106,407,102,408,98,408,96,408,92,409" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Thanchi_divColor!=""){echo $Thanchi_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Thanchi_div_Opac)){echo $Thanchi_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Thanchi Upazila &nbsp; <?
if(isset($Thanchi_div_NoOfFaci)){ echo $Thanchi_div_NoOfFaci;}
?>" alt="Thanchi Upazila" coords="230,287,234,287,240,286,244,285,248,282,254,279,258,276,264,274,271,272,278,272,282,271,289,268,295,268,300,268,304,266,310,264,314,261,320,259,326,255,332,252,337,250,340,249,342,249,345,253,347,257,348,261,349,264,351,268,354,271,356,277,359,282,361,287,365,295,367,298,370,301,371,304,372,307,372,311,372,315,374,319,374,320,372,323,370,326,368,331,368,336,369,341,369,343,369,348,369,354,369,358,368,361,368,363,366,366,368,370,367,375,367,377,366,379,366,382,366,384,364,388,364,391,366,395,367,399,367,404,367,410,366,415,366,421,367,425,368,427,368,431,368,435,368,439,368,444,368,451,368,455,368,459,370,464,372,472,372,477,373,483,375,491,377,496,376,503,377,506,378,511,378,515,378,517,378,521,380,527,380,532,382,538,384,545,387,551,388,560,388,563,390,569,393,575,392,581,392,586,395,593,396,597,397,603,400,608,402,615,406,619,408,624,408,628,406,634,402,635,398,636,394,636,392,637,389,639,386,640,382,643,378,647,377,649,375,653,370,655,366,655,361,655,359,650,356,645,356,640,356,633,354,628,352,621,350,618,348,613,348,607,346,599,344,592,342,589,342,587,340,580,340,575,338,569,336,558,332,553,330,545,330,540,326,534,325,529,324,523,322,519,320,512,320,507,323,501,328,496,332,491,332,485,329,481,328,473,326,469,321,465,316,460,312,461,308,456,302,453,299,447,294,439,292,433,290,431,288,426,286,423,284,415,283,409,277,401,274,393,270,387,269,382,267,379,266,374,266,371,263,364,261,358,259,354,255,347,253,341,249,333,248,328,246,323,243,315,240,311,237,306,236,302,234,298,233,295,231,293" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Alikadam_divColor!=""){echo $Alikadam_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Alikadam_div_Opac)){echo $Alikadam_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Alikadam Upazila &nbsp; <?
if(isset($Alikadam_div_NoOfFaci)){ echo $Alikadam_div_NoOfFaci;}
?>" alt="Alikadam Upazila" coords="193,441,190,435,187,430,184,426,182,421,179,418,175,412,171,405,171,398,172,391,174,384,177,377,181,374,184,369,186,363,190,354,195,350,200,349,204,344,208,340,211,334,213,327,216,319,220,312,222,306,224,301,226,295,229,288,230,297,232,300,234,303,236,307,238,311,240,313,242,317,244,323,246,327,248,332,248,339,250,340,253,345,256,349,257,355,260,359,261,363,262,367,263,369,264,371,266,378,267,381,269,383,270,389,272,393,274,397,276,401,279,403,281,409,282,413,284,417,286,422,289,428,290,434,294,439,296,444,298,449,302,454,306,457,310,461,315,462,318,465,323,471,328,474,328,481,330,489,329,494,326,498,322,502,318,508,318,513,320,519,322,525,324,529,326,533,328,540,331,546,332,553,334,557,335,563,336,567,337,574,332,577,328,579,323,581,319,582,316,581,314,580,311,580,311,584,311,587,307,591,302,593,294,593,290,593,290,589,286,587,282,585,278,587,274,587,270,585,268,581,266,577,266,571,266,565,266,559,266,551,264,547,261,545,257,543,254,541,251,536,248,532,243,526,240,521,238,515,234,511,231,503,228,498,224,493,220,489,216,485,214,481,212,478,207,473,205,469,202,463,200,457,198,453,196,447,196,444,194,442" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Nykongchari_divColor!=""){echo $Nykongchari_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Nykongchari_div_Opac)){echo $Nykongchari_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Nykongchari Upazila &nbsp; <?
if(isset($Nykongchari_div_NoOfFaci)){ echo $Nykongchari_div_NoOfFaci;}
?>" alt="Nykongchari Upazila" coords="131,683,135,679,137,673,141,668,143,662,142,656,142,653,145,649,143,645,142,642,144,635,140,634,138,630,134,623,134,619,133,613,134,607,139,602,142,599,148,597,153,595,158,593,162,589,166,587,166,578,167,574,172,570,172,564,172,559,174,555,176,551,182,549,186,551,189,554,192,555,196,557,198,557,201,555,206,556,208,553,209,548,211,545,213,543,216,538,214,535,214,531,218,529,222,529,225,527,230,524,234,523,240,523,239,520,237,515,235,513,232,509,230,503,226,497,222,493,218,487,214,482,210,479,208,475,206,469,202,464,199,459,198,453,198,450,198,447,196,443,194,442,192,442,188,443,186,447,181,447,176,447,172,448,169,449,163,452,158,455,154,455,147,454,148,449,150,444,154,437,156,433,160,429,159,424,158,417,156,413,156,409,155,406,151,406,148,409,144,410,139,410,132,409,127,407,123,411,116,411,112,409,108,408,102,409,99,409,96,409,93,411,90,414,92,419,94,423,96,427,99,431,102,432,105,433,108,435,111,435,114,437,115,440,115,445,118,450,121,450,126,451,130,455,133,457,133,463,133,467,131,471,129,477,125,483,122,488,122,493,124,497,126,500,129,504,134,507,140,508,145,511,148,512,152,517,154,521,155,525,158,531,158,533,160,536,162,541,163,546,163,549,163,554,163,559,161,563,159,569,157,570,153,571,150,571,145,569,142,568,138,561,139,555,136,550,132,545,125,545,120,549,120,553,116,557,110,561,108,567,108,570,106,576,102,583,102,589,103,594,106,603,108,607,109,613,112,619,113,625,116,629,120,635,124,640,128,645,131,650,132,656,131,658,130,665,130,674,130,679,130,682" href="#" />
</map>
</div>