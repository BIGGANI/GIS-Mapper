<?php session_start(); ?>
<!DOCTYPE html>
<head>
<title>GIS Mapper Health</title>
<?php
ini_set ( 'max_execution_time', 1200);
include ("_digi_include.php");
include ("_digi_data_pull.php");
?>
<meta charset="utf-8">
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
<link type="text/css" rel="stylesheet" href="css_file/menu.css" />
	<script type="text/javascript">
        function getXMLHTTP() { //fuction to return the xml http object
            var xmlhttp=false;
            try{
                xmlhttp=new XMLHttpRequest();
            }
            catch(e)	{
                try{
                    xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch(e){
                    try{
                    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                    }
                    catch(e1){
                        xmlhttp=false;
                    }
                }
            }
    
            return xmlhttp;
        }
    
        function getDatabase(databaseId) {
    
            var strURL="indi_list.php?q="+databaseId;
            var req = getXMLHTTP();
    
            if (req) {
    
                req.onreadystatechange = function() {
                    if (req.readyState == 4) {
                        // only if "OK"
                        if (req.status == 200) {
                            document.getElementById('data_indi').innerHTML=req.responseText;
                        } else {
                            alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                        }
                    }
                }
                req.open("GET", strURL, true);
                req.send(null);
            }
        }
            
        function show(id) {
           var e = document.getElementById(id);
           if(e.style.display == 'block')
              e.style.display = 'none';
           else
              e.style.display = 'block';
        }
        
        function goBack()
        {
            window.history.back()
        }
    </script>
        
	<script type="text/javascript">
        $(document).ready(function() {
             $('#clickme').click(function() {
                   $('#lvlpanel_show').fadeToggle('slow', function() {
// Animation complete.
});
             });
        });
    </script>
</head>
<body>
<div class="banner">
<span class="searchpanel"><form method="post"><input type="search" results="0" name="srch" placeholder="Search"></form></span>
</div>
<div style="font-size:20px; width:100%; height:30px; color:green; float:left; margin-left:20px;">
<input type="button" onClick="goBack()" value="Go Back" />
<input type="button" id="clickme" value="Level &amp; Dataview" />
<input type="button" onclick="show('lgnd');" value="Legend Panel" />
</div>
<hr>
<div id="lvlpanel_show" style="display:none;">
    <div class="left-panel">
    <div id="tabs" style="z-index:99;">
    <? echo $here; ?>
        <ul>
            <li><a href="#level">Level</a></li>
            <li><a href="#dataview">Dataview</a></li>
        </ul>
        <div id="level">
        <!---- <input type="text" id="autocomplete" class="required autocomplete" style="font-size:12px;" /> ---->
    <ul id="location">
        <li class="ui-state-disabled"><a href="#">Division</a></li>
        
            <?php
            $div_q=mysql_query("Select * from divisions ORDER BY name ASC");
    while($div_qr=mysql_fetch_object($div_q)){
            ?>
            <li>
            <a href="?page=<? echo $div_qr->division_id;?>&layer=dist"><? echo $div_qr->name; ?></a>
            <ul>
                <li class="ui-state-disabled"><a href="#">District</a></li>
                <?php
            $dis_q=mysql_query("Select * from districts where division_id='$div_qr->division_id' ORDER BY name ASC");
    while($dis_qr=mysql_fetch_object($dis_q)){
            ?>
                <li>
                    <a href="?page=<? echo $dis_qr->district_id;?>&layer=upz"><? echo $dis_qr->name;?></a>
                    <!--<ul>
                        <li class="ui-state-disabled"><a href="#">Upazila</a></li>
                  <?php $upz_q=mysql_query("Select * from upazillas where district_id='$dis_qr->district_id' ORDER BY name ASC");
    while($upz_qr=mysql_fetch_object($upz_q)){ ?>
                        <li><a href="#"><? echo $upz_qr->name;?></a></li>
                     <? } ?> 
                    </ul>-->
                </li>
             <? } ?>
            </ul>
        </li>
        <? } ?>
    </ul>
        </div>
        <div id="dataview">
        <form class="frm" method="post">
        <fieldset>
        <legend>Data Type</legend>
        Select indicator group<br>
        <select name="database" id="database" onChange="getDatabase(this.value)">
                                    <option value="">Select Group</option>
                                    <option value="hrm">Humen Resource</option>
                                    <option value="oth">Others</option>
                                    </select>
                                    
        <div id="data_indi"></div><br>
        </fieldset>
        <fieldset>
        <legend>Select Color</legend>
        Heigh value color<br>
            <input class="color" value="990000" style="width:100px; z-index:99999999;" maxlength="6" name="indi_color2"><br>
        Low value color<br>
        <input class="color" value="1A9955" style="width:100px; z-index:99999999;" maxlength="6" name="indi_color">
        </fieldset>
        
        <fieldset>
        <input type="submit" id="btn" value="View Map" name="dataview">
        <input type="submit" id="btn-reset" value="Reset" name="reset">
        </fieldset>
        </form>
        </div>
    </div>
    </div>
</div>
<div class="right-panel">