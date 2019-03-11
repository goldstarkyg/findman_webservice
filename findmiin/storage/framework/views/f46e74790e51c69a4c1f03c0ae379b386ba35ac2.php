<?php /* Page title */ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(_t(config('Convert.admin_profile')[0], [], $_SESSION['lang'])); ?>

@parent
<?php $__env->stopSection(); ?>

<?php /* page level styles */ ?>
<?php $__env->startSection('header_styles'); ?>
<link href="<?php echo e(asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(asset('assets/vendors/x-editable/css/bootstrap-editable.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(asset('assets/css/pages/user_profile.css')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>


<?php /* Page content */ ?>
<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <!--section starts-->
        <h1><?php echo e(_t(config('Convert.admin_profile')[0], [], $_SESSION['lang'])); ?></h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(route('dashboard')); ?>">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    <?php echo e(_t(config('Convert.dashboard')[0], [], $_SESSION['lang'])); ?>

                </a>
            </li>
            <li>
                <a href="#"><?php echo e(_t(config('Convert.admins')[0], [], $_SESSION['lang'])); ?></a>
            </li>
            <li class="active"><?php echo e(_t(config('Convert.admin_profile')[0], [], $_SESSION['lang'])); ?></li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav  nav-tabs ">
                   <li class="active">
                        <a href="#tab1" data-toggle="tab">
                            <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i>
                            <?php echo e(_t(config('Convert.admin_profile')[0], [], $_SESSION['lang'])); ?></a>
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab">
                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            <?php echo e(_t(config('Convert.change_password')[0], [], $_SESSION['lang'])); ?></a>
                    </li>

                </ul>
                <div  class="tab-content mar-top">
                    <div id="tab1" class="tab-pane fade active in">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">

                                            <?php echo e(_t(config('Convert.admin_profile')[0], [], $_SESSION['lang'])); ?>

                                        </h3>

                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-4">
                                            <div class="img-file">
                                                <?php if($user->pic): ?>
                                                    <img src="<?php echo url('/').'/uploads/staffs/'.$user->pic; ?>" alt="profile pic" class="img-max" style="width:200px;">
                                                <?php else: ?>
                                                    <img src="<?php echo e(url('/img/userimage.png')); ?>" alt="profile pic" style="width:200px;">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped" id="users">

                                                        <tr>
                                                            <td><?php echo e(_t(config('Convert.first_name')[0], [], $_SESSION['lang'])); ?></td>
                                                            <td>
                                                                <?php echo e($user->first_name); ?>

                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td><?php echo e(_t(config('Convert.last_name')[0], [], $_SESSION['lang'])); ?></td>
                                                            <td>
                                                                <?php echo e($user->last_name); ?>

                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td><?php echo e(_t(config('Convert.email')[0], [], $_SESSION['lang'])); ?></td>
                                                            <td>
                                                                <?php echo e($user->email); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <?php echo e(_t(config('Convert.gender')[0], [], $_SESSION['lang'])); ?>

                                                            </td>
                                                            <td>
                                                                <?php echo e($user->gender); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo e(_t(config('Convert.birthday')[0], [], $_SESSION['lang'])); ?></td>

                                                            <?php if($user->dob=='0000-00-00'): ?>
                                                                <td>
                                                                </td>
                                                            <?php else: ?>
                                                                <td>
                                                                <?php echo e($user->dob); ?>

                                                            </td>
                                                             <?php endif; ?>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo e(_t(config('Convert.country')[0], [], $_SESSION['lang'])); ?></td>
                                                            <td>
                                                                <?php echo e($user->country); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo e(_t(config('Convert.state')[0], [], $_SESSION['lang'])); ?></td>
                                                            <td>
                                                                <?php echo e($user->state); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo e(_t(config('Convert.cities')[0], [], $_SESSION['lang'])); ?></td>
                                                            <td>
                                                                <?php echo e($user->city); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo e(_t(config('Convert.address')[0], [], $_SESSION['lang'])); ?></td>
                                                            <td>
                                                                <?php echo e($user->address); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo e(_t(config('Convert.postal_code')[0], [], $_SESSION['lang'])); ?></td>
                                                            <td>
                                                                <?php echo e($user->postal); ?>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo e(_t(config('Convert.status')[0], [], $_SESSION['lang'])); ?></td>
                                                            <td>

                                                                <?php if($user->deleted_at): ?>
                                                                    Deleted
                                                                <?php elseif($activation = Activation::completed($user)): ?>
                                                                    Activated
                                                                <?php else: ?>
                                                                    Pending
                                                                <?php endif; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo e(_t(config('Convert.create_date')[0], [], $_SESSION['lang'])); ?></td>
                                                            <td>
                                                                <?php echo $user->created_at->diffForHumans(); ?>

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12 pd-top">
                                <form class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="inputpassword" class="col-md-3 control-label">
                                                <?php echo e(_t(config('Convert.password')[0], [], $_SESSION['lang'])); ?>

                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                    <input type="password" id="password" placeholder="Password"
                                                           class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnumber" class="col-md-3 control-label">
                                                <?php echo e(_t(config('Convert.confirm_password')[0], [], $_SESSION['lang'])); ?>

                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                    <input type="password" id="password-confirm" placeholder="Password"
                                                           class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-primary" id="change-password"><?php echo e(_t(config('Convert.submit')[0], [], $_SESSION['lang'])); ?>

                                            </button>
                                            &nbsp;
                                            <input type="reset" class="btn btn-default hidden-xs" value="<?php echo e(_t(config('Convert.reset')[0], [], $_SESSION['lang'])); ?>"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php /* page level scripts */ ?>
<?php $__env->startSection('footer_scripts'); ?>
<!-- Bootstrap WYSIHTML5 -->
<script  src="<?php echo e(asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')); ?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#change-password').click(function (e) {
                e.preventDefault();
                var check = false;
                var sendData = '_token=<?php echo e(Session::getToken()); ?>' + '&password=' + $('#password').val() + '&password-confirm=' + $('#password-confirm').val();
                if ($('#password').val() === $('#password-confirm').val()) {
                    check = true;
                }
                if (check) {
                    $.ajax({
                        url: '<?php echo e(route('staffpasswordreset', $user->id)); ?>',
                        type: "post",
                        data: sendData,
                        success: function (data) {
                            alert('<?php echo e(_t('password reset successful', [], $_SESSION['lang'])); ?>');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert('<?php echo e(_t('error in password reset', [], $_SESSION['lang'])); ?>');
                        }
                    });
                } else {
                    alert('<?php echo e(_t('password and password confirm does not match', [], $_SESSION['lang'])); ?>');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>