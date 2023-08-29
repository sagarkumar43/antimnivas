<?php
include('dbconnection.php');
$id=$_GET["id"];	
$status=$_GET["status"];
$email=$_GET["email"];
 $query="update add_obituary set Status='$status' where id='$id'";
$execute=mysqli_query($connect,$query);


    echo"<script>window.location.href='user_obituaries.php?email=$email'</script>";

 
?>