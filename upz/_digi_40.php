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

<img class="map" src="./upz/blnk.jpg" height="700px" width="700px" usemap="#dist_pabna" />
<map name="dist_pabna">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Iswardi_divColor!=""){echo $Iswardi_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Iswardi_div_Opac)){echo $Iswardi_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Iswardi Upazila &nbsp; <?
if(isset($Iswardi_div_NoOfFaci)){ echo $Iswardi_div_NoOfFaci;}
?>" alt="Iswardi Upazila" coords="53,352,52,348,46,329,45,320,42,311,41,304,29,281,24,277,26,274,28,272,29,269,27,266,22,256,29,257,31,253,18,251,29,249,23,246,20,244,17,242,16,240,19,238,22,237,26,236,29,235,32,234,34,232,38,229,42,228,47,231,47,243,48,248,50,251,52,250,53,246,54,242,57,236,57,231,56,226,59,223,63,220,66,220,68,223,67,227,69,228,75,228,79,228,82,229,85,229,87,229,91,230,93,232,96,233,98,236,99,237,103,238,105,236,108,236,111,235,116,235,118,231,120,231,124,230,127,230,131,230,133,227,137,227,139,228,144,229,148,229,151,228,155,226,158,226,160,226,162,229,163,232,163,234,163,238,163,240,164,242,164,244,163,246,164,250,165,253,167,255,169,257,171,261,173,257,176,257,175,260,175,262,173,265,174,268,176,271,172,271,169,274,169,276,172,278,174,281,172,285,175,287,178,287,183,288,186,287,187,291,189,294,186,298,186,301,185,305,181,307,174,308,171,312,167,315,165,317,160,320,153,321,150,321,146,321,144,321,142,321,141,323,142,327,142,353,141,357,143,359,143,360,144,362,146,365,145,390,145,395,143,397,143,400,143,403,144,408,147,416,148,424,149,427,150,430,152,437,151,440,146,440,141,436,134,433,130,430,119,430,113,431,104,431,100,426,101,420,96,417,86,416,77,411,72,403,66,392,61,380,58,371,55,362,54,354" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Atghoria_divColor!=""){echo $Atghoria_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Atghoria_div_Opac)){echo $Atghoria_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Atghoria Upazila &nbsp; <?
if(isset($Atghoria_div_NoOfFaci)){ echo $Atghoria_div_NoOfFaci;}
?>" alt="Atghoria Upazila" coords="158,225,160,222,163,220,164,218,163,216,164,213,177,199,182,199,184,198,186,198,190,199,193,199,193,203,197,207,201,209,199,213,199,216,199,219,198,222,198,224,198,226,199,226,205,227,207,227,209,228,211,232,211,233,212,237,214,241,214,247,217,245,221,240,223,237,219,233,218,231,223,231,229,230,232,230,235,233,236,236,235,240,235,246,232,251,235,256,238,257,240,253,243,251,248,248,251,248,253,249,258,252,258,256,258,260,261,264,259,269,261,271,264,274,267,276,270,279,268,283,270,286,276,289,283,290,290,289,294,286,296,282,299,280,303,279,306,281,308,285,309,289,309,291,312,292,315,291,319,295,320,295,320,291,323,291,326,293,328,293,331,292,334,292,337,289,338,286,338,282,340,278,345,278,351,280,353,283,356,285,360,285,363,285,365,285,368,286,372,289,378,292,384,291,381,289,383,284,386,287,390,294,391,297,389,298,385,300,384,303,384,305,385,308,388,310,389,314,392,317,395,320,395,323,395,326,394,330,393,333,393,337,394,343,391,347,389,353,387,354,384,354,379,356,373,352,369,346,366,344,362,346,362,350,362,352,361,355,359,356,356,354,355,349,355,346,353,344,350,343,350,345,347,346,344,349,341,348,339,346,335,343,330,341,326,337,321,333,320,330,315,327,309,330,307,333,304,336,302,339,298,342,295,339,293,336,289,330,286,330,284,330,283,330,281,330,279,330,276,334,273,332,270,327,266,324,261,322,256,319,253,318,245,316,240,315,236,317,232,317,228,317,224,314,218,313,213,308,211,312,209,312,204,310,204,306,199,306,196,303,193,305,190,307,186,304,187,300,188,296,188,292,186,288,182,287,179,288,176,288,172,286,175,282,172,278,170,277,170,273,175,272,175,270,174,267,173,263,176,260,173,255,170,258,166,257,165,253,164,248,165,245,165,242,163,237,163,233,164,230,161,228,159,227" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Chatmohar_divColor!=""){echo $Chatmohar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Chatmohar_div_Opac)){echo $Chatmohar_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Chatmohar Upazila &nbsp; <?
if(isset($Chatmohar_div_NoOfFaci)){ echo $Chatmohar_div_NoOfFaci;}
?>" alt="Chatmohar Upazila" coords="193,199,195,197,196,196,198,195,203,191,206,194,208,191,210,188,212,187,215,183,216,178,218,172,216,168,214,165,217,163,219,163,221,164,223,162,225,160,226,155,230,155,232,155,234,151,235,145,231,143,227,140,227,138,229,135,231,131,235,128,237,126,241,126,246,127,249,124,250,121,251,119,254,117,257,113,257,111,260,106,263,103,265,99,268,95,273,96,276,95,274,90,275,85,276,80,276,77,277,73,280,72,284,72,285,69,289,65,292,66,294,66,297,66,300,64,302,60,303,57,304,53,308,52,313,53,318,53,320,53,324,52,328,52,332,53,336,53,340,49,346,50,350,50,353,53,356,56,359,59,356,64,356,67,353,73,354,76,356,76,359,79,359,81,361,85,359,88,359,91,360,94,362,95,364,97,365,100,366,103,367,105,364,108,365,111,368,113,370,115,369,118,368,122,366,124,364,128,361,133,358,131,354,127,352,127,349,131,345,133,344,136,341,140,339,142,335,140,332,139,328,142,325,144,322,146,319,149,320,151,320,153,320,155,318,159,315,159,312,162,309,165,309,167,310,170,313,172,316,172,319,174,321,176,322,179,321,181,318,184,320,184,325,187,327,190,331,192,333,194,336,195,338,197,340,201,341,203,341,208,339,210,335,210,334,212,336,215,339,218,343,220,344,223,342,225,342,227,342,229,344,229,347,230,349,232,352,234,348,236,345,239,344,241,344,246,340,250,342,253,341,255,344,258,346,259,348,259,350,259,349,263,348,266,348,271,348,273,345,276,341,277,339,278,338,281,338,284,338,286,336,290,332,291,330,292,329,292,325,293,322,291,318,295,316,292,312,292,310,289,309,287,306,283,305,280,301,278,298,280,297,282,295,284,292,287,290,288,285,290,281,289,279,289,276,289,273,287,271,285,270,284,270,280,269,277,266,276,263,273,262,272,260,268,260,264,259,259,257,255,256,251,252,247,250,247,246,247,243,252,239,257,234,258,234,253,235,249,235,248,236,242,236,238,237,235,235,233,230,232,226,230,224,230,220,231,218,233,223,237,222,239,219,243,215,247,214,241,212,235,209,231,207,227,203,227,200,227,199,224,199,219,200,212,200,210,198,208,196,208,193,204" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Bangura_divColor!=""){echo $Bangura_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Bangura_div_Opac)){echo $Bangura_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Bangura Upazila &nbsp; <?
if(isset($Bangura_div_NoOfFaci)){ echo $Bangura_div_NoOfFaci;}
?>" alt="Bangura Upazila" coords="326,145,329,143,329,141,332,140,334,140,336,141,338,143,341,141,344,137,346,134,350,132,351,130,353,129,355,129,357,132,359,132,361,132,363,129,366,127,369,122,371,116,367,112,364,110,367,107,366,101,364,98,362,96,360,92,360,89,361,87,360,83,358,79,354,76,353,74,355,68,357,65,359,60,362,61,368,63,371,65,373,65,377,64,377,67,377,70,377,74,378,77,380,79,382,79,385,78,387,78,392,78,396,80,395,84,395,86,398,91,396,94,393,99,394,103,394,105,394,111,396,114,397,117,398,121,402,127,402,132,400,136,399,139,399,142,399,146,401,148,404,149,410,146,415,142,417,138,422,134,425,134,428,136,429,138,430,141,432,146,433,149,433,150,429,155,429,158,428,161,426,164,423,165,419,166,420,169,422,171,426,170,431,170,435,169,438,168,442,167,445,170,445,173,442,176,442,178,439,179,436,178,433,179,433,181,428,181,427,183,423,185,421,183,418,183,416,185,414,187,414,189,415,192,413,197,412,201,408,204,404,201,402,198,400,193,398,187,397,183,395,181,393,181,393,185,394,187,391,192,388,195,386,199,384,204,384,208,381,209,380,211,380,214,378,219,376,223,378,226,378,231,378,234,374,233,376,239,382,242,386,244,386,247,385,250,381,251,379,253,380,256,381,260,379,261,376,262,374,262,373,262,371,260,370,254,370,250,369,247,367,245,364,244,361,244,358,241,354,238,351,235,348,232,343,230,344,224,340,220,337,218,335,214,336,210,339,209,341,206,338,203,338,200,334,196,332,194,328,192,326,190,324,188,320,186,319,183,321,181,322,177,320,175,318,174,316,172,311,172,309,166,313,163,315,162,318,160,320,157,318,153,319,150,323,146,326,145" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Faridpur_divColor!=""){echo $Faridpur_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Faridpur_div_Opac)){echo $Faridpur_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Faridpur Upazila &nbsp; <?
if(isset($Faridpur_div_NoOfFaci)){ echo $Faridpur_div_NoOfFaci;}
?>" alt="Faridpur Upazila" coords="349,236,350,236,353,238,355,239,357,242,360,243,362,244,365,244,369,245,370,248,371,253,371,257,372,260,376,264,380,261,381,258,380,254,381,251,384,250,387,248,387,243,385,242,382,241,379,240,377,237,376,235,379,233,379,229,378,226,377,224,378,222,378,218,380,214,381,211,384,209,385,205,386,201,387,198,388,194,391,193,393,190,393,187,393,184,395,181,397,184,398,191,401,194,404,197,408,202,411,202,412,199,414,195,416,192,416,190,415,187,416,185,420,183,423,184,423,185,427,184,429,181,431,181,433,182,437,186,437,189,438,193,439,196,441,198,445,197,447,196,450,196,452,196,455,197,456,194,455,191,455,188,456,185,459,184,461,184,463,186,466,186,470,184,473,187,475,191,476,194,478,201,482,202,485,202,488,203,490,205,490,208,488,210,484,211,482,213,482,216,482,219,483,221,485,223,487,223,490,226,496,226,499,227,500,232,495,232,493,231,491,231,488,233,490,235,492,237,492,238,495,239,492,244,490,246,490,250,493,252,491,254,487,257,489,259,485,259,482,259,481,261,479,264,476,266,473,270,470,273,469,278,469,280,467,283,461,282,460,280,457,281,455,282,450,283,449,283,447,287,447,289,442,287,434,287,432,289,430,292,427,294,425,294,421,294,420,295,419,298,417,302,415,306,412,308,407,311,405,311,396,312,395,311,392,308,391,304,388,301,390,297,391,297,390,292,387,289,385,285,381,283,383,286,383,288,383,291,378,293,378,291,372,289,368,286,365,284,360,286,358,286,356,284,350,280,347,279,343,279,347,274,348,272,348,269,349,266,352,261,349,258,345,257,343,254,343,251,343,249,344,245,344,241,346,240,347,237" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Santhia_divColor!=""){echo $Santhia_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Santhia_div_Opac)){echo $Santhia_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Santhia Upazila &nbsp; <?
if(isset($Santhia_div_NoOfFaci)){ echo $Santhia_div_NoOfFaci;}
?>" alt="Santhia Upazila" coords="384,373,383,371,383,366,380,362,377,356,381,356,386,354,389,350,391,347,394,344,394,340,394,334,396,328,396,323,394,320,389,316,386,311,386,308,384,304,386,301,389,298,390,301,391,304,393,307,396,311,399,311,401,310,410,310,414,307,417,303,419,299,422,295,424,295,431,293,434,289,437,288,439,288,442,288,445,291,448,289,448,283,451,281,455,281,459,281,462,281,467,283,469,279,471,276,473,272,476,268,481,264,484,261,486,261,489,265,488,268,493,270,494,268,498,269,502,273,504,270,506,270,510,272,512,271,515,271,518,273,521,275,522,277,522,280,518,282,518,283,519,286,521,287,524,290,527,288,530,288,533,287,535,287,538,290,542,292,544,292,547,292,550,295,553,298,555,299,557,299,559,299,561,301,566,301,566,302,566,305,568,306,570,306,570,310,568,312,566,315,568,317,569,321,566,323,564,326,564,329,567,333,568,336,567,339,566,343,563,347,560,348,559,350,556,352,556,354,557,356,558,358,559,359,561,361,562,364,564,366,564,368,566,370,567,372,569,375,569,377,568,380,568,381,569,383,570,385,570,387,570,390,571,391,573,394,573,396,574,397,576,400,576,402,575,404,575,407,576,408,577,410,577,413,575,415,577,416,582,418,580,420,577,421,574,422,571,424,569,426,567,430,566,433,564,436,561,436,559,436,555,436,550,435,547,435,541,434,537,433,533,432,524,429,518,427,511,428,502,432,497,436,492,440,487,438,487,432,483,429,476,431,470,434,466,434,462,431,454,425,450,427,445,432,443,434,439,435,438,431,433,433,431,433,427,433,424,432,423,430,424,426,428,425,429,423,424,420,420,418,416,415,413,412,409,407,406,405,403,404,401,403,397,405,396,408,394,410,392,412,390,413,384,410,382,405,382,400,378,394,382,394,385,393,388,392,388,389,391,384,393,382,391,379,388,379,386,377,385,376" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Bera_divColor!=""){echo $Bera_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Bera_div_Opac)){echo $Bera_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Bera Upazila &nbsp; <?
if(isset($Bera_div_NoOfFaci)){ echo $Bera_div_NoOfFaci;}
?>" alt="Bera Upazila" coords="567,302,570,301,573,303,575,306,578,310,580,311,584,315,586,315,589,313,591,313,595,316,598,317,603,319,607,323,613,328,617,331,619,332,621,334,627,337,629,339,631,341,629,345,630,350,631,353,631,355,631,357,631,360,629,364,632,365,635,362,642,361,647,363,644,364,646,369,648,375,649,376,653,378,656,380,659,383,665,386,660,390,653,394,647,400,643,405,640,411,640,417,639,425,640,430,640,436,641,442,641,450,637,454,634,455,635,459,634,463,633,469,640,469,643,471,643,476,644,482,647,488,645,492,645,496,647,498,649,499,646,503,644,507,647,512,645,515,642,518,643,522,645,524,646,520,649,517,652,520,653,523,656,527,657,529,657,532,661,536,667,542,671,549,676,554,675,565,671,565,667,567,663,570,660,567,657,568,657,571,657,574,652,577,649,580,647,583,643,583,640,581,639,579,635,579,631,582,629,585,626,584,621,583,619,584,615,582,611,582,604,584,597,584,593,582,596,579,597,574,591,574,588,571,585,569,581,567,580,562,577,555,574,551,576,546,577,541,578,534,578,530,574,525,571,521,571,518,574,517,578,513,581,509,577,506,572,502,573,495,570,497,565,499,561,501,557,500,559,495,556,492,553,491,550,489,546,486,545,482,546,481,552,482,557,481,561,481,565,480,569,479,573,479,573,474,572,468,568,464,564,460,559,455,554,452,550,450,546,448,545,446,550,444,554,441,557,438,559,436,564,436,567,431,568,427,571,424,575,423,580,419,576,416,576,412,576,409,575,405,575,400,572,393,571,387,569,385,569,380,569,376,565,370,561,362,558,358,556,354,558,352,561,350,564,346,566,342,567,339,567,335,565,329,564,327,567,324,568,320,566,315,568,311,570,309,564,304,566,302" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Sujanagar_divColor!=""){echo $Sujanagar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Sujanagar_div_Opac)){echo $Sujanagar_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Sujanagar Upazila &nbsp; <?
if(isset($Sujanagar_div_NoOfFaci)){ echo $Sujanagar_div_NoOfFaci;}
?>" alt="Sujanagar Upazila" coords="379,491,384,502,390,511,397,515,403,518,408,526,417,541,421,549,424,557,426,561,434,561,443,561,447,569,454,578,460,578,467,579,471,579,476,579,492,580,495,578,501,580,506,581,510,581,516,581,516,585,517,587,522,588,528,591,532,591,537,589,541,589,543,588,548,584,560,585,568,589,573,591,576,585,579,583,585,583,590,583,595,579,598,575,594,573,587,571,581,566,579,560,574,552,576,541,579,534,576,527,571,521,574,516,580,511,576,504,574,500,572,496,569,498,565,500,561,500,558,500,557,495,553,491,547,486,546,481,550,481,557,482,565,481,572,478,574,478,572,473,572,467,567,461,561,456,551,451,544,448,548,444,554,441,558,437,553,436,544,435,534,432,521,428,514,428,505,430,496,437,491,439,487,437,486,430,477,432,471,434,464,433,461,431,457,427,450,428,442,434,439,433,435,433,430,433,425,432,422,429,427,425,425,421,418,417,411,411,407,406,401,405,395,409,390,413,384,409,381,408,378,411,378,415,381,422,382,428,382,437,383,445,380,451,373,460,366,472,358,484,358,489,364,489,373,490,378,491,380,493,380,495,381,499,383,501" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($PabnaspaceSadar_divColor!=""){echo $PabnaspaceSadar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($PabnaspaceSadar_div_Opac)){echo $PabnaspaceSadar_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Pabna Sadar Upazila &nbsp; <?
if(isset($PabnaspaceSadar_div_NoOfFaci)){ echo $PabnaspaceSadar_div_NoOfFaci;}
?>" alt="Pabna Sadar Upazila" coords="145,411,144,406,143,401,145,395,145,389,145,380,147,372,146,364,143,360,141,355,142,350,142,344,142,337,142,331,142,325,143,321,146,321,155,320,163,318,169,313,174,310,181,307,186,306,193,306,195,305,199,305,203,307,204,310,210,313,212,312,215,312,221,313,226,316,233,318,239,316,241,316,244,316,248,317,258,319,266,324,270,326,273,332,276,335,277,333,280,330,286,331,290,332,294,338,297,342,300,340,304,336,310,332,314,329,320,330,324,335,331,340,338,346,342,348,345,348,349,346,352,345,356,347,356,351,356,354,360,357,364,354,364,348,365,346,369,348,374,352,379,356,382,362,384,370,386,377,391,379,391,382,390,386,389,391,385,394,380,394,381,400,381,407,378,411,377,413,379,416,381,420,381,422,381,429,382,440,381,447,377,455,371,463,366,470,360,480,356,488,350,486,347,486,346,487,346,491,346,495,342,501,337,495,335,496,335,499,334,504,332,506,330,505,328,503,325,503,320,506,314,509,311,510,300,513,295,513,291,508,289,504,289,501,283,499,277,498,273,495,270,493,267,489,267,486,262,483,258,487,259,491,259,495,259,500,259,504,260,509,261,513,254,510,249,503,249,499,247,493,247,485,246,479,244,474,241,472,241,466,240,462,239,458,235,455,230,453,228,449,225,445,225,439,225,435,225,432,225,428,225,424,227,421,224,419,222,417,219,418,213,420,207,420,208,416,209,411,210,406,207,404,200,404,195,405,189,405,184,405,181,406,174,407,174,412,176,414,177,418,177,421,177,426,176,430,175,435,171,437,167,440,158,442,153,439,153,435,149,428,148,422,148,420,147,414,144,412" href="#" />
</map>
</div>