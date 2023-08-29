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
        .box-shadow {
            -webkit-box-shadow: 13px 10px 16px 0px rgba(166, 166, 166, 1);
            -moz-box-shadow: 13px 10px 16px 0px rgba(166, 166, 166, 1);
            box-shadow: 13px 10px 16px 0px rgba(166, 166, 166, 1);
        }

        .box-shadow1 {
            -webkit-box-shadow: -24px 11px 16px 0px rgba(166, 166, 166, 1);
            -moz-box-shadow: -24px 11px 16px 0px rgba(166, 166, 166, 1);
            box-shadow: -24px 11px 16px 0px rgba(166, 166, 166, 1);
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
        <div class="col-sm-1"></div>

        <div class="col-sm-6 box-shadow1">
            <h2>Confirmed Plan</h2> <br>
            <h4>Obituary Listing :  &#8377; <?php echo $_SESSION["packagenames"];?></h4>
            <h4>Home Page Featured :  &#8377; <?php echo $_SESSION["featuredname"];?></h4> <br>

        </div>
        <div class="col-sm-4 box-shadow">
            <h3>Payment Details</h3> <br>
            <h4>Obituary Listing : <span style="float:right;"> &#8377; <?php echo $_SESSION["packagenames"];?></span>
            </h4>
            <p> <?php echo $_SESSION["packagenames"];?></p>
            <hr style="border-bottom:1px solid black">
            <h4>Home Page Featured : <span style="float:right;"> &#8377; <?php echo $_SESSION["featuredname"];?></span>
            </h4>
            <span> <?php echo $_SESSION["featuredname"];?></span>
            <hr style="border-bottom:1px solid black">
            <h4>GST : <span style="float:right;"> &#8377; 0</span></h4>
            <hr style="border-bottom:1px solid black">
            <h4>Total Amount : <span style="float:right;"> &#8377;<?php echo $_SESSION["totalcount"];?> </span></h4>
        </div>
        <a href="post-obituary.php" class="btn btn-default" name="update">Update Change</a>


<?php
    
    if($_SESSION["totalcount"]==0)
    { ?>
        <a href="paymentsucess.php?value=0" class="btn btn-warning" name="proceed">Submit</a>

    <?php } else { ?>

 <a href="payment.php?value=1" class="btn btn-warning paywithrazor" name="proceed">Proceed to Pay With Razorpay</a>
 <a href="PaytmKit/pgRedirect.php?value=1" class="btn btn-warning" name="proceed" onclick="">Proceed to Pay With Paytm</a>
<?php } ?>




       
        <div class="col-sm-1"></div>
    </div>



    <div class="row" style="margin-right:0  ; margin-left:0 ;">
        <div class="col-sm-12">


            <center>
                <img src="images/Payment-Gateway-Logos.png" alt="payment logo" style="width: 50%;">
            </center>
        </div>
    </div>


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
<!-- Razorpay Payment Gateway Script -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

 $('body').on('click', '.paywithrazor', function(e){
    var totalAmount =<?php echo $_SESSION["totalcount"] * 100; ?>;
    var product_id = "PackId";
    var options = {
    // "key": "rzp_live_959LwvLp4UxGMF",
    "key": "rzp_live_959LwvLp4UxGMF",
    "amount": (<?php echo $_SESSION["totalcount"] * 100; ?>), // 2000 paise = INR 20
    "name": "Antimniwas",
    "description": "Payment",
    "image": "https://antimnivas.com/frontend/images/logo.png",
    "handler": function (response){
          $.ajax({
            url: 'http://antimniwas.com/razorpay/payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

               window.location.href = 'http://antimniwas.com/paymentsucecss.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
 });

</script>

</body>

<!-- Mirrored from antimnivas.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 10:50:52 GMT -->

</html>