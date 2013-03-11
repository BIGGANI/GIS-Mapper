<?php
include ("_digi_config.php");

include("_digi_header.php");

if($page==""){
	include("$default_page"); 	}
else {
	if(file_exists($Paction)){
		include("$Paction");	}
	else {
		include("$error404");	}
  	}
include("_digi_footer.php"); 
?>