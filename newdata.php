<?php
session_start();
include('admin/dbconnection.php');
?>

<!doctype html>
<html>


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
  <meta property="og:image" content="../img/rest.jpg">
  <meta property="og:description" content="bura insaan">

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
    .owl-stage {
      width: 0px !important;
    }
  </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
<style>
  #slider3
  {
    width:538px !important;
  }


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

#mdvice{
  margin-left: 77px;
}
@media only screen and (max-width: 600px) {
  #mdvice {
    margin-left: 15px;
  }
}




.guldsta.positionRel {
  margin-top: 4px;
  margin-right: 72px !important;
}

@media only screen and (max-width: 600px) {
  .guldsta.positionRel {
    margin-right: 0px !important;
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
              <img src="../frontend/images/logo.png" alt="" width="170" />
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
              <img src="../frontend/images/logo.png" alt="" style="width: 168px;" />
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
                      <input type="button" onclick="register()" value="Register" class="button_Log">
                    </div>
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
  <?php 
  include('header.php');
  ?>


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

  <!-- ======== new profile Block ========== -->

  <script src="code.jquery.com/jquery-1.10.2.js"></script>
  <script src="code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <!-- this script helps us to capture any div -->
  <script src="frontend/js/html2canvas.js"></script>

  <script async src="static.addtoany.com/menu/page.js"></script>
  <section class="section-common new_Block_101">
    <div class="container">
      <center>
        <div style="color:green;"></div>
      </center>
      <?php
$id=$_GET['name'];
$uid=$_GET['uid'];
$query= "select * from add_obituary where Name='$id' and id='$uid'";
$execute=mysqli_query($connect,$query);
$read=mysqli_fetch_array($execute);
$images=$read["Image_File"];
$images1=explode(",",$images);
$monthNum  =$read["Born_Month"];
	$monthName = date('M', mktime(0, 0, 0, $monthNum, 10)); // March
?>



      <div class="row">


        <div class="col-sm-5">


        <div class="splide">
	<div class="splide__track">
		<ul class="splide__list">
<?php
foreach($images1 as $im){
?>
			<li class="splide__slide" id="slider3" style="width: 536px !important;">
       <div id="mdvice">
                      <div class="frameNew text-center">
                        <div class="pfo-Detail">
                          <img src="frontend/images/new-frame-gold.png" width="">
                        </div>

                        <div class="newFrame-profile">
                          <div class="proPic">
                            <img src="admin/obituary_imgs/<?php echo $im;?>">
                          </div>

                          <h3 class="headingH3">
                            <?Php echo $read["Name_Prefix"];?>
                            <?Php echo $read["Name"];?>
                          </h3>
                          <span class="text-center small-big">(
                            <?Php echo $read["Born_Date"];?>
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
                        <span class="diyaZip"><img src="frontend/images/d2.gif" style="width:66px !important;"></span>
                      </div>
                    </div>

      </li>

      <?php } ?>
      <?php if(empty($read["Videos"])) { ?>

      <?php } else { ?>
      <li class="splide__slide" id="slider3" style="width: 536px !important;">
    
                
             
                
                
                
                
                <iframe width="420" height="450" src="<?Php echo $read["Videos"];?>" frameborder="0" allow="accelerometer; autoplay;     clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

             


               
      </li>
      <?php }?>
		</ul>
	</div>
</div>
          
        </div>

        <div class="col-sm-7">
          <div class="ght_prof">

            <h2 class="text-center font-weight600 size20 font_custom">
              <?Php echo $read["Name_Prefix"];?>
              <?Php echo $read["Name"];?>
              <input type="hidden" name="custId" value="<?Php echo $read["id"];?>" readonly>

            </h2>


            <span class="text-center span_12">(
              <?Php echo $read["Born_Date"];?>
              <?Php echo $monthName;?>
              <?Php echo $read["Born_Year"];?> ) - (
              <?Php echo $read["Pass_Date"];?>
              <?Php echo $read["Pass_Month"];?>
              <?Php echo $read["Pass_Year"];?> )
            </span>
            <p class="paddingT-15">
              <?Php echo $read["Biography"];?>
            </p>
            <div class="like_comment">
              <div class="like_1 box_inner" onclick="" id="mobileview"><img src="frontend/images/apploader.gif" width="34" alt="" />
                <?php
                  $profile_id=$read["id"];
                 $sql="select * from  diyalikes where hitprofile='$profile_id'";
                        $result=mysqli_query($connect,$sql);
                        $values=mysqli_fetch_assoc($result);
                       
                        $count=mysqli_num_rows($result);

                        if($count==1)
                        {
                          $num_row=$values['countlikes'];
                        }
                        else
                        {
                          $num_row=0;
                        }
                        
                       ?>
                       


                                  <?php if(empty($_SESSION["username"])) { ?>

                                <a href="mobile_device_login.php">Diya(
                                  <?php echo $num_row; ?>)
                                </a>

                                <?php } else { ?>

                                <a href="diya.php?profileid=<?php echo $read["id"];?>&name=
                                  <?php echo $read["Name"];?>" id="myBtn">Diya(
                                  <?php echo $num_row; ?>)
                                </a>
                                <?php
                                }
                                ?>



              </div>
              <div class="like_1 box_inner" onclick="" id="desktopview"><img src="frontend/images/apploader.gif" width="34" alt="" />
                <?php
                  $profile_id=$read["id"];
                 $sql="select * from  diyalikes where hitprofile='$profile_id'";
                        $result=mysqli_query($connect,$sql);
                        $values=mysqli_fetch_assoc($result);
                       
                        $count=mysqli_num_rows($result);

                        if($count==1)
                        {
                          $num_row=$values['countlikes'];
                        }
                        else
                        {
                          $num_row=0;
                        }
                        
                       ?>
                       


                                  <?php if(empty($_SESSION["username"])) { ?>

                                <a href="#myModal_52" class="linkmedia" data-toggle="modal">Diya(
                                  <?php echo $num_row; ?>)
                                </a>

                                <?php } else { ?>

                                <a href="diya.php?profileid=<?php echo $read["id"];?>&name=<?php echo $read["Name"];?>" id="myBtn">Diya(
                                  <?php echo $num_row; ?>)
                                </a>
                                <?php
                                }
                                ?>



              </div>
              <div class="like_2 box_inner" id="commentClick"><i class="far fa-comment-alt"></i> Comment</div>
              <!-- <a href="javascript:void(0)" data-toggle="modal" data-target="#share-modal" style="color:#000000ad;"> -->
              <a href="#" style="color:#000000ad;">
                <div class="like_3 box_inner"><i class="fa fa-share"></i> Share</div>
              </a>
            </div>
            <h2 class="heading-2 text-center size20 font-weight600">Condolence Messages</h2>
            <div class="comment_box paddingT-10">

              <!--Repeat Block -->

              <form method="POST">
                <div class="commented_inner">

                  <div class="box_71">
                    <img src="img/user.png" alt="">
                  </div>

                  <div class="box_72" id="mobileview">
                    <span class="second_block input_73">
                      <input  type="text" id="mobileview" name="comments" placeholder="type here">
                    </span>

                    <!-- <button id="comment_field_btn" name="comment" class="btn btn-primary"
                        style="background-color: #ff7200;border-color: #ff7200;">Post</button> -->
                    <?php
                        if(empty($_SESSION["username"]))
                        { 
                        ?>

                    <a class="btn btn-primary" href="mobile_device_login.php"
                      style="background-color: #ff7200;border-color: #ff7200;">POST</a>
                    <?php 
                        }
                        else
                        {
                      ?>
                    <input type="submit" id="comment_field_btn1" name="comment" class="btn btn-primary" value="POST"
                      style="background-color: #ff7200;border-color: #ff7200;">
                    <?php } ?>
                  </div>
                  <div class="box_72" id="desktopview">
                    <span class="second_block input_73">
                      <input id="comment_field" type="text" id="desktopview" name="comments" placeholder="type here">
                    </span>

                    <!-- <button id="comment_field_btn" name="comment" class="btn btn-primary"
                        style="background-color: #ff7200;border-color: #ff7200;">Post</button> -->
                    <?php
                        if(empty($_SESSION["username"]))
                        { 
                        ?>

                    <a class="btn btn-primary" href="#myModal_52" data-toggle="modal"
                      style="background-color: #ff7200;border-color: #ff7200;">POST</a>
                    <?php 
                        }
                        else
                        {
                      ?>
                    <input type="submit" id="comment_field_btn1" name="comment" class="btn btn-primary" value="POST"
                      style="background-color: #ff7200;border-color: #ff7200;">
                    <?php } ?>
                  </div>
                </div>

              </form>
              <?php
if(isset($_POST["comment"]))
{
 
  
    $id=$_GET['name'];
    $usercomment=$_POST['comments'];
    $mail=$_SESSION["useremail"];
    $username=$_SESSION["username"];
    $profile_id=$read["id"];

 $insert="insert into users_comments set Comments='$usercomment',Name='$username',Usermail='$mail',Profileid='$profile_id'";

if(mysqli_query($connect,$insert))
{
  echo "<script>alert('Thanks For Your Comment')</script>";
  
  echo"<script>window.location.href = 'newdata.php?name=$id&uid=$profile_id'</script>";
}
else
{
  echo "<script>alert('Commnents Not Added,Some issues are occours!!!')</script>";
}
}
?>


              <!--Repeat Block end-->


              <!--Repeat Block -->
              <div id="commentrepeast">
                <?php
                    $profile_id=$read["id"];;
    $query="select * from users_comments where Profileid='$profile_id' ";
    $execute=mysqli_query($connect,$query);
    $count=1;
    while($read36=mysqli_fetch_array($execute))
  { ?>
                <div class="commented_inner">
                  <div class="box_71">
                    <img src="img/user.png" alt="">
                  </div>

                  <div class="box_72">
                    <span class="second_block">
                      <strong class="strong_21" style="color:#ff7200;">
                        <?php echo $read36['Name'];?>
                      </strong>
                      <?php echo $read36['Comments'];?>
                    </span>
                    <!-- <div class="btm_11">
                        <div class="like_right">
                          <img src="/frontend/images/fb.png" width="16" alt=""> 1 </div>
                      </div>	 -->
                  </div>
                </div>
                <?php $count++; } ?>
              </div>
              <!--Repeat Block end-->

            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <div class="modal fade" id="share-modal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <!--<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>-->
        <div class="modal-body">


          <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
            <a class="a2a_button_facebook a2a_counter"></a>
            <a class="a2a_button_pinterest a2a_counter"></a>
            <a class="a2a_button_tumblr a2a_counter"></a>
            <a class="a2a_button_reddit a2a_counter"></a>
            <a class="a2a_dd a2a_counter" href="https://www.addtoany.com/share"></a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- ======== profile Block ========== -->



  <?php
include('footer.php');
  ?>
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

<!-- Mirrored from antimnivas.com/obituary/Krishan-Kumar-Shrivasrtava-335 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 11:02:43 GMT -->

</html>



<script type="text/javascript">
  // share script

  $(document).ready(function () {
    //get the div content
    div_content = document.querySelector("#thumnail_item")
    //make it as html5 canvas
    html2canvas(div_content).then(function (canvas) {
      //change the canvas to jpeg image
      data = canvas.toDataURL('image/jpeg');

      //then call a super hero php to save the image
      save_img(data);
    });
  });

  //to save the canvas image
  function save_img(data) {
    //ajax method.
    $.post('/pages/test', { data: data }, function (res) {
      //if the file saved properly, trigger a popup to the user.
      // alert(res);
      if (res != '') {
        // yes = confirm('File saved in output folder, click ok to see it!');
        // if(yes){
        // alert(document.URL+'/output/'+res+'.jpg');
        // location.href =document.URL+'/output/'+res+'.jpg';
        // }
      }
      else {
        alert('something wrong');
      }
    });
  }


  $(".a2a_kit").click(function () {


    var profile_id = '335';
    datavar = "profile_id=" + profile_id;

    $.ajax({
      type: 'POST',
      url: 'https://antimnivas.com/pages/addshare',
      data: datavar,
      success: function (data) {

        if (data == 1) {
          alert('shared successfully');
        }
        if (data == 2) {
          alert('error');
        }
      }
    });

  });



</script>

<script>


  var input = document.getElementById("comment_field");


  // Execute a function when the user releases a key on the keyboard
  input.addEventListener("keyup", function (event) {
    // Number 13 is the "Enter" key on the keyboard
    if (event.keyCode === 13) {
      // Cancel the default action, if needed
      event.preventDefault();
      // Trigger the button element with a click
      var p = 0;

      if (p == 1) {

        comment($("#comment_field").val());
        $("#comment_field").load(window.location.href + " #comment_field");

      }
      else {
        document.getElementById("logButton").click();
        $("#commentButtonClicked").val(1);
        return false;
      }

    }
  });

  $('#comment_field_btn').click(function () {


    // Trigger the button element with a click
    var p = 0;

    if (p == 1 && $("#comment_field").val() != '') {

      comment($("#comment_field").val());
      $("#comment_field").load(window.location.href + " #comment_field");

    }
    else {
      $("#comment_field").focus();
      document.getElementById("logButton").click();
      $("#commentButtonClicked").val(1);
      return false;
    }

  });


  function comment(input) {

    var p = 0;
    var profile_id = '335';

    var user_id = '';


    datavar = "comment=" + input + "&profile_id=" + profile_id + "&user_id=" + user_id;

    $.ajax({
      type: 'POST',
      url: 'https://antimnivas.com/tributes/addtribute',
      data: datavar,
      success: function (data) {

        if (data == 1) {
          $("#commentrepeast").load(window.location.href + " #commentrepeast");
          window.location.reload();
        }
        if (data == 2) {
          alert('error');
        }
      }
    });


  }


  function lightDiya() {
   

<?php
      if (empty($_SESSION["useremail"])) {

    ?>
        document.getElementById("logButton").click();
      $("#commentButtonClicked").val(1);
      return false;
  <?php  }
    else {
      echo "<script>alert('test')</script>";

//
// $q="select * from diyalikes where hitprofile='$profileid'";
// $result1=mysqli_query($connect, $q);
// $read1=mysqli_fetch_array($result1);
// $count=mysqli_num_rows($result1);
// $totallikes=$read1["countlikes"];
// $existingemails=$read1["usermail"];
// $useremail=$_SESSION["useremail"];

// if($count==1)
// {
// $newcount=$count+1;
// $existingemails=$read1["usermail"];
// $currentemails=implode(",", $existingemails);
// $currentemails1= $currentemails+","+$useremail;
// $q1="update diyalikes set countlikes='$newcount',usermail='$currentemails1' where hitprofile='$profileid'";
// $result1=mysqli_query($connect, $q1);
// }
// else
// {
// $q2="insert into diyalikes countlikes='1',usermail='$useremail',hitprofile='$profileid'";
// $result1=mysqli_query($connect, $q1);
// }
//


}
?>

</script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
	new Splide( '.splide' ).mount();
  
 
</script>
<script>
   new Splide( '.splide_slide', {
	fixedWidth: '538px',
} );
  </script>
 