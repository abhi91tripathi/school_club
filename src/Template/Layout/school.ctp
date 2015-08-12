<?php
$cakeDescription = 'School';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.3/angular-route.min.js"></script>
     
        <?= $this->Html->css([
    '../admin/assets/bootstrap/css/bootstrap.min',
    '../admin/assets/css/metro',
    '../admin/assets/bootstrap/css/bootstrap-responsive.min',
    '../admin/assets/bootstrap-fileupload/bootstrap-fileupload',
    '../admin/assets/font-awesome/css/font-awesome',
    '../admin/assets/css/style',
    '../admin/assets/css/style_responsive',
    '../admin/assets/css/style_default',
    '../admin/assets/gritter/css/jquery.gritter',
    '../admin/assets/chosen-bootstrap/chosen/chosen',
    '../admin/assets/jquery-tags-input/jquery.tagsinput',
    '../admin/assets/clockface/css/clockface',
    '../admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5',
    '../admin/assets/bootstrap-datepicker/css/datepicker',
    '../admin/assets/bootstrap-timepicker/compiled/timepicker',
    '../admin/assets/bootstrap-colorpicker/css/colorpicker',
    '../admin/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons',
    '../admin/assets/data-tables/DT_bootstrap',
    '../admin/assets/bootstrap-daterangepicker/daterangepicker',
    '../admin/assets/uniform/css/uniform.default'
            
]);?>
        
        <?= $this->Html->script([
            'app.js'
        ])?>
               

    </head>
    <body ng-app="single-page-app">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </body>
    <?= $this->element('school/school_form_js'); ?>
</html>
