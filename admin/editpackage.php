<?php
include('dbconnection.php');
$id=$_GET['edit'];
$query= "select * from add_package where id='$id'";
$execute=mysqli_query($connect,$query);
$read1=mysqli_fetch_array($execute);
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Antimnivas Edit Package</title>
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
            <?php include('left.php') ?>
        </div>
        <!--left-fixed -navigation-->

        <!-- header-starts -->
        <?php include ('header.php'); ?>
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="tables">
                    <h2 class="title1">Packages</h2>
                    <a href="packages.php" type="button" class="btn btn-primary">View Package</a>
                    <div class="table-responsive bs-example widget-shadow">
                        <h4>Add Packages:</h4>
                        <form method="POST">
                            <div class="form-group">
                                <label for="usr">Package Type:</label>
                                <select name="obituary_type" class="form-control" value="<?php echo $read1["Package_Type"];?>">
                                    <option value="<?php echo $read1["Package_Type"];?>"><?php echo $read1["Package_Type"];?></option>
                                    <option value="obituary">Obituary</option>
                                    <option value="featured">Featured</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Package Title:</label>
                                <input type="text" name="package_title" class="form-control" id="" value="<?php echo $read1["Package_Title"];?>">
                            </div>
                            <div class="form-group">
                                <label for="">Package Amount:</label>
                                <input type="text" name="package_amt" class="form-control" id="" value="<?php echo $read1["Package_Amount"];?>">
                            </div>
                            <div class="form-group">
                                <label for="">Time Period (In Days) :</label>
                                <input type="number" name="time_period" class="form-control" id="" value="<?php echo $read1["Time_Period"];?>">
                            </div>
                            <div class="form-group">
                                <label for="">Package Tax:</label>
                                <input type="text" name="package_tax" class="form-control" id="" value="<?php echo $read1["Package_Tax"];?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">Status:</label>
                                <select name="statu" class="form-control" value="<?php echo $read1["Status"];?>">
                                    <option value="<?php echo $read1["Status"];?>"><?php echo $read1["Status"];?></option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>

                                </select>
                            </div>
                            <input type="submit" value="Update Packages" name="update" class="btn btn-primary">

                        </form>
                    </div>
                </div>
            </div>
            <?php
           
            if(isset($_POST["update"]))
            {
            
                $obituary=$_POST['obituary_type'];
                $package_title=$_POST['package_title'];
                $package_amount=$_POST['package_amt'];
                $time_period=$_POST['time_period'];
                $package_tax=$_POST['package_tax'];
                $status=$_POST['statu'];
               
            $insert="update add_package set Package_Type='$obituary',Package_Title='$package_title',Package_Amount='$package_amount',Time_Period='$time_period',Package_Tax='$package_tax',Status='$status' where id='$id'";
            
            if(mysqli_query($connect,$insert))
            {
              echo "<script>alert('Package update sucessfull')</script>";
              
              echo"<script>window.location.href='packages.php'</script>";
            }
            else
            {
              echo "<script>alert('Package not update sucessfull')</script>";
            }
            
            
            }
            ?>
        </div>
        <!--footer-->
        <?php include('footer.php'); ?>
        <!--//footer-->
    </div>

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