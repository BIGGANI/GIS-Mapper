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

<img class="map" src="./upz/blnk.jpg" height="700px" width="700px" usemap="#dist_Habiganj" />
<map name="dist_Habiganj">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Nabiganj_divColor!=""){echo $Nabiganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Nabiganj_div_Opac)){echo $Nabiganj_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Nabiganj Upazila &nbsp; <?
if(isset($Nabiganj_div_NoOfFaci)){ echo $Nabiganj_div_NoOfFaci;}
?>" alt="Nabiganj Upazila" coords="335,53,337,49,337,45,342,46,345,43,348,38,352,38,353,42,354,49,357,45,360,46,364,52,364,56,365,61,368,65,371,61,372,54,380,52,385,50,385,58,388,53,394,49,400,52,400,45,408,49,411,48,417,51,421,51,429,51,434,51,434,56,436,57,438,54,444,54,443,63,443,64,451,59,452,53,456,49,460,57,462,58,463,53,469,58,473,59,475,66,476,72,481,69,481,62,478,56,470,54,472,48,479,47,481,45,482,51,486,57,489,57,490,52,497,49,503,49,507,45,512,51,518,63,524,57,520,49,525,46,531,46,540,42,541,49,533,55,531,59,529,60,529,65,528,70,533,74,525,85,522,87,529,90,537,91,543,91,545,96,546,101,546,105,547,108,547,113,546,119,544,124,536,119,530,121,523,120,524,126,518,124,518,117,513,115,508,119,502,125,502,128,506,128,512,127,517,130,514,134,515,138,522,137,521,145,525,149,530,147,526,155,531,156,532,162,536,163,534,167,529,170,524,166,524,169,526,176,528,179,524,183,521,182,522,189,514,191,510,193,510,198,509,203,505,208,506,211,505,216,505,221,503,227,503,234,504,239,500,247,502,255,499,263,496,271,488,266,479,264,470,263,466,263,456,257,458,252,461,246,460,240,455,238,453,236,450,239,445,235,441,238,437,240,431,235,428,233,425,231,418,232,417,237,413,242,407,246,406,248,399,247,387,245,379,247,380,241,385,236,385,232,392,225,386,221,391,218,384,214,391,211,395,206,386,203,383,195,387,197,395,199,394,194,395,191,397,188,398,183,406,181,412,174,402,168,408,165,408,161,404,158,394,160,382,160,378,162,375,157,375,154,374,146,373,138,373,132,373,124,369,122,361,119,363,111,357,104,358,94,358,85,355,77,351,72,344,72,334,69,327,69,330,61,335,59,336,53" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Bahubal_divColor!=""){echo $Bahubal_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Bahubal_div_Opac)){echo $Bahubal_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Bahubal Upazila &nbsp; <?
if(isset($Bahubal_div_NoOfFaci)){ echo $Bahubal_div_NoOfFaci;}
?>" alt="Bahubal Upazila" coords="401,407,403,402,400,394,402,389,403,385,396,379,394,374,390,364,387,359,388,349,391,347,392,341,398,336,395,332,399,325,396,319,394,317,392,306,385,302,383,296,384,289,391,286,393,284,393,276,398,272,398,265,402,260,407,261,411,263,407,253,408,248,412,242,417,237,420,232,428,233,433,237,435,240,444,240,446,236,448,240,455,237,461,242,461,247,456,257,462,261,470,263,487,265,494,270,500,261,504,256,509,260,507,266,506,271,508,275,498,276,496,277,495,282,494,291,495,295,496,303,495,310,495,319,496,324,502,326,513,324,513,328,512,332,514,339,518,345,519,357,521,366,521,373,517,379,513,388,508,395,505,400,499,402,488,402,482,402,474,402,470,406,464,405,458,403,453,402,450,406,443,405,439,407,436,410,435,418,437,420,434,425,430,423,428,418,427,413,421,410,419,413,420,418,418,420,415,414,412,413,408,418,404,417,400,410,400,408" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Chunarughat_divColor!=""){echo $Chunarughat_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Chunarughat_div_Opac)){echo $Chunarughat_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Chunarughat Upazila &nbsp; <?
if(isset($Chunarughat_div_NoOfFaci)){ echo $Chunarughat_div_NoOfFaci;}
?>" alt="Chunarughat Upazila" coords="319,427,319,421,322,416,326,417,333,428,343,433,350,434,353,434,359,433,368,432,372,427,370,424,378,421,382,418,387,414,387,409,394,412,395,412,400,409,402,414,408,417,412,412,415,417,417,419,421,415,421,412,424,410,428,414,428,421,434,425,436,421,437,414,437,410,448,404,455,403,466,405,478,400,486,402,491,402,501,402,509,399,509,408,508,412,509,418,510,422,506,427,508,434,510,440,510,446,514,453,516,459,519,466,522,470,523,477,528,477,528,483,530,488,532,493,536,497,535,506,537,513,532,521,530,527,532,536,532,543,534,549,533,553,530,557,527,564,522,566,515,569,510,572,501,569,495,568,496,574,498,579,494,582,493,586,489,588,480,585,475,587,465,586,460,586,447,588,437,583,433,581,425,577,418,578,414,573,411,567,405,568,398,567,396,565,386,569,383,567,373,565,366,565,362,565,361,558,362,553,366,546,367,543,356,535,349,530,349,527,346,515,346,510,342,508,334,509,327,507,322,506,322,500,320,493,315,489,314,484,306,480,303,474,306,469,307,464,310,458,313,451,315,445,317,440,320,433,318,426,315,423" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Baniachong_divColor!=""){echo $Baniachong_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Baniachong_div_Opac)){echo $Baniachong_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Baniachong Upazila &nbsp; <?
if(isset($Baniachong_div_NoOfFaci)){ echo $Baniachong_div_NoOfFaci;}
?>" alt="Baniachong Upazila" coords="277,57,279,53,283,53,286,57,286,59,297,54,295,49,295,45,288,44,285,38,291,36,303,39,307,39,316,34,318,37,320,42,321,46,321,47,324,50,326,50,327,53,333,54,335,54,333,60,329,62,328,67,329,69,336,69,343,72,349,74,354,77,359,84,359,91,358,98,358,104,361,108,363,113,363,116,363,120,372,125,373,131,372,137,374,143,374,149,375,157,378,162,392,161,398,160,404,160,407,164,402,168,408,173,409,176,406,179,402,182,396,185,396,189,394,192,394,195,395,198,385,196,382,200,387,205,400,205,395,207,390,211,387,212,385,217,390,218,387,221,383,221,391,226,389,227,385,231,384,238,380,241,378,245,383,249,380,254,378,259,375,263,382,266,381,272,373,270,369,267,366,267,368,273,375,277,380,283,377,285,374,285,371,288,367,283,362,281,360,282,361,287,361,290,357,291,353,297,349,291,343,295,338,293,331,295,329,296,326,300,328,305,318,301,313,297,309,296,308,299,312,305,315,305,316,310,305,305,301,304,294,304,291,304,286,304,280,307,278,311,275,315,279,324,272,325,269,321,264,323,257,326,245,325,240,331,234,333,228,332,225,337,218,339,214,340,214,335,211,331,204,331,198,329,202,325,205,323,201,318,202,315,208,318,212,316,210,311,208,309,206,306,201,297,199,291,192,290,184,289,179,292,179,294,180,285,183,282,183,276,181,270,188,265,193,271,199,273,201,267,199,261,197,255,198,247,198,240,194,229,187,223,182,219,197,219,202,217,204,216,205,222,209,223,217,223,219,223,221,217,217,211,224,211,227,219,227,222,230,225,231,229,236,231,242,233,249,229,251,225,262,225,254,221,255,219,253,215,249,210,251,206,255,209,258,210,260,203,261,200,271,196,267,188,268,184,265,180,263,176,255,176,253,175,253,168,255,164,259,163,263,164,266,164,274,160,280,164,286,167,293,164,295,156,298,149,297,142,301,137,299,131,291,130,288,125,289,120,294,120,297,121,301,118,306,115,308,110,312,108,314,101,304,95,294,93,290,96,291,89,299,81,296,77,296,74,284,72,278,70,275,65,278,55,277,60" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Azmiriganj_divColor!=""){echo $Azmiriganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Azmiriganj_div_Opac)){echo $Azmiriganj_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Azmiriganj Upazila &nbsp; <?
if(isset($Azmiriganj_div_NoOfFaci)){ echo $Azmiriganj_div_NoOfFaci;}
?>" alt="Azmiriganj Upazila" coords="277,54,277,60,277,64,279,70,280,73,290,73,295,76,297,80,297,84,291,89,291,96,292,93,306,93,306,98,312,100,314,107,309,110,308,113,304,117,297,118,289,120,289,127,292,131,299,133,298,140,299,148,298,154,293,158,291,166,284,164,276,159,271,161,263,163,259,162,253,167,252,173,256,178,263,178,266,184,268,191,269,196,263,200,259,203,257,208,254,204,250,203,250,210,255,216,254,222,260,226,248,229,247,230,240,234,234,229,233,225,228,219,225,213,223,206,220,208,220,217,220,222,215,223,207,219,209,215,202,215,196,217,190,217,184,217,186,223,185,227,186,232,177,228,172,233,169,239,166,242,158,240,158,234,164,231,166,229,163,225,157,225,152,224,143,224,139,226,132,229,130,230,132,224,137,220,144,214,139,215,144,213,147,210,151,215,153,215,160,210,167,205,168,199,176,196,178,187,183,180,184,174,186,166,187,157,191,150,199,143,204,137,210,138,215,133,217,127,219,116,221,113,226,109,226,115,234,119,239,119,241,113,246,105,243,102,246,96,254,93,248,85,249,77,249,69,249,64,255,66,259,71,266,67,272,62,275,53" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($HobiganjspaceSadar_divColor!=""){echo $HobiganjspaceSadar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($HobiganjspaceSadar_div_Opac)){echo $HobiganjspaceSadar_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Hobiganj Sadar Upazila &nbsp; <?
if(isset($HobiganjspaceSadar_div_NoOfFaci)){ echo $HobiganjspaceSadar_div_NoOfFaci;}
?>" alt="Hobiganj Sadar Upazila" coords="262,327,267,322,271,322,276,327,279,325,279,320,278,314,279,308,285,306,295,306,310,307,315,310,311,302,309,300,311,296,319,299,322,304,327,304,329,297,337,293,344,294,351,292,353,295,361,290,362,285,365,282,370,283,371,287,379,284,376,278,369,275,368,266,374,270,378,271,383,267,377,264,377,257,381,251,383,247,389,246,396,246,402,250,407,251,410,258,410,262,405,262,404,262,400,266,398,268,399,272,393,277,392,282,389,285,384,290,384,294,385,301,390,308,393,314,397,320,398,322,397,329,396,336,392,341,392,346,389,351,387,356,389,365,394,373,396,379,404,384,400,392,402,397,402,403,399,410,397,411,389,410,389,413,387,417,381,419,376,422,373,423,369,425,372,428,369,431,360,432,353,434,345,435,337,430,332,427,325,417,320,417,320,424,318,427,313,423,309,422,303,422,298,422,292,420,288,415,285,413,285,403,284,398,283,391,282,382,283,376,286,373,287,365,285,362,287,356,283,352,287,343,284,339,279,340,276,341,271,341,268,339,264,333,260,328" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Madhabpur_divColor!=""){echo $Madhabpur_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Madhabpur_div_Opac)){echo $Madhabpur_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Madhabpur Upazila &nbsp; <?
if(isset($Madhabpur_div_NoOfFaci)){ echo $Madhabpur_div_NoOfFaci;}
?>" alt="Madhabpur Upazila" coords="284,413,287,417,293,419,298,422,305,421,312,420,316,426,319,427,320,431,318,438,313,446,313,453,309,461,306,468,303,472,307,479,310,483,315,486,317,494,321,496,322,505,328,508,343,509,345,517,346,523,347,530,353,534,359,538,365,541,365,547,363,553,360,558,349,557,343,557,335,559,322,560,316,562,315,573,317,582,320,591,325,596,327,603,330,609,335,616,331,628,326,635,322,645,317,652,317,659,319,663,320,669,320,676,321,677,315,676,306,671,304,670,298,675,291,669,289,672,282,663,281,662,269,664,264,665,259,659,253,656,252,654,254,648,257,647,258,644,261,640,259,632,266,630,263,620,260,616,257,611,257,603,249,603,240,601,244,594,242,589,245,585,247,579,249,574,244,572,243,573,237,576,234,571,233,570,227,571,231,564,230,557,240,560,235,555,239,556,241,552,245,554,249,551,242,547,236,545,233,544,230,533,231,529,223,528,224,523,228,519,230,513,235,516,235,498,240,492,243,489,251,487,258,485,263,490,267,483,265,471,261,472,259,477,253,472,247,477,243,480,239,479,236,478,237,471,241,468,243,461,248,465,252,462,252,456,258,458,260,453,263,451,266,452,270,448,275,447,274,443,277,436,278,433,274,425,271,420,280,417,282,412" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Lakhai_divColor!=""){echo $Lakhai_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Lakhai_div_Opac)){echo $Lakhai_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Lakhai Upazila &nbsp; <?
if(isset($Lakhai_div_NoOfFaci)){ echo $Lakhai_div_NoOfFaci;}
?>" alt="Lakhai Upazila" coords="200,325,199,330,205,330,213,331,214,335,215,338,223,338,225,335,229,332,238,333,243,331,243,327,249,327,260,326,267,323,262,330,263,333,270,337,271,341,280,340,284,340,287,346,285,349,287,355,290,358,289,362,288,368,286,373,284,377,282,382,284,391,284,400,285,405,285,410,278,418,271,418,264,419,257,415,253,417,247,426,240,433,236,438,233,444,235,451,239,453,232,455,230,455,224,455,219,456,213,454,208,453,201,450,198,450,194,446,188,443,185,450,179,445,177,446,170,444,169,444,165,439,158,437,157,433,151,427,148,423,154,417,160,412,161,405,162,399,164,394,157,393,152,394,147,396,143,398,135,398,130,400,132,393,136,388,139,382,140,375,144,370,153,370,158,370,164,370,171,370,178,373,185,375,193,376,197,370,193,363,193,355,191,350,187,343,183,339,175,334,179,327,184,326,192,327,196,326,199,325" href="#" />
</map>
</div>
