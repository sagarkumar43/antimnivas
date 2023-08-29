<?php
session_start();
// Set timezone 
date_default_timezone_set('Asia/Kolkata'); 
  
include('admin/dbconnection.php');

?>
<!doctype html>
<html>

<!-- Mirrored from antimnivas.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 10:48:51 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>



    <meta name="google-site-verification" content="ItrJMgGYc_m2ChyF4GSs0Jvmi0P9DtZjSpC_HLo7Prk" />
    <meta http-equiv=”Refresh” content=”0;URL=https://antimnivas.com” />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:url" content="/">

    <meta property="og:type" content="website">

    <meta property="og:title"
        content="Digital Online Obituary, Shradhanjali, Tribute portal | Heavenly abode for the departed souls">

    <!-- <meta property="og:image" content="" > -->
    <meta property="og:image" content="img/rest.jpg">
    <meta property="og:description"
        content="Antimnivas.com is an effort to provide a platform to keep the obituaries in a digital form. This helps in keeping the memories of the departed loved ones safe and also provides information about various religious customs and prayers required for the peace of the departed souls.">

    <link rel="icon" href="frontend/images/favicon.ico" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="frontend/css/fontawesome.css" type="text/css">

    <link rel="stylesheet" href="frontend/css/bootstrap.min.css" type="text/css">

    <link href="frontend/css/package-payment.css" rel="stylesheet" type="text/css">

    <link href="frontend/css/style.css" rel="stylesheet" type="text/css">
    <link href="frontend/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/css/owl.theme.default.min.css">
    <!-- Owl Stylesheets -->
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153207188-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-153207188-1');
    </script>

<style>
  @media only screen and (min-width: 1200px) {
  #mobileview {
    display:none;
  }
}

@media only screen and (max-width: 600px) {
  #desktopview {
    display:none;
  }
}  
</style>
   
</head>

<body>

    <!-- loader start -->
    <!-- <div id="loading">
  <img id="loading-image" height="100px" width="100px" src="img/apploader.gif" alt="Loading..." />

