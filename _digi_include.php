<link rel="stylesheet" type="text/css" href="css_file/_digi_css.css" />


<!----<link rel="stylesheet" href="jquery.treeview.css" />
	<script type="text/javascript" src="./lib/jquery.min.js"></script>
	<script src="./lib/jquery.cookie.js" type="text/javascript"></script>
	<script src="jquery.treeview.js" type="text/javascript"></script>
	<script type="text/javascript" src="./main/demo.js"></script>--->


<!----- Jq include Start --------->
<link href="css/digihealth_jq_theme/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<link rel="stylesheet" href="development-bundle/themes/digihealth_jq_theme/jquery.ui.all.css" />
	<script src="js/jquery-1.8.3.js"></script>
	<script src="js/jquery-ui-1.9.2.custom.js"></script>
    <script src="development-bundle/ui/jquery.ui.accordion.js"></script>
    <script src="development-bundle/ui/jquery.ui.button.js"></script>
	
    <style>
    .ui-menu { width: 150px; }
    </style>
	<script>
	$(function() {
		$( "#btn-reset" ).button();
		$( "#btn" ).button();
        $( "#location" ).menu();
		
		$( "#accordion" ).accordion();
		
		var availableTags = [
			"<?php echo "ActionScript";?>",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
		$( "#autocomplete" ).autocomplete({
			source: availableTags
		});

		
		$( "#button" ).button();
		$( "#radioset" ).buttonset();
		

		
		$( "#tabs" ).tabs();
		

		
		$( "#dialog" ).dialog({
			autoOpen: false,
			width: 400,
			buttons: [
				{
					text: "Ok",
					click: function() {
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Cancel",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});

		// Link to open the dialog
		$( "#dialog-link" ).click(function( event ) {
			$( "#dialog" ).dialog( "open" );
			event.preventDefault();
		});
		

		
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
		$( "#slider" ).slider({
			range: true,
			values: [ 17, 67 ]
		});
		

		
		$( "#progressbar" ).progressbar({
			value: 20
		});
		

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
		
	</script>
<!----- Jq include END --------->

<!---------- JS colorpicker start ------------->
<script type="text/javascript" src="jscolor/jscolor.js"></script>
<!---------- JS colorpicker END ------------->
<?php
include ("_digi_q.php");
?>
<!---------- Map Heightlight Start ------------->
<script type="text/javascript" src="maphilight/jquery.maphilight.js"></script>
	<script type="text/javascript">
	$(function() {
		$('.map').maphilight({fade: false});
	});
    </script>
<!---------- Map Heightlight END ------------->
