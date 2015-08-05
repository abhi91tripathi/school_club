<?= $this->element('admin/admin_table_css'); ?>
<div class="fixed-top">
    <!-- BEGIN HEADER -->
    <?= $this->element('admin/admin_header'); ?>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid">
        <?= $this->element('admin/admin_sidebar'); ?>
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
            <div class="container-fluid">
                <!-- BEGIN PAGE HEADER-->
                <div class="row-fluid">
                    <div class="span12">
                        <!-- BEGIN STYLE CUSTOMIZER -->
                        <div class="color-panel hidden-phone">
                            <div class="color-mode-icons icon-color"></div>
                            <div class="color-mode-icons icon-color-close"></div>
                            <div class="color-mode">
                                <p>THEME COLOR</p>
                                <ul class="inline">
                                    <li class="color-black current color-default" data-style="default"></li>
                                    <li class="color-blue" data-style="blue"></li>
                                    <li class="color-brown" data-style="brown"></li>
                                    <li class="color-purple" data-style="purple"></li>
                                    <li class="color-white color-light" data-style="light"></li>
                                </ul>
                                <label class="hidden-phone">
                                    <input type="checkbox" class="header" checked value="" />
                                    <span class="color-mode-label">Fixed Header</span>
                                </label>							
                            </div>
                        </div>
                        <!-- END BEGIN STYLE CUSTOMIZER -->  
                        <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
                        <h3 class="page-title">
                            Managed Tables<small>managed table samples</small>
                        </h3>
                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="/admin/users">Home</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li><a href="#">Users Tables</a></li>
                        </ul>
                        <!-- END PAGE TITLE & BREADCRUMB-->
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->
                <div class="row-fluid">
                    <div class="span12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet box light-grey">
                            <div class="portlet-title">
                                <h4><i class="icon-globe"></i>Users-Section</h4>
                            </div>
                            <div class="portlet-body">
                                <div class="clearfix">
                                    <div class="btn-group">
                                        <a href="/admin/users/add">
                                            <button id="sample_editable_1_new" class="btn green">
                                                 Add New <i class="icon-plus"></i>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Save as PDF</a></li>
                                            <li><a href="#">Export to Excel</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>
                                        <tr>
                                            <!--<th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>-->
                                            <th>Username</th>
                                            <th class="hidden-480">Email</th>
                                            <th class="hidden-480">Mobile-No.</th>
                                            <th class="hidden-480">type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $user){?>
                                            <tr class="odd gradeX">
                                                <!--<td><input type="checkbox" class="checkboxes" value="1" /></td>-->
                                                <td><?= $user->first_name." ".$user->last_name?></td>
                                                <td class="hidden-480">
                                                    <a href="<?= $user->email?>">
                                                        <?= $user->email?>
                                                    </a>
                                                </td>
                                                <td class="hidden-480"><?= $user->mobile_no?></td>
                                                <td class="center hidden-480"><?= $user->group->name?></td>
                                                <td>
                                                    <?php if($user->status==1){?>
                                                        <span class="label label-success">Approved</span>
                                                    <?php }else{?>
                                                        <span class="label label-inverse">Blocked</span>
                                                    <?php }?>
                                                </td>
                                                <td class="actions">
                                                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                                </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="dataTables_info" id="sample_3_info">Showing 1 to 10 of 12 entries</div>
                                    </div>
                                    <div class="span6">
                                        <div class="dataTables_paginate paging_bootstrap pagination">
                                            <ul>
                                                <li class="prev disabled">
                                                    <a href="#">← Prev</a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">1</a>
                                                </li>
                                                <li>
                                                    <a href="#">2</a>
                                                </li>
                                                <li class="next">
                                                    <a href="#">Next → </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                </div>
                <!-- END PAGE CONTENT-->
            </div>
            <!-- END PAGE CONTAINER-->
        </div>
        <!-- END PAGE -->  
    </div>
    <!-- END CONTAINER -->
    <?= $this->element('admin/admin_footer'); ?>
</div>
<?= $this->element('admin/admin_table_js'); ?>