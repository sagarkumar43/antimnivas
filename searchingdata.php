<?php
session_start();
include('admin/dbconnection.php');
?>
<!doctype html>
<html>

<!-- Mirrored from antimnivas.com/explore-obituaries by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 10:51:37 GMT -->
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

                                <div class="form-item"><input name="email" id="forgot_email" required="" type="email"
                                        autocomplete="off" placeholder="Enter Email" required></div>
                                <center>
                                    <p style="color:green;display: none;" id="forgot_pwd_link">Password reset link has
                                        been sent to your
                                        registered email.</p>
                                    <p style="color:red;display: none;" id="invalid_mail">This account is not exist</p>
                                </center>
                                <div class="form-item text-center"><input onclick="forgot_pwd()" type="button"
                                        value="Forgot Password" class="button_Log"></div>
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
                                        <div class="form-item"><input name="name" id="name" autocomplete="off"
                                                type="text" placeholder="Enter Name" required></div>
                                        <div class="form-item"><input name="email" id="email" required="" type="email"
                                                autocomplete="off" placeholder="Enter Email" required></div>
                                        <div class="form-item"><input name="pass" autocomplete="off" id="orgpwd"
                                                type="password" autocomplete="off" placeholder="Enter Password"
                                                required></div>

                                        <div class="form-item"><input name="confrm_pwd" id="duppwd" required=""
                                                type="text" autocomplete="off" placeholder="Confirm Password" required>
                                        </div>
                                        <div class="form-item"><input name="number" id="number" type="number"
                                                required="" autocomplete="off" placeholder="Enter Mobile Number"
                                                required></div>
                                        <div class="form-item text-center">
                                            <input type="button" onclick="register()" value="Register"
                                                class="button_Log">
                                        </div>
                                        <center>

                                            <p style="color:red;display:none;" id="emailexist">This email address is
                                                already exist please try
                                                another!</p>
                                            <p style="color:red;display:none;" id="pwd_mismatch">Password mismatched!
                                            </p>
                                            <p style="color:green;display: none;" id="confirmationlink">Confirmation
                                                link has been sent to the
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



    </script>
    <!-- ======== Search Block ========== -->
    <section class="sectionOne">
        <div class="container text-center">
            <!--<h1>Post Biography, Family Tree, Photos, Videos, Condolences,Set Birth & Death Anniversary Reminders</h1>
			<p>10 Lakh + Birth Anniversry and 50 Lakh  Death Anniversry</p>-->

            <div class="search-box">
                <form method="post" action="searchingdata.php">
                    <span class="secrch-span"><i class="fas fa-search"></i></span>
                    <div class="middle-block">
                        <input type="text" name="search_by" placeholder="Search by name, surname and location">
                    </div>
                    <div class="right-btn">
                        <button type="submit" name="SEARCH">SEARCH</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section-common gallery_top light-gray">
        <div class="container paddingT-30 paddingB-10 bg-white">
            <div class="row paddingB-15 gallery_heading2">
                <div class="col-sm-6">

                    <h2 class="heading-h2">Obituaries</h2>

                </div>
                <div class="col-sm-6">
                    <div class="text-righ">
                        <form id="myform" method="POST">
                            <label style="margin-top: 11px;padding-right: 13px;">Sort By Month</label>
                            <select name="sel_month" id="selMont" value="" onchange="monthwise()"
                                style="float: right;width:150px;" class="form-control">
                                <option value="">All</option>
                                <option value="Jan">January</option>
                                <option value="Feb">February</option>
                                <option value="Mar">March</option>
                                <option value="Apr">April</option>
                                <option value="May">May</option>
                                <option value="Jun">June</option>
                                <option value="Jul">July</option>
                                <option value="Aug">August</option>
                                <option value="Sep">September</option>
                                <option value="Oct">October</option>
                                <option value="Nov">November</option>
                                <option value="Dec">December</option>
                            </select>
                        </form>
                    </div>
                    <input type="hidden" value="" id='mnValue' name="">
                    <script type="text/javascript">
                        $(document).ready(function () {
                            var num = $("#mnValue").val();
                            $("#selMont  option").each(function () {
                                if ($(this).val() == num) { // EDITED THIS LINE
                                    $(this).attr("selected", "selected");
                                }
                            });
                        });
                        function monthwise() {
                            $("#myform").submit();
                        } 
                    </script>
                </div>
            </div>

            <div class="row" >
                <?php
                            // $query="select * from add_obituary";
                            // $count=1;
                            //         $execute=mysqli_query($connect,$query);
                            //         while($read=mysqli_fetch_array($execute))
                            //     {
                            //         $monthNum  =$read["Born_Month"];
                            //         $monthName = date('M', mktime(0, 0, 0, $monthNum, 10)); // March


                            if(isset($_POST['SEARCH']))
                            {
                                    $search=$_POST['search_by'];

                                    $select="select * from add_obituary where Name like '%$search%'";
                                     $exe=mysqli_query($connect,$select);
                                    $count=mysqli_num_rows($exe);
                                    if($count==0)
                                    {
                                        // echo "<script>alert('Not Found')</script>";
                                    }
                                    else
                                    {
                                        while($read=mysqli_fetch_array($exe))
                                        {
                                            $monthNum  =$read["Born_Month"];
                                            $monthName = date('M', mktime(0, 0, 0, $monthNum, 10)); // March
                                       


                  ?>
                  
                <div class="col-md-4">
                    <div class="item" id="thumnail_item">
                        <div class="">
                            <div class="frameNew text-center">
                                <div class="pfo-Detail">
                                    <img src="frontend/images/new-frame-gold.png" width="">
                                </div>

                                <div class="newFrame-profile">
                                    <div class="proPic">
     <a href="newdata.php?name=<?php echo $read["Name"];?>&uid=<?php echo $read["id"];?>">
                                            <img src="admin/obituary_imgs/<?php echo $read["Image_File"];?>">
                                        </a>
                                    </div>
                                    <h3 class="headingH3">
                                        <?Php echo $read["Name_Prefix"];?>
                                        <?Php echo $read["Name"];?>
                                    </h3>
                                    <span class="text-center small-big">
                                    
                                        ( <?Php echo $read["Born_Date"];?>
                                        <?Php echo $monthName;?>
                                        <?Php echo $read["Born_Year"];?> ) - (
                                        <?Php echo $read["Pass_Date"];?>
                                        <?Php echo $read["Pass_Month"];?>
                                        <?Php echo $read["Pass_Year"];?> )
                                    </span>
                                </div>
                            </div>
                            <div class="guldsta positionRel">
                                <img src="frontend/images/flower.png" alt="">
                                <span class="diyaZip"><img src="frontend/images/d2.gif"
                                        style="width:66px !important;"></span>
                            </div>
                        </div>
                    </div>

                </div>
                <?php  }   
                                    }



                            
                            }
 ?>
            </div>
 
            <br><br>
            <center>
                <div class="cakepagination">
                    <span class="disabled">&lt;&lt; Previous</span><span class="current">1</span><span><a
                            href="#">2</a></span><span><a href="#">3</a></span><span class="next"><a href="#"
                            rel="next"> Next &gt;&gt; </a></span>
                </div>
            </center>
        </div>

        </div>

    </section>



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

<!-- Mirrored from antimnivas.com/explore-obituaries by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 10:51:41 GMT -->

</html>