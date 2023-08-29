<?php
include('dbconnection.php');
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Antimniwas Obituaries</title>
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
					<h2 class="title1">Obituaries</h2>
						<a href="addobituary.php" type="button" class="btn btn-primary">Add Obituaries</a>
					<div class="table-responsive bs-example widget-shadow">
						<h4>Obituaries:</h4>
						<table class="table table-bordered" id="myTable">
							<thead>
								<tr>
									<th>S.no</th>
									<th>Name</th>
									<th>Date</th>
									<th>Package</th>
									<th>Time Period</th>
									<th>Celebrity</th>
									<th>Status</th>
									<th>Featured Obituaries</th>
									<th>Videos</th>
									<th>Frames</th>
									<th>Featured</th>
									<th>Plans</th>
									<th>Date & Time</th>
									<th>Action</th>
								</tr>
							</thead>
						
							<tbody>
							<?php
    $query="select * from add_obituary";
    $execute=mysqli_query($connect,$query);
    $count=1;
    while($read=mysqli_fetch_array($execute))
  {
  ?>
								<tr>
									<th scope="row"><?php echo $count;?></th>
									<td><?Php echo $read["Name_Prefix"];?> <?Php echo $read["Name"];?></td>
									<td>( <?Php echo $read["Born_Date"];?> <?Php echo $read["Born_Month"];?> <?Php echo $read["Born_Year"];?> ) - ( <?Php echo $read["Pass_Date"];?> <?Php echo $read["Pass_Month"];?> <?Php echo $read["Pass_Year"];?> )</td>
									<td>
									<?php
									
									if(!$Package="")
									{
										echo "Not Applicable";
									}
									?>
									</td>
									<td><?php
									
									if(!$Time_period="")
									{
										echo "Not Applicable";
									}
									?>
									</td>
									<td><?Php echo $read["Celebrity"];?></td>
									<td><?Php echo $read["Status"];?></td>
									<td><?Php echo $read["Featured_obituaries"];?></td>
									<td><?Php echo $read["Videos"];?></td>
									<td><?Php echo $read["Frames"];?></td>
									<td><?Php echo $read["Featured"];?></td>
									<td><?Php echo $read["Plans"];?></td>
									<td><?Php echo $read["Date_Time"];?></td>
									<td>
										<a href="editobituary.php?edit=<?php echo $read['id'] ?>" data-toggle="" class="btn btn-info">Edit</a>
										<a href="viewobituaries.php?view=<?php echo $read["id"];?>" data-toggle="" class="btn btn-success">View</a>
									</td>
								</tr>
						
								<?php $count++; } ?>
								</tbody>
						
						</table>
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