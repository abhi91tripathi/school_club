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
        '../admin/assets/uniform/css/uniform.default',
        
        ]) ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="login">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <?=  $this->Html->script([
        '../admin/assets/js/jquery-1.8.3.min',
        '../admin/assets/breakpoints/breakpoints',
        '../admin/assets/uniform/jquery.uniform.min',
        '../admin/assets/js/jquery.blockui',
        '../admin/assets/jquery-validation/dist/jquery.validate.min',
        '../admin/assets/js/app',
    ]); ?>
    <script>
        jQuery(document).ready(function() {     
          App.initLogin();
        });
    </script>
</body>
</html>
