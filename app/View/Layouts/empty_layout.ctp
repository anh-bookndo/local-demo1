<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $title_for_layout; ?>
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
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
    </body>
</html>
<?php
echo $this->Html->script(array('jquery-1.10.2.min', 'jquery-1.8.3.min', 'jquery-ui-1.10.3.custom.min', 'jquery.ui.touch-punch.min', 'bootstrap.min', 'bootstrap-select', 'bootstrap-switch', 'flatui-checkbox', 'flatui-radio', 'jquery.tagsinput', 'jquery.placeholder', 'application', 'bookndo01', 'validator', 'map'));
echo $this->Js->writeBuffer(); // By default scripts are cached, and we must explicitly print out the cache
?>
