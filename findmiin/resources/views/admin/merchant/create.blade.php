@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    {{ _t('Merchants', [], $_SESSION['lang']) }}
    @parent
    @stop

    {{-- page level styles --}}
    @section('header_styles')
            <!--page level css -->
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
    <!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>{{ _t('Merchants', [], $_SESSION['lang']) }}</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    {{ _t('Dashboard', [], $_SESSION['lang']) }}
                </a>
            </li>
            <li><a href="#">{{ _t('Merchants', [], $_SESSION['lang']) }}</a></li>
            <li class="active">{{ _t('Merchants', [], $_SESSION['lang']) }}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            {{ _t('Merchants', [], $_SESSION['lang']) }}
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <!-- errors -->
                        <div class="has-error">
                            {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                            {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}
                            {!! $errors->first('group', '<span class="help-block">:message</span>') !!}
                            {!! $errors->first('country', '<span class="help-block">:message</span>') !!}
                        </div>
                        <!--main content-->
                        <form id="commentForm" action="{{ route('admin.staffs.create') }}"
                              method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                            <div id="rootwizard">
                                <ul>
                                    <li><a href="#tab1" data-toggle="tab">{{ _t(config('Convert.admin_profile')[0], [], $_SESSION['lang']) }}</a></li>
                                    <li><a href="#tab2" data-toggle="tab">{{ _t(config('Convert.bio')[0], [], $_SESSION['lang']) }}</a></li>
                                    <li><a href="#tab3" data-toggle="tab">{{ _t(config('Convert.address')[0], [], $_SESSION['lang']) }}</a></li>
                                    <li><a href="#tab4" data-toggle="tab">{{ _t(config('Convert.user_group')[0], [], $_SESSION['lang']) }}</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab1">
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group">
                                            <label for="first_name" class="col-sm-2 control-label">{{ _t(config('Convert.first_name')[0], [], $_SESSION['lang']) }} *</label>
                                            <div class="col-sm-10">
                                                <input id="first_name" name="first_name" type="text"
                                                       placeholder="First Name" class="form-control required"
                                                       value="{!! old('first_name') !!}"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="first_name" class="col-sm-2 control-label">{{ _t(config('Convert.last_name')[0], [], $_SESSION['lang']) }} *</label>
                                            <div class="col-sm-10">
                                                <input id="last_name" name="last_name" type="text"
                                                       placeholder="Last Name" class="form-control required"
                                                       value="{!! old('last_name') !!}"/>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="email" class="col-sm-2 control-label">{{ _t(config('Convert.email')[0], [], $_SESSION['lang']) }} *</label>
                                            <div class="col-sm-10">
                                                <input id="email" name="email" placeholder="E-Mail" type="text"
                                                       class="form-control required email" value="{!! old('email') !!}"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="col-sm-2 control-label">{{ _t(config('Convert.password')[0], [], $_SESSION['lang']) }} *</label>
                                            <div class="col-sm-10">
                                                <input id="password" name="password" type="password" placeholder="Password"
                                                       class="form-control required" value="{!! old('password') !!}"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password_confirm" class="col-sm-2 control-label">{{ _t(config('Convert.confirm_password')[0], [], $_SESSION['lang']) }} *</label>
                                            <div class="col-sm-10">
                                                <input id="password_confirm" name="password_confirm" type="password"
                                                       placeholder="Confirm Password " class="form-control required"
                                                       value="{!! old('password_confirm') !!}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2" disabled="disabled">
                                        <h2 class="hidden">&nbsp;</h2> <div class="form-group required">
                                            <label for="dob" class="col-sm-2 control-label">{{ _t(config('Convert.birthday')[0], [], $_SESSION['lang']) }}</label>
                                            <div class="col-sm-10">
                                                <input id="dob" name="dob" type="text" class="form-control"
                                                       data-date-format="YYYY-MM-DD"
                                                       placeholder="yyyy-mm-dd"/>
                                            </div>
                                            <span class="help-block">{{ $errors->first('dob', ':message') }}</span>
                                        </div>

                                        <div class="form-group">
                                            <label for="pic" class="col-sm-2 control-label">{{ _t(config('Convert.profile_picture')[0], [], $_SESSION['lang']) }}</label>
                                            <div class="col-sm-10">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                        <img src="http://placehold.it/200x200" alt="profile pic">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                                                    <div>
                                <span class="btn btn-default btn-file">
                                    <span class="fileinput-new">{{ _t(config('Convert.select_image')[0], [], $_SESSION['lang']) }}</span>
                                    <span class="fileinput-exists">{{ _t(config('Convert.change')[0], [], $_SESSION['lang']) }}</span>
                                    <input id="pic" name="pic_file" type="file" class="form-control"/>
                                </span>
                                                        <a href="#" class="btn btn-danger fileinput-exists"
                                                           data-dismiss="fileinput">{{ _t(config('Convert.remove')[0], [], $_SESSION['lang']) }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="bio" class="col-sm-2 control-label">{{ _t(config('Convert.bio')[0], [], $_SESSION['lang']) }} <small>({{ _t(config('Convert.brief_intro')[0], [], $_SESSION['lang']) }}) *</small></label>
                                            <div class="col-sm-10">
                        <textarea name="bio" id="bio" class="form-control"
                                  rows="4">{!! old('bio') !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3" disabled="disabled">
                                        <div class="form-group {{ $errors->first('gender', 'has-error') }}">
                                            <label for="email" class="col-sm-2 control-label">{{ _t(config('Convert.gender')[0], [], $_SESSION['lang']) }} *</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" title="Select Gender..." name="gender">
                                                    <option value="">{{ config('Convert.select')[0] }}</option>
                                                    <option value="male"
                                                            @if(old('gender') === 'male') selected="selected" @endif >{{ config('Convert.male')[0] }}
                                                    </option>
                                                    <option value="female"
                                                            @if(old('gender') === 'female') selected="selected" @endif >
                                                        {{ config('Convert.female')[0] }}
                                                    </option>
                                                    <option value="other"
                                                            @if(old('gender') === 'other') selected="selected" @endif >{{ config('Convert.other')[0] }}
                                                    </option>

                                                </select>
                                            </div>
                                            <span class="help-block">{{ $errors->first('gender', ':message') }}</span>
                                        </div>
                                        <input type="hidden" name="country" value="MY">

                                        <!--<div class="form-group {{ $errors->first('country', 'has-error') }}">
                                            <label for="country" class="col-sm-2 control-label">{{ config('Convert.country')[0] }} *</label>
                                            <div class="col-sm-10">
                                                //Form::select('country', $countries, 'MY',['class' => 'form-control select2', 'id' => 'countries'])
                                            </div>
                                            <span class="help-block">{{ $errors->first('country', ':message') }}</span>
                                        </div>-->

                                        <div class="form-group">
                                            <label for="state" class="col-sm-2 control-label">{{ _t(config('Convert.state')[0], [], $_SESSION['lang']) }} *</label>
                                            <div class="col-sm-10">
                                                <input id="state" name="state" type="text" class="form-control"
                                                       value="{!! old('state') !!}"/>
                                            </div>
                                            <span class="help-block">{{ $errors->first('state', ':message') }}</span>
                                        </div>

                                        <div class="form-group">
                                            <label for="city" class="col-sm-2 control-label">{{ _t(config('Convert.cities')[0], [], $_SESSION['lang']) }} *</label>
                                            <div class="col-sm-10">
                                                <input id="city" name="city" type="text" class="form-control"
                                                       value="{!! old('city') !!}"/>
                                            </div>
                                            <span class="help-block">{{ $errors->first('city', ':message') }}</span>
                                        </div>

                                        <div class="form-group">
                                            <label for="address" class="col-sm-2 control-label">{{ _t(config('Convert.address')[0], [], $_SESSION['lang']) }} *</label>
                                            <div class="col-sm-10">
                                                <input id="address" name="address" type="text" class="form-control"
                                                       value="{!! old('address') !!}"/>
                                            </div>
                                            <span class="help-block">{{ $errors->first('address', ':message') }}</span>
                                        </div>

                                        <div class="form-group">
                                            <label for="postal" class="col-sm-2 control-label">{{ _t(config('Convert.postal_code')[0], [], $_SESSION['lang']) }}</label>
                                            <div class="col-sm-10">
                                                <input id="postal" name="postal" type="text" class="form-control"
                                                       value="{!! old('postal') !!}"/>
                                            </div>
                                            <span class="help-block">{{ $errors->first('postal', ':message') }}</span>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab4" disabled="disabled">
                                        <p class="text-danger"><strong></strong></p>

                                        <div class="form-group required">
                                            <label for="group" class="col-sm-2 control-label">{{ _t(config('Convert.user_group')[0], [], $_SESSION['lang']) }} *</label>
                                            <div class="col-sm-10">
                                                <select class="form-control required" title="Select group..." name="group"
                                                        id="group">
                                                    <option value="">{{ config('Convert.select')[0] }}</option>
                                                    @foreach($groups as $group)
                                                        <option value="{{ $group->id }}"
                                                                @if($group->id == 2) selected="selected" @endif >{{ $group->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <span class="help-block">{{ $errors->first('group', ':message') }}</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="activate" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                                <input id="activate" name="activate" type="hidden"
                                                       class="pos-rel p-l-30"
                                                       value="1" @if(old('activate')) checked="checked" @endif >
                                            <span></span></div>
                                        </div>
                                    </div>
                                    <ul class="pager wizard">
                                        <li class="previous"><a href="#">{{ _t(config('Convert.previous')[0], [], $_SESSION['lang']) }}</a></li>
                                        <li class="next"><a href="#">{{ _t(config('Convert.next')[0], [], $_SESSION['lang']) }}</a></li>
                                        <li class="next finish" style="display:none;"><a href="javascript:;">{{ _t(config('Convert.finish')[0], [], $_SESSION['lang']) }}</a></li>
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
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/adduser.js') }}"></script>
@stop