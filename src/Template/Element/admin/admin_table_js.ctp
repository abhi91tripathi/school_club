<?=
$this->Html->script([
    '../admin/assets/js/jquery-1.8.3.min',
    '../admin/assets/breakpoints/breakpoints',
    '../admin/assets/bootstrap/js/bootstrap.min',
    '../admin/assets/js/jquery.blockui',
    '../admin/assets/js/jquery.cookie',
    '../admin/assets/uniform/jquery.uniform.min',
    '../admin/assets/data-tables/jquery.dataTables',
    '../admin/assets/data-tables/DT_bootstrap',
    '../admin/assets/js/app'
]);
?>
<script>
    jQuery(document).ready(function () {
        // initiate layout and plugins
        App.init();
    });
</script>