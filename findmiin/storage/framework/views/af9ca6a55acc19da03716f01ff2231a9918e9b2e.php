<?php /* Page title */ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(_t(config('Convert.add_admins')[0], [], $_SESSION['lang'])); ?>

    @parent
    <?php $__env->stopSection(); ?>

    <?php /* page level styles */ ?>
    <?php $__env->startSection('header_styles'); ?>
            <!--page level css -->
    <link href="<?php echo e(asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendors/select2/css/select2.min.css')); ?>" type="text/css" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendors/select2/css/select2-bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/pages/wizard.css')); ?>" rel="stylesheet">
    <!--end of page level css-->
<?php $__env->stopSection(); ?>


<?php /* Page content */ ?>
<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1><?php echo e(_t(config('Convert.add_admins')[0], [], $_SESSION['lang'])); ?></h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(route('dashboard')); ?>">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    <?php echo e(_t(config('Convert.dashboard')[0], [], $_SESSION['lang'])); ?>

                </a>
            </li>
            <li><a href="#"><?php echo e(_t(config('Convert.admins')[0], [], $_SESSION['lang'])); ?></a></li>
            <li class="active"><?php echo e(_t(config('Convert.add_admins')[0], [], $_SESSION['lang'])); ?></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            <?php echo e(_t(config('Convert.add_admins')[0], [], $_SESSION['lang'])); ?>

                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <!-- errors -->
                        <div class="has-error">
                            <?php echo $errors->first('first_name', '<span class="help-block">:message</span>'); ?>

                            <?php echo $errors->first('email', '<span class="help-block">:message</span>'); ?>

                            <?php echo $errors->first('password', '<span class="help-block">:message</span>'); ?>

                            <?php echo $errors->first('password_confirm', '<span class="help-block">:message</span>'); ?>

                            <?php echo $errors->first('group', '<span class="help-block">:message</span>'); ?>

                            <?php echo $errors->first('country', '<span class="help-block">:message</span>'); ?>

                        </div>
                        <!--main content-->
                        <form id="commentForm" action="<?php echo e(route('admin.staffs.create')); ?>"
                              method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

                            <div id="rootwizard">
                                <ul>
                                    <li><a href="#tab1" data-toggle="tab"><?php echo e(_t(config('Convert.admin_profile')[0], [], $_SESSION['lang'])); ?></a></li>
                                    <li><a href="#tab2" data-toggle="tab"><?php echo e(_t(config('Convert.bio')[0], [], $_SESSION['lang'])); ?></a></li>
                                    <li><a href="#tab3" data-toggle="tab"><?php echo e(_t(config('Convert.address')[0], [], $_SESSION['lang'])); ?></a></li>
                                    <li><a href="#tab4" data-toggle="tab"><?php echo e(_t(config('Convert.user_group')[0], [], $_SESSION['lang'])); ?></a></li>
                                    <li><a href="#tab5" data-toggle="tab"><?php echo e(_t('Privilege', [], $_SESSION['lang'])); ?></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab1">
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group">
                                            <label for="first_name" class="col-sm-2 control-label"><?php echo e(_t(config('Convert.first_name')[0], [], $_SESSION['lang'])); ?> *</label>
                                            <div class="col-sm-10">
                                                <input id="first_name" name="first_name" type="text"
                                                       placeholder="First Name" class="form-control required"
                                                       value="<?php echo old('first_name'); ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="first_name" class="col-sm-2 control-label"><?php echo e(_t(config('Convert.last_name')[0], [], $_SESSION['lang'])); ?> *</label>
                                            <div class="col-sm-10">
                                                <input id="last_name" name="last_name" type="text"
                                                       placeholder="Last Name" class="form-control required"
                                                       value="<?php echo old('last_name'); ?>"/>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="email" class="col-sm-2 control-label"><?php echo e(_t(config('Convert.email')[0], [], $_SESSION['lang'])); ?> *</label>
                                            <div class="col-sm-10">
                                                <input id="email" name="email" placeholder="E-Mail" type="text"
                                                       class="form-control required email" value="<?php echo old('email'); ?>"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="col-sm-2 control-label"><?php echo e(_t(config('Convert.password')[0], [], $_SESSION['lang'])); ?> *</label>
                                            <div class="col-sm-10">
                                                <input id="password" name="password" type="password" placeholder="Password"
                                                       class="form-control required" value="<?php echo old('password'); ?>"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password_confirm" class="col-sm-2 control-label"><?php echo e(_t(config('Convert.confirm_password')[0], [], $_SESSION['lang'])); ?> *</label>
                                            <div class="col-sm-10">
                                                <input id="password_confirm" name="password_confirm" type="password"
                                                       placeholder="Confirm Password " class="form-control required"
                                                       value="<?php echo old('password_confirm'); ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2" disabled="disabled">
                                        <h2 class="hidden">&nbsp;</h2> <div class="form-group required">
                                            <label for="dob" class="col-sm-2 control-label"><?php echo e(_t(config('Convert.birthday')[0], [], $_SESSION['lang'])); ?></label>
                                            <div class="col-sm-10">
                                                <input id="dob" name="dob" type="text" class="form-control"
                                                       data-date-format="YYYY-MM-DD"
                                                       placeholder="yyyy-mm-dd"/>
                                            </div>
                                            <span class="help-block"><?php echo e($errors->first('dob', ':message')); ?></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="pic" class="col-sm-2 control-label"><?php echo e(_t(config('Convert.profile_picture')[0], [], $_SESSION['lang'])); ?></label>
                                            <div class="col-sm-10">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                        <img src="http://placehold.it/200x200" alt="profile pic">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                                                    <div>
                                <span class="btn btn-default btn-file">
                                    <span class="fileinput-new"><?php echo e(_t(config('Convert.select_image')[0], [], $_SESSION['lang'])); ?></span>
                                    <span class="fileinput-exists"><?php echo e(_t(config('Convert.change')[0], [], $_SESSION['lang'])); ?></span>
                                    <input id="pic" name="pic_file" type="file" class="form-control"/>
                                </span>
                                                        <a href="#" class="btn btn-danger fileinput-exists"
                                                           data-dismiss="fileinput"><?php echo e(_t(config('Convert.remove')[0], [], $_SESSION['lang'])); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="bio" class="col-sm-2 control-label"><?php echo e(_t(config('Convert.bio')[0], [], $_SESSION['lang'])); ?> <small>(<?php echo e(_t(config('Convert.brief_intro')[0], [], $_SESSION['lang'])); ?>) *</small></label>
                                            <div class="col-sm-10">
                        <textarea name="bio" id="bio" class="form-control"
                                  rows="4"><?php echo old('bio'); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3" disabled="disabled">
                                        <div class="form-group <?php echo e($errors->first('gender', 'has-error')); ?>">
                                            <label for="email" class="col-sm-2 control-label"><?php echo e(_t(config('Convert.gender')[0], [], $_SESSION['lang'])); ?> *</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" title="Select Gender..." name="gender">
                                                    <option value=""><?php echo e(config('Convert.select')[0]); ?></option>
                                                    <option value="male"
                                                            <?php if(old('gender') === 'male'): ?> selected="selected" <?php endif; ?> ><?php echo e(config('Convert.male')[0]); ?>

                                                    </option>
                                                    <option value="female"
                                                            <?php if(old('gender') === 'female'): ?> selected="selected" <?php endif; ?> >
                                                        <?php echo e(config('Convert.female')[0]); ?>

                                                    </option>
                                                    <option value="other"
                                                            <?php if(old('gender') === 'other'): ?> selected="selected" <?php endif; ?> ><?php echo e(config('Convert.other')[0]); ?>

                                                    </option>

                                                </select>
                                            </div>
                                            <span class="help-block"><?php echo e($errors->first('gender', ':message')); ?></span>
                                        </div>
                                        <input type="hidden" name="country" value="MY">

                                        <!--<div class="form-group <?php echo e($errors->first('country', 'has-error')); ?>">
                                            <label for="country" class="col-sm-2 control-label"><?php echo e(config('Convert.country')[0]); ?> *</label>
                                            <div class="col-sm-10">
                                                //Form::select('country', $countries, 'MY',['class' => 'form-control select2', 'id' => 'countries'])
                                            </div>
                                            <span class="help-block"><?php echo e($errors->first('country', ':message')); ?></span>
                                        </div>-->

                                        <div class="form-group">
                                            <label for="state" class="col-sm-2 control-label"><?php echo e(_t(config('Convert.state')[0], [], $_SESSION['lang'])); ?> *</label>
                                            <div class="col-sm-10">
                                                <input id="state" name="state" type="text" class="form-control"
                                                       value="<?php echo old('state'); ?>"/>
                                            </div>
                                            <span class="help-block"><?php echo e($errors->first('state', ':message')); ?></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="city" class="col-sm-2 control-label"><?php echo e(_t(config('Convert.cities')[0], [], $_SESSION['lang'])); ?> *</label>
                                            <div class="col-sm-10">
                                                <input id="city" name="city" type="text" class="form-control"
                                                       value="<?php echo old('city'); ?>"/>
                                            </div>
                                            <span class="help-block"><?php echo e($errors->first('city', ':message')); ?></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="address" class="col-sm-2 control-label"><?php echo e(_t(config('Convert.address')[0], [], $_SESSION['lang'])); ?> *</label>
                                            <div class="col-sm-10">
                                                <input id="address" name="address" type="text" class="form-control"
                                                       value="<?php echo old('address'); ?>"/>
                                            </div>
                                            <span class="help-block"><?php echo e($errors->first('address', ':message')); ?></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="postal" class="col-sm-2 control-label"><?php echo e(_t(config('Convert.postal_code')[0], [], $_SESSION['lang'])); ?></label>
                                            <div class="col-sm-10">
                                                <input id="postal" name="postal" type="text" class="form-control"
                                                       value="<?php echo old('postal'); ?>"/>
                                            </div>
                                            <span class="help-block"><?php echo e($errors->first('postal', ':message')); ?></span>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab4" disabled="disabled">
                                        <p class="text-danger"><strong></strong></p>

                                        <div class="form-group required">
                                            <label for="group" class="col-sm-2 control-label"><?php echo e(_t(config('Convert.user_group')[0], [], $_SESSION['lang'])); ?> *</label>
                                            <div class="col-sm-10">
                                                <select class="form-control required" title="Select group..." name="group"
                                                        id="group">
                                                    <option value=""><?php echo e(config('Convert.select')[0]); ?></option>
                                                    <?php foreach($groups as $group): ?>
                                                        <option value="<?php echo e($group->id); ?>"
                                                                <?php if($group->id == 2): ?> selected="selected" <?php endif; ?> ><?php echo e($group->name); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <span class="help-block"><?php echo e($errors->first('group', ':message')); ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="activate" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                                <input id="activate" name="activate" type="hidden"
                                                       class="pos-rel p-l-30"
                                                       value="1" <?php if(old('activate')): ?> checked="checked" <?php endif; ?> >
                                            <span></span></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab5" disabled="disabled">
                                        <input id="privilege_r" name="privilege_r" type="hidden"  value=""/>
                                        <input id="privilege_w" name="privilege_w" type="hidden"  value=""/>
                                        <h5 id="privilege_warning" style="display: none; color: #D2413A">You must select a privilege at least</h5>
                                        <div class="form-group" style="margin-bottom: 10px">
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10" style="display: inline-flex">
                                                <label class="control-label" style="margin-right: 40px;">Read</label>
                                                <label class="control-label">Write</label>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-bottom: 10px">
                                            <label for="cardfinds" class="col-sm-2 control-label"><?php echo e(_t('Cardfinds', [], $_SESSION['lang'])); ?> </label>
                                            <div class="col-sm-10" style="display: inline-flex">
                                                <input id="cardfinds_r" type="checkbox" onclick="setPrivilege_r('-1','cardfinds')"
                                                       class="form-control" style="width:16px;height:16px;margin-top:9px;margin-left:8px;margin-right:55px;"/>
                                                <input id="cardfinds_w" type="checkbox" onclick="setPrivilege_w('-1','cardfinds')"
                                                       class="form-control" style="width:16px;height:16px;margin-top:9px"/>
                                            </div>
                                        </div>
                                        <?php
                                            $sections = \DB::table('findmiin_section')->select(['name'])->get();
                                            $num = 0;
                                        ?>
                                        <input type="hidden" id="section_lenght" value="<?php echo e(count($sections)); ?>">
                                        <?php
                                        foreach($sections as $section){
                                           $num++;
                                        ?>
                                            <div class="form-group" style="margin-bottom: 10px">
                                                <label class="col-sm-2 control-label"><?php echo e(_t($section->name, [], $_SESSION['lang'])); ?> </label>
                                                <div class="col-sm-10" style="display: inline-flex">
                                                    <input id="section_r_<?php echo e($num); ?>" value="<?php echo e($section->name); ?>" onclick="setPrivilege_r('<?php echo e($num); ?>','<?php echo e($section->name); ?>')" type="checkbox" class="form-control"
                                                           style="width:16px;height:16px;margin-top:9px;margin-left: 8px;margin-right: 55px;"/>
                                                    <input id="section_w_<?php echo e($num); ?>" value="<?php echo e($section->name); ?>" onclick="setPrivilege_w('<?php echo e($num); ?>','<?php echo e($section->name); ?>')" type="checkbox" class="form-control"
                                                           style="width:16px;height:16px;margin-top:9px"/>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <div class="form-group" style="margin-bottom: 10px">
                                            <label for="jobs" class="col-sm-2 control-label"><?php echo e(_t('Jobs', [], $_SESSION['lang'])); ?> </label>
                                            <div class="col-sm-10" style="display: inline-flex">
                                                <input id="jobs_r" type="checkbox" onclick="setPrivilege_r('-1','jobs')" class="form-control"
                                                       style="width:16px;height:16px;margin-top:9px;margin-left: 8px;margin-right: 55px;"/>
                                                <input id="jobs_w" type="checkbox" onclick="setPrivilege_w('-1','jobs')" class="form-control"
                                                       style="width:16px;height:16px;margin-top:9px"/>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="pager wizard">
                                        <li class="previous"><a href="#"><?php echo e(_t(config('Convert.previous')[0], [], $_SESSION['lang'])); ?></a></li>
                                        <li class="next"><a href="#"><?php echo e(_t(config('Convert.next')[0], [], $_SESSION['lang'])); ?></a></li>
                                        <li class="next finish" style="display:none;"><a href="javascript:;"><?php echo e(_t(config('Convert.finish')[0], [], $_SESSION['lang'])); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--row end-->
    </section>
<?php $__env->stopSection(); ?>

<?php /* page level scripts */ ?>
<?php $__env->startSection('footer_scripts'); ?>
    <script src="<?php echo e(asset('assets/vendors/moment/js/moment.min.js')); ?>" ></script>
    <script src="<?php echo e(asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')); ?>"  type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/vendors/select2/js/select2.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/js/pages/adduser.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<script>
    function setPrivilege_r(num,str){
        var val = "";
        var count = $("#section_lenght").val();
        if(num == '-1') {
            if ($('#' + str + '_r').prop('checked') == true) {
                $('#' + str + '_r').prop('checked', true);
            } else {
                $('#' + str + '_r').prop('checked', false);
            }
        }else{
            if ($('#section_r_' + num).prop('checked') == true) {
                $('#section_r_' + num).prop('checked', true);
            } else {
                $('#section_r_' + num).prop('checked', false);
            }
        }

        if ($('#cardfinds_r').prop('checked') == true) {
            val = "cardfinds";
        }
        if ($('#jobs_r').prop('checked') == true) {
            if(val=="")
                val = "jobs";
            else
                val = val + "," + "jobs";
        }
        for(var i=1; i<=parseInt(count); i++){
            if ($('#section_r_' + i).prop('checked') == true) {
                if(val=="")
                    val = $('#section_r_' + i).val();
                else
                    val = val + "," + $('#section_r_' + i).val();
            }
        }
        $("#privilege_r").val(val);
        console.log(val);
    }
    function setPrivilege_w(num,str){
        var val = "";
        var count = $("#section_lenght").val();
        if(num == '-1') {
            if ($('#' + str +'_w').prop('checked') == true) {
                $('#' + str+ '_w').prop('checked', true);
                $('#' + str+ '_r').prop('checked', false);
                $('#' + str+ '_r').attr("disabled", true);
            } else {
                $('#' + str +'_w').prop('checked', false);
                $('#' + str +'_r').prop('checked', false);
                $('#' + str+ '_r').removeAttr("disabled");
            }
        }else{
            if ($('#section_w_' + num).prop('checked') == true) {
                $('#section_w_' + num).prop('checked', true);
                $('#section_r_' + num).prop('checked', false);
                $('#section_r_' + num).attr("disabled", true);
            } else {
                $('#section_w_' + num).prop('checked', false);
                $('#section_r_' + num).prop('checked', false);
                $('#section_r_' + num).removeAttr("disabled");
            }
        }

        if ($('#cardfinds_w').prop('checked') == true) {
            val = "cardfinds";
        }
        if ($('#jobs_w').prop('checked') == true) {
            if(val=="")
                val = "jobs";
            else
                val = val + "," + "jobs";
        }
        for(var i=1; i<=parseInt(count); i++){
            if ($('#section_w_' + i).prop('checked') == true) {
                if(val=="")
                    val = $('#section_w_' + i).val();
                else
                    val = val + "," + $('#section_w_' + i).val();
            }
        }
        $("#privilege_w").val(val);
        console.log(val);
    }
</script>
<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>