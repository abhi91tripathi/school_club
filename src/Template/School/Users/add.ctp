<!-- BEGIN PAGE -->  
        <div >
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
                        <h3 class="page-title">
                            Form Components
                            <small>form components and widgets</small>
                        </h3>
                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a> 
                                <span class="icon-angle-right"></span>
                            </li>
                            <li>
                                <a href="#">Form Stuff</a>
                                <span class="icon-angle-right"></span>
                            </li>
                            <li><a href="#">Form Components</a></li>
                        </ul>
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->
                <div class="row-fluid">
                    <div class="span12">
                        <!-- BEGIN VALIDATION STATES-->
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <h4><i class="icon-reorder"></i>Advance Validation</h4>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <h3>Advance validation of custom radio buttons, checkboxes and chosen dropdowns</h3>
                                <form name="myForm" id="add_fr"  class="form-horizontal"  novalidate ng-submit="myForm.$valid && login.submit()" >
                                    <div class="alert alert-error hide">
                                        <button class="close" data-dismiss="alert"></button>
                                        You have some form errors. Please check below.
                                    </div>
                                    <div class="alert alert-success hide">
                                        <button class="close" data-dismiss="alert"></button>
                                        Your form validation is successful!
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Role<span class="required">*</span></label>
                                        <div class="controls">
                                            <?= $this->Form->input('group_id', [
                                                    'class' => 'span6 chosen-with-diselect',
                                                    'type'=>'select',
                                                    'label' => false,
                                                    'div' => false,
                                                    'options' => $groupOption,
                                                    'default'=>'1',
                                                  'ng-model'=>'item.group_id'
                                                ]);?>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">First-Name<span class="required">*</span></label>
                                        <div class="controls">
                                            <?= $this->Form->input('first_name',[
                                                'div' => FALSE,
                                                'label' => FALSE,
                                                'class' => 'span6 m-wrap',
                                                'data-required' => 1,
                                                  'ng-model'=>'item.first_name',
                                                'required'=>'required'
                                            ]);?>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Last-Name<span class="required">*</span></label>
                                        <div class="controls">
                                            <?= $this->Form->input('last_name',[
                                                'div' => FALSE,
                                                'label' => FALSE,
                                                'class' => 'span6 m-wrap',
                                                'data-required' => 1,
                                                  'ng-model'=>'item.last_name'
                                            ]);?>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email<span class="required">*</span></label>
                                        <div class="controls">
                                            <?= $this->Form->input('email',[
                                                'div' => FALSE,
                                                'label' => FALSE,
                                                'class' => 'span6 m-wrap',
                                                'data-required' => 1,
                                                  'ng-model'=>'item.email'
                                            ]);?>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Username<span class="required">*</span></label>
                                        <div class="controls">
                                            <?= $this->Form->input('username',[
                                                'div' => FALSE,
                                                'label' => FALSE,
                                                'class' => 'span6 m-wrap',
                                                'data-required' => 1,
                                                  'ng-model'=>'item.username'
                                            ]);?>
                                            <span style="color:red" ng-show="myForm.username.$dirty && myForm.username.$invalid">
                                            <span ng-show="myForm.username.$error.required">Username is required.</span>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Mobile No<span class="required">*</span></label>
                                        <div class="controls">
                                            <?= $this->Form->input('mobile_no',[
                                                'div' => FALSE,
                                                'label' => FALSE,
                                                'class' => 'span6 m-wrap',
                                                'data-required' => 1,
                                                'id' => 'mobile_no',
                                                  'ng-model'=>'item.mobile_no'
                                            ]);?>
                                            <span style="color:red" ng-show="myForm.mobile_no.$dirty && myForm.mobile_no.$invalid">
                                            <span ng-show="myForm.mobile_no.$error.required">Username is required.</span>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit"  ng-disabled="myForm.username.$dirty && myForm.username.$invalid ||
  myForm.mobile_no.$dirty && myForm.mobile_no.$invalid" class="btn green">Validate</button>
                                        <button type="reset" class="btn">Cancel</button>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <!-- END VALIDATION STATES-->
                    </div>
                </div>


                <!-- END PAGE CONTENT-->         
            </div>
            <!-- END PAGE CONTAINER-->
        </div>

       