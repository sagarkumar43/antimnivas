<?php
session_start();
include('admin/dbconnection.php');
$key="rzp_live_959LwvLp4UxGMF";
if(empty($_SESSION["firstname"]))
{
    echo"<script>window.location.href = 'post-obituary.php'</script>";

}

   // $userimg=$_SESSION["useruploadimage"];
    $obititle=$_SESSION["title"];
    $frametype=$_SESSION["frames"];
    $prefixname=$_SESSION["nameprifix"];
    $firstname=$_SESSION["firstname"];
    $middlename=$_SESSION["middlename"];	
    $lastname=$_SESSION["lastname"];
    $bornday=$_SESSION["bornday"];
    $bornmonth=$_SESSION["bornmonth"];
    $bronyear=$_SESSION["bornyear"];
    $deathday=$_SESSION["deathday"];
    $deathmonth=$_SESSION["deathmonth"];
    $deathyear=$_SESSION["deathyear"];
    $packagename=$_SESSION["packagenames"];
    $featuredname=$_SESSION["featuredname"];
    $relatiton=$_SESSION["uploaderrelation"];
    $celebrity=$_SESSION["celbrity"];
    $bio=$_SESSION["biohere"];
    $filename=$_SESSION['useruploadimage1'];

    $mail=$_SESSION['useremail'];
    $contact=$_SESSION['usercontact'];
    
   $filetemp=$_SESSION['useruploadimage1_tmp'];


    
 if($filename=="")
 {
     $f=$read["Image_File"];
 }
 else{
     $f=$filename;
 }

 if($featuredname=="no")
 {
   $featureobs="no";
   $featureamt="Not Selected";
 }
 else
 {
  $featureobs="yes";
  $featureamt=$featuredname;

 }
 
    

?>

