<?php /* Page title */ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(_t('Delete Users', [], $_SESSION['lang'])); ?>

@parent
<?php $__env->stopSection(); ?>

<?php /* page level styles */ ?>
<?php $__env->startSection('header_styles'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/datatables/css/dataTables.bootstrap.css')); ?>" />
    <link href="<?php echo e(asset('assets/css/pages/tables.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- end page css -->
<?php $__env->stopSection(); ?>

<?php /* Page content */ ?>
<?php $__env->startSection('content'); ?>

<section class="content-header">
                <h1><?php echo e(_t('Delete Users', [], $_SESSION['lang'])); ?></h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo e(route('dashboard')); ?>">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            <?php echo e(_t('Dashboard', [], $_SESSION['lang'])); ?>

                        </a>
                    </li>
                    <li><a href="#"><?php echo e(_t('Users', [], $_SESSION['lang'])); ?></a> </li>
                    <li class="active"><?php echo e(_t('Delete Users', [], $_SESSION['lang'])); ?></li>
                </ol>
            </section>
            <!-- Main content -->
         <section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <i class="livicon" data-name="users-remove" data-size="18" data-c="#ffffff" data-hc="#ffffff"></i>
                    <?php echo e(_t('Delete Users', [], $_SESSION['lang'])); ?>

                </h4>
            </div>
            <div class="panel-body">
                <table class="table table-bordered" id="table">
                    <thead>
                    <tr class="filters">
                        <th><?php echo e(_t('User Photo', [], $_SESSION['lang'])); ?></th>
                        <th><?php echo e(_t(config('Convert.user_name')[0], [], $_SESSION['lang'])); ?></th>
                        <th><?php echo e(_t(config('Convert.email')[0], [], $_SESSION['lang'])); ?></th>
                        <th><?php echo e(_t(config('Convert.create_date')[0], [], $_SESSION['lang'])); ?></th>
                        <th><?php echo e(_t(config('Convert.actions')[0], [], $_SESSION['lang'])); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <?php
                            $photo = '<img src="'.url('/').'/img/userimage.png" style="width:50px;height:50px;border-radius:50%"/>';
                            if(!empty($user->pic)){
                                $photo = '<img src="'.url('/').'/uploads/users/'.$user->pic .'" style="width:50px;height:50px;border-radius:50%"/>';

                            }
                            ?>
                            <td><?php echo $photo; ?></td>
                            <td><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></td>
                            <td><?php echo $user->email; ?></td>
                            <td><?php echo $user->created_at->diffForHumans(); ?></td>
                            <td>
                                <a href="<?php echo e(route('restore/user', $user->id)); ?>"><i class="livicon" data-name="user-flag" data-c="#6CC66C" data-hc="#6CC66C" data-size="18"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

        
    <?php $__env->stopSection(); ?>

<?php /* page level scripts */ ?>
<?php $__env->startSection("footer_scripts"); ?>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/datatables/js/jquery.dataTables.js')); ?>" ></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/datatables/js/dataTables.bootstrap.js')); ?>" ></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>