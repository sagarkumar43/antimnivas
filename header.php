<?php
include('admin/dbconnection.php');

?>
<head>
    <!--<script src="https://apis.google.com/js/platform.js" async defer></script>-->
    <!--<meta name="google-signin-client_id" content="177517543770-u1hkfpa57l77o81c9smp1s70dgk86mlk.apps.googleusercontent.com">-->
   
   
</head>
<!-- Header Block Start -->
<header>
	<div class="desktop">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 "><a href="index.php"><img src="frontend/images/logo.png" width="225" height="52"
							alt="Home logo" /></a></div>
				<div class="col-sm-6 col-xs-12" style="display:block;">
					<div class="right-block">
						<?php if(empty($_SESSION["username"])){?>
						<a href="javascript:void(0)" style="display: block;" id="logButton" class="anch-1 login"
							data-toggle="modal" data-target="#myModal_52"><img src="frontend/images/login-icon.png"
								alt="login-icon" /> Login</a>
						<?php } else { ?>
							<p>Welcome <a href="viewprofile.php"><?php echo $_SESSION["username"];?></a> | <a href="logout.php">Logout</a></p>
						<?php } ?>
						<div id="myModal_52" class="modal fade" role="dialog">
							<div class="modal-dialog pop-topInner modal-sm">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-body">
										<div class="text-center paddingB-10">

											<img src="frontend/images/logo.png" alt="" width="170" />
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>

										<div class="popup">

											<div class="pop-topInner">
												<br>
												<div id="login_form" style="display: block;">
													<center>
														<p id="wrong_login" style="color:green;display:none;">Incorrect
															Email Address Or
															Password</p>
													</center>
													<div class="login-form paddingT-10">
														<form method="POST">
															<div class="left-side">
																<div class="form-item"><input required=""
																		id="login_email" name="email" type="email"
																		placeholder="Email" required></div>
																<div class="form-item" style="position: relative;">
																	<input id="password-field" required=""
																		name="password" type="password"
																		placeholder="Password" required>
																	<span toggle="#password-field"
																		style="cursor: pointer;"
																		class="fa fa-fw field-icon toggle-password fa-eye"></span>
																	<p id="text" class="text-danger"
																		style="display: none;">WARNING! Caps lock is ON.
																	</p>

																</div>
																<input type="hidden" id="commentButtonClicked"
																	name="hiddenField">
																<a style="cursor: pointer;"
																		data-toggle="modal" data-target="#forget">Forgot
																		Password</a>
																<p class="p2">Not User Yet? <a href=""
																		data-toggle="modal"
																		data-target="#myModal551">Create Account</a></p>
																<div class="form-item text-center"><input type="submit"
																		name="SignIn" value="Login"
																		class="button_Log"></div>
															</div>
														</form>
														<?php
							if(isset($_POST["SignIn"]))
							{
								$username=$_POST["email"];
								$passowrd=$_POST["password"];


								$data="select * from fontend_signup where Email='$username' and Password='$passowrd'";
								$exe=mysqli_query($connect,$data);
								$read=mysqli_fetch_array($exe);
								$count=mysqli_num_rows($exe);

							if($count==1)
							{
								
							$_SESSION["profileimage"]=$read["File"];
							$_SESSION["username"]=$read["Name"];
							$_SESSION["useremail"]=$read["Email"];

							$current_url=$_SERVER["REQUEST_URI"];
							//echo "<script>alert('$current_url')</script>";
							echo"<script>window.location.href = '$current_url'</script>";
							}
							else
							{
							echo "<script>alert('Wrong Details')</script>";
							}
							}
							?>

													</div>
												</div>
												<script type="text/javascript">

													function IsEmail(email) {
														var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
														if (!regex.test(email)) {
															return false;
														} else {
															return true;
														}
													}
													function login() {

														var email = $("#login_email").val();
														var pwd = $("#password-field").val();
														var datavar = "email=" + email + "&pwd=" + pwd;

														$.ajax({

															type: 'post',
															data: datavar,
															url: '/users/loginuser',
															success: function (data) {
																if ($("#commentButtonClicked").val() == 1) {
																	window.location.reload();
																	return false;
																}
																if (data == 1) {
																	$("#wrong_login").show();
																}
																if (data == 2) {
																	window.location.replace('pages/checkout.html');

																}
																if (data == 3) {
																	window.location.replace('profiles/viewprofile.html');
																}
															}
														});
													}

												</script>




												<!-- <p style="text-align: center;">OR</p> -->
												<center>
													<!-- <fb:login-button  scope="public_profile,email" onlogin="checkLoginState();">
													</fb:login-button> -->

													<div class="login_via">

													<div class="fb-box">
       <a href="https://antimnivas.com/login_with_facebook/" class="btn btn-primary btn-block" style="color: #fff;background-color: #007bff;border-color: #007bff;">Login With Facebook</a>
                                                    </div>
    
											<div class="gmail marginB-20">
																	<?php

                                                    
                                                    if(isset($_SESSION['login_id'])){
                                                       // echo "<script>window.location.href='index.php'</script>";
                                                       // exit;
                                                    }
                                                    
                                                    require 'google-api/vendor/autoload.php';
                                                    
                                                    // Creating new google client instance
                                                    $client = new Google_Client();
                                                    
                                                    // Enter your Client ID
                                                    $client->setClientId('177517543770-u1hkfpa57l77o81c9smp1s70dgk86mlk.apps.googleusercontent.com');
                                                    // Enter your Client Secrect
                                                    $client->setClientSecret('qVhlyhM12bjqXnpIOoTqArR5');
                                                    // Enter the Redirect URL
                                                    $client->setRedirectUri('https://antimnivas.com/');
                                                    
                                                    // Adding those scopes which we want to get (email & profile Information)
                                                    $client->addScope("email");
                                                    $client->addScope("profile");
                                                    
                                                    
                                                    if(isset($_GET['code'])):
                                                    
                                                        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
                                                    
                                                        if(!isset($token["error"])){
                                                    
                                                            $client->setAccessToken($token['access_token']);
                                                    
                                                            // getting profile information
                                                            $google_oauth = new Google_Service_Oauth2($client);
                                                            $google_account_info = $google_oauth->userinfo->get();
                                                        
                                                            // Storing data into database
                                                            $id = mysqli_real_escape_string($connect , $google_account_info->id);
                                                            $full_name = mysqli_real_escape_string($connect , trim($google_account_info->name));
                                                            $email = mysqli_real_escape_string($connect , $google_account_info->email);
                                                            $profile_pic = mysqli_real_escape_string($connect , $google_account_info->picture);
                                                    
                                                            // checking user already exists or not
                                                            $get_user = mysqli_query($connect , "SELECT * FROM `fontend_signup` WHERE `google_id`='$id'");
                                                            $profile_read=mysqli_fetch_array($get_user);
                                                            if(mysqli_num_rows($get_user) > 0){
                                                    
                                                                                $_SESSION['login_id'] = $id; 
                                                                            	$_SESSION["profileimage"]=$profile_read["profile_image"];
                                                            					$_SESSION["username"]=$profile_read["Name"];
                                                    							$_SESSION["useremail"]=$profile_read["Email"];
                                                               echo "<script>window.location.href='index.php'</script>";
                                                               // exit;
                                                    
                                                            }
                                                            else{
                                                    
                                                                // if user not exists we will insert the user
                                                                $insert = mysqli_query($connect , "INSERT INTO `fontend_signup`(`google_id`,`Name`,`Email`,`profile_image`) VALUES('$id','$full_name','$email','$profile_pic')");
                                                    
                                                                if($insert){
                                                                    $_SESSION['login_id'] = $id; 
                                                                   	$_SESSION["profileimage"]=$profile_pic;
                                                    							$_SESSION["username"]=$full_name;
                                                    							$_SESSION["useremail"]=$email;
                                                                   echo "<script>window.location.href='index.php'</script>";
                                                                    exit;
                                                                }
                                                                else{
                                                                    echo "Sign up failed!(Something went wrong).";
                                                                }
                                                    
                                                            }
                                                    
                                                        }
                                                        else{
                                                           echo "<script>window.location.href='index.php'</script>";
                                                            exit;
                                                        }
                                                        
                                                    else: 
                                                        // Google Login Url = $client->createAuthUrl(); 
                                                    ?>

   <a class="login-btn" href="<?php echo $client->createAuthUrl(); ?>"><img src="frontend/images/google-login.png" class="googl" />  Login With Google</a>

