<?php

// setup database file;

# Database connection here



# Database connection
include('../config/connection.php');


#Constants
DEFINE('D_TEMPLATE', template);


#functions
include('functions/data.php');
include('functions/template.php');
include('functions/sandbox.php');



#site setup
$debug = data_setting_value($dbc, 'debug-status');



$site_title = 'Site Name';

if(isset($_GET['page'])) //set $pageid to equal the value give in the URL

{ 
    
    $page = $_GET['page'];
 
 
}else {
    
    $page = "dashboard"; //set to 1 or the home page
    
}

#page setup

include('config/queries.php');



#User Setup

$user = data_user($dbc, $_SESSION['username']);



?>
