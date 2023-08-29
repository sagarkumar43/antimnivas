<?php
// Database Connection
class FB_API{
    public $hostname=       'localhost'; // Enter Your Hostname
    public $DBusername=     'pakki85n_sagar';    // Enter your database username
    public $DBpassword=     'sagar@123';        // Enter your database password
    public $DBname=         'pakki85n_antim'; // Enter your database name
    public $usersTableName= 'fblogin'; // Enter your users table name
    
    // Facebook API Key
    public $FB_APP_ID= '471121704033144'; // Enter your fb App ID
    public $FB_APP_SECRET='f1429a21774d28633283295268a72ad2'; // Enter your fb Secret key
    public $FB_REDIRECT_URL= 'index.php'; // Enter page address where it will redirect after login
    // Facebook API Path
    
    public $FB_API_path='facebook-login/autoload.php'; /* keep as it is your api folder same
    like this*/
    }

?>