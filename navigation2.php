<nav class=" navbar navbar-inverse" role="navigation">
<div class="navbar-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
				<div class="pull-left ">
					<ul class="userMenu ">
						<li><a href="#"> <span class="hidden-xs">HELP</span><i class="glyphicon glyphicon-info-sign hide visible-xs "></i> </a></li>
						<li class="phone-number"><a href="callto:#"> <span> 
						<i class="glyphicon glyphicon-phone-alt "></i></span> <span class="hidden-xs" style="margin-left:5px"> +1-253-000-0000 </span></a></li>
					</ul>
				</div>
			</div>
			
			<div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
				<div class="pull-right">
					<ul class="userMenu">
						<li><a href="#"><span class="hidden-xs"> My Account</span> <i class="glyphicon glyphicon-user hide visible-xs "></i></a></li>
						<li><a href="#" data-toggle="modal" data-target="#ModalLogin"> <span class="hidden-xs">Sign In</span>
						<i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a></li>
						<li class="hidden-xs"><a href="#" data-toggle="modal" data-target="#ModalSignup"> Create Account </a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
</div>


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
    
