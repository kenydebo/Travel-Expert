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
			<legend class="text-center header">Payment</legend>
				<div class="form-group">
					<div class="col-md-5 col-md-offset-1">
					  <label for="adults">Adults (+6)</label>
					  <select class="form-control" id="adults">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
					  </select>
					</div>
					<div class="col-md-5 >
					  <label for="children">Children (0-5)</label>
					  <select class="form-control" id="children">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
					  </select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-10 col-md-offset-1">
						<label class="radio-inline"><input type="radio" name="optradio1"><img src="./assets/images/amex.gif"></label>
						<label class="radio-inline"><input type="radio" name="optradio2"><img src="./assets/images/mastercard.gif"></label>
						<label class="radio-inline"><input type="radio" name="optradio3"><img src="./assets/images/dinnercard.png"></label>
						<label class="radio-inline"><input type="radio" name="optradio4"><img src="./assets/images/visacard.jpg"></label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-10 col-md-offset-1">
						<input id="creditcardnumber" name="creditcardnumber" type="number" placeholder="Credit Card Number" class="form-control"  onchange="this.value = this.value.toUpperCase()">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-10 col-md-offset-1">
						<input id="creditcardexpiryday" name="creditcardexpiryday" type="date" placeholder="Expiry" class="form-control">
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
