<?php
include('dbconnection.php');
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Antimniwas Add Obituaries</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script
        type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons CSS -->

    <!-- side nav css file -->
    <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- side nav css file -->

    <!-- js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet">
    <!--//webfonts-->

    <!-- Metis Menu -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
    <!-- Ckeditor Script Code -->
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>


    </script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

    </script>


</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <!--left-fixed -navigation-->
            <?php include('left.php'); ?>
        </div>
        <!--left-fixed -navigation-->

        <!-- header-starts -->
        <?php include('header.php'); ?>
        <!-- //header-ends -->

        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="tables">
                    <h2 class="title1">Add Obituaries</h2>
                    <div class="table-responsive bs-example widget-shadow">
                        <a class="btn btn-primary" href="obituaries.php">Back to Obituaries</a> <br><br>
                        <form enctype="multipart/form-data" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input text">
                                        <label>Name Prefix</label>
                                        <input name="prefix_name" class="form-control" value="" type="text"
                                            id="prefix_title" placeholder="Eg. Mr./Mrs./Shri./Smt. " />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label> Name</label>
                                    <input class="form-control" type="text" onkeyup="uc_cap()" value="" name="name"
                                        id="fst_name" placeholder="Enter Name" class="form-common">
                                </div>
                            </div>

                            <!-- Born Date Code Start -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input text">
                                        <label>Born Date</label>
                                        <select name="born_date" class="form-control" id="born_date">
                                            <option value="00">----Select Date----</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
                                        </select>
                                    </div>
                                    <!--<script>-->
                                    <!--    var min = 01,-->
                                    <!--        max = 31,-->
                                    <!--        select = document.getElementById('born_date');-->

                                    <!--    for (var i = min; i <= max; i++) {-->
                                    <!--        var opt = document.createElement('option');-->
                                    <!--        opt.value = i;-->
                                    <!--        opt.innerHTML = i;-->
                                    <!--        select.appendChild(opt);-->
                                    <!--    }-->
                                    <!--</script>-->


                                    <select name="born_year" class="form-control" id="born_year">
                                        <option value="">----Select Year----</option>
                                    </select>

                                    <select name="born_month" class="form-control" id="">
                                        <option value="0">----Select Month----</option>
                                        <option value="01">Jan</option>
                                        <option value="02">Feb</option>
                                        <option value="03">Mar</option>
                                        <option value="04">Apr</option>
                                        <option value="05">May</option>
                                        <option value="06">Jun</option>
                                        <option value="07">Jul</option>
                                        <option value="08">Aug</option>
                                        <option value="09">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select>

                                    <script>
                                        var min = 1820,
                                            max = 2020,
                                            select = document.getElementById('born_year');

                                        for (var i = min; i <= max; i++) {
                                            var opt = document.createElement('option');
                                            opt.value = i;
                                            opt.innerHTML = i;
                                            select.appendChild(opt);
                                        }
                                    </script>
                                </div>

                                <!-- Born Date Code End -->


                                <!-- Passed Date Code Start -->

                                <div class="col-sm-4">
                                    <div class="input text">
                                        <label>Passed Date</label>
                                        <select name="pass_date" class="form-control" id="pass_date">
                                            <option value="00">----Select Date----</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
                                        </select>
                                    </div>
                                    <!--<script>-->
                                    <!--    var min = 01,-->
                                    <!--        max = 31,-->
                                    <!--        select = document.getElementById('pass_date');-->

                                    <!--    for (var i = min; i <= max; i++) {-->
                                    <!--        var opt = document.createElement('option');-->
                                    <!--        opt.value = i;-->
                                    <!--        opt.innerHTML = i;-->
                                    <!--        select.appendChild(opt);-->
                                    <!--    }-->
                                    <!--</script>-->


                                    <select name="pass_year" class="form-control" id="pass_year">
                                        <option value="">----Select Year----</option>
                                    </select>

                                    <select name="pass_month" class="form-control" id="">
                                        <option value="0">----Select Month----</option>
                                        <option value="Jan">Jan</option>
                                        <option value="Feb">Feb</option>
                                        <option value="Mar">Mar</option>
                                        <option value="Apr">Apr</option>
                                        <option value="May">May</option>
                                        <option value="Jun">Jun</option>
                                        <option value="Jul">Jul</option>
                                        <option value="Aug">Aug</option>
                                        <option value="Sep">Sep</option>
                                        <option value="Oct">Oct</option>
                                        <option value="Nov">Nov</option>
                                        <option value="Dec">Dec</option>
                                    </select>

                                    <script>
                                        var min = 1820,
                                            max = 2020,
                                            select = document.getElementById('pass_year');

                                        for (var i = min; i <= max; i++) {
                                            var opt = document.createElement('option');
                                            opt.value = i;
                                            opt.innerHTML = i;
                                            select.appendChild(opt);
                                        }
                                    </script>
                                </div>

                                <!-- Passed Date Code End -->

                                <div class="col-sm-4">
                                    <label>Obituary Heading</label>
                                    <input type="text" class="form-control" value="" name="obituary_heading"
                                        placeholder="Eg. Tribute, Shradhanjali">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Relation with deceased</label>
                                    <input type="text" class="form-control" value="" name="relation_deceased"
                                        placeholder="relation_with_deceased: Eg. Son, Grandson">
                                </div>
                                <div class="col-sm-4">
                                    <label>Uploaded By</label>
                                    <input type="text" class="form-control" value="" name="upload_by" placeholder="">
                                </div>
                                <div class="col-sm-4">
                                    <label>Uploader Contact Number</label>
                                    <input type="number" class="form-control" value="" name="uploader_contact_number"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Biography</label>
                                    <textarea id="editor1" name="biography"></textarea>
                                    <script>
                                        CKEDITOR.replace('editor1');
                                    </script>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Obituary Picture</label>
                                    <input type="file" name="image[]" id="" class="form-control" multiple>
                                    <p>Max. Allowed Size: 1Mb</p>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                        <label for="usr">Celebrity:</label>
                                        <select name="celebrity" class="form-control">
                                            <option value="" selected>----Select----</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="usr">Status:</label>
                                        <select name="statu" class="form-control">
                                            <option value="" selected>----Select----</option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="usr">Featured Obituaries:</label>
                                        <select name="featuredobituaries" class="form-control">
                                            <option value="" selected>----Select----</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="usr">Videos:</label>
                                        <input type="text" name="videos" id="" class="form-control" placeholder="https://www.youtube.com/s54?erf">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="usr">Select Frames:</label>
                                        <select name="frames" class="form-control">
                                            <option value="" selected>----Select----</option>
                                            <option value="gold">Gold</option>
                                            <option value="silver">Silver</option>
                                            <option value="black">Black</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Plans:</label>
                                    <select name="plans" class="form-control">
                                            <option value="" selected>----Select----</option>
                                            <option value="7000">1 Week-Rs 7,000</option>
                                            <option value="12000">2 Week-Rs 12,000</option>
                                            <option value="20000">3 Week-Rs 20,000</option>
                                            <option value="25000">4 Week-Rs 25,000</option>

                                        </select>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                        <label for="usr">Featured:</label>
                                        <select name="featured" class="form-control">
                                            <option value="" selected>----Select----</option>
                                            <option value="7000">1 Week-Rs 7,000</option>
                                            <option value="12000">2 Week-Rs 12,000</option>
                                            <option value="20000">3 Week-Rs 20,000</option>
                                            <option value="25000">4 Week-Rs 25,000</option>

                                        </select>
                                    </div>
                                </div>
                            </div>


                            <input type="submit" value="Add Obituaries" name="save" class="btn btn-primary">
                        </form>

                    </div>

                </div>


            </div>
        </div>
    </div>
    </div>
    </div>
    <?php
