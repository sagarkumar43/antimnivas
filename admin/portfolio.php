<?php
include('dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Tables :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
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

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<?php include('left.php'); ?>	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
	<?php include('header.php'); ?>
    <!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Portfolio</h2>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Add Portfolio </button> 
					<div class="table-responsive bs-example widget-shadow">
						<h4>Portfolio:</h4>
						<table class="table table-bordered">
							<thead>
								  <tr>
                                        <th>S No.</th>
										<th>Upload Project</th>
                                        <th>Project Title</th>
                                        <th>Project Category</th>
                                        <th>Action</th>
									</tr>
							</thead>
	
	
							<?php
    $q="select * from add_portfolio";
    $ex=mysqli_query($connect,$q);
    $count=1;
    while($read=mysqli_fetch_array($ex))
  {
  ?>

							<tbody>
								<tr>
									  <th scope="row"><?php echo $count;?></th>
									  <td><img src="project_img/<?php echo $read["File"];?>" height=100 width=100/></td>
                                      <td><?Php echo $read["Project_title"];?></td>
                                      <td><?Php echo $read["Category"];?></td>
									  <td>
									  <a href="#edit<?Php echo $count;?>" data-toggle="modal" class="btn btn-info">Edit</a>
									  <a href="deleteportfolio.php?delete=<?php echo $read["id"];?>" class="btn btn-danger" onclick="return con()">Delete</a>
									  </td>
								</tr>


<!-- Modal 1--> 
<div class="modal fade" id="edit<?Php echo $count;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"> <div class="modal-dialog modal-dialog-centered" role="document"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="exampleModalLongTitle">Add Portfolio</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="modal-body"> 
<?php
$id=$read["id"];
 $q1="select * from add_portfolio where id='$id'";
 $ex1=mysqli_query($connect,$q1);
 $read1=mysqli_fetch_array($ex1);
?>
<form method="POST" enctype="multipart/form-data">  

<div class="form-group"> <label for="">Upload Project</label> <input type="file" name="img_upload" value="<?php echo $read1["File"];?>">
<img src="project_img/<?php echo $read["File"];?>" height=100 width=100/>
 </div>  

<div class="form-group"> <label for="">Project Title</label> <input type="text" class="form-control" id="" placeholder="Enter Your Project Title" name="project_title"value="<?php echo $read1["Project_title"];?>"> </div> 

<label for="">Project Category</label> 
<select id="Category" name="categry">
<option value="<?php echo $read1["Category"];?>"><?php echo $read1["Category"];?></option>
  <option value="All">All</option>
  <option value="HTML_CSS">HTML/CSS</option>
  <option value="JavaScript">JavaScript</option>
  <option value="Wordpress">Wordpress</option>
  
</select>

</div> <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
<input type="submit" class="btn btn-primary" value="Update Portfolio" name="update<?Php echo $read["id"];?>"> </div> </div> </div> 

</form>



<?php
$id=$read["id"];
if(isset($_POST["update$id"]))
{
	$filename=$_FILES["img_upload"]["name"];
	$filetemp=$_FILES["img_upload"]["tmp_name"];
	move_uploaded_file($filetemp,"project_img/".$filename);
	$project_title=$_POST['project_title'];
	$categries=$_POST['categry'];
	
	if($filename=="")
	{
		$filecondition=$read["File"];
	}
	else{
		$filecondition=$filename;
	}
	

	$insert="update add_portfolio set File='$filecondition',Project_title='$project_title',Category='$categries' where id='$id'";

if(mysqli_query($connect,$insert))
{
  echo "<script>alert('Data updated successfully')</script>";
  
  echo"<script>window.location.href = 'portfolio.php'</script>";
}
else
{
  echo "<script>alert('Data not updated successfully')</script>";
}
}
?>
</div>



							</tbody>
							<?php $count++; } ?>
						</table> 
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<?php include('footer.php'); ?>
        <!--//footer-->
	</div>        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
	








<!-- Modal --> 
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"> <div class="modal-dialog modal-dialog-centered" role="document"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="exampleModalLongTitle">Add Portfolio</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="modal-body"> 

<form method="POST" enctype="multipart/form-data">  

<div class="form-group"> <label for="">Upload Project</label> <input type="file" name="img_upload">

 </div>  

<div class="form-group"> <label for="">Project Title</label> <input type="text" class="form-control" id="" placeholder="Enter Your Project Title" name="project_title"> </div> 

<label for="">Project Category</label> 
<select id="Category" name="categry">

  <option value="All">All</option>
  <option value="HTML_CSS">HTML/CSS</option>
  <option value="JavaScript">JavaScript</option>
  <option value="Wordpress">Wordpress</option>
  
</select>

</div> <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
<input type="submit" class="btn btn-primary" value="Add Portfolio" name="save"> </div> </div> </div> 

</form>



<?php
if(isset($_POST["save"]))
{
	$filename=$_FILES["img_upload"]["name"];
	$filetemp=$_FILES["img_upload"]["tmp_name"];
	move_uploaded_file($filetemp,"project_img/".$filename);
	$project_title=$_POST['project_title'];
	$categries=$_POST['categry'];
	


	$insert="insert into add_portfolio set File='$filename',Project_title='$project_title',Category='$categries'";

if(mysqli_query($connect,$insert))
{
  echo "<script>alert('Data saved successfully')</script>";
  
  echo"<script>window.location.href = 'portfolio.php'</script>";
}
else
{
  echo "<script>alert('Data not saved successfully')</script>";
}
}
?>
</div>







</body>
</html>