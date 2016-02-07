<?php
 include ('config/setup.php'); ?>
<!DOCTYPE html>
<html>
<head>
    
    
     <title>
       <?php  echo $page['title']. ' | ' . $site_title; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php  include ('config/css.php'); ?>
    <?php  include ('config/js.php'); ?>
</head>


<body>
    
    
    <?php  include (D_TEMPLATE.'/navigation2.php'); ?>
    <div class="container">

	<div class="row">
		
	  <div class="col-sm-1"></div>
	  
	  <div class="col-sm-5">
	  	<?php  include ('widgets/createaccount.php'); ?>
	  </div>
	
	  <div class="col-sm-5">
	  	<?php  include ('widgets/clogin.php'); ?>
	  </div>
	  
	  <div class="col-sm-1"></div>
		  
	</div>
	  
	</div>



          
    <!--debug -->
    </div>
    <?php  include (D_TEMPLATE.'/footer2.php'); ?>
    <?php 
    
    if($debug == 1)  {
        include ('widgets/debug.php');
    }

    ?>
</body>


</html>
