<?php include_once('fb-config.php');
?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login with Facebook using PHP SDK</title>
	
	<link rel="shortcut icon" href="https://learncodeweb.com/demo/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	

	<div class="container">
		
    	<div class="row">
			<div class="col-sm-12 text-center p-5">
				<?php
			/*	print"<pre>";
				print_r($_SESSION);
				print"</pre>"
				*/
				//$logoutUrl = $helper->getLogoutUrl($_SESSION['fbAccessToken'], 'https://learncodeweb.com/demo/php/login-with-facebook-using-php-sdk/logout.php');
				?>
				<p>Welcome <em class="text-danger"><?php echo $_SESSION['username']?></em></p>
				<?php /*?><a href="<?php echo $logoutUrl;?>" class="btn btn-lg btn-danger"><i class="fa fa-fw fa-power-off"></i> Logout</a><?php */?>
				<a href="logout.php" class="btn btn-lg btn-danger"><i class="fa fa-fw fa-power-off"></i> Logout</a>
			</div>
		</div>
    </div> <!--/.container-->
	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>