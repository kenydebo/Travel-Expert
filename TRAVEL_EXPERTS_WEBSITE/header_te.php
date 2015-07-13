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
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php">
					<img class="logo" width="300px" src="assets/images/TravelExperts-Logo-Small.png" alt="Travel Experts">
				</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active">
						<a href="index.php">
							Home
						</a>
					</li>
					<li>
						<a href="packages.php">
							Packages
						</a>
					</li>
					<li>
						<a href="registration.php">
							Registration
						</a>
					</li>
					<li>
						<a href="contact.php">
							Contact
						</a>
					</li>
					<li>
						<a class="btn" href="registration.php">
							SIGN IN / SIGN UP
						</a>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
EOF;
?>
