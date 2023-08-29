<?php
session_start();
include('admin/dbconnection.php');
?>


<!doctype html>
<html>

<!-- Mirrored from antimnivas.com/blog by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 10:51:43 GMT -->
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



  <div class="container">

    <!-- Modal -->
    <div class="modal fade" id="forgot" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <!--<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>-->
          <div class="modal-body">


            <div class="logo-pop text-center paddingB-15">
              <img src="frontend/images/logo.png" alt="" width="170" />
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="login-form paddingT-10">

              <div class="left-side">

                <div class="form-item"><input name="email" id="forgot_email" required="" type="email" autocomplete="off"
                    placeholder="Enter Email" required></div>
                <center>
                  <p style="color:green;display: none;" id="forgot_pwd_link">Password reset link has been sent to your
                    registered email.</p>
                  <p style="color:red;display: none;" id="invalid_mail">This account is not exist</p>
                </center>
                <div class="form-item text-center"><input onclick="forgot_pwd()" type="button" value="Forgot Password"
                    class="button_Log"></div>
              </div>

            </div>




          </div>
          <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
        </div>

      </div>
    </div>

  </div>
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
              <img src="frontend/images/logo.png" alt="" style="width: 168px;" />
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div id="register_form">
              <div class="login-form paddingT-10">
                <form id="registerForm" name="myForm">
                  <div class="left-side">
                    <div class="form-item"><input name="name" id="name" autocomplete="off" type="text"
                        placeholder="Enter Name" required></div>
                    <div class="form-item"><input name="email" id="email" required="" type="email" autocomplete="off"
                        placeholder="Enter Email" required></div>
                    <div class="form-item"><input name="pass" autocomplete="off" id="orgpwd" type="password"
                        autocomplete="off" placeholder="Enter Password" required></div>

                    <div class="form-item"><input name="confrm_pwd" id="duppwd" required="" type="text"
                        autocomplete="off" placeholder="Confirm Password" required></div>
                    <div class="form-item"><input name="number" id="number" type="number" required="" autocomplete="off"
                        placeholder="Enter Mobile Number" required></div>
                    <div class="form-item text-center">
                      <input type="button" onclick="register()" value="Register" class="button_Log"></div>
                    <center>

                      <p style="color:red;display:none;" id="emailexist">This email address is already exist please try
                        another!</p>
                      <p style="color:red;display:none;" id="pwd_mismatch">Password mismatched!</p>
                      <p style="color:green;display: none;" id="confirmationlink">Confirmation link has been sent to the
                        mail</p>
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

  </div>





  <!-- Header Block Start -->
  <?php include('header.php'); ?>


  <script type="text/javascript">
    function logoutFunc() {

      datavar = 'd';
      $.ajax({
        type: 'POST',
        url: 'https://antimnivas.com/users/logout',
        data: datavar,
        success: function (data) {
          if (data == 1) {
            location.reload();
          }
          else {
            alert('unable to logout');
          }
        }
      });
    }



  </script> <!-- ======== Search Block ========== -->
  <section class="sectionOne">
    <div class="container text-center">
      <!--<h1>Post Biography, Family Tree, Photos, Videos, Condolences,Set Birth & Death Anniversary Reminders</h1>
			<p>10 Lakh + Birth Anniversry and 50 Lakh  Death Anniversry</p>-->

      <div class="search-box">
      <form method="POST" action="searchingdata.php">
					<span class="secrch-span"><i class="fas fa-search"></i></span>
					<div class="middle-block">
						<input type="text" name="search_by" placeholder="Search by name, surname and location">
					</div>
					<div class="right-btn">
						<!-- <button type="submit">SEARCH</button> -->
						<input type="submit" name="SEARCH" value="SEARCH" id="" class="nextBtn" style="background:#ff7200;border: none;color: white;width: 101%;height: 50px;font-weight: 600;">
					

					</div>
				</form>
      </div>
    </div>
  </section>

  <!-- blogs list -->
  <div class="container">
    <h2 class="heading-h2 text-center paddingB-15 paddingT-20  ">Blogs</h2>
   
    <div class="row paddingB-30">
    <?php
    $query="select * from add_blog";
    $execute=mysqli_query($connect,$query);
    while($read=mysqli_fetch_array($execute))
  {
  ?>
      <div class="col-md-12">
        <div style="border:solid;border-width:1px;">
          <h3 style="text-align: center;">
            <?Php echo $read["Blog_Title"];?>
          </h3>
          <p  style="padding:10px;">&nbsp;
         
            <?php 
            
            for($i=0; $i<=200; $i++)
            { 
              echo $read["Blog_Description"][$i];
            }

            ?>
          </p>

          <a href="readblog.php?read= <?Php echo $read["id"];?>" target="_blank" class="btn" style="margin-left:10px;margin-bottom: 10px;background:#9e9e9e;color:black;">Read
            More...</a>
        </div>
      </div>

      <?php } ?>
    </div>
   
  </div>
 





  <?php include('footer.php'); ?>
  <!-- Footer section End here -->

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

<!-- Mirrored from antimnivas.com/blog by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 10:51:47 GMT -->

</html>