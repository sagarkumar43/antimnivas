<?php
include('dbconnection.php');
$id=$_GET["delete"];
$query="delete from add_education where id='$id'";

if(mysqli_query($connect,$query))
{
  echo "<script>alert('Data Deleted successfully')</script>";
  
  echo"<script>window.location.href='educations.php'</script>";
}
else
{
  echo "<script>alert('Data not Deleted successfully')</script>";
  echo"<script>window.location.href='educations.php'</script>";
}


?>