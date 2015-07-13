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
echo <<<EOF
<div class="well well-sm">
	<form class="form-horizontal" method="post"  id="form_registration_part1">
		<fieldset>
			<legend class="text-center header">Register</legend>
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
						<input id="homephone" name="homephone" type="text" placeholder="Home Phone" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-10 col-md-offset-1">
						<input id="businessphone" name="businessphone" type="text" placeholder="Business Phone" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-12 text-center">
						<button type="submit" onclick="return validate_part1() class="btn btn-primary btn-lg">Submit</button>
					</div>
				</div>
		</fieldset>
	</form>
</div>
EOF;
?>
