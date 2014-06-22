<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php 
            echo $title_for_layout; 
            ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        echo $this->Html->meta('icon');

        // Load CSS 
        //echo $this->Html->css(array('bookndo01','flat-ui','map','bootstrap','bootstrap-docs','prettify'));
        // Load JavaScripts
        /* echo $this->Html->script(array('application','bookndo01','bootstrap.min','bootstrap-select','bootstrap-switch','flatui-checkbox','flatui-fileinput','flatui-radio','holder','html5shiv','icon-font-ie7','jquery.placeholder','jquery.tagsinput','jquery.ui.touch-punch.min','jquery-1.8.3.min','jquery-1.10.2.min','jquery-2.0.3.min','jquery-ui-1.10.3.custom.min','map','respond.min','typeahead','validator')); */


        /* echo $this->Html->script(array('min/bookndo01-ck','min/bootstrap.min-ck','min/map-ck')); */

        // Add style follow the index.html page
        echo $this->Html->css(array('bootstrap.css', 'flat-ui', 'bookndo01', 'map'));

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
                                        <a class="btn btn-primary btn-sm" href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'add')) ?>"> SIGN UP</a>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" >
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
                                <a href="<?php echo $this->webroot . "index.php" ?>"><img class="img-responsive logo-container-desktop pull-left" src="<?php echo $this->webroot . "img/bookndo.png" ?>" alt="Bookndo" id="logo-top"></a>
                            </div>
                        </div>
                    </nav>

                    <div class="container">
                        <div class="row">
                            <ul class="nav nav-pills nav-justified">
                                <li <?php
                                $url = $this->Html->url(array('controller' => 'pages', 'action' => 'display', 'home'));
                                $url_request = $this->request->here;

                                if ($url == $url_request)
                                    echo('class="active"');
                                ?>>
                                    <a href="<?php echo $this->webroot ?>">HOME</a>
                                </li>
                                <li <?php
                                $url = $this->Html->url(array('controller' => 'pages', 'action' => 'display', 'about_us'));
                                $url_request = $this->request->here;

                                if ($url == $url_request)
                                    echo('class="active"');
                                ?>>
                                    <a href="<?php echo $this->webroot . "about_us" ?>">ABOUT US</a>
                                </li>
                                </li>
                                <li <?php
                                $url = $this->Html->url(array('controller' => 'pages', 'action' => 'display', 'contact'));
                                $url_request = $this->request->here;

                                if ($url == $url_request)
                                    echo('class="active"');
                                ?>> 
                                    <a href="<?php echo $this->webroot . "contact" ?>">CONTACT</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- CONTENT WILL APPEAR HERE -->

                <div id="content">

                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?>
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
                <?php
                echo $this->Html->script(array('jquery-1.10.2.min','jquery-1.8.3.min', 'jquery-ui-1.10.3.custom.min', 'jquery.ui.touch-punch.min', 'bootstrap.min', 'bootstrap-select', 'bootstrap-switch', 'flatui-checkbox', 'flatui-radio', 'jquery.tagsinput', 'jquery.placeholder', 'application', 'bookndo01', 'validator', 'map'));
                //echo $this->Js->writeBuffer(); // By default scripts are cached, and we must explicitly print out the cache
                ?>
<?php
                require 'login_modal.php';
?>
