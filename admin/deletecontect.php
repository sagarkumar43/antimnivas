<?php
include('dbconnection.php');
$id=$_GET["delete"];
$query="delete from contact_me where id='$id'";

if(mysqli_query($connect,$query))
{
  echo "<script>alert('Enquiry Deleted')</script>";
  
  echo"<script>window.location.href='enquiry.php'</script>";
}
else
{
  echo "<script>alert('Enquiry not Deleted')</script>";
  echo"<script>window.location.href='enquiry.php'</script>";
}


?>