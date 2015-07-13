<!-- 
//---
//--- Author: <Dwija Dholakia>
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
	$dbh = mysqli_connect("localhost","root","","travelexperts") or die("Error: " . mysqli_connect_error());
	
	//--- RETRIVE ALL AGENTS
	$sql = "select * from agents";
	$result = mysqli_query($dbh, $sql) or die("Error: " . msqli.error($dbh));

	mysqli_close($dbh);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact us - Travel Experts - dPack OOSD</title>

	<?php
		require("head_te.php");
	?>
</head>
<body>
	<?php
		require("header_te.php");
	?>

	<?php
		require("header_plus_te.php");
	?>


	<!-- container -->
	<div class="container">
	
		<!-- Contact with Map - START -->
		<div class="row">
			<div class="col-md-6">
				<div class="well well-sm">
					<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<fieldset>
							<legend class="text-center header">Contact us</legend>
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
									</div>
							</div>
								<div class="form-group">
									<div class="col-md-10 col-md-offset-1">
										<input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-10 col-md-offset-1">
										<input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-10 col-md-offset-1">
										<input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-10 col-md-offset-1">
										<textarea class="form-control" id="message" name="message" placeholder="Enter your message for us here. We will get back to you within 2 business days." rows="7"></textarea>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12 text-center">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
						</fieldset>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div>
					<div class="panel panel-default">
						<div class="text-center header">Our Office</div>
						<div class="panel-body text-center">
							<h4>Address</h4>
							<div>
							1301 16 Avenue NW, <br />
							Calgary, AB, T2M 0L4<br />
							#(403)284-7112<br />
							travel@travelexperts.com<br />
							<br /><br />
							</div>
							<div id="map-canvas"></div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
</script>

<style>
      #map-canvas {
        width: 500px;
        height: 400px;
		left: 10px;
	  }
	.header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
		}
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(51.0619, -114.0914),
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
		var marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.064823018587944, -114.09016368891605)});
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

	<!-- Contact with Map - END -->


	<!-- container -->
	<div class="container">
		<div class="row">
			<div class="panel-heading">
				<h1 class="panel-title">OUR PRESTIGIOUS AGENTS</h1>
			</div>			    
			<?php
			$i = 0;
			while ($row = mysqli_fetch_assoc( $result)) //check putting this instead of row: fetch_array() and fetch_assoc()
			{
				$i++;
				$agentid = $row["AgentId"];
				echo '<div class="col-md-3">';          
				echo '	<div class="thumbnail">';
				echo '		<div class="caption">';
				echo '			<h4>' . $row["AgtFirstName"] .  '&nbsp' .$row["AgtLastName"] .'</h4>';
				echo '			<p>' . $row["AgtBusPhone"]	. '</p>';
				echo '			<p>' . $row["AgtEmail"]	. '</p>';
				echo '  	</div>';
				echo '    	<img src="./assets/images/agents/' . $agentid . '.png" class="img-circle"/>';
				echo '	</div>';
				echo '</div>';
				if ( $i >= 8 ) 
					break;
			}
			?>
		</div>
	</div>
	
	<?php
		require("footer_te.php");
	?>

	<?php
		require("javascript_te.php");
	?>

	
</body>
</html>