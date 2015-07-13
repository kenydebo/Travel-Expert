<!-- 
//---
//--- Author:  Chen Cui
//--- Date Written: May 00, 2015
//--- Class: OOSD-Apr2015 Object Orient Software Design
//--- 
//--- Modified By: Patricia Dumontier
//--- Date Modified: May 14, 2015
//--- Reason for Modification: To integrate into entire project, and add php
//--- 
//--- Modified By: <developer's name>
//--- Date Modified: May 00, 2015
//--- Reason for Modification:
//--- 
-->
<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration - Travel Experts - dPack OOSD</title>

	<?php
		require("head_te.php");
	?>
	
   <script>
	<!-- this part is make sure the customer did not type blank information to send to server.-->
		function validate_part1()
		{
			var myform = document.getElementById("form_registration_part1");
			var message = "";

			var regexp = new RegExp(/^[A-Za-z]+$/i);
			if (!regexp.test(myform.fname.value))
			{
			message += "First Name has an invalid format<br />";
			}

			var regexp = new RegExp(/^[A-Za-z]+$/i);
			if (!regexp.test(myform.lname.value))
			{
			message += "Last Name has an invalid format<br />";
			}

			var regexp = new RegExp(/^[0-9]+$/i);
			if (!regexp.test(myform.homephone.value))
			{
			message += "Home Phone Number has an invalid format<br />";
			}

			var regexp = new RegExp(/^[0-9]+$/i);
			if (!regexp.test(myform.businessphone.value))
			{
			message += "Business Phone Number has an invalid format<br />";
			}

			if (message == "")
			{
			 return confirm("Continue submitting?");
			}

			else
			{
			document.getElementById("error").innerHTML = message;
			return false;
			}
		}

		function validate_part2()
		{
			var myform = document.getElementById("form_registration_part1");
			var message = "";

			var regexp = new RegExp(/^[0-9]* ?[A-Za-z]+$/i);
			if (!regexp.test(myform.address.value))
			{
			message += "Address has an invalid format<br />";
			}

			var regexp = new RegExp(/^[A-Za-z]+$/i);
			if (!regexp.test(myform.city.value))
			{
			message += "City has an invalid format<br />";
			}

			if (myform.prov.value == "")
			{
			message += "Province must have a value<br />";
			}

			var regexp = new RegExp(/^[A-Z][0-9][A-Z]\s?\d[A-Z]\d$/i);
			if (!regexp.test(myform.postal.value))
			{
			message += "Postal has an invalid format<br />";
			}

			var regexp = new RegExp(/^[A-Za-z]+$/i);
			if (!regexp.test(myform.country.value))
			{
			message += "Country has an invalid format<br />";
			}

			if (message == "")
			{
			 return confirm("Continue submitting?");
			}

			else
			{
			document.getElementById("error").innerHTML = message;
			return false;
			}
		}

		function validate_part3()
		{
			var myform = document.getElementById("form_registration_part1");
			var message = "";

			if (myform.travel.value == "")
			{
			message += "Kind of travel must have a value<br />";
			}

			var regexp = new RegExp(/^[A-Za-z]+$/i);
			if (!regexp.test(myform.tripstart.value))
			{
			message += "Trip Start has an invalid format<br />";
			}

			var regexp = new RegExp(/^[A-Za-z]+$/i);
			if (!regexp.test(myform.tripend.value))
			{
			message += "Trip End has an invalid format<br />";
			}

			if (myform.description.value == "")
			{
			message += "Description must have a value<br />";
			}

			var regexp = new RegExp(/^[A-Za-z]+$/i);
			if (!regexp.test(myform.destination.value))
			{
			message += "Destination has an invalid format<br />";
			}

			if (myform.departingdate.value == "")
			{
			message += "Departing Date must have a value<br />";
			}

			if (myform.returningdate.value == "")
			{
			message += "Returning Date must have a value<br />";
			}

			if (myform.card.value == "")
			{
			message += "Which card must have a value<br />";
			}

			var regexp = new RegExp(/^[0-9]+$/i);
			if (!regexp.test(myform.creditcardnumber.value))
			{
			message += "Credit Card Number has an invalid format<br />";
			}

			if (myform.creditcardexpiryday.value == "")
			{
			message += "Credit Card Expiry Day must have a value<br />";
			}

			if (message == "")
			{
			 return confirm("Continue submitting?");
			}

			else
			{
			document.getElementById("error").innerHTML = message;
			return false;
			}
		}

   </script>
</head>
<body>
	<?php
		require("header_te.php");
	?>


	<?php
		require("header_plus_te.php");
	?>
	

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<!-- REGISTRATION - PART 1 -->
				<div class="row">
					<?php
						require("registration_form01.php");
					?>
				</div>
				<!-- /REGISTRATION - PART 1 -->
				<!-- REGISTRATION - PART 2 -->
				<div class="row">
					<?php
						require("registration_form02.php");
					?>
				</div>
				<!-- /REGISTRATION - PART 2 -->
			</div>
			<div class="col-md-3">
			</div>
		</div>
	</div>
				
				
	<!-- BOOKING FORM -->
	<?php
		require("booking.php");
	?>
				
	<!-- REGISTRATION - PART 3 -->
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<?php
				require("registration_form03.php");
			?>
			</div>
		</div>
	</div>
	<!-- /REGISTRATION - PART 3 -->
	
	<?php
		require("footer_te.php");
	?>

	<?php
		require("javascript_te.php");
	?>
	
</body>
</html>