if(isset($_POST["save"]))
{

$nameprefix=$_POST["prefix_name"];
$name=$_POST["name"];
$borndate=$_POST["born_date"];
$bornyear=$_POST["born_year"];
$bornmonth=$_POST["born_month"];
$passdate=$_POST["pass_date"];
$passyear=$_POST["pass_year"];
$passmonth=$_POST["pass_month"];
$obituaryheading=$_POST["obituary_heading"];
$relation=$_POST["relation_deceased"];
$uploadby=$_POST["upload_by"];
$uploader_contact=$_POST["uploader_contact_number"];
$bio=$_POST["biography"];
$celebbrity=$_POST['celebrity'];
$status=$_POST['statu'];
$feature=$_POST['featuredobituaries'];
$frams=$_POST['frames'];
$featurs=$_POST['featured'];
$plans=$_POST['plans'];
$videourl=$_POST['videos'];
$filename=$_FILES["image"]["name"];
$filetemp=$_FILES["image"]["tmp_name"]; 
$fileupload=implode(",",$filename);

 move_uploaded_file($filetemp,"obituary_imgs/".$filename);
 
 if($filename=="")
 {
     $f=$read1["Image_File"];
 }
 else{
     $f=$fileupload;
 }
 

  $insert="insert into add_obituary set Name_Prefix='$nameprefix',Name='$name',Born_Date='$borndate',Born_Year='$bornyear',Born_Month='$bornmonth',Pass_Date='$passdate',Pass_Year='$passyear',Pass_Month='$passmonth',Obituary_Heading='$obituaryheading',Relation_Deceased='$relation',Upload_By='$uploadby',Uploader_Contact_Number='$uploader_contact',Biography='$bio',Celebrity='$celebbrity',Status='$status',Featured_obituaries='$feature',Image_File='$f',Frames='$frams',Videos='$videourl',Featured='$featurs',Plans='$plans'";

if(mysqli_query($connect,$insert))
{
  echo "<script>alert('Obituaries add successfull')</script>";
  
  echo"<script>window.location.href = 'obituaries.php'</script>";
}
else
{
  echo "<script>alert('Obituaries not add successfull')</script>";
}

}
?>
    <!--footer-->
    <?php include('footer.php'); ?>
    <!--//footer-->


    <!-- side nav js -->
    <script src='js/SidebarNav.min.js' type='text/javascript'></script>
    <script>
        $('.sidebar-menu').SidebarNav()
    </script>
    <!-- //side nav js -->

    <!-- Classie -->
    <!-- for toggle left push menu script -->
    <script src="js/classie.js"></script>
    <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;

        showLeftPush.onclick = function () {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeftPush');
        };

        function disableOther(button) {
            if (button !== 'showLeftPush') {
                classie.toggle(showLeftPush, 'disabled');
            }
        }
    </script>
    <!-- //Classie -->
    <!-- //for toggle left push menu script -->

    <!--scrolling js-->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--//scrolling js-->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"> </script>



</body>

</html>