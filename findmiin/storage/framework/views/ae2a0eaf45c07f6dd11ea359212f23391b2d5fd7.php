<?php /* Page title */ ?>
<?php $__env->startSection('title'); ?>
    Edit Client
    @parent
<?php $__env->stopSection(); ?>

<?php /* page level styles */ ?>
<?php $__env->startSection('header_styles'); ?>
    <link href="<?php echo e(asset('assets/vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css')); ?>"  rel="stylesheet" media="screen"/>
    <link href="<?php echo e(asset('assets/css/pages/editor.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/jquery.rateyo.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/jquery.timepicker.min.css')); ?>" rel="stylesheet" />

    <link href="/vendors/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <link href="/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendors/clockface/clockface.css" rel="stylesheet" type="text/css"/>
    <link href="/vendors/jasny-bootstrap/jasny-bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/css/owl.theme.default.min.css')); ?>" rel="stylesheet"/>
    <script type="text/javascript" src="/../assets/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/../assets/js/owl.carousel.min.js"></script>
<?php $__env->stopSection(); ?>

<?php /* Page content */ ?>
<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <!--section starts-->
        <h1>Edit Client</h1>
        <ol class="breadcrumb">
            <li>
                <a href="">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    <?php echo e(config('Convert.dashboard')[0]); ?>

                </a>
            </li>
            <li>
                <a href="#">Cardfinds</a>
            </li>
            <li class="active">Edit Client</li>
        </ol>
    </section>

    <div class="panel-body" style="width:90%;margin-left:5%">

                <div class="form-group has-success" style="margin-top:20px;">
                </div>
                <form role="form" action="<?php echo e(url('/admin/cardfinds/'.$client->id.'/update')); ?>" id="CardfindUpdateForm" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="_token" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                    <input type="hidden" name="type" value="<?php echo e($type); ?>"/>
                    <input type="hidden" name="id" value="<?php echo e($client->id); ?>"/>

                    <div class="form-group has-success row">
                        <div class="col-md-6">
                            <label class="control-label" style="font-size: 120%" for="name">Business Name</label>
                            <div>
                                <input type="text" class="form-control" name="business_name" value="<?php echo e($client->business_name); ?>" placeholder="Business Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label" style="font-size: 120%" for="name">Business Phone Number</label>
                            <div>
                                <input type="text" class="form-control" name="business_phone_number" value="<?php echo e($client->business_phone_number); ?>" placeholder="Business Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-success row">
                        <label class="control-label" style="width:100%;font-size: 120%;padding: 0px 15px;" for="name">Business Address</label>
                        <div class="col-md-3">
                            <label class="control-label" style="font-size: 100%;" for="name">Address</label>
                            <div>
                                <input type="text" class="form-control" name="business_address" value="<?php echo e($client->business_address); ?>" placeholder="Address">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label" style="font-size: 100%;" for="name">City</label>
                            <div>
                                <?php
                                $cities = \DB::table('oollah_cities')->select(['name'])->get();
                                ?>
                                <select id="business_city" class="form-control"  name="business_city" type="text" value="">
                                    <?php foreach($cities as $city): ?>
                                        <option value="<?php echo e($city->name); ?>" <?php echo e($client->business_city == $city->name? 'selected':''); ?>><?php echo e($city->name); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label" style="font-size: 100%;" for="name">State</label>
                            <div>
                                <input type="text" class="form-control" name="business_state" value="<?php echo e($client->business_state); ?>" placeholder="State">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label" style="font-size: 100%;" for="name">Country</label>
                            <div>
                                <input type="text" class="form-control" name="business_country" value="<?php echo e($client->business_country); ?>" placeholder="Country">
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-success row">
                        <div class="col-md-6">
                            <label class="control-label" style="font-size: 120%" for="name">Business Latitude</label>
                            <div>
                                <input type="text" class="form-control" name="business_lat" value="<?php echo e($client->business_lat); ?>" placeholder="Business Latitude">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label" style="font-size: 120%" for="name">Business Longitude</label>
                            <div>
                                <input type="text" class="form-control" name="business_lon" value="<?php echo e($client->business_lon); ?>" placeholder="Business Longitude">
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-success row">
                        <div class="col-md-6">
                            <label class="control-label" style="font-size: 120%" for="name">Manager Name</label>
                            <div>
                                <input type="text" class="form-control" name="manager_name" value="<?php echo e($client->manager_name); ?>" placeholder="Manager Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label" style="font-size: 120%" for="name">Manager Phone Number</label>
                            <div>
                                <input type="text" class="form-control" name="manager_phone_number" value="<?php echo e($client->manager_phone_number); ?>" placeholder="Manager Phone Number">
                            </div>
                        </div>
                    </div>

                    <div class="form-group has-success row">
                        <div class="col-md-12">
                            <label class="control-label" style="font-size: 120%" for="name">Business Description</label>
                            <textarea class="form-control" rows="3" id="business_short_description" value="" name="business_short_description"><?php echo e($client->business_short_description); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group has-success row">
                        <div class="col-md-12">
                            <label class="control-label" style="font-size: 120%" for="name">Business Information</label>
                            <textarea class="form-control" rows="3" id="business_information" value="" name="business_information"><?php echo e($client->business_information); ?></textarea>
                        </div>
                    </div>

                    <div class="form-group has-success" style="padding:0px 15px;">
                        <label class="control-label" style="font-size: 120%" for="name">Logo</label>
                        <div>
                            <div class="form-group">
                                <div class="fileinput fileinput-exists" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 500px; min-height: 200px;">
                                        <img data-src="holder.js/100%x100%"></div>
                                    <div class="fileinput-preview thumbnail" style="max-width: 500px; min-height: 200px; line-height: 210px;">
                                        <img src="/uploads/card_logo/<?php echo e($client->logo); ?>" style="max-width: 500px; min-height: 200px;">
                                    </div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new"><?php echo e(config('Convert.select_image')[0]); ?></span>
                                            <span class="fileinput-exists"><?php echo e(config('Convert.change')[0]); ?></span>
                                            <input type="hidden" value="" name=""><input type="file" name="business_logo">
                                        </span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><?php echo e(config('Convert.remove')[0]); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php

                    ?>
                    <div class="form-group has-success row">
                        <div class="control-label" id="picture">
                            <label class="control-label" style="font-size: 120%" for="name">Pictures</label>
                            <div id="multifilemaindiv">
                                <?php
                                    if($client->pictures != ''){
                                        $picture_list = explode(",", $client->pictures);
                                        $num = 0;
                                        foreach ($picture_list as $picture){
                                        $num++;
                                ?>
                                        <div id="picture_remove_<?php echo e($num); ?>" class="update_pictures form-group">
                                            <div class="fileinput fileinput-exists" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 500px; min-height: 200px;">
                                                    <img data-src="holder.js/100%x100%"></div>
                                                <div class="fileinput-preview thumbnail" style="width: 500px; height: 200px;">
                                                <img src="/uploads/card_picture/<?php echo e($picture); ?>" style="max-width: 500px; max-height: 200px;"></div>
                                                <div>
                                            <?php /*<span class="btn btn-default btn-file">*/ ?>
                                                <?php /*<span class="fileinput-new">Select Image</span>*/ ?>
                                                <?php /*<span class="fileinput-exists">Change</span>*/ ?>
                                                <?php /*<input type="file" name="pictures[]" class="multi_pictures">*/ ?>
                                            <?php /*</span>*/ ?>
                                                    <span onclick="pictureRemove('<?php echo e($client->id); ?>','<?php echo e($picture); ?>','<?php echo e($num); ?>')" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</span>
                                                    <span onclick="addNewFile('1')" class="btn btn-default" style="margin-left:20px">More Add</span>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                        }
                                    }else{
                                ?>
                                    <div id="multifilediv1" class="form-group">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 500px; min-height: 200px;">
                                                <img data-src="holder.js/100%x100%"></div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 500px; min-height: 200px;"></div>
                                            <div>
                                                <span class="btn btn-default btn-file">
                                                    <span class="fileinput-new">Select Image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="pictures[]" class="multi_pictures">
                                                </span>
                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                <span onclick="addNewFile('1')" class="btn btn-default" style="margin-left:20px">More Add</span>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                    }
                                ?>

                            </div>
                            <input type="hidden" id="multiindex" value="1">
                        </div>
                    </div>

                    <script>
                        function addNewFile(index){
                            var multiindex = $('#multiindex').val();
                            multiindex++;
                            $('#multiindex').val(multiindex);
                            var html = '' +
                                    '<div id="multifilediv'+multiindex+'" class="update_pictures form-group">'+
                                    '<div class="fileinput fileinput-new" data-provides="fileinput">'+
                                    '<div class="fileinput-new thumbnail" style="width: 500px; min-height: 200px;">'+
                                    '<img data-src="holder.js/100%x100%">'+
                                    '</div>'+
                                    '<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 500px; min-height: 200px;"></div>'+
                                    '<div>'+
                                    '<span class="btn btn-default btn-file">'+
                                    '<span class="fileinput-new">Select Image</span>'+
                                    '<span class="fileinput-exists">Change</span>'+
                                    '<input type="file" name="pictures[]" class="multi_pictures">'+
                                    '</span>'+
                                    '<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>'+
                                    '<span id="addfile" onclick="addNewFile(\''+multiindex+'\')" class="btn btn-default" style="margin-left:20px">More Add</span>'+
                                    '<span id="cancelfile" onclick="removeNewFile(\''+multiindex+'\')" class="btn btn-default">Cancel</span>'+
                                    '</div>'+
                                    '</div>'+
                                    '</div>';
                            $('#multifilemaindiv').append(html);
                        }
                        function removeNewFile(index){
                            $('#multifilediv'+index).remove();
                        }
                        function pictureRemove(id,picture_name,num){
                            var _token = $('#_token').val();
                            var data = {
                                id:id,
                                picturename: picture_name,
                                _token:_token
                            };
                            console.log(data);
                            $.ajax({
                                type: "post",
                                url: '/admin/cardfinds/pictures/remove',
                                data: data,
                                success: function (result) {
                                    console.log(result);
                                    processPictureRemove(num);
                                },
                                error: function (result) {
                                    console.log(result)
                                }
                            });
                        }
                        function processPictureRemove(num){
                            var length = $('#multifilemaindiv .update_pictures').length;
                            if(length == 0){
                                addNewFile(1);
                                $("#cancelfile").hide();
                            }
                            $('#picture_remove_'+num).remove();

                        }
                    </script>
                    <div class="form-group has-success row">
                        <label class="control-label" style="width:100%;padding:0px 15px;font-size: 120%" for="name">Open Hours</label>
                        <div class="col-md-3">
                            <label class="control-label" style="font-size: 100%" for="name">Monday~Friday Start Time</label>
                            <div>
                                <input type="text" class="form-control pull-right" id="open_hour_mon_fri_from" name="open_hour_mon_fri_from" size="20" placeholder="start time" value="<?php echo e($client->open_hour_mon_fri_from); ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label" style="font-size: 100%" for="name">Monday~Friday End Time</label>
                            <div>
                                <input type="text" class="form-control pull-right" id="open_hour_mon_fri_to" name="open_hour_mon_fri_to" size="20" placeholder="end time" value="<?php echo e($client->open_hour_mon_fri_to); ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label" style="font-size: 100%" for="name">Saturday Start Time</label>
                            <div>
                                <input type="text" class="form-control pull-right" id="open_hour_sat_from" name="open_hour_sat_from" size="20" placeholder="start time" value="<?php echo e($client->open_hour_sat_from); ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label" style="font-size: 100%" for="name">Saturday End Time</label>
                            <div>
                                <input type="text" class="form-control pull-right" id="open_hour_sat_to" name="open_hour_sat_to" size="20" placeholder="end time" value="<?php echo e($client->open_hour_sat_to); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-success row">
                        <div class="col-md-3">
                            <label class="control-label" style="font-size: 100%" for="name">Sunday Start Time</label>
                            <div>
                                <input type="text" class="form-control pull-right" id="open_hour_sun_from" name="open_hour_sun_from" size="20" placeholder="start time" value="<?php echo e($client->open_hour_sun_from); ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label" style="font-size: 100%" for="name">Sunday End Time</label>
                            <div>
                                <input type="text" class="form-control pull-right" id="open_hour_sun_to" name="open_hour_sun_to" size="20" placeholder="end time" value="<?php echo e($client->open_hour_sun_to); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-success row">
                        <div class="col-md-6">
                            <label class="control-label" style="font-size: 120%" for="name">Contract Start Date</label>
                            <div>
                                <input type="text" class="form-control pull-right" id="contract_start_date" value="<?php echo e($client->contract_start_date); ?>" name="contract_start_date" size="20" placeholder="contract start date" value="<?php echo e($today); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label" style="font-size: 120%" for="name">Contract End Date</label>
                            <div>
                                <input type="text" class="form-control pull-right" id="contract_end_date" value="<?php echo e($client->contract_end_date); ?>" name="contract_end_date" size="20" placeholder="contract end date" value="<?php echo e($today); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-success row">
                        <div class="col-md-12">
                            <label class="control-label" style="font-size: 120%" for="name">Keywords</label>
                            <div>
                                <input type="text" class="form-control" name="keywords" value="<?php echo e($client->keywords); ?>" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-success row">
                        <?php
                        $categories = \DB::table('findmiin_jobs_category')->select(['name'])->orderby('id','asc')->get();
                        ?>
                        <div class="col-md-6">
                            <label class="control-label" style="font-size: 120%" for="name">Category</label>
                            <select id="category" class="form-control"  name="category" type="text" value="">
                                <?php foreach($categories as $category): ?>
                                    <option value="<?php echo e($category->name); ?>" <?php echo e($client->category == $category->name? 'selected':''); ?>><?php echo e($category->name); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group has-success row">
                        <input type="hidden" id="comment_num" name="comment_num" value="0">
                        <div class="col-md-12">
                            <label class="control-label" style="font-size: 120%" for="name">Comments</label>
                            <span class="btn btn-default" data-toggle="modal" data-target="#addModal" style="margin-left:20px;margin-bottom: 10px;">Add</span>
                        </div>
                        <div class="col-md-12" style="display: -webkit-box">
                            <table class="table table-striped table-bordered table-hover dataTable no-footer sample_editable"
                                   id="commenttable" role="grid">
                                <thead>
                                <tr role="row">
                                    <th width="5%" class="sorting_asc" tabindex="0" aria-controls="occasiontable" rowspan="1"
                                        colspan="1"><?php echo e(_t('No', [], $_SESSION['lang'])); ?>

                                    </th>
                                    <th width="15%" class="sorting_asc" tabindex="0" aria-controls="occasiontable" rowspan="1"
                                        colspan="1"><?php echo e(_t('Name', [], $_SESSION['lang'])); ?>

                                    </th>
                                    <th width="20%" class="sorting" tabindex="0" aria-controls="occasiontable" rowspan="1"
                                        colspan="1"><?php echo e(_t('Rating', [], $_SESSION['lang'])); ?>

                                    </th>
                                    <th width="40%" class="sorting" tabindex="0" aria-controls="occasiontable" rowspan="1"
                                        colspan="1"><?php echo e(_t('Content', [], $_SESSION['lang'])); ?>

                                    </th>
                                    <th width="10%" class="sorting" tabindex="0" aria-controls="occasiontable" rowspan="1"
                                        colspan="1"><?php echo e(_t('Edit', [], $_SESSION['lang'])); ?>

                                    </th>
                                    <th width="10%" class="sorting" tabindex="0" aria-controls="occasiontable" rowspan="1"
                                        colspan="1"><?php echo e(_t('Delete', [], $_SESSION['lang'])); ?>

                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $comment_list = DB::table('findmiin_comment')->where('card_id',$client->id)->get();
                                $num = 0;
                                foreach ($comment_list as $comment){
                                $num++;
                                $rating = (float)$comment->rating;
                                $rating = $rating * 10;
                                ?>
                                <tr id="tr_sel_<?php echo e($comment->id); ?>">
                                    <td><?php echo e($num); ?></td>
                                    <td><?php echo e($comment->visitor_name); ?></td>
                                    <td><div class="comment_rating_view" data-rateyo-rating="<?php echo e($rating); ?>%"></div></td>
                                    <td><?php echo e($comment->content); ?></td>
                                    <td><span class="btn btn-default" data-toggle="modal" onclick="editBtn('<?php echo e($comment->id); ?>','<?php echo e($comment->visitor_name); ?>','<?php echo e($comment->rating); ?>','<?php echo e($comment->content); ?>');" data-target="#editModal" style="padding:2px 8px;">Edit</span></td>
                                    <td><span class="btn btn-default" data-toggle="modal" onclick="deleteBtn('<?php echo e($comment->id); ?>');" data-target="#deleteModal" style="padding:2px 8px;">Delete</span></td>

                                </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="form-group has-success row">
                        <div class="col-md-12">
                            <label class="control-label" style="font-size: 120%" for="name">Facebook Link</label>
                            <div>
                                <input type="text" class="form-control pull-right" id="facebook_link" name="facebook_link" size="20" placeholder="facebook link" value="<?php echo e($client->facebook_link); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-success row">
                        <div class="col-md-12">
                            <label class="control-label" style="font-size: 120%" for="name">Google Plus Link</label>
                            <div>
                                <input type="text" class="form-control pull-right" id="google_plus_link" name="google_plus_link" size="20" placeholder="google plus link" value="<?php echo e($client->google_plus_link); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-success row">
                        <div class="col-md-12">
                            <label class="control-label" style="font-size: 120%" for="name">Twitter Link</label>
                            <div>
                                <input type="text" class="form-control pull-right" id="twitter_link" name="twitter_link" size="20" placeholder="twitter link" value="<?php echo e($client->twitter_link); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mar-10" style="padding-top:30px;">
                        <div class="col-lg-6">
                            <input type="button" value="<?php echo e(config('Convert.back')[0]); ?>" style="font-size: 120%" class="btn btn-danger btn-block btn-md btn-responsive" onclick="javascript:history.back();">
                        </div>
                        <div class="col-lg-6">
                            <?php /*<input type="submit" value="Update Client" style="font-size: 120%" class="btn btn-success btn-block btn-md btn-responsive">*/ ?>
                            <span style="font-size: 120%" onclick="updateCardfind();" class="btn btn-success btn-block btn-md btn-responsive">Update Client</span>
                        </div>
                    </div>
                </form>
    </div>
    <!-- add modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 80%">
                <div class="modal-header" style="font-size: 150%">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Comment</h4>
                </div>
                <div class="modal-body" style="font-size: 120%">
                    <table style="width:100%" class="table form-body" border="0">
                        <tr style="border:0">
                            <th style="border:0">Name:</th>
                            <td style="border:0">
                                <input type="text" name="name" class="form-control" id="comment_add_name"  value="" placeholder="name">
                            </td>
                        </tr>
                        <tr style="border:0">
                            <th style="border:0">Rating:</th>
                            <td style="border:0">
                                <input type="number" maxlength="2" min="0" max="10" step="1" name="name" class="form-control" id="comment_add_rating"  value="0">
                            </td>
                        </tr>
                        <tr style="border:0">
                            <th style="border:0">Content:</th>
                            <td style="border:0">
                                <textarea class="form-control" rows="3" id="comment_add_content" name="content" placeholder="content"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal" onclick="addComment()">Add</button>
                    <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal"><?php echo e(_t(config('Convert.cancel')[0], [], $_SESSION['lang'])); ?></button>
                </div>
            </div>
        </div>
    </div>

    <!-- edit modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 80%">
                <div class="modal-header" style="font-size: 150%">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Comment</h4>
                </div>
                <div class="modal-body" style="font-size: 120%">
                    <input type="hidden" id="comment_edit_id" value=""/>
                    <table style="width:100%" class="table form-body" border="0">
                        <tr style="border:0">
                            <th style="border:0">Name:</th>
                            <td style="border:0">
                                <input type="text" name="name" class="form-control" id="comment_edit_name"  value="" placeholder="name">
                            </td>
                        </tr>
                        <tr style="border:0">
                            <th style="border:0">Rating:</th>
                            <td style="border:0">
                                <input type="number" min="0" max="10" step="1" name="name" class="form-control" id="comment_edit_rating"  value="4.5">
                            </td>
                        </tr>
                        <tr style="border:0">
                            <th style="border:0">Content:</th>
                            <td style="border:0">
                                <textarea class="form-control" rows="3" id="comment_edit_content" name="content" placeholder="content"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal" onclick="editComment()">Save</button>
                    <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal"><?php echo e(_t(config('Convert.cancel')[0], [], $_SESSION['lang'])); ?></button>
                </div>
            </div>
        </div>
    </div>

    <!-- delete modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 80%">
                <div class="modal-body" style="font-size: 150%">
                    <?php echo e(_t(config('Convert.notice')[0], [], $_SESSION['lang'])); ?>

                </div>
                <input type="hidden" id="comment_delete_id" value="0">
                <div class="modal-body">
                    <?php echo e(_t(config('Convert.tag_delete_message')[0], [], $_SESSION['lang'])); ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal" onclick="deleteComment()"><?php echo e(_t(config('Convert.delete')[0], [], $_SESSION['lang'])); ?></button>
                    <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal"><?php echo e(_t(config('Convert.cancel')[0], [], $_SESSION['lang'])); ?></button>
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
                    Please input a comment.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal"><?php echo e(_t(config('Convert.ok')[0], [], $_SESSION['lang'])); ?></button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php /* page level scripts */ ?>
<?php $__env->startSection('footer_scripts'); ?>

    <script src="<?php echo e(asset('assets/vendors/tinymce/tinymce.min.js')); ?>" type="text/javascript"></script>
    <script  src="<?php echo e(asset('assets/vendors/ckeditor/js/ckeditor.js')); ?>"  type="text/javascript"></script>
    <script  src="<?php echo e(asset('assets/vendors/ckeditor/js/jquery.js')); ?>"  type="text/javascript" ></script>
    <script  src="<?php echo e(asset('assets/vendors/ckeditor/js/config.js')); ?>"  type="text/javascript"></script>
    <script  src="<?php echo e(asset('assets/js/pages/editor.js')); ?>"  type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')); ?>" ></script>
    <script src="<?php echo e(asset('assets/js/jquery.rateyo.min.js')); ?>" ></script>
    <script src="<?php echo e(asset('assets/js/jquery.timepicker.min.js')); ?>" ></script>
    <script src="/vendors/daterangepicker/moment.min.js" type="text/javascript"></script>
    <script src="/vendors/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="/vendors/clockface/clockface.js" type="text/javascript"></script>
    <script src="/vendors/jasny-bootstrap/jasny-bootstrap.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $(".comment_rating_view").rateYo({
                numStars: 5,
                precision: 2,
                minValue: 0,
                maxValue: 10,
                starWidth: "18px",
                readOnly:true,
            });
            document.getElementById('comment_add_rating').oninput =
                    function (e) {
                        if (parseInt(this.value) > 10) {
                            this.value = 10;
                        }
                        if (parseInt(this.value) < 0) {
                            this.value = 0;
                        }
                    }
        });
        $("#open_hour_mon_fri_from").timepicker();
        $("#open_hour_mon_fri_to").timepicker();
        $("#open_hour_sat_from").timepicker();
        $("#open_hour_sat_to").timepicker();
        $("#open_hour_sun_from").timepicker();
        $("#open_hour_sun_to").timepicker();
        $("#contract_start_date").daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            format: 'YYYY-MM-DD',
        });
        $("#contract_end_date").daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            format: 'YYYY-MM-DD',
        });
        function addComment () {
            var name = $("#comment_add_name").val();
            if (name == "") {
                $('#messagecontent').html('<?php echo e(_t('Please input name.', [], $_SESSION['lang'])); ?>');
                $('#messageModal').modal('show');
                return;
            }
            var content = $("#comment_add_content").val();
            if (content == "") {
                $('#messagecontent').html('<?php echo e(_t('Please input content.', [], $_SESSION['lang'])); ?>');
                $('#messageModal').modal('show');
                return;
            }
            var rating = $("#comment_add_rating").val();
            if (rating == "") {
                $('#messagecontent').html('<?php echo e(_t('Please input rating value.', [], $_SESSION['lang'])); ?>');
                $('#messageModal').modal('show');
                return;
            }
            var _token = $('#_token').val();
            console.log(_token);
            var data = {
                name: name,
                rating: rating,
                content: content,
                _token:_token
            };
            /*  save generated data in database and display  */
            $.ajax({
                type: "post",
                url: '/admin/cardfinds/comment/addcomment',
                data: data,
                success: function (result) {
                    processAddComment(result);
                },
                error: function (result) {
                    console.log(result)
                }
            });
        }
        function processAddComment(data){

            var newRow = "<tr id=\"tr_sel_" + data['id'] + "\">";
            newRow += "<td>"+ data['id'] +"</td>";
            newRow += "<td>"+ data['name'] +"</td>";
            var val = parseInt(data['rating']);
            val = val * 10;
            newRow += "<td><div class=\"comment_rating_view\" data-rateyo-rating='"+val.toString()+"%'></div></td>";
            newRow += "<td>"+ data['content'] +"</td>";
            newRow += "<td><span class=\"btn btn-default\" data-toggle=\"modal\" onclick=\"editBtn('"+data['id']+"','"+data['name']+"','"+data['rating']+"','"+data['content']+"');\" data-target=\"#editModal\" style=\"padding:2px 8px;\">Edit</span></td>";
            newRow += "<td><span class=\"btn btn-default\" data-toggle=\"modal\" onclick=\"deleteBtn('"+data['id']+"');\" data-target=\"#deleteModal\" style=\"padding:2px 8px;\">Delete</span></td>";
            newRow += "</tr>";
            $("#commenttable tbody").append(newRow);
            var rowCount = $('#commenttable tr').length -1;
            $("#comment_num").val(rowCount);

            var table = document.getElementById("commenttable"),
                    rows = table.getElementsByTagName('tr'),
                    cells;
            for(var i = 1; i < rowCount; i++){
                cells = rows[i].getElementsByTagName('td');
                cells[0].innerHTML = i;
            }

            $(".comment_rating_view").rateYo({
                numStars: 5,
                precision: 2,
                minValue: 0,
                maxValue: 10,
                starWidth: "18px",
                readOnly:true,
            });

        }
        function editBtn(id,name,rating,content){
            $("#comment_edit_id").val(id);
            $("#comment_edit_name").val(name);
            $("#comment_edit_rating").val(rating);
            $("#comment_edit_content").val(content);
        }

        function editComment () {
            var id=$("#comment_edit_id").val();
            var name = $("#comment_edit_name").val();
            if (name == "") {
                $('#messagecontent').html('<?php echo e(_t('Please input name.', [], $_SESSION['lang'])); ?>');
                $('#messageModal').modal('show');
                return;
            }
            var content = $("#comment_edit_content").val();
            if (content == "") {
                $('#messagecontent').html('<?php echo e(_t('Please input content.', [], $_SESSION['lang'])); ?>');
                $('#messageModal').modal('show');
                return;
            }
            var rating = $("#comment_edit_rating").val();
            if (rating == "") {
                $('#messagecontent').html('<?php echo e(_t('Please input rating value.', [], $_SESSION['lang'])); ?>');
                $('#messageModal').modal('show');
                return;
            }

            var _token = $('#_token').val();
            console.log(_token);
            var data = {
                name: name,
                rating: rating,
                content: content,
                _token:_token
            };
            /*  save generated data in database and display  */
            $.ajax({
                type: "post",
                url: '/admin/cardfinds/comment/' + id + '/updatecomment',
                data: data,
                success: function (result) {
                    processEditComment(result);
                },
                error: function (result) {
                    console.log(result)
                }
            });
        }
        function processEditComment(data){
            var row = document.getElementById("tr_sel_"+data['id']);
            row.innerHTML = "";
            var newRow = "";
            newRow += "<td>"+ data['id'] +"</td>";
            newRow += "<td>"+ data['name'] +"</td>";
            var val = parseInt(data['rating']);
            val = val * 10;
            newRow += "<td><div class=\"comment_rating_view\" data-rateyo-rating='"+val.toString()+"%'></div></td>";
            newRow += "<td>"+ data['content'] +"</td>";
            newRow += "<td><span class=\"btn btn-default\" data-toggle=\"modal\" onclick=\"editBtn('"+data['id']+"','"+data['name']+"','"+data['rating']+"','"+data['content']+"');\" data-target=\"#editModal\" style=\"padding:2px 8px;\">Edit</span></td>";
            newRow += "<td><span class=\"btn btn-default\" data-toggle=\"modal\" onclick=\"deleteBtn('"+data['id']+"');\" data-target=\"#deleteModal\" style=\"padding:2px 8px;\">Delete</span></td>";

            row.innerHTML = newRow;

            $(".comment_rating_view").rateYo({
                numStars: 5,
                precision: 2,
                minValue: 0,
                maxValue: 10,
                starWidth: "18px",
                readOnly:true,
            });
        }
        function deleteBtn(id){
            $("#comment_delete_id").val(id);
        }
        function deleteComment(){
            var id = $('#comment_delete_id').val();

            $.ajax({
                type: "get",
                url: '/admin/cardfinds/comment/' + id + '/deletecomment',
                success: function (result) {
                    processDeleteComment(result);
                    $('#messagecontent').html('<?php echo e(_t('Successfully deleted.', [], $_SESSION['lang'])); ?>');

                    $('#messageModal').modal('show');

                },
                error: function (result) {
                    $('#messagecontent').html('This is using in');
                    console.log(result)

                }
            });
        }
        function processDeleteComment(id){
            var row_sel = document.getElementById("tr_sel_"+id);
            row_sel.remove();

            var rowCount = $('#commenttable tr').length - 1;
            $("#comment_num").val(rowCount);

            var table = document.getElementById("commenttable"),
                    rows = table.getElementsByTagName('tr'),
                    cells;
            for(var i = 1; i < rowCount; i++){
                cells = rows[i].getElementsByTagName('td');
                cells[0].innerHTML = i;
            }
        }
        function updateCardfind() {
            var flag = 0;
            $(".multi_pictures").each(function() {
                console.log($(this).val());
                if($(this).val() == ''){
                    flag = 1;
                }
            });
            var pictures_length = $('.multi_pictures').length;
            console.log(pictures_length);
            if(flag == 1){
                $('#messagecontent').html('Pictures field does not select.');
                $('#messageModal').modal('show');
            }else{
                $("#CardfindUpdateForm").submit();
            }

        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>