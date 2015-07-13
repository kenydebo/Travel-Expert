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
<?php
echo <<<EOF
	<!-- BOOKING FORM -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="booking-form"  style="background-color:gray;">
					<!---date-piker---->
					<link rel="stylesheet" href="assets/css/jquery-ui.css" />
					<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
					<!---/date-piker---->
					<link type="text/css" rel="stylesheet" href="css/JFGrid.css" />
					<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
					<script type="text/javascript" src="js/JFCore.js"></script>
					<script type="text/javascript" src="js/JFForms.js"></script>
					<!-- Set here the key for your domain in order to hide the watermark on the web server -->
					<script type="text/javascript">
					(function() 
					{
						JC.init(
						{
							domainKey: ''
						});
					})();
					</script>
					<div class="online_reservation" style="background-color:black;"> 
						<div class="b_room">
							<div class="booking_room">
								<div class="reservation">
								<ul>		
									<li  class="span1_of_1 left">
										<h5>From</h5>
										<div class="book_date">
											<form>
												<input type="text" placeholder="Type Departure City" required="">
											</form>
										</div>					
									</li>
									<li  class="span1_of_1 left">
										<h5>To</h5>
										<div class="book_date">
											<form>
												<input type="text" placeholder="Type Destination City" required="">
											</form>
										</div>		
									</li>
									<li  class="span1_of_1 left">
										<h5>Arrival</h5>
										<div class="book_date">
											<form>
												<input class="date" id="datepicker" type="text" value="2/04/2015" onfocus="this.value = '';" 
												onblur="if (this.value == '') {this.value = '2/04/2015';}" required=>
											</form>
										</div>					
									</li>
									<li  class="span1_of_1 left">
										<h5>Departure</h5>
										<div class="book_date">
											<form>
												<input class="date" id="datepicker1" type="text" value="22/08/2015" onfocus="this.value = '';" 
												onblur="if (this.value == '') {this.value = '22/08/2015';}" required=>
											</form>
										</div>		
									</li>
									<li class="span1_of_1">
										<h5>Class</h5>
										<!----------start section_room----------->
										<div class="section_room">
										  <select id="country" onchange="change_country(this.value)" class="frm-field required">
												<option value="null">Economy</option>
												<option value="null">Business</option>         
												<option value="AX">First Class</option>
												<option value="AX">Premium Economy</option>
										  </select>
										</div>	
									</li>
									<li class="span1_of_3">
										<div class="date_btn">
											<form>
												<input type="submit" value="Book Now" />
											</form>
										</div>
									</li>
									<div class="clearfix"></div>
								</ul>
								</div>
							</div>
						<div class="clearfix"></div>
						</div>
						</div>
						<!---->	
					</div>
					<div class="clearfix"></div> 
					<div class="online-form">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog2">Booking Here</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /BOOKING FORM -->
EOF;
?>
