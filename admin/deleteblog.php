<?php
include('dbconnection.php');
$id=$_GET["delete"];
$query= "delete from add_blog where id='$id'";

if(mysqli_query($connect,$query))
{
  echo "<script>alert('Blog Deleted')</script>";
  
  echo"<script>window.location.href='blog.php'</script>";
}
else
{
  echo "<script>alert('Blog not Deleted')</script>";
  echo"<script>window.location.href='blog.php'</script>";
}


?>