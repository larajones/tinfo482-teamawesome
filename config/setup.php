<?php

// setup database file;

# Database connection here
include('config/connection.php'); //database connection file

#Constants
DEFINE('D_TEMPLATE', template);


#functions
include('functions/data.php');
include('functions/template.php');
include('functions/sandbox.php');




#site setup
$debug = data_setting_value($dbc, 'debug-status'); //turn debug panel on or off

$path = get_path(); //call to clean url function

$site_title = 'Site Name'; //set site title

if(!isset($path['call_parts'][0]) || $path['call_parts'][0] == '' ) //set $pageid to equal the value give in the URL

{ 
    
    //$path['call_parts'][0] = 'home';
    header('Location: home');
 

    
}

#page setup
$page = data_page($dbc, $path['call_parts'][0]);




?>