</div>
 -->

    <!-- loader end -->







    <!-- login Popup Html -->






    <!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->






    <script type="text/javascript">
        function forgot_pwd() {

            var forgot_mail = $("#forgot_email").val();
            if (forgot_mail == '') {
                alert('email field cannot be blank');
                return false;
            }
            if (IsEmail(forgot_mail) == false) {
                alert('Invalid email address');
                $("#forgot_email").focus();
                return false;
            }

            var datavar = "email=" + forgot_mail;

            $.ajax({
                type: 'post',
                data: datavar,
                url: '/users/forgotpwd',
                success: function (data) {
                    if (data == 1) {
                        $("#forgot_pwd_link").show();
                        return false;
                    }
                    if (data == 2) {
                        $("#invalid_mail").show();
                    }
                    if (data == 3) {
                        alert('error in sending mail');
                    }

                }
            });
        }
    </script>




    <?php include('header.php'); ?>



    <div class="row" style="margin-right:0  ; margin-left:0 ;">

        <!-- <center><img src="images/step2.png" id="imagemedia" alt="step2"></center> -->
        <div class="col-sm-6">

            <div id="register_form">
                <div class="login-form paddingT-10">
                    <form id="registerForm" name="myForm" method="POST">
                        <h3>Registration Now</h3>
                        <div class="left-side">
                            <div class="form-item"><input name="name" id="name" autocomplete="off" type="text"
                                    placeholder="Enter Name" required></div>
                            <div class="form-item"><input name="email" id="email" required="" type="email"
                                    autocomplete="off" placeholder="Enter Email" required></div>
                            <div class="form-item"><input name="pass" autocomplete="off" id="orgpwd" type="password"
                                    autocomplete="off" placeholder="Enter Password" required></div>
                            <div class="form-item"><input name="number" id="number" type="number" required=""
                                    autocomplete="off" placeholder="Enter Mobile Number" required></div>
                                    
                                    <div class="form-item" style="margin-left: 15px;"><a style="cursor: pointer;" data-toggle="modal" data-target="#forget" id="desktopview">Forgot Password</a></div>
                                    
                                    <div class="form-item" style="margin-left: 15px;"><a href="mdevice_forget.php" id="mobileview">Forgot Password</a></div>
                                    
                                   
                                        
                                        
                            <div class="form-item text-center">

                                <!-- <input type="submit" value="Add Packages" name="save" class="btn btn-primary"> -->

                                <input type="submit" value="Register" class="button_Log" name="save1">
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
                    <?php
             if(isset($_POST["save1"]))
             {
                 $_SESSION["useremail"]=$_POST["email"];
                 $_SESSION["usercontact"]=$_POST["number"];
                 $name=$_POST['name'];
                 $email=$_POST['email'];
                 $paswd=$_POST['pass'];
                 $mobilenumber=$_POST['number'];
               
            $insert="insert into fontend_signup set Name='$name',Email='$email',Password='$paswd',Mobile_number='$mobilenumber'";
            
            if(mysqli_query($connect,$insert))
            {
              echo "<script>alert('Details save sucessfully')</script>";
              
              echo"<script>window.location.href = 'index.php'</script>";
            }
            else
            {
              echo "<script>alert('Details not save sucessfull')</script>";
            }
            
            
            }
            ?>

                </div>
            </div>
        </div>




        <div class="col-sm-6">
            <div class="login-form paddingT-10">
                <form method="POST">
                    <h3>Login Now</h3>
                    <div class="left-side">
                        <div class="form-item"><input required="" id="login_email" name="email" type="email"
                                placeholder="Email" required></div>
                        <div class="form-item" style="position: relative;">
                            <input id="password-field" required="" name="password" type="password"
                                placeholder="Password" required>
                        </div>
                        <input type="hidden" id="commentButtonClicked" name="hiddenField">


                        <div class="form-item text-center"><input type="submit" name="SignIn1" value="Login"
                                class="button_Log"></div>
                    </div>
                </form>


            </div>
        </div>
        <?php
                if(isset($_POST["SignIn1"]))
                { $username=$_POST["email"];
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
                $_SESSION["usercontact"]=$read["Uploader_Contact_Number"];
                
                echo"<script>window.location.href = 'index.php'</script>";
                }
            }
                ?>



    </div>
       <!-- <p style="text-align: center;">OR</p> -->
    <center>
        <!-- <fb:login-button  scope="public_profile,email" onlogin="checkLoginState();">
													</fb:login-button> -->

         <div class="login_via">

            <div class="fb-box">
       <a href="https://antimnivas.com/login_with_facebook/" class="btn btn-primary btn-block" style="color: #fff;background-color: #007bff;border-color: #007bff;">Login With Facebook</a>
                                                    </div>
            <div class="gmail marginB-20">
                <!--<a href="app/webroot/googlelogin/index.html?profile_page=" class="v-middle"><img-->
                <!--        src="frontend/images/google-login.png" class="googl" /> Login Via-->
                <!--    Google</a>-->
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

        </div>
    </center>


    <?php include('footer.php'); ?>

    <script src="ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="frontend/js/bootstrap.min.js"></script>
    <script src="frontend/js/FarsiType.js"></script>

    <script src="frontend/js/owl.carousel.min.js"></script>
    <script src="frontend/js/mCustomScrollbar.js"></script>
    <script src="frontend/js/custom.js"></script>


    <script>
        $(window).load(function () {

            $('#loading').hide();
        });

    </script>


    <script>
        var input = document.getElementById("password-field");
        var text = document.getElementById("text");
        input.addEventListener("keyup", function (event) {

            if (event.getModifierState("CapsLock")) {
                text.style.display = "block";
            } else {
                text.style.display = "none"
            }
        });


        $(document).ready(function () {

            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

            allWells.hide();

            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.addClass('btn-default');
                    $item.addClass('btn-success');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allNextBtn.click(function () {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel div a.btn-success').trigger('click');
        });


//   window.onload = function () {
//     if (typeof history.pushState === "function") {
//         history.pushState("jibberish", null, null);
//         window.onpopstate = function () {
//             history.pushState('newjibberish', null, null);           
//         };
//     }
//     else {
//         var ignoreHashChange = true;
//         window.onhashchange = function () {
//             if (!ignoreHashChange) {
//                 ignoreHashChange = true;
//                 window.location.hash = Math.random();                
//             }
//             else {
//                 ignoreHashChange = false;   
//             }
//         };
//     }
// };

    </script>
</body>

<!-- Mirrored from antimnivas.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 10:50:52 GMT -->

</html>