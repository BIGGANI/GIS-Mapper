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

<img class="map" src="./upz/blnk.jpg" height="700px" width="700px" usemap="#dist_Jhenai" />
<map name="dist_Jhenai">

  <area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Harinakunda_divColor!=""){echo $Harinakunda_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Harinakunda_div_Opac)){echo $Harinakunda_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Harinakunda Upazila &nbsp; <?
if(isset($Harinakunda_div_NoOfFaci)){ echo $Harinakunda_div_NoOfFaci;}
?>" alt="Harinakunda Upazila" coords="303,262,303,255,306,248,312,243,317,239,322,233,323,224,325,216,330,210,327,201,324,192,327,192,328,185,333,179,328,175,327,169,325,161,327,156,326,150,328,144,326,138,329,131,333,124,337,128,338,131,344,135,350,137,358,137,362,132,366,125,367,119,366,114,361,112,356,110,358,106,362,103,366,105,369,108,373,110,377,111,383,109,387,107,391,101,388,99,382,98,379,95,377,90,376,83,373,77,370,73,370,68,375,64,381,62,385,62,388,65,386,71,383,74,390,75,397,75,398,75,401,79,400,85,402,88,407,86,411,91,413,95,412,103,413,107,419,104,423,98,426,96,432,98,433,102,431,107,431,112,428,118,426,124,428,129,431,135,434,141,437,146,433,152,427,155,424,159,423,164,423,169,430,171,436,172,438,178,440,181,445,184,449,186,454,187,461,189,459,194,456,202,456,206,461,209,465,214,466,221,466,226,473,223,473,226,475,229,480,230,482,233,477,237,478,239,484,244,485,248,489,250,491,252,489,257,488,260,486,262,481,262,481,255,477,251,474,250,469,248,464,246,466,252,461,254,461,258,458,259,457,263,457,268,459,269,454,274,451,277,447,280,442,282,439,281,436,276,438,271,440,269,438,263,437,262,434,266,433,272,434,278,434,281,434,286,432,287,427,287,424,287,422,285,422,280,421,279,419,276,416,271,421,267,410,265,408,260,410,255,406,258,402,259,399,255,395,252,390,249,385,245,383,246,376,247,372,249,368,252,368,259,366,263,362,264,359,259,354,259,352,258,356,252,358,247,362,245,363,241,357,241,354,245,349,248,349,253,347,256,345,261,345,267,344,269,337,267,331,264,328,264,324,261,322,257,317,255,314,256,308,260,303,261" href="#" />
  <area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Sailkupa_divColor!=""){echo $Sailkupa_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Sailkupa_div_Opac)){echo $Sailkupa_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Sailkupa Upazila &nbsp; <?
if(isset($Sailkupa_div_NoOfFaci)){ echo $Sailkupa_div_NoOfFaci;}
?>" alt="Sailkupa Upazila" coords="491,251,488,249,486,246,484,243,479,240,481,235,483,231,479,229,477,229,475,225,468,226,466,217,464,213,459,207,456,204,460,194,462,187,455,187,446,185,442,183,438,176,437,173,429,170,423,168,424,162,427,157,433,153,436,148,431,139,429,131,427,125,428,118,431,113,434,112,439,111,447,111,453,107,459,109,460,112,467,112,470,106,470,99,476,97,478,92,482,92,484,87,488,85,492,84,501,89,505,88,511,83,508,88,514,88,516,84,520,81,521,80,525,75,529,74,535,75,540,77,544,76,546,73,550,72,552,70,557,71,562,75,568,82,570,86,573,90,578,92,585,95,591,99,598,99,606,100,612,103,617,106,618,109,617,115,621,120,625,121,627,125,627,131,628,136,634,140,637,142,639,147,644,150,649,152,653,156,652,163,652,166,657,167,660,167,663,168,666,171,668,175,673,174,676,174,675,181,673,183,671,186,669,191,665,192,664,196,661,198,658,200,661,206,660,210,657,217,657,220,654,224,651,226,648,232,649,237,648,242,645,247,643,252,646,254,648,257,647,261,643,266,642,271,641,273,635,274,632,275,628,275,625,275,623,271,621,268,616,266,613,266,609,262,607,262,607,256,607,255,601,254,596,252,591,249,584,247,579,247,576,252,578,257,577,259,569,261,565,262,564,264,561,265,557,266,554,266,551,268,545,268,542,268,539,261,539,258,539,256,534,254,531,252,528,248,523,249,520,250,516,249,511,245,505,242,500,241,500,245,500,246,504,250,503,253,502,255,497,252,495,250,493,250" href="#" />
  <area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($JhenaidahspaceSadar_divColor!=""){echo $JhenaidahspaceSadar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($JhenaidahspaceSadar_div_Opac)){echo $JhenaidahspaceSadar_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Jhenaidah Sadar Upazila &nbsp; <?
if(isset($JhenaidahspaceSadar_div_NoOfFaci)){ echo $JhenaidahspaceSadar_div_NoOfFaci;}
?>" alt="Jhenaidah Sadar Upazila" coords="304,263,308,259,315,256,320,256,323,261,327,266,335,267,342,268,345,269,346,262,345,256,350,253,351,248,356,245,361,241,364,242,358,248,355,251,354,256,353,258,359,260,363,264,368,264,370,258,370,252,374,248,381,248,388,246,393,253,397,256,401,257,408,257,411,257,406,263,410,265,413,267,417,267,420,267,418,272,418,274,420,279,421,285,423,288,432,288,434,280,434,272,436,264,440,265,440,273,438,277,443,281,449,281,451,278,458,272,459,268,458,264,460,259,463,254,465,249,475,251,479,256,481,263,487,262,490,254,492,251,499,253,502,256,504,253,502,247,501,242,508,243,511,246,515,250,519,251,524,248,529,248,531,253,537,256,539,263,539,267,547,267,555,268,559,267,566,266,571,260,576,260,579,254,580,250,584,247,591,250,598,252,604,254,607,257,608,262,615,264,618,268,624,272,625,278,624,283,619,287,621,293,617,297,613,300,612,308,609,314,610,319,613,323,608,329,612,332,614,335,613,339,607,338,607,342,607,346,610,348,611,354,613,359,612,365,613,371,610,375,610,380,609,386,606,387,606,390,602,392,598,396,597,399,591,402,585,404,582,405,574,404,570,403,566,403,564,409,563,413,557,413,552,412,552,407,550,401,546,398,542,397,541,395,536,399,531,401,527,404,524,405,520,405,517,409,515,410,510,408,503,408,500,408,496,408,491,407,485,406,482,406,480,403,474,401,469,400,464,397,459,398,452,398,450,394,449,392,444,388,445,383,441,377,438,372,432,374,432,378,428,380,426,385,427,389,426,394,421,398,417,400,409,398,405,397,403,399,396,394,392,388,389,384,384,379,377,379,370,379,365,375,363,370,361,365,356,360,351,356,343,358,338,356,336,353,330,346,327,341,321,337,318,331,310,333,309,333,304,326,301,334,299,335,295,328,296,324,292,319,289,317,290,310,287,305,284,302,280,300,275,297,270,293,264,295,261,294,265,290,266,286,271,284,278,284,286,285,290,289,295,288,291,282,294,277,298,273,301,268,304,264" href="#" />  
  <area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Kaliganj_divColor!=""){echo $Kaliganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Kaliganj_div_Opac)){echo $Kaliganj_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Kaliganj Upazila &nbsp; <?
if(isset($Kaliganj_div_NoOfFaci)){ echo $Kaliganj_div_NoOfFaci;}
?>" alt="Kaliganj Upazila" coords="357,472,361,468,364,465,366,462,366,458,363,453,364,447,369,447,371,447,373,442,375,437,377,437,382,441,382,438,382,433,385,430,390,429,394,428,397,424,392,422,387,417,386,414,385,408,392,411,394,411,398,410,398,404,402,400,406,399,411,401,414,401,419,400,424,396,427,389,427,383,432,377,435,374,438,377,445,384,445,391,449,393,452,397,457,398,462,397,469,399,472,402,478,402,484,406,492,407,496,407,504,408,506,407,511,412,517,406,522,407,528,405,535,399,540,397,546,399,550,401,552,411,556,413,559,413,565,410,569,410,575,414,579,416,572,423,568,425,566,430,569,436,570,436,563,441,561,442,561,447,562,449,559,454,557,455,558,461,558,463,554,465,555,468,561,472,563,473,560,480,558,484,556,489,558,493,558,495,558,500,559,503,551,503,546,499,546,501,546,507,548,508,551,511,549,516,545,520,539,524,536,520,531,522,528,524,523,526,519,521,518,527,514,532,514,536,516,542,514,546,511,550,510,556,505,557,497,559,489,559,484,558,480,560,480,564,477,566,472,566,466,566,461,563,458,566,459,572,457,575,450,572,446,571,444,575,441,575,438,573,433,571,429,570,425,565,424,559,423,555,420,555,416,556,414,551,410,548,406,544,401,540,396,540,389,541,385,544,381,546,376,548,373,551,371,554,368,555,363,555,364,551,367,548,372,543,376,540,380,537,382,534,381,528,380,523,376,519,373,514,371,509,378,502,382,501,386,496,386,492,384,488,383,486,373,486,370,489,365,488,361,487,358,483,359,479,358,474" href="#" />
  <area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Kotchandpur_divColor!=""){echo $Kotchandpur_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Kotchandpur_div_Opac)){echo $Kotchandpur_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Kotchandpur Upazila &nbsp; <?
if(isset($Kotchandpur_div_NoOfFaci)){ echo $Kotchandpur_div_NoOfFaci;}
?>" alt="Kotchandpur Upazila" coords="281,301,285,302,288,305,290,310,290,316,291,319,295,323,296,330,297,333,301,333,304,328,305,328,308,333,312,331,318,331,320,336,324,339,328,342,333,348,334,354,338,356,346,357,352,357,356,361,363,368,364,374,364,378,374,379,381,379,387,383,392,389,398,393,399,398,398,403,399,407,394,411,391,409,387,408,387,413,387,418,392,420,394,422,394,425,389,429,382,431,382,437,382,441,377,437,373,439,373,443,371,445,367,448,365,452,367,458,367,462,360,467,357,469,353,472,349,472,345,468,340,469,337,467,335,464,331,464,329,460,327,454,325,450,324,442,323,436,316,437,315,443,315,449,314,454,311,460,309,465,303,462,305,456,305,447,303,444,296,445,290,448,285,448,278,448,274,443,268,445,264,442,262,439,258,432,255,429,251,422,251,415,254,410,262,410,265,404,260,399,257,397,245,399,240,400,238,400,244,394,248,391,249,385,249,380,253,378,256,373,257,369,262,364,266,358,263,351,263,344,264,337,265,332,266,323,270,318,276,312,278,307,278,304,276,297,273,296,269,294,264,295,278,300,284,301,287,304" href="#" />
  <area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Moheshpur_divColor!=""){echo $Moheshpur_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Moheshpur_div_Opac)){echo $Moheshpur_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Moheshpur Upazila &nbsp; <?
if(isset($Moheshpur_div_NoOfFaci)){ echo $Moheshpur_div_NoOfFaci;}
?>" alt="Moheshpur Upazila" coords="252,427,257,432,260,435,263,440,265,444,272,445,274,443,277,449,282,448,291,448,297,446,300,445,303,446,306,453,304,458,304,462,310,467,311,460,314,456,316,447,315,441,320,439,327,439,325,449,325,454,328,460,334,466,338,470,333,472,330,475,335,480,339,480,342,486,345,488,352,490,348,496,339,496,333,499,329,503,321,505,317,501,315,502,310,503,305,503,297,503,291,508,285,510,283,516,279,519,282,526,282,529,282,534,280,541,281,548,284,553,281,559,274,563,270,563,266,561,260,561,253,558,250,566,245,567,237,568,231,565,226,568,233,574,234,578,231,583,227,585,225,589,228,592,232,596,228,601,221,602,215,601,212,601,211,608,211,614,208,618,207,622,202,617,197,615,194,614,189,614,180,612,175,612,169,619,169,612,164,609,163,606,157,608,148,611,147,607,153,603,149,599,143,594,138,592,135,596,135,601,132,606,132,613,134,619,135,624,132,627,126,629,119,628,114,626,110,624,108,627,103,623,100,620,103,611,101,603,96,601,89,600,86,604,79,604,75,599,71,599,65,597,60,594,54,591,49,590,49,583,52,578,49,572,42,568,39,562,39,558,33,556,29,553,25,554,25,546,25,542,33,536,37,535,33,539,38,539,41,538,45,543,49,545,56,545,52,538,53,534,55,527,58,526,58,533,61,536,63,540,69,537,73,533,76,528,74,524,72,519,71,514,64,515,61,511,64,506,63,499,59,494,58,489,67,492,68,490,69,488,76,489,82,492,86,489,79,484,74,482,77,478,85,483,90,478,92,472,92,468,99,466,97,471,99,474,106,466,109,461,112,460,117,464,123,467,127,463,134,456,138,452,142,452,146,458,151,463,153,454,157,452,162,456,165,459,170,460,176,460,176,457,178,463,178,465,182,465,185,460,188,456,193,455,197,450,198,443,201,436,204,434,209,435,214,431,219,430,226,432,230,433,238,432,241,430,236,424,232,423,231,419,237,418,244,421,247,423,250,424" href="#" />
</map>
</div>