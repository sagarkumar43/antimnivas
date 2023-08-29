<?php
include_once('fb-config.php');

try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (!isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
    header('HTTP/1.0 400 Bad Request');
    echo 'Bad request';
  }
  exit;
}

if(!$accessToken->isLongLived()){
  // Exchanges a short-lived access token for a long-lived one
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
    exit;
  }
}

//$fb->setDefaultAccessToken($accessToken);

# These will fall back to the default access token
$res 	= 	$fb->get('/me',$accessToken->getValue());
$fbUser	=	$res->getDecodedBody();


$resImg		=	$fb->get('/me/picture?type=large&amp;amp;redirect=false',$accessToken->getValue());
$picture	=	$resImg->getGraphObject();

$_SESSION['fUsereemail']=    $fbUser['useremail'];
$_SESSION['fbUserId']		=	$fbUser['id'];
$_SESSION['username']		=	$fbUser['name'];
$_SESSION['fbAccessToken']	=	$accessToken->getValue();

checkuser($_SESSION['fbUserId'],$_SESSION['username']);
	function checkuser($facebook_id, $facebook_user)
                                                        {
                                                            $connect = mysqli_connect("localhost","pakki85n_sagar","sagar@123","pakki85n_antim");

                                                            $q="select * from fontend_signup where facebook_id='$facebook_id'";
                                                            $check = mysqli_query($connect,$q);
                                                            $check1 = mysqli_num_rows($check);
                                                            if (empty($check1)) { // New user Insertion       
                                                                $query = "INSERT INTO fontend_signup (facebook_id,Name) VALUES ('$facebook_id','$facebook_user')";
                                                                mysqli_query($connect,$query);
                                                            } else { // Returned user data update        
                                                                $query = "UPDATE fontend_signup SET Name='$facebook_user' where facebook_id='$facebook_id'";
                                                                mysqli_query($connect,$query);
                                                            }
                                                        }

echo "<script>window.location.href='https://antimnivas.com/'</script>";
//header('Location: https://antimnivas.com/');
exit;
?>