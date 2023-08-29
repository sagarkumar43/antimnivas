


         <!doctype html>
<html>

<!-- Mirrored from antimnivas.com/publish-obituary?profile-id=355&obituary-name= by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 11:02:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>



 <meta name="google-site-verification" content="ItrJMgGYc_m2ChyF4GSs0Jvmi0P9DtZjSpC_HLo7Prk" />
<meta http-equiv=”Refresh” content=”0;URL=https://antimnivas.com” />

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta property="og:url"           content="/" >

<meta property="og:type"  content="website" >

  <meta property="og:title"         content="Digital Online Obituary, Shradhanjali, Tribute portal | Heavenly abode for the departed souls" >

<!-- <meta property="og:image" content="" > -->
   <meta property="og:image" content="img/rest.jpg" > 
  <meta property="og:description"   content="Antimnivas.com is an effort to provide a platform to keep the obituaries in a digital form. This helps in keeping the memories of the departed loved ones safe and also provides information about various religious customs and prayers required for the peace of the departed souls.">

<link rel="icon" href="frontend/images/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap" rel="stylesheet">

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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153207188-1');
</script>
</head>

<body > 

<!-- loader start -->
<!-- <div id="loading">
  <img id="loading-image" height="100px" width="100px" src="img/apploader.gif" alt="Loading..." />

</div>
 -->

<!-- loader end -->

  
  <div id="myModal_52" class="modal fade" role="dialog">
    <div class="modal-dialog pop-topInner"> 
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <div class="text-center paddingB-10">
       
      <img src="frontend/images/logo.png" alt="" width="170"/>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>      
       
        <div class="popup">
   
      <div class="pop-topInner">
    <br>      
        <div id="login_form" style="display: block;">
        <center><p id="wrong_login" style="color:green;display:none;">Incorrect Email Address Or Password</p></center>
        <div class="login-form paddingT-10">
        <!--<form > -->
        <!--  <div class="left-side">-->
        <!--    <div class="form-item"><input required="" id="login_email" name="email" type="email" placeholder="Email" required></div> -->
        <!--    <div class="form-item" style="position: relative;">-->
        <!--<input id="password-field" required=""   name="password" type="password" placeholder="Password" required>-->
        <!--  <span toggle="#password-field" style="cursor: pointer;" class="fa fa-fw field-icon toggle-password fa-eye"></span>-->
        <!--  <p id="text" class="text-danger" style="display: none;">WARNING! Caps lock is ON.</p>-->
          
        <!--</div> -->
        <!--    <input type="hidden"  id="commentButtonClicked" name="hiddenField">-->
        <!--    <p class="p1"><a style="cursor: pointer;" data-toggle="modal" data-target="#forgot">Forgot Password</a></p>-->
        <!--    <p class="p2">Not User Yet? <a href="javascript(0)" data-toggle="modal" data-target="#myModal" >Create Account</a></p>-->
        <!--   <div class="form-item text-center"><input type="button" onclick="login()" value="Login" class="button_Log"></div>-->
        <!--  </div> -->
        <!--</form>-->
         
      </div>
      </div>
      <script type="text/javascript">

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}
  function login()
  {

        var email=$("#login_email").val();
        var pwd=$("#password-field").val();
        var datavar="email="+email+"&pwd="+pwd; 

     $.ajax({

          type:'post',
          data:datavar,
          url:'/users/loginuser',
          success:function(data){
            if($("#commentButtonClicked").val()==1)
            {
              window.location.reload();
              return false;
            }
            if(data==1)
            {
               $("#wrong_login").show();
            }
            if(data==2)
            {
               window.location.replace('pages/checkout.html');
                
            }   
            if(data==3)
            {
              window.location.replace('profiles/viewprofile.html');
            }    
        }});
    }

      </script>




 <!-- <p style="text-align: center;">OR</p> -->
<center>
<!-- <fb:login-button  scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button> -->

<div class="login_via">

  <div class="faceBook marginB-20">
    <a href="app/webroot/fblogin/index.html?profile_page=" class="v-middle"><i class="fab fa-facebook-square v-middle"></i> Login Via Facebook</a>
  </div><div class="gmail marginB-20">
    <a href="app/webroot/googlelogin/index.html?profile_page=" class="v-middle"><img src="frontend/images/google-login.png" class="googl" /> Login Via Google</a>
  </div>

  </div>
