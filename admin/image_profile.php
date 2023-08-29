<?php
include('dbconnection.php');
$data="select * from image_profile";
$exe=mysqli_query($connect,$data);
$read=mysqli_fetch_array($exe);
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms ::
		w3layouts</title>
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

</head>

<body class="cbp-spmenu-push">
	<div class="main-content">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<!--left-fixed -navigation-->
			<?php include('left.php'); ?>
		</div>
		<!--left-fixed -navigation-->

		<!-- header-starts -->
		<?php include('header.php') ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Forms</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms">
						<div class="form-title">
							<h4>About Section :</h4>
						</div>
						<div class="form-body">



							<form method="POST" enctype="multipart/form-data">

								<div class="form-group"> <label for="">Upload Profile</label> <input type="file" id=""
										name="img_upload">
									<img src="upload/<?php echo $read["File"];?>" height=100 width=100 />
								</div>

								<div class="form-group"> <label for="">Name</label> <input type="text"
										class="form-control" id="" placeholder="Enter your name" name="name"
										value="<?php echo $read["Name"];?>"> </div>

								<div class="form-group"> <label for="">Designation</label> <input type="text"
										class="form-control" id="" placeholder="Enter your designation"
										name="designation" value="<?php echo $read["Designation"];?>"> </div>

								<div class="form-group"> <label for="">Facebook</label> <input type="text"
										class="form-control" id="" placeholder="Social media links" name="facebook"
										value="<?php echo $read["Facebook"];?>"> </div>

								<div class="form-group"> <label for="">Twitter</label> <input type="text"
										class="form-control" id="" placeholder="Social media links" name="twitter"
										value="<?php echo $read["Twitter"];?>"> </div>

								<div class="form-group"> <label for="">Instagram</label> <input type="text"
										class="form-control" id="" placeholder="Social media links" name="instagram"
										value="<?php echo $read["Instagram"];?>"> </div>

								<div class="form-group"> <label for="">Linkedin</label> <input type="text"
										class="form-control" id="" placeholder="Social media links" name="linkedin"
										value="<?php echo $read["Linkedin"];?>"> </div>


								<button type="submit" class="btn btn-default" value="submit" name="save">Submit</button>
							</form>
						</div>
					</div>


					<?php
if(isset($_POST["save"]))
{
	$filename=$_FILES["img_upload"]["name"];
	$filetemp=$_FILES["img_upload"]["tmp_name"];
	move_uploaded_file($filetemp,"upload/".$filename);
	$name=$_POST["name"];
	$designation=$_POST["designation"];
	$facebook=$_POST["facebook"];
	$twitter=$_POST["twitter"];
	$instagram=$_POST["instagram"];
	$linkedin=$_POST["linkedin"];
	if($filename=="")
	{
		$filecondition=$read["File"];
	}
	else{
		$filecondition=$filename;
	}
	$insert="update image_profile set File='$filecondition',Name='$name',Designation='$designation',Facebook='$facebook',twitter='$twitter',instagram='$instagram',linkedin='$linkedin'";

if(mysqli_query($connect,$insert))
{
  echo "<script>alert('Data Updated successfully')</script>";
  
  echo"<script>window.location.href = 'image_profile.php'</script>";
}
else
{
  echo "<script>alert('Data not Updated successfully')</script>";
}
}
?>

				</div>
			</div>
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