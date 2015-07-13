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
	<footer id="footer" class="top-space voffset40">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
EOF;
?>
					
						<?php
							require("our_address.php");
						?>

<?php
echo <<<EOF
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Follow us</h3>
						<!--Pulling Awesome Font -->
						<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


						<div class="col-md-12">
							<ul class="social-network social-circle">
								<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
								<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>				
						</div>

					</div>


				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
							<p class="simplenav">
								<a href="index.php">Home</a> | 
								<a href="packages.php">Packages</a> |
								<a href="registration.php">Registration</a> |
								<a href="contact.php">Contact</a> |
								<b><a href="registration.php">Sign up</a></b>
							</p>
					</div>
					<div class="col-md-3">
						<h1>
							Copyright &copy; 2015, Powered by  
						</h1>								
					</div>
					<div class="col-md-3">
						<img class="logo-dpack" src="assets/images/dPack-Logo-Small.png"></img>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
EOF;
?>
