<?php
include('dbconnection.php');

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Tables ::
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
	<!-- Confirmation on delete button -->
	<script>
		function con() {
			var c = confirm("Are You Sure To Delete This Row?");
			if (c == true) {
				return true;
			}
			else {
				return false;
			}
		}

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
					<h2 class="title1">User Obituaries</h2>
					<div class="table-responsive bs-example widget-shadow">
                    <a class="btn btn-primary" href="user.php">Back to Users</a>
						<table class="table table-bordered" id="myTable">
							<thead>
								<tr>
									<th>S.no</th>
									<th>Obituary Name</th>
									<th>Plan Start date</th>
									<th>Plan End date</th>
									<th>Amount Paid</th>
									<th>Home Page Featured </th>
									<th>Obituary Status</th>
								</tr>
							</thead>
							<tbody>
							<?php
$id=$_GET["email"];
$query="select * from add_obituary where Upload_By='$id'";
$execute=mysqli_query($connect,$query);
$count=1;
while($read=mysqli_fetch_array($execute))
  {
	$obituarypackageprice=$read["Plans"];
	$featurepackageprice=$read["Featured"];
							?>
								<tr>
									<th scope="row"><?php echo $count;?></th>
									<td><?Php echo $read["Obituary_Heading"];?></td>
									<td><?Php 
									
									$plan_start=date_create($read["Date_Time"]);
									echo $plan_start_date2=date_format($plan_start,"d-m-Y");
									?></td>

									<?php 
$query1="select * from  add_package where Package_Amount='$obituarypackageprice'";
$execute1=mysqli_query($connect,$query1);
$read1=mysqli_fetch_array($execute1);
$Time_Period=$read1["Time_Period"];
$plan_start_date=$read["Date_Time"];
 $date=date_create($plan_start_date);
$plan_start_date1=date_format($date,"d-m-Y");
$end_package_date= date('d-m-Y', strtotime($plan_start_date1."+$Time_Period days"));
//echo date('Y-m-d', strtotime($Date. ' + 2 days'));

									?>
									<td><?php echo $end_package_date?></td>

<?php


if($featurepackageprice=="Not Selected")
{
	$featurepackageprice1=0;
}
else
{
	$featurepackageprice1=$featurepackageprice;
}
$totalamount=$obituarypackageprice+$featurepackageprice1;
?>
									<td>Rs.<?php echo $totalamount;?></td>



									<td><?php echo $read["Featured_obituaries"]; ?></td>
									<td><?php echo $read["Status"]; ?>
									<br>

<?php
$status= $read["Status"];
if($status == 'inactive')
{


?>
														<a href="user_obituaries_status.php?status=active&id=<?php echo $read["id"]?>&email=<?php echo $read["Upload_By"]?>">Make Active</a>
														<?php } else {	?>

									<a href="user_obituaries_status.php?status=inactive&id=<?php echo $read["id"]?>&email=<?php echo $read["Upload_By"]?>">Make Inactive</a>
									<?php } ?>

									</td>
								</tr>
								<?php $count++; } ?>
							</tbody>
						</table>
					</div>


				</div>

				</table>
			</div>
		</div>
	</div>
	
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