@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    {{ _t('Products', [], $_SESSION['lang']) }}
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/colReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/rowReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/scroller.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/tables.css') }}" />
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>{{ _t('Products', [], $_SESSION['lang']) }}</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    {{ _t('Dashboard', [], $_SESSION['lang']) }}
                </a>
            </li>
            <li><a href="#"> {{ _t('Products', [], $_SESSION['lang']) }}</a></li>
            <li class="active">{{ _t('Products', [], $_SESSION['lang']) }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        {{ _t('Products', [], $_SESSION['lang']) }}
                    </h4>
                </div>
                <br />
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3">
                            &nbsp;
                        </div>
                        <div class="col-lg-9">
                            {!! Form::open(['url'=>url('/admin/getproducts'),'class'=>'productfrom', 'id'=>'productfrom']) !!}
                            <?php echo Form::select('cat_id', $categories, $cat_id, array('class'=>'form-control', 'style'=>'width:150px;float:left;margin-right:10px;', 'onchange'=>'onChange()', 'name'=>'cat_id', 'size'=>'1', 'id' => 'cat_id')); ?>
                            <?php echo Form::select('region', $regions, $region, array('class'=>'form-control', 'style'=>'width:150px;float:left;margin-right:10px;', 'onchange'=>'onChange()', 'name'=>'region', 'size'=>'1', 'id' => 'region')); ?>
                            <?php echo Form::select('type', $types, $type, array('class'=>'form-control', 'style'=>'width:150px;float:left;margin-right:10px;', 'onchange'=>'onChange()', 'name'=>'type', 'size'=>'1', 'id' => 'type')); ?>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="panel panel-primary filterable" style="background-color: transparent !important;">

                        <div class="panel-body table-responsive">
                            <table class="table table-striped table-bordered" id="table1">
                                <thead>
                                <tr>
                                    <th>{{ _t('NO', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Category', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Merchant', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Title', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Start Date', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('End Date', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Claim Redeem', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Claimed', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Price(USD)', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Discount(USD)', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Location', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Region', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Like', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Dislike', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Favorite', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Type', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Featured', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Status', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Created Date', [], $_SESSION['lang']) }}</th>
                                    <th>{{ _t('Actions', [], $_SESSION['lang']) }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 0;
                                foreach($products as $product){
                                    $i++;
                                    $category = DB::table('oollah_category')->where('id', $product->cat_id)->where('status', 0)->first();
                                        $categoryname = '';
                                        if(empty($category)) continue;
                                        $categoryname = $category->name;
                                    $merchant = DB::table('users')->where('id', $product->merchant_id)->first();
                                    $merchantname = '';
                                    $merchantphoto = '';
                                    if(!empty($merchant)) {
                                        $merchantname = $merchant->first_name.' '.$merchant->last_name;
                                        $merchantphoto = '<img src="/img/userimage.png" style="width:40px;height:40px;border-radius:50%"/>';
                                        if(!empty($merchant->pic)){
                                            $merchantphoto = '<img src="/uploads/users/'.$merchant->pic.'" style="width:40px;height:40px;border-radius:50%"/>';
                                        }
                                    }
                                    $address = $product->address;
                                    if($product->lat != '') $address = $product->lat.','.$product->lon;
                                    $status = '<a class="inactive" href="javascript:;" onclick="setInactive(\''.$product->id.'\')">inactive</a>';
                                    if($product->status == 1) $status = '<a style="color: #ca0002" class="active" href="javascript:;" onclick="setActive(\''.$product->id.'\')">active</a>';

                                    $featured = '<a class="inactive" href="javascript:;" onclick="setFeatured(\''.$product->id.'\')">Featured</a>';
                                    if($product->featured == 1) $featured = '<a style="color: #ca0002" class="active" href="javascript:;" onclick="setUnFeatured(\''.$product->id.'\')">Un-featured</a>';
                                ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $categoryname }}</td>
                                    <td>{!! $merchantphoto !!}&nbsp;{{ $merchantname }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->start_time }}</td>
                                    <td>{{ $product->end_time }}</td>
                                    <td>{{ $product->claimnum }}</td>
                                    <td>{{ $product->claimednum }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->discount_price }}</td>
                                    <td>{{ $address }}</td>
                                    <td>{{ $product->region }}</td>
                                    <td>{{ $product->likenum }}</td>
                                    <td>{{ $product->dislikenum }}</td>
                                    <td>{{ $product->favonum }}</td>
                                    <td>{{ $product->type }}</td>
                                    <td>{!! $featured !!}</td>
                                    <td>{!! $status !!}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>
                                        <a href="{{ url('/admin/product/'.$product->id.'/show') }}">
                                            <i class="livicon" data-name = "info" data-size = "18" data-loop = "true" data-c = "#428BCA" data-hc = "#428BCA" title = "view product" ></i >
                                        </a >
                                        &nbsp;&nbsp;&nbsp;
                                        <a class="delete" href = ""  data-toggle="modal" data-target="#deleteModal" onclick="deleteItem('{{ $product->id }}')">
                                            <i class="livicon" data-name = "trash" data-size = "18" data-loop = "true" data-c = "#f56954" data-hc = "#f56954" title = "inactive product" ></i >
                                        </a >
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>    <!-- row-->

        <!-- delete modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 80%">
                    <div class="modal-body" style="font-size: 150%">
                        {{ _t(config('Convert.notice')[0], [], $_SESSION['lang']) }}
                    </div>
                    <input type="hidden" id="deleteid" value="0">
                    <div class="modal-body">
                        {{ _t(config('Convert.delete_message')[0], [], $_SESSION['lang']) }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal" onclick="deleteProduct()">{{ _t(config('Convert.delete')[0], [], $_SESSION['lang']) }}</button>
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal">{{ _t(config('Convert.cancel')[0], [], $_SESSION['lang']) }}</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="activeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 80%">
                    <div class="modal-body" style="font-size: 150%">
                        {{ _t(config('Convert.notice')[0], [], $_SESSION['lang']) }}
                    </div>
                    <input type="hidden" id="occ_id" value="0">
                    {{--<input type="hidden" id="activeid" value="0">--}}
                    <div class="modal-body" id="statecontent">
                        {{ _t(config('Convert.active_message')[0], [], $_SESSION['lang']) }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal" onclick="procActive()">{{ _t(config('Convert.ok')[0], [], $_SESSION['lang']) }}</button>
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal">{{ _t(config('Convert.cancel')[0], [], $_SESSION['lang']) }}</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- inactive product modal--}}
        <div class="modal fade" id="inactiveModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 80%">
                    <div class="modal-body" style="font-size: 150%">
                        {{ _t(config('Convert.notice')[0], [], $_SESSION['lang']) }}
                    </div>
                    <input type="hidden" id="occ_id" value="0">
                    {{--<input type="hidden" id="inactiveid" value="0">--}}
                    <div class="modal-body" id="statecontent">
                        {{ _t(config('Convert.inactive_message')[0], [], $_SESSION['lang']) }}
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal" onclick="procInactive()">{{ _t(config('Convert.ok')[0], [], $_SESSION['lang']) }}</button>
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal">{{ _t(config('Convert.cancel')[0], [], $_SESSION['lang']) }}</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="featuredModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 80%">
                    <div class="modal-body" style="font-size: 150%">
                        {{ _t(config('Convert.notice')[0], [], $_SESSION['lang']) }}
                    </div>
                    <input type="hidden" id="occ_id" value="0">
                    {{--<input type="hidden" id="activeid" value="0">--}}
                    <div class="modal-body" id="statecontent">
                        {{ _t("Do you want to featured the this item?", [], $_SESSION['lang']) }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal" onclick="procFeatured()">{{ _t(config('Convert.ok')[0], [], $_SESSION['lang']) }}</button>
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal">{{ _t(config('Convert.cancel')[0], [], $_SESSION['lang']) }}</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- inactive product modal--}}
        <div class="modal fade" id="unfeaturedModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 80%">
                    <div class="modal-body" style="font-size: 150%">
                        {{ _t(config('Convert.notice')[0], [], $_SESSION['lang']) }}
                    </div>
                    <input type="hidden" id="occ_id" value="0">
                    {{--<input type="hidden" id="inactiveid" value="0">--}}
                    <div class="modal-body" id="statecontent">
                        {{ _t("Do you want to un-featured the this item?", [], $_SESSION['lang']) }}
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal" onclick="procUnfeatured()">{{ _t(config('Convert.ok')[0], [], $_SESSION['lang']) }}</button>
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal">{{ _t(config('Convert.cancel')[0], [], $_SESSION['lang']) }}</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Message modal -->
        <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 80%">
                    <div class="modal-body" style="font-size: 150%">
                        {{ _t(config('Convert.notice')[0], [], $_SESSION['lang']) }}
                    </div>
                    <div class="modal-body" id="messagecontent">
                        {{ _t(config('Convert.inpute_message')[0], [], $_SESSION['lang']) }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" class="form-control" data-dismiss="modal">{{ _t(config('Convert.ok')[0], [], $_SESSION['lang']) }}</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.buttons.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.colVis.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.html5.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/pdfmake.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/vfs_fonts.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.scroller.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/table-advanced.js') }}" ></script>


    <script>
        var table1 = null;
        $(function () {

            $('body').on('hidden.bs.modal', '.modal', function () {
                $(this).removeData('bs.modal');
            });
            table1 = $('#table1').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });

        function onChange(){
            //table1.draw(false);
            //console.log('aaaa');
            $('#productfrom').submit();
        }

        function procActive(id){
            var id = $('#deleteid').val();
            // console.log(id);
            $.ajax({
                type: "get",
                url: '/admin/product/' + id + '/active',
                success: function (result) {
                    location.reload();
                },
                error: function (result) {
                    console.log(result)
                }
            });
        }
        function procInactive(id){
            var id = $('#deleteid').val();
            console.log(id);
            // console.log(id);
            $.ajax({
                type: "get",
                url: '/admin/product/' + id + '/inactive',
                success: function (result) {
                    location.reload();
                },
                error: function (result) {
                    console.log(result)
                }
            });
        }
        function procFeatured(id){
            var id = $('#deleteid').val();
            // console.log(id);
            $.ajax({
                type: "get",
                url: '/admin/product/' + id + '/featured',
                success: function (result) {
                    location.reload();
                },
                error: function (result) {
                    console.log(result)
                }
            });
        }
        function procUnfeatured(id){
            var id = $('#deleteid').val();
            console.log(id);
            // console.log(id);
            $.ajax({
                type: "get",
                url: '/admin/product/' + id + '/unfeatured',
                success: function (result) {
                    location.reload();
                },
                error: function (result) {
                    console.log(result)
                }
            });
        }
        function setActive(id){
            $('#deleteid').val(id);
            $('#activeModal').modal('show');
        }
        function setInactive(id){
            $('#deleteid').val(id);
            $('#inactiveModal').modal('show');
        }
        function setFeatured(id){
            $('#deleteid').val(id);
            $('#featuredModal').modal('show');
        }
        function setUnFeatured(id){
            $('#deleteid').val(id);
            $('#unfeaturedModal').modal('show');
        }
        function deleteItem(id){
            $('#deleteid').val(id);
            //$('#deleteModal').modal('show');
        }
        function deleteProduct(){
            var id = $('#deleteid').val();
            /* delete row in database and datatable  */
            $.ajax({
                type: "get",
                url: '/admin/product/' + id + '/delete',
                success: function (result) {
                    if(result == ''){
                        $('#messagecontent').html('{{ _t('Successfully deleted', [], $_SESSION['lang']) }}');
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
@stop
