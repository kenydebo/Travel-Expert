<!-- 
//---
//--- Author: Patricia Dumontier
//--- Date Written: May 12, 2015
//--- Class: OOSD-Apr2015 Object Orient Software Design
//--- 
//--- Modified By: <developer's name>
//--- Date Modified: May 00, 2015
//--- Reason for Modification:
//--- 
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Travel Experts - dPack OOSD</title>

	<?php
		require("head_te.php");
	?>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body class="home">
	<?php
		require("header_te.php");
	?>

	<?php
		require("header_plus_te.php");
	?>

	<!-- BOOKING FORM -->
	<?php
		require("booking.php");
	?>


	<!-- SPECIALS -->
<div class="container">
    <div class="row">
		<div class="col-md-3">            
		<?php
			require("special_01.php");
		?>
		</div>
		<div class="col-md-3">            
		<?php
			require("special_02.php");
		?>
		</div>
		<div class="col-md-3">            
		<?php
			require("special_03.php");
		?>
		</div>
		<div class="col-md-3">            
		<?php
			require("special_04.php");
		?>
		</div>
	</div>
</div>

  
	<?php
		require("quotes.php");
	?>
  
  
	<?php
		require("footer_te.php");
	?>

	<?php
		require("javascript_te.php");
	?>

</body>
</html>