</center>
<br>





      </div>
    

  </div>
        
        
      </div>

    </div>

    </div>
    </div>
  
  
  

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
      <img src="frontend/images/logo.png" alt="" width="170"/>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        <div class="login-form paddingT-10">
     
          <div class="left-side">
          
            <div class="form-item"><input name="email" id="forgot_email" required="" type="email" autocomplete="off" placeholder="Enter Email" required></div> 
         <center><p style="color:green;display: none;" id="forgot_pwd_link">Password reset link has been sent to your registered email.</p>
         <p style="color:red;display: none;" id="invalid_mail">This account is not exist</p>
         </center>
           <div class="form-item text-center"><input onclick="forgot_pwd()" type="button" value="Forgot Password" class="button_Log"></div>
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
  function forgot_pwd()
  {

    var forgot_mail=$("#forgot_email").val();
    if(forgot_mail=='')
    {
      alert('email field cannot be blank');
      return false;
    }
    if(IsEmail(forgot_mail)==false)
    {
     alert('Invalid email address');
     $("#forgot_email").focus();
     return false;
    }

     var datavar="email="+forgot_mail; 

     $.ajax({
          type:'post',
          data:datavar,
          url:'/users/forgotpwd',
          success:function(data){
            if(data==1)
            {
               $("#forgot_pwd_link").show();
               return false;
            }
            if(data==2)
            {
               $("#invalid_mail").show();
            }
            if(data==3)
            {
              alert('error in sending mail');
            }  

        }});
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
      <img src="frontend/images/logo.png" alt="" style="width: 168px;"/>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        <div id="register_form">
        <div class="login-form paddingT-10" >
        <form id="registerForm" name="myForm"> 
          <div class="left-side">
            <div class="form-item"><input name="name" id="name" autocomplete="off"  type="text" placeholder="Enter Name" required></div>
            <div class="form-item"><input name="email" id="email"   required="" type="email" autocomplete="off" placeholder="Enter Email" required></div> 
            <div class="form-item"><input name="pass"  autocomplete="off" id="orgpwd"   type="password" autocomplete="off" placeholder="Enter Password" required></div> 

            <div class="form-item"><input name="confrm_pwd"    id="duppwd" required="" type="text" autocomplete="off" placeholder="Confirm Password" required></div> 
            <div class="form-item"><input name="number"  id="number" type="number"  required="" autocomplete="off" placeholder="Enter Mobile Number" required></div> 
           <div class="form-item text-center">
         <input  type="button"  onclick="register()"  value="Register" class="button_Log"></div>
           <center>

           <p style="color:red;display:none;"  id="emailexist">This email address is already exist please try another!</p>
           <p style="color:red;display:none;"  id="pwd_mismatch">Password mismatched!</p>
           <p style="color:green;display: none;"  id="confirmationlink">Confirmation link has been sent to the mail</p>
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
  <?php include ('header.php'); ?>
      

<script type="text/javascript">
  function logoutFunc()
  {
    
    datavar='d';
    $.ajax({
        type:'POST',
        url: 'https://antimnivas.com/users/logout',
        data: datavar,
        success: function(data) 
        {
          if(data==1)
          {
            location.reload();
           } 
           else
           {
            alert('unable to logout');
           }
         } 
      });
  }



</script> 
<section class="section-common new_Block_101">
    <div class="container">
      <h1 class="heading-h2 padding-post">Post Obituary</h1>  
      <div class="row">
      <div class="col-sm-4"> 
       <!-- start New Frame  Html -->
           <div class="new-Box-1 padding-0 positionRel"> 
        <div class="changeFrame">
                          <img id="formula" src="frontend/images/new-frame-gold.png" alt="frame" width="">
                                                              </div>  
        <div class="upload-pic">
          <!-- <div class="tooltip-post">Add more Images</div> -->
          
          <!-- <input type="file" class="picUpload-input" id="imgInp"> -->
          <div class="showImages"><img id="blah" src="#" alt=""></div>
          <!-- <div class="editUser"><img src="/frontend/images/user-edit.png" alt="user edit"></div> -->
          <div class="uploadBox-2 post-content"> 
             <img src="img/self/index.html">
          </div>
        </div>
         <div class="name-detail">  
           <h3 class="headingH3"> </h3>
           <span class="text-center small-big">(  ) to (  )</span>  
        </div>
      </div>
        <div class="guldsta positionRel"> 
        <img src="images/flower.html" alt="">
        <span class="diyaZip"><img src="frontend/images/d2.gif" style="width:66px !important;"></span>
      </div>
        
      <!-- End New Frame  Html -->  
          <div class="clearfix"></div>
         
      </div>
      <div class="col-sm-8">
          <h4 class="size16">Biography</h4>   
      <div class="textarea-post">
          <textarea id="w3mission" name="bio"></textarea>
      </div>
      <div class="common-btn text-center paddingT-20 paddingB-20">
        <button class="" onclick="save_bio()" type="button">Publish Obituary</button>
      </div>
      </div>
    </div>
  </div>
</section>
    
    <script type="text/javascript">

    function save_bio()
    {
      var bio=$("#w3mission").val();
      if(bio=='')
      {
        alert('Please enter bio details');
        return false;
      }
      var profile_id='355';
      var obituary_name='';
      datavar='bio='+bio+'&profile_id='+profile_id+'&obituary_name='+obituary_name;
     $.ajax({
        type:'POST',
        url: 'https://antimnivas.com/publish-obituary',
        data: datavar,
        success: function(data) 
        {
          window.location.replace("/"+data);
        }
       });
    }


    </script>


          

  <?php include('footer.php'); ?>
    <!-- Footer section End here -->
  
<script src="ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <script src="frontend/js/bootstrap.min.js"></script>
  <script src="frontend/js/FarsiType.js"></script>

<script src="frontend/js/owl.carousel.min.js"></script>   
<script src="frontend/js/mCustomScrollbar.js"></script>   
<script src="frontend/js/custom.js"></script>    


<script>
  $(window).load(function() {
    
     $('#loading').hide();
  });

</script>


  <script>
var input = document.getElementById("password-field");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

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

<!-- Mirrored from antimnivas.com/publish-obituary?profile-id=355&obituary-name= by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 11:02:53 GMT -->
</html>




