<?php /* Page title */ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(_t('User Profile', [], $_SESSION['lang'])); ?>

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
        <?php
            $sel_user = DB::table('users')->where('id', $user->id)->first();
            $name = $sel_user->username;
        ?>
        <h1><?php echo e(_t($name, [], $_SESSION['lang'])); ?></h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(route('dashboard')); ?>">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    <?php echo e(_t('Dashboard', [], $_SESSION['lang'])); ?>

                </a>
            </li>
            <li>
                <a href="#"><?php echo e(_t('Users', [], $_SESSION['lang'])); ?></a>
            </li>
            <li class="active"><?php echo e(_t('User Profile', [], $_SESSION['lang'])); ?></li>
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
                            <?php echo e(_t('User Profile', [], $_SESSION['lang'])); ?></a>
                    </li>
                    <?php
                        if($role_id == 1 || $role_id == 2){
                    ?>
                    <li>
                        <a href="#tab2" data-toggle="tab">
                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Change Password
                        </a>
                    </li>
                    <?php } else {
                    ?>
                    <li>
                        <a href="#tab2" data-toggle="tab" style="display: none">
                            <i class="livicon" data-name="sandglass" data-size="16" data-c="#000" data-hc="#000"></i>
                            <?php echo e(_t('Invite', [], $_SESSION['lang'])); ?></a>
                        </a>
                    </li>
                    <?php }
                    ?>

                </ul>
                <div  class="tab-content mar-top">
                    <div id="tab1" class="tab-pane fade active in">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <?php echo e(_t('User Profile', [], $_SESSION['lang'])); ?>

                                        </h3>

                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-4">
                                            <div class="img-file" style="width:300px;height:250px;">
                                                <?php if($user->pic): ?>
                                                    <img src="<?php echo $user->pic; ?>" alt="profile pic" class="img-max" style="width:200px;">
                                                <?php else: ?>
                                                    <img src="<?php echo e(url('/').'/img/userimage.png'); ?>" alt="profile pic" style="width:200px;">
                                                <?php endif; ?>
                                            </div>
                                            <?php
                                            //$verify = DB::table('oollah_user_details')->where('user_id', $user->id)->first();
                                            $location = '';
                                            if($user->lat =="0" && $user->lon =="0"){
                                            }else{
                                                $location = '<a href="https://www.google.com/maps/place/'.$user->lat.','.$user->lon.'" target="_blank">'.$user->lat.', '.$user->lon.'</a>';
                                            }
                                            ?>
                                            <div style="margin-top:10px;">
                                                <?php echo e(_t('Current Location', [], $_SESSION['lang'])); ?>: <?php echo $location; ?>

                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped" id="users">

                                                        <tr>
                                                            <td><?php echo e(_t(config('Convert.username')[0], [], $_SESSION['lang'])); ?></td>
                                                            <td>
                                                                <?php echo e($user->username); ?>

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

                                                            <?php if($user->birthday=='0000-00-00'): ?>
                                                                <td>
                                                                </td>
                                                            <?php else: ?>
                                                                <td>
                                                                <?php echo e($user->birthday); ?>

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
                    <div id="tab2" class="tab-pane fade" style="display: none">
                        <div class="row">
                            <?php
                                 if($role_id == 1 || $role_id == 2){
                            ?>
                                <div class="col-md-12 pd-top">
                                    <form class="form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="inputpassword" class="col-md-2 control-label">
                                                    Password
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-8">
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
                                                <label for="inputnumber" class="col-md-2 control-label">
                                                    Confirm Password
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-8">
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
                                                <button type="submit" class="btn btn-primary" id="change-password">Submit
                                                </button>
                                                &nbsp;
                                                <input type="reset" class="btn btn-default hidden-xs" value="Reset"></div>
                                        </div>
                                    </form>
                                </div>
                            <?php }
                            else{ ?>
                            <div class="col-md-12 pd-top">
                                <div class="panel-body table-responsive">
                                    <table class="table table-striped table-bordered" id="table2">
                                        <thead>
                                        <tr>
                                            <th><?php echo e(_t('NO', [], $_SESSION['lang'])); ?></th>
                                            <th><?php echo e(_t('Sender Name', [], $_SESSION['lang'])); ?></th>
                                            <th><?php echo e(_t('Receiver Name', [], $_SESSION['lang'])); ?></th>
                                            <th><?php echo e(_t('Status', [], $_SESSION['lang'])); ?></th>
                                            <th><?php echo e(_t('Date', [], $_SESSION['lang'])); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i = 0;
                                        foreach($data as $item){
                                        $i++;
                                        ?>
                                        <tr>
                                            <td><?php echo e($i); ?></td>
                                            <td><?php echo e($item['sender']); ?></td>
                                            <td><?php echo e($item['receiver']); ?></td>
                                            <td><?php echo e($item['status']); ?></td>
                                            <td><?php echo e($item['created']); ?></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Message modal -->
        <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 80%">
                    <div class="modal-body" style="font-size: 150%">
                        <?php echo e(_t(config('Convert.notice')[0], [], $_SESSION['lang'])); ?>

                    </div>
                    <div class="modal-body" id="messagecontent">
                        <?php echo e(_t(config('Convert.inpute_message')[0], [], $_SESSION['lang'])); ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal"><?php echo e(_t(config('Convert.ok')[0], [], $_SESSION['lang'])); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- claimed delete modal -->
        <div class="modal fade" id="deleteClaimedModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 80%">
                    <div class="modal-body" style="font-size: 150%">
                        <?php echo e(_t(config('Convert.notice')[0], [], $_SESSION['lang'])); ?>

                    </div>
                    <input type="hidden" id="deleteclaimedid" value="0">
                    <div class="modal-body">
                        <?php echo e(_t(config('Convert.delete_message')[0], [], $_SESSION['lang'])); ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal" onclick="deleteClaimed()"><?php echo e(_t(config('Convert.delete')[0], [], $_SESSION['lang'])); ?></button>
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal"><?php echo e(_t(config('Convert.cancel')[0], [], $_SESSION['lang'])); ?></button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="activeClaimedModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 80%">
                    <div class="modal-body" style="font-size: 150%">
                        <?php echo e(_t(config('Convert.notice')[0], [], $_SESSION['lang'])); ?>

                    </div>
                    <input type="hidden" id="occ_id" value="0">
                    <?php /*<input type="hidden" id="activeid" value="0">*/ ?>
                    <div class="modal-body" id="statecontent">
                        <?php echo e(_t(config('Convert.active_message')[0], [], $_SESSION['lang'])); ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal" onclick="claimedActive()"><?php echo e(_t(config('Convert.ok')[0], [], $_SESSION['lang'])); ?></button>
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal"><?php echo e(_t(config('Convert.cancel')[0], [], $_SESSION['lang'])); ?></button>
                    </div>
                </div>
            </div>
        </div>
        <?php /* inactive product modal*/ ?>
        <div class="modal fade" id="inactiveClaimedModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 80%">
                    <div class="modal-body" style="font-size: 150%">
                        <?php echo e(_t(config('Convert.notice')[0], [], $_SESSION['lang'])); ?>

                    </div>
                    <input type="hidden" id="occ_id" value="0">
                    <?php /*<input type="hidden" id="inactiveid" value="0">*/ ?>
                    <div class="modal-body" id="statecontent">
                        <?php echo e(_t(config('Convert.inactive_message')[0], [], $_SESSION['lang'])); ?>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal" onclick="claimedInactive()"><?php echo e(_t(config('Convert.ok')[0], [], $_SESSION['lang'])); ?></button>
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal"><?php echo e(_t(config('Convert.cancel')[0], [], $_SESSION['lang'])); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- favorite delete modal -->
        <div class="modal fade" id="deleteFavoriteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 80%">
                    <div class="modal-body" style="font-size: 150%">
                        <?php echo e(_t(config('Convert.notice')[0], [], $_SESSION['lang'])); ?>

                    </div>
                    <input type="hidden" id="deletefavoriteid" value="0">
                    <div class="modal-body">
                        <?php echo e(_t(config('Convert.delete_message')[0], [], $_SESSION['lang'])); ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal" onclick="deleteFavorite()"><?php echo e(_t(config('Convert.delete')[0], [], $_SESSION['lang'])); ?></button>
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal"><?php echo e(_t(config('Convert.cancel')[0], [], $_SESSION['lang'])); ?></button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="activeFavoriteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 80%">
                    <div class="modal-body" style="font-size: 150%">
                        <?php echo e(_t(config('Convert.notice')[0], [], $_SESSION['lang'])); ?>

                    </div>
                    <input type="hidden" id="occ_id" value="0">
                    <?php /*<input type="hidden" id="activeid" value="0">*/ ?>
                    <div class="modal-body" id="statecontent">
                        <?php echo e(_t(config('Convert.active_message')[0], [], $_SESSION['lang'])); ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal" onclick="favoriteActive()"><?php echo e(_t(config('Convert.ok')[0], [], $_SESSION['lang'])); ?></button>
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal"><?php echo e(_t(config('Convert.cancel')[0], [], $_SESSION['lang'])); ?></button>
                    </div>
                </div>
            </div>
        </div>
        <?php /* inactive product modal*/ ?>
        <div class="modal fade" id="inactiveFavoriteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 80%">
                    <div class="modal-body" style="font-size: 150%">
                        <?php echo e(_t(config('Convert.notice')[0], [], $_SESSION['lang'])); ?>

                    </div>
                    <input type="hidden" id="occ_id" value="0">
                    <?php /*<input type="hidden" id="inactiveid" value="0">*/ ?>
                    <div class="modal-body" id="statecontent">
                        <?php echo e(_t(config('Convert.inactive_message')[0], [], $_SESSION['lang'])); ?>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal" onclick="favoriteInactive()"><?php echo e(_t(config('Convert.ok')[0], [], $_SESSION['lang'])); ?></button>
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal"><?php echo e(_t(config('Convert.cancel')[0], [], $_SESSION['lang'])); ?></button>
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
                var token = '<?php echo e(Session::getToken()); ?>';
                var sendData = '_token=<?php echo e(Session::getToken()); ?>' + '&password=' + $('#password').val() + '&password-confirm=' + $('#password-confirm').val();
                //var sendData = '&password=' + $('#password').val() + '&password-confirm=' + $('#password-confirm').val();
                if ($('#password').val() === $('#password-confirm').val()) {
                    check = true;
                }
                //headers: {'X-CSRF-Token': token},
                //processData: false,
                //contentType: false,
                if (check) {
                    $.ajax({
                        url: '<?php echo e(route('passwordreset', $user->id)); ?>',
                        type: 'get',
                        data: sendData,
                        success: function (data) {
                            alert('password reset successful');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert('error in password reset');
                        }
                    });
                } else {
                    alert('password and password confirm does not match');
                }
            });
        });

        //claimed functions

        function claimedActive(id){
            var id = $('#deleteclaimedid').val();
            // console.log(id);
            $.ajax({
                type: "get",
                url: '/admin/claimed/' + id + '/active',
                success: function (result) {
                    location.reload();
                },
                error: function (result) {
                    console.log(result)
                }
            });
        }
        function claimedInactive(id){
            var id = $('#deleteclaimedid').val();
            console.log(id);
            // console.log(id);
            $.ajax({
                type: "get",
                url: '/admin/claimed/' + id + '/inactive',
                success: function (result) {
                    location.reload();
                },
                error: function (result) {
                    console.log(result)
                }
            });
        }
        function setClaimedActive(id){
            $('#deleteclaimedid').val(id);
            $('#activeClaimedModal').modal('show');
        }
        function setClaimedInactive(id){
            $('#deleteclaimedid').val(id);
            $('#inactiveClaimedModal').modal('show');
        }
        function deleteClaimedItem(id){
            $('#deleteclaimedid').val(id);
            //$('#deleteModal').modal('show');
        }
        function deleteClaimed(){
            var id = $('#deleteclaimedid').val();
            /* delete row in database and datatable  */
            $.ajax({
                type: "get",
                url: '/admin/claimed/' + id + '/delete',
                success: function (result) {
                    if(result == ''){
                        $('#messagecontent').html('<?php echo e(_t('Successfully deleted', [], $_SESSION['lang'])); ?>');
                        location.reload();
                    }else{
                        $('#messagecontent').html('This is using in '+result);
                    }
                    $('#messageModal').modal('show');
                    //location.reload();
                },
                error: function (result) {
                    console.log(result)

                }
            });
        }
        //favorites functions

        function favoriteActive(id){
            var id = $('#deletefavoriteid').val();
            // console.log(id);
            $.ajax({
                type: "get",
                url: '/admin/favorite/' + id + '/active',
                success: function (result) {
                    location.reload();
                },
                error: function (result) {
                    console.log(result)
                }
            });
        }
        function favoriteInactive(id){
            var id = $('#deletefavoriteid').val();
            console.log(id);
            // console.log(id);
            $.ajax({
                type: "get",
                url: '/admin/favorite/' + id + '/inactive',
                success: function (result) {
                    location.reload();
                },
                error: function (result) {
                    console.log(result)
                }
            });
        }
        function setFavoriteActive(id){
            $('#deletefavoriteid').val(id);
            $('#activeFavoriteModal').modal('show');
        }
        function setFavoriteInactive(id){
            $('#deletefavoriteid').val(id);
            $('#inactiveFavoriteModal').modal('show');
        }
        function deleteFavoriteItem(id){
            $('#deletefavoriteid').val(id);
            //$('#deleteModal').modal('show');
        }
        function deleteFavorite(){
            var id = $('#deletefavoriteid').val();
            /* delete row in database and datatable  */
            $.ajax({
                type: "get",
                url: '/admin/favorite/' + id + '/delete',
                success: function (result) {
                    if(result == ''){
                        $('#messagecontent').html('<?php echo e(_t('Successfully deleted', [], $_SESSION['lang'])); ?>');
                        location.reload();
                    }else{
                        $('#messagecontent').html('This is using in '+result);
                    }
                    $('#messageModal').modal('show');
                    //location.reload();
                },
                error: function (result) {
                    console.log(result)

                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>