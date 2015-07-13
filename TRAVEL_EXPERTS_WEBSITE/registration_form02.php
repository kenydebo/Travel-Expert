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
			<legend class="text-center header">Personal Information</legend>
				<div class="form-group">
					<div class="col-md-10 col-md-offset-1">
						<input id="address" name="address" type="text" placeholder="Address" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-10 col-md-offset-1">
						<input id="city" name="city" type="text" placeholder="City" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-10 col-md-offset-1">
					  <label for="sel1">Province</label>
						<select id="prov" class="selectpicker" data-style="btn-inverse">
							<option>AB</option>
							<option>BC</option>
							<option>MB</option>
							<option>NB</option>
							<option>NL</option>
							<option>NS</option>
							<option>NT</option>
							<option>NU</option>
							<option>ON</option>
							<option>PE</option>
							<option>QC</option>
							<option>SK</option>
							<option>YT</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-10 col-md-offset-1">
						<input id="postal" name="postal" type="text" placeholder="Postal Code" class="form-control"  onchange="this.value = this.value.toUpperCase()">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-10 col-md-offset-1">
						<input id="country" name="country" type="text" placeholder="Country" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12 text-center">
						<button type="submit" onclick="return validate_part2() class="btn btn-primary btn-lg">Submit</button>
					</div>
				</div>
		</fieldset>
	</form>
</div>
EOF;
?>
