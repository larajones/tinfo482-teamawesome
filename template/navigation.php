<nav class=" navbar navbar-inverse" role="navigation">
 <?php  if($debug == 1) { ?>
       <button id = "btn-debug"  class = "btn btn-default"><i class="fa fa-bug"></i></button>
<!--debug button-->
  <?php  } ?>
        <div class="container">
        	
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        
        	    <a class="navbar-brand" href="#">
                    <img class="s-logo" src="images/logo.png" alt="">
                </a>
            <ul class="nav navbar-nav collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php  nav_main($dbc, $pageid); ?>
                <li>
                    <a href="#">FAQ</a> 
                </li>
                <li>
                    <a href="#">Stuff</a> 
                </li>
            </ul>
        </div>
    </nav><!---end nav=-->
    