<?php endif; ?>
															</a>
														</div>

													</div>
												</center>
												<br>
											</div>

											<div class="container">

												<!-- Modal -->
												<div class="modal fade" id="myModal" role="dialog">
													<div class="modal-dialog">

														<!-- Modal content-->
														<div class="modal-content">
															<!-- <div class="modal-header">
         			 										<button type="button" class="close" data-dismiss="modal">&times;</button>
        														</div>-->
															<div class="modal-body">


																<div class="logo-pop text-center paddingB-15">
																	<img src="frontend/images/logo.png" alt=""
																		style="width: 168px;" />
																	<button type="button" class="close"
																		data-dismiss="modal">&times;</button>
																</div>

																<!-- <div id="register_form">
																	<div class="login-form paddingT-10">
																		<form id="registerForm1" name="myForm" method="POST">
																			<div class="left-side">
																				<div class="form-item"><input
																						name="name" id="name"
																						autocomplete="off" type="text"
																						placeholder="Enter Name"
																						required>
																				</div>
																				<div class="form-item"><input
																						name="email" id="email"
																						required="" type="email"
																						autocomplete="off"
																						placeholder="Enter Email"
																						required>
																				</div>
																				<div class="form-item"><input
																						name="pass" autocomplete="off"
																						id="orgpwd" type="password"
																						autocomplete="off"
																						placeholder="Enter Password"
																						required>
																				</div>

																				<div class="form-item"><input
																						name="number" id="number"
																						type="number" required=""
																						autocomplete="off"
																						placeholder="Enter Mobile Number"
																						required></div>
																				<div class="form-item text-center">
																					<input type="button"
																						onclick="register()"
																						value="Register"
																						class="button_Log" name="submit"></div>
																				<center>

																					<p style="color:red;display:none;"
																						id="emailexist">This email
																						address is
																						already exist please try
																						another!</p>
																					<p style="color:red;display:none;"
																						id="pwd_mismatch">Password
																						mismatched!
																					</p>
																					<p style="color:green;display: none;"
																						id="confirmationlink">
																						Confirmation
																						link has been sent to the mail
																					</p>
																				</center>
																			</div>
																		</form>
																	</div>
																</div> -->

																<script type="text/javascript">


																/*	function register() {

																		var name = $("#registerForm1 input[name=name]").val();
																		var email = $("#registerForm1 input[name=email]").val();

																		var number = $("#registerForm1 input[name=number]").val();

																		var orgpwd = $("#registerForm1 input[name=pass]").val();


																		if (name.length > 20) {
																			alert('name cannot exceed 20 characters!');
																			$("#registerForm1 input[name=name]").focus();

																			return false;
																		}
																		if (name == '') {
																			alert('name cannot empty');
																			$("#registerForm1 input[name=name]").focus();

																			return false;
																		}
																		if (email == '') {
																			alert('email cannot be empty');
																			$("#registerForm1 input[name=email]").focus();

																			return false;
																		}
																		if (IsEmail(email) == false) {
																			alert('Invalid email address');
																			$("#registerForm1 input[name=email]").focus();
																			return false;
																		}

																		if (orgpwd == '') {
																			alert('password cannot be empty')
																			$("#registerForm1 input[name=pass]").focus();
																			return false;
																		}

																		if (orgpwd.length < 8) {
																			alert('password should be atleast eight characters!');
																			$("#registerForm1 input[name=pass]").focus();
																			return false;
																		}

																		if (number == '') {
																			alert('number cannot be empty');
																			$("#registerForm1 input[name=number]").focus();
																			return false;
																		}
																		if (number.length < 10) {
																			alert('number should be of ten digits');
																			$("#registerForm1 input[name=number]").focus();
																			return false;
																		}
																		if (number.length > 10) {
																			alert('number should be of ten digits');
																			$("#registerForm1 input[name=number]").focus();
																			return false;
																		}




																		var datavar = "name=" + name + "&email=" + email + "&orgpwd=" + orgpwd + "&number=" + number;

																		$.ajax({

																			type: 'post',
																			data: datavar,
																			url: '/users/registeruser',
																			success: function (data) {

																				if (data == 1) {
																					$("#emailexist").show();

																				}
																				if (data == 2) {

																					window.location.replace('confirmation-link.html');

																				}
																				if (data == 3) {
																					alert('error in registration');

																				}
																			}
																		});
																	}  */
																</script>


															</div>
															<!-- <div class="modal-footer">
          												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        												</div>-->
														</div>

													</div>
												</div>

											</div>
										</div>


									</div>

								</div>
								

							</div>
						</div>
						
						<div class="login_via" style="display:none;">
							<div class="faceBook ">
								<a href="app/webroot/fblogin/index.html?profile_page=1" class="v-middle"><i
										class="fab fa-facebook-square v-middle"></i> Login Via Facebook</a>

							</div>
							<div class="gmail " style="    margin-right: -197px;margin-top: -41px;">
								<a href="app/webroot/googlelogin/index.html?profile_page=1" class="v-middle"><img
										src="frontend/images/google-login.png" class="googl" /> Login Via Google</a>
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="dropd-block">
			<div class="container">
				<div class="nav-header">
					<div class="header-btm">
						<nav>
							<a href="post-obituary.php">Post Obituary</a>
						</nav>
						<div class="right-nav">
							<span class="first"></span>
							<span class="second"></span>
							<span class="three"></span>
						</div>
						<div class="drop-down">
							<ul class="listed-drop">
								<li><a href="features.php">Key Features</a></li>
								<li><a href="explore-obituaries.php">Browse Obituary</a></li>
								<li><a href="pricing.php">Pricing</a></li>
								<!-- <li><a href="pages/onlinepoo">Online Puja</a></li> -->
								<li><a href="blog.php">Blog</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- new header for mobile view -->

	<div class="mobile-header" >
		<div class="container"> 
			<div class="right-nav-mobile">
				<span class=""></span>
				<span class=""></span>
				<span class=""></span>
			</div>


			<div class="text-center logo-mob">
				<a href="index.php"><img src="frontend/images/logo.png" width="150" alt="Home logo" /></a>
			</div>


		</div>
	</div>
	<div class="mobile-navText">

		<!-- <div class="navMobile-content"><a class="login" data-toggle="modal" data-target="#myModal_52"><i class="fa fa-user"></i>
				login</a></div> -->


		<div class="login_via">
		        <?php if(empty($_SESSION["username"])){?>
				<a href="mobile_device_login.php" class="login fa fa-user"> Login</a>
						<?php } else { ?>
							<p>Welcome <a href="viewprofile.php"><?php echo $_SESSION["username"];?></a> | <a href="logout.php">Logout</a></p>
						<?php } ?>
		</div>
		
		<hr>
		<!-- <div class="navMobile-content"><a data-toggle="modal" data-target="#myModal"><i class="fa fa-id-badge" aria-hidden="true"></i> Register</a></div><hr> -->
		<div class="navMobile-content">
			<div class="search-container">
				<form action="https://antimnivas.com/explore-obituaries" method="post">
					<input type="text" placeholder="Obituary Search" name="search_by">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</div>
		<div class="navMobile-content"><a href="post-obituary.php"><span class="up-down"><i class="fa fa-paper-plane"
						aria-hidden="true"></i> Post Obituary</span></a></div>
		<hr>
		<div class="navMobile-content"><a href="explore-obituaries.php"><i class="fa fa-heartbeat"
					aria-hidden="true"></i> Browse Obituary</a></div>
		<hr>
		<div class="navMobile-content"><a href="features.php"><i class="fa fa-globe" aria-hidden="true"></i> Key
				Features</a></div>
		<hr>
		<div class="navMobile-content"><a href="pricing.php"><i class="fa fa-leaf" aria-hidden="true"></i>
				Pricing</a></div>
		<hr>
		<div class="navMobile-content"><a href="blog.php"><i class="fa fa-rss" aria-hidden="true"></i> Blog</a>
		</div>
		<hr>
		<div class="navMobile-content"><a href="contact-us.php"><i class="fa fa-envelope" aria-hidden="true"></i>
				Contact</a></div>

		<div class="navMobile-content"><a href="#"></a></div>
	</div>
