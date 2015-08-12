
<div class="fixed-top">
    <!-- BEGIN HEADER -->
    <?= $this->element('school/school_header'); ?>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid" ng-controller="cfgController">
        <?= $this->element('school/school_sidebar'); ?>
        <!-- BEGIN PAGE -->  
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div id="portlet-config" class="modal hide">
                <div class="modal-header">
                    <button data-dismiss="modal" class="close" type="button"></button>
                    <h3>portlet Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here will be a configuration form</p>
                </div>
            </div>
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN PAGE CONTAINER-->
           
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->
                <div  ng-view></div>
                <!-- END PAGE CONTENT-->         
            </div>
            <!-- END PAGE CONTAINER-->
        </div>
        <!-- END PAGE -->  
    </div>
    <!-- END CONTAINER -->
    <?= $this->element('school/school_footer'); ?>

