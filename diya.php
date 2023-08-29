<?php
session_start();
include('admin/dbconnection.php');
$name=$_GET["name"];
$profileid=$_GET["profileid"];
if (empty($_SESSION["useremail"])) {

        // echo "<script>alert('Please Login First')</script>";
        echo"<script>window.location.href='newdata.php?name=$name&uid=$profileid'</script>";
    }
  
else
{
 

  
  $q="select * from diyalikes where hitprofile='$profileid'";
  $result1=mysqli_query($connect, $q);
  $read1=mysqli_fetch_array($result1);
  $count=mysqli_num_rows($result1);
  $totallikes=$read1["countlikes"];
   $existingemails=$read1["usermail"];
    $useremail=$_SESSION["useremail"];
   
    if($count==1)
    {
      $newcount=$totallikes+1;
     
      $existingemails1=explode(",",$existingemails);
      if(in_array($useremail,$existingemails1))
      {
        echo "<script>alert('You Already Given Diyas')</script>";
        echo"<script>window.location.href='newdata.php?name=$name&uid=$profileid'</script>";
      }
      else
      {
        //  $currentemails=implode(",", $existingemails);
          $currentemails1= $existingemails.",".$useremail;
      $q1="update diyalikes set countlikes='$newcount',usermail='$currentemails1' where hitprofile='$profileid'";
  $result1=mysqli_query($connect, $q1);
   echo "<script>alert('Thank you for Diyas')</script>";
   echo"<script>window.location.href='newdata.php?name=$name&uid=$profileid'</script>";
      }
    }
    else
    {
    
        if(in_array($useremail,$existingemails1))
        {
          echo "<script>alert('You Already Given Diyas')</script>";
          echo"<script>window.location.href='newdata.php?name=$name'</script>";
        }
        else
        {
     $q2="insert into diyalikes set countlikes='1',usermail='$useremail',hitprofile='$profileid'";
      $result1=mysqli_query($connect, $q2);
      echo "<script>alert('Thank you for Diyas')</script>";
        echo"<script>window.location.href='newdata.php?name=$name'</script>";
        }
    }



}
?>