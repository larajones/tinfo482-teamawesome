<?php

// setup database file;

# Database connection here
include('config/connection.php');

#Constants
DEFINE('D_TEMPLATE', template);


#functions
include('functions/data.php');
include('functions/template.php');



#site setup
$debug = data_setting_value($dbc, 'debug-status');



$site_title = 'Site Name';

if(isset($_GET['page'])) //set $pageid to equal the value give in the URL

{ 
    
    $pageid = $_GET['page'];
 
 
}else {
    
    $pageid = 'home'; //set to 1 or the home page
    
}

#page setup
$page = data_page($dbc, $pageid);




?>