<!---
Login With Gmail
-->

<div class="modal fade" id="myModal551" role="dialog">
									<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
					<!-- <div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>-->
					<div class="modal-body">


				<div class="logo-pop text-center paddingB-15">
					<img src="frontend/images/logo.png" alt="" style="width: 168px;" />
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div id="register_form">
					<div class="login-form paddingT-10">
						<form id="registerForm" name="myForm" method="POST">
							<div class="left-side">
								<div class="form-item"><input name="name" autocomplete="off" type="text" placeholder="Enter Name" required></div>
								<div class="form-item"><input name="email" type="email" autocomplete="off" placeholder="Enter Email" required></div>
								<div class="form-item"><input name="pass" autocomplete="off" type="password" autocomplete="off" placeholder="Enter Password" required></div>
								<div class="form-item"><input name="number" id="number" type="number" required="" autocomplete="off" placeholder="Enter Mobile Number" required></div>
								<div class="form-item text-center">

								<!-- <input type="submit" value="Add Packages" name="save" class="btn btn-primary"> -->

									<input type="submit" onclick="register()" value="Register" class="button_Log" name="save">
									</div>
									
								<center>
									<p style="color:red;display:none;" id="emailexist">This email address is
										already exist please try another!</p>
									<p style="color:red;display:none;" id="pwd_mismatch">Password mismatched!
									</p>
									<p style="color:green;display: none;" id="confirmationlink">Confirmation
										link has been sent to the mail</p>
								</center>
							</div>
						</form>
					</div>
					<?php
            if(isset($_POST["save"]))
            {
            
                $name=$_POST['name'];
                $email=$_POST['email'];
                $paswd=$_POST['pass'];
                $mobilenumber=$_POST['number'];
               
            $insert="insert into fontend_signup set Name='$name',Email='$email',Password='$paswd',Mobile_number='$mobilenumber'";
            
            if(mysqli_query($connect,$insert))
            {
              echo "<script>alert('Details save sucessfully')</script>";
              
             echo "<script>window.location.href='index.php'</script>";
            }
            else
            {
              echo "<script>alert('Details not save sucessfull')</script>";
            }
            
            
            }
            ?>


				</div>
				


			</div>
						<!-- <div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>-->
		</div>

	</div>
</div>

<div class="modal fade" id="forget" role="dialog">
									<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
					<!-- <div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>-->
					<div class="modal-body">


				<div class="logo-pop text-center paddingB-15">
					<img src="frontend/images/logo.png" alt="" style="width: 168px;" />
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div id="register_form">
					<div class="login-form paddingT-10">
						<form name="myForm" method="POST">
							<div class="left-side">
								<div class="form-item"><input name="mail" type="email" placeholder="Email" required></div>

								<div class="form-item text-center">

								<!-- <input type="submit" value="Add Packages" name="save" class="btn btn-primary"> -->

									<input type="submit"  value="Verify" class="button_Log" name="verify">
									</div>
									
								<center>
									<p style="color:red;display:none;" id="emailexist">This email address is
										already exist please try another!</p>
									<p style="color:red;display:none;" id="pwd_mismatch">Password mismatched!
									</p>
									<p style="color:green;display: none;" id="confirmationlink">Confirmation
										link has been sent to the mail</p>
								</center>
							</div>
						</form>
					</div>
				</div>
			</div>
						<!-- <div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>-->
		</div>

	</div>
</div>

</header>