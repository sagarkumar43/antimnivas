<?php
include('dbconnection.php');
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Antimniwas About us</title>
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
    
    <!-- Ckeditor Script Code -->
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

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
        <?php
$id=$_GET['edit'];
$query= "select * from add_blog where id='$id'";
$execute=mysqli_query($connect,$query);
$read1=mysqli_fetch_array($execute);
?>
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">Blog</h2>
					<div class="table-responsive bs-example widget-shadow">
                        <?php
                        $data="select * from update_aboutus";
                        $exe=mysqli_query($connect,$data);
                        $read2=mysqli_fetch_array($exe);
                        ?>
						<form method="POST">
                        <div class="row">
                                <div class="col-sm-12">
                                    <label>Blog Title</label>
                                        <textarea id="editor2" name="blog_title"><?Php echo $read1["Blog_Title"];?></textarea>
                                    <script>

                                        CKEDITOR.replace('editor2');
                                    </script>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Blog Description</label>
                                    <textarea id="editor1" name="blog_des"><?Php echo $read1["Blog_Description"];?></textarea>
                                    <script>

                                        CKEDITOR.replace('editor1');
                                    </script>
                                </div>
                            </div>
                            <input type="submit" value="Update Blog" name="update" class="btn btn-primary">

                        </form>
                    
<?php
if(isset($_POST["update"]))
{
    $blog=$_POST['blog_title'];
    $blogdes=$_POST['blog_des'];


 $update="update add_blog set Blog_Title='$blog',Blog_Description='$blogdes' where id='$id'";

if(mysqli_query($connect,$update))
{
  echo "<script>alert('Blog update successfull')</script>";
  
  echo"<script>window.location.href = 'blog.php'</script>";
}
else
{
  echo "<script>alert('Blog not update successfull')</script>";
}

}
?>



					</div>
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