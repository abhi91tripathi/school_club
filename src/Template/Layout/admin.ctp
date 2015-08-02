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

    <?= $this->Html->css([
        '../admin/assets/bootstrap/css/bootstrap.min',
        '../admin/assets/css/metro',
        '../admin/assets/bootstrap/css/bootstrap-responsive.min',
        '../admin/assets/font-awesome/css/font-awesome',
        '../admin/assets/css/style',
        '../admin/assets/css/style_responsive',
        '../admin/assets/css/style_default',
        '../admin/assets/gritter/css/jquery.gritter',
        '../admin/assets/uniform/css/uniform.default',
        '../admin/assets/bootstrap-daterangepicker/daterangepicker',
        '../admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar',
        '../admin/assets/jqvmap/jqvmap/jqvmap',
        '../admin/assets/chosen-bootstrap/chosen/chosen',
        '../admin/assets/data-tables/DT_bootstrap',
//        '../admin/assets',
//        '../admin/assets',
//        '../admin/assets',
//        '../admin/assets'
        
        ]) ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <?=  $this->Html->script([
        '../admin/assets/js/jquery-1.8.3.min',
        '../admin/assets/breakpoints/breakpoints',
        '../admin/assets/jquery-ui/jquery-ui-1.10.1.custom.min',
        '../admin/assets/jquery-slimscroll/jquery.slimscroll.min',
        '../admin/assets/fullcalendar/fullcalendar/fullcalendar.min',
        '../admin/assets/bootstrap/js/bootstrap.min',
        '../admin/assets/js/jquery.blockui',
        '../admin/assets/js/jquery.cookie',
        '../admin/assets/jqvmap/jqvmap/jquery.vmap',
        '../admin/assets/jqvmap/jqvmap/maps/jquery.vmap.russia',
        '../admin/assets/jqvmap/jqvmap/maps/jquery.vmap.world',
        '../admin/assets/jqvmap/jqvmap/maps/jquery.vmap.europe',
        '../admin/assets/jqvmap/jqvmap/maps/jquery.vmap.germany',
        '../admin/assets/jqvmap/jqvmap/maps/jquery.vmap.usa',
        '../admin/assets/jqvmap/jqvmap/data/jquery.vmap.sampledata',
        '../admin/assets/flot/jquery.flot',
        '../admin/assets/flot/jquery.flot.resize',
        '../admin/assets/gritter/js/jquery.gritter',
        '../admin/assets/uniform/jquery.uniform.min',
        '../admin/assets/js/jquery.pulsate.min',
        '../admin/assets/bootstrap-daterangepicker/date',
        '../admin/assets/bootstrap-daterangepicker/daterangepicker',
        '../admin/assets/data-tables/DT_bootstrap',
        '../admin/assets/data-tables/jquery.dataTables',
        '../admin/assets/js/app',
    ]); ?>
    <script>
            jQuery(document).ready(function() {		
                    App.setPage("index");  // set current page
                    App.init(); // init the rest of plugins and elements
            });
    </script>
</body>
</html>
