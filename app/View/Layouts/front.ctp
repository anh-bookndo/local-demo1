<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		// Load CSS 
		echo $this->Html->css(array('bookndo01','flat-ui','map','bootstrap','bootstrap-docs','prettify'));
		
		// Load JavaScripts
		echo $this->Html->script(array('application','bookndo01','bootstrap.min','bootstrap-select','bootstrap-switch','flatui-checkbox','flatui-fileinput','flatui-radio','holder','html5shiv','icon-font-ie7','jquery.placeholder','jquery.tagsinput','jquery.ui.touch-punch.min','jquery-1.8.3.min','jquery-1.10.2.min','jquery-2.0.3.min','jquery-ui-1.10.3.custom.min','map','respond.min','typeahead','validator'));
		echo $this->Html->script(array('min/bookndo01-ck','min/bootstrap.min-ck','min/map-ck'));


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

      <div class="container"> 
         <div class="row">
         <div class="header"> <!-- HEADER -->
            <nav class="navbar navbar-default" role="navigation">
               
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  </button>
                  <a class="navbar-brand logo-container-mobile" href="#">Bookndo</a>
               </div>
               
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                  <div class="row">
                     <div class="top-two-buttons pull-right">
                        <ul>
                           <a class="btn btn-primary btn-sm" href="signup.html">SIGN UP</a>
                           <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                           SIGN IN
                           </button>
                           <li class="dropdown btn-group btn-primary btn-sm">
                              <a href="#" data-toggle="dropdown" class="dropdown-toggle btn-select">EN <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                 <li><a href="#">EN</a></li>
                                 <li><a href="#">FIN</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                     <a href="index.html"><img class="img-responsive logo-container-desktop pull-left" src="images/bookndo.png" alt="Bookndo" id="logo-top"></a>
                  </div>
               </div>
            </nav>
            
            <div class="container">
               <div class="row">
                  <ul class="nav nav-pills nav-justified">
                     <li class="active"><a href="index.html" title="Home">HOME</a></li>
                     <li class="first"><a href="about_us.html" title="About Us">ABOUT US</a></li>
                     <li class="last"><a href="contact.html" title="Contact">CONTACT</a></li>
                  </ul>
               </div>
            </div>
            </div>

		<!-- CONTENT WILL APPEAR HERE -->

		<div id="content">

			<!-- Add comment here!

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?> -->
		</div>

<!-- Opens sign up as a modal -->
            <div id="container" >
              
               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close fui-cross" data-dismiss="modal" aria-hidden="true"></button>
                           <h4 class="modal-title" id="myModalLabel">SIGN IN</h4>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                       <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                                       <div class="col-lg-10">
                                          <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                                       <div class="col-lg-10">
                                          <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="col-lg-offset-2 col-lg-10">
                                          <label class="checkbox">
                                          <input type="checkbox" value="remember-me"> Remember me
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button><br />
                                          <a data-toggle="modal" role="button" href="#forgotPasswordModal">Forgot password ?</a>
                                          <br />
                                          <br />
                                       </div>
                                    </div>
                                 </form>
                              </div>
                              
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
        </div>
		<div id="footer">
			<!-- FOOTER  --> 
    <div class="footer" id="footer">
      <footer>   
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <p>More info</p>
               </div>
               <div class="col-md-4">
                  <p>More info</p>
               </div>
               <div class="col-md-4">
                  <p>More info</p>
               </div>
            </div>
            <div class="row">
               <small>&copy; 2014. Bookndo</small>
            </div>
         </div>
      </footer>
      </div>
		</div>
</body>
</html>
