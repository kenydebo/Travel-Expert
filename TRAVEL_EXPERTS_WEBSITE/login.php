<?php
	session_start();
	$message = "";
	if (isset($_REQUEST["userid"]))
	{
		$loginInfo = array(); //--- HASH TABLE
		$users = file("pd_userlist.txt"); //--- GENERATED USING register.php
		foreach ($users as $line)
		{
			list($user, $pwd) = explode(",",$line);
			$loginInfo[$user] = trim($pwd);
		}
		$usr = trim($_REQUEST["userid"]);
		$pwd = trim($_REQUEST["password"]);
		print ($usr);
		print ($pwd);
		if ( isset($loginInfo[$usr]) && 
		$loginInfo[$usr] == md5($pwd))
		{
						$message = "xxxxUser ID or Password incorrect";

			//--- LOGIN SUCESSFUL
			$_SESSION["iamloggedin"] = true;
			//--- REDIRECT USER BY MODIFIYING HEADER
			header("Location: pd_agent_add.php");
		}
		else
		{
			//--- LOGIN WAS INVALID
			$message = "User ID or Password incorrect";
		}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>PD Assignment Register</title>
	<?php
		require("pd_head.php");
	?>

</head>
<body>
	<!-- HEADER -->
	<?php
		require("pd_header.php");
	?>
	
	<div class="about">
	  <div class="container">
		<section class="title-section">
		  <h1 class="title-header">Sign In</h1>
		</section>
	  </div>
	</div>
	
	<!-- LOG IN --->
	<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
       <!--login modal-->
       <div id="loginModal">
              <div class="modal-dialog">
                     <div class="modal-content">
                          
                           <!-- Header Section -->
                           <div class="modal-header">
                                  <h2>Please sign in</h2>
                           </div>
                          
                           <!-- Body Section -->
                           <div class="modal-body">
                                  <form method="post" class="form col-md-12">
                                         <input type="text" name="userid" class="form-control input-lg" placeholder="Email" required autofocus />
                                         <input type="password" name="password" class="form-control input-lg" placeholder="Password" required/>
                                        
                                         <label class="checkbox"> <input type="checkbox"
                                                value="remember-me" /> Remember me
                                         </label>
                                        
                                         <button type="submit" value="Log In" class="btn btn-primary btn-lg btn-block">Sign In</button>
                                  </form>
								  <p id="message">
										<?php
											echo $message;
										?>
									</p>

                          </div>
                          
                           <!-- Footer Section -->
                           <div class="modal-footer">
                                  <div class="col-md-12">
                                         <span class="pull-left"><a href="#">Forgot Password?</a></span>
                                         <span><a href="register.php">Register</a></span>
                                  </div>
                           </div>
                     </div>
              </div>
       </div>
		</div>
	</div>
	</div>
	<!-- end LOG IN --->

	<!-- FOOTER -->
	<?php
		require("pd_footer.php");
	?>
	<?php
		require("pd_javascript.php");
	?>
	
</body>
</html>
