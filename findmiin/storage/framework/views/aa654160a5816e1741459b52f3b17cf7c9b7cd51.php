<?php /* Page title */ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(_t('Dashboard', [], $_SESSION['lang'])); ?> | <?php echo e(_t(config('Convert.cms_name')[0], [], $_SESSION['lang'])); ?>

    @parent
<?php $__env->stopSection(); ?>

<?php /* page level styles */ ?>
<?php $__env->startSection('header_styles'); ?>

    <link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- font Awesome -->
    <!--<link href="/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />-->
    <link href="<?php echo e(asset('/css/panel.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('/css/metisMenu.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link href="<?php echo e(asset('/vendors/fullcalendar/css/fullcalendar.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('/css/pages/calendar_custom.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="<?php echo e(asset('/vendors/jvectormap/jquery-jvectormap.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/vendors/animate/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/only_dashboard.css')); ?>" />


    <link href="<?php echo e(asset('css/pages/piecharts.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('vendors/c3js/c3.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('vendors/morrisjs/morris.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php /* Page content */ ?>
<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1><?php echo e(_t(config('Convert.dashboard')[0], [], $_SESSION['lang'])); ?></h1>
        <ol class="breadcrumb">
            <li class="active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    <?php echo e(_t(config('Convert.dashboard')[0], [], $_SESSION['lang'])); ?>

                </a>
            </li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
                <!-- Trans label pie charts strats here-->
                <div class="lightbluebg no-radius">
                    <div class="panel-body squarebox square_boxs">
                        <div class="col-xs-12 pull-left nopadmar">
                            <div class="row">
                                <div class="square_box col-xs-7 text-right">
                                    <span><?php echo e(_t('View Today', [], $_SESSION['lang'])); ?></span>
                                    <div class="number" id="myTargetElement1"></div>
                                </div>
                                <i class="livicon  pull-right" data-name="eye-open" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-label"><?php echo e(_t('Last Week', [], $_SESSION['lang'])); ?></small>
                                    <h4 id="myTargetElement1.1"></h4>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <small class="stat-label"><?php echo e(_t('Last Month', [], $_SESSION['lang'])); ?></small>
                                    <h4 id="myTargetElement1.2"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
                <!-- Trans label pie charts strats here-->
                <div class="redbg no-radius">
                    <div class="panel-body squarebox square_boxs">
                        <div class="col-xs-12 pull-left nopadmar">
                            <div class="row">
                                <div class="square_box col-xs-7 pull-left">
                                    <span><?php echo e(_t('Today Sales', [], $_SESSION['lang'])); ?></span>
                                    <div class="number" id="myTargetElement2"></div>
                                </div>
                                <i class="livicon pull-right" data-name="piggybank" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-label"><?php echo e(_t('Last Week', [], $_SESSION['lang'])); ?></small>
                                    <h4 id="myTargetElement2.1"></h4>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <small class="stat-label"><?php echo e(_t('Last Month', [], $_SESSION['lang'])); ?></small>
                                    <h4 id="myTargetElement2.2"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
                <!-- Trans label pie charts strats here-->
                <div class="goldbg no-radius">
                    <div class="panel-body squarebox square_boxs">
                        <div class="col-xs-12 pull-left nopadmar">
                            <div class="row">
                                <div class="square_box col-xs-7 pull-left">
                                    <span><?php echo e(_t('News', [], $_SESSION['lang'])); ?></span>
                                    <div class="number" id="myTargetElement3"></div>
                                </div>
                                <i class="livicon pull-right" data-name="archive-add" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-label"><?php echo e(_t('Last Week', [], $_SESSION['lang'])); ?></small>
                                    <h4 id="myTargetElement3.1"></h4>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <small class="stat-label"><?php echo e(_t('Last Month', [], $_SESSION['lang'])); ?></small>
                                    <h4 id="myTargetElement3.2"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                <!-- Trans label pie charts strats here-->
                <div class="palebluecolorbg no-radius">
                    <div class="panel-body squarebox square_boxs">
                        <div class="col-xs-12 pull-left nopadmar">
                            <div class="row">
                                <div class="square_box col-xs-7 pull-left">
                                    <span><?php echo e(_t('Registered Users', [], $_SESSION['lang'])); ?></span>
                                    <div class="number" id="myTargetElement4"></div>
                                </div>
                                <i class="livicon pull-right" data-name="users" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-label"><?php echo e(_t('Last Week', [], $_SESSION['lang'])); ?></small>
                                    <h4 id="myTargetElement4.1"></h4>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <small class="stat-label"><?php echo e(_t('Last Month', [], $_SESSION['lang'])); ?></small>
                                    <h4 id="myTargetElement4.2"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/row-->
        <div class="row ">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="livicon" data-name="dashboard" data-size="20" data-loop="true" data-c="#F89A14" data-hc="#F89A14"></i>
                    <?php echo e(_t('Communication Load', [], $_SESSION['lang'])); ?>

                    <small>- <?php echo e(_t('load on server', [], $_SESSION['lang'])); ?></small>
                </h3>
            </div>
            <div class="panel-body">
                <div id="realtimechart" style="height:350px;"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            <?php echo e(_t('User Distributions', [], $_SESSION['lang'])); ?>

                        </h3>
                    </div>
                    <div class="panel-body">
                        <div id="pie3"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            <?php echo e(_t('Sales Distributions', [], $_SESSION['lang'])); ?>

                        </h3>
                    </div>
                    <div class="panel-body">
                        <div id="pie1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row ">

            <div class="row">
                <div class="panel panel-border">

                    <div class="panel-heading">
                        <h4 class="panel-title pull-left">
                            <i class="livicon" data-name="map" data-size="16" data-loop="true" data-c="#515763" data-hc="#515763"></i>
                            <?php echo e(_t('Vectors Map', [], $_SESSION['lang'])); ?>

                        </h4>

                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <i class="livicon" data-name="settings" data-size="16" data-loop="true" data-c="#515763" data-hc="#515763"></i>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a class="panel-collapse collapses" href="#">
                                        <i class="fa fa-angle-up"></i>
                                        <span><?php echo e(_t('Collapse', [], $_SESSION['lang'])); ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel-refresh" href="#">
                                        <i class="fa fa-refresh"></i>
                                        <span><?php echo e(_t('Refresh', [], $_SESSION['lang'])); ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel-config" href="#panel-config" data-toggle="modal">
                                        <i class="fa fa-wrench"></i>
                                        <span><?php echo e(_t('Configurations', [], $_SESSION['lang'])); ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel-expand" href="#">
                                        <i class="fa fa-expand"></i>
                                        <span><?php echo e(_t('Fullscreen', [], $_SESSION['lang'])); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="panel-body nopadmar">
                        <div id="world-map-markers" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php /* page level scripts */ ?>
<?php $__env->startSection('footer_scripts'); ?>
    <script src="<?php echo e(asset('/js/jquery-1.11.3.min.js')); ?>" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php echo e(asset('/vendors/livicons/minified/raphael-min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('/vendors/livicons/minified/livicons-1.4.min.js')); ?>" type="text/javascript"></script>
    <script src="/js/josh.js" type="text/javascript"></script>
    <script src="/js/metisMenu.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!--  todolist-->
    <script src="<?php echo e(asset('/js/todolist.js')); ?>"></script>
    <!-- EASY PIE CHART JS -->
    <script src="<?php echo e(asset('/vendors/charts/easypiechart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/vendors/charts/jquery.easypiechart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/vendors/charts/jquery.easingpie.js')); ?>"></script>
    <!--for calendar-->
    <!--   Realtime Server Load  -->
    <script src="<?php echo e(asset('/vendors/charts/jquery.flot.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('/vendors/charts/jquery.flot.resize.min.js')); ?>" type="text/javascript"></script>
    <!--Sparkline Chart-->
    <script src="<?php echo e(asset('/vendors/charts/jquery.sparkline.js')); ?>"></script>
    <!-- Back to Top-->
    <script type="text/javascript" src="<?php echo e(asset('/vendors/countUp/countUp.js')); ?>"></script>
    <!--   maps -->
    <script src="<?php echo e(asset('/vendors/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <script src="<?php echo e(asset('/vendors/jscharts/Chart.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/dashboard.js')); ?>" type="text/javascript"></script>



    <!-- begining of page level js -->
    <script type="text/javascript" src="<?php echo e(asset('vendors/charts/jquery.flot.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('vendors/charts/jquery.flot.pie.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('vendors/charts/jquery.flot.resize.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('vendors/d3pie/d3.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('vendors/d3pie/d3pie.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('vendors/c3js/c3.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('vendors/morrisjs/morris.min.js')); ?>"></script>
    <!-- end of page level js -->

    <script>
        var pie = new d3pie("#pie3", {
            size: {
                pieOuterRadius: "100%",
                canvasHeight: 350
            },
            data: {
                sortOrder: "value-asc",
                smallSegmentGrouping: {
                    enabled: true,
                    value: 2,
                    valueType: "percentage",
                    label: "Other birds"
                },
                content: [
                    { label: "Bushtit", value: 5, color:"#418BCA" },
                    { label: "Chickadee", value: 2, color:"#01BC8C"},
                    { label: "Elephants", value: 6, color:"#F89A14"},
                    { label: "Killdeer", value: 3, color:"#67C5DF"},
                    { label: "Caspian Tern", value: 2,color:"#EF6F6C"},
                    { label: "Blackbird", value: 1,color:"#418BCA"},
                    { label: "Song Sparrow", value: 6,color:"#01BC8C"},
                    { label: "Blue Jay", value: 5, color:"#01BC8C"},
                    { label: "Black-throated Gray warbler", value: 1, color:"#F89A14"},
                    { label: "Pelican", value: 6, color:"#67C5DF"},
                    { label: "Bewick's Wren", value: 5, color:"#EF6F6C"},
                    { label: "Cowbird", value: 1, color:"#EF6F6C"},
                    { label: "Fox Sparrow", value: 6, color:"#EF6F6C"},
                    { label: "Common Yellowthroat", value: 5, color:"#418BCA"},
                    { label: "Virginia Rail", value: 1, color:"#418BCA"},
                    { label: "Sora", value: 1, color:"#01BC8C"},
                    { label: "Osprey", value: 1, color:"#01BC8C"},
                    { label: "Merlin", value: 1, color:"#F89A14"},
                    { label: "Kestrel", value: 1, color:"#67C5DF"}
                ]
            },
            tooltips: {
                enabled: true,
                type: "placeholder",
                string: "{label}, {value}, {percentage}%"
            }
        });

        var pie = new d3pie("#pie1", {
            size: {
                canvasHeight: 350,
                canvasWidth: 350
            },
            data: {
                content: [
                    { label: "Bushtit", value: 5, color:"#418BCA" },
                    { label: "Chickadee", value: 2, color:"#01BC8C"},
                    { label: "Elephants", value: 6, color:"#F89A14"},
                    { label: "Killdeer", value: 3, color:"#67C5DF"},
                    { label: "Caspian Tern", value: 2,color:"#EF6F6C"},
                    { label: "Blackbird", value: 1,color:"#418BCA"},
                    { label: "Song Sparrow", value: 6,color:"#01BC8C"},
                    { label: "Blue Jay", value: 5, color:"#01BC8C"},
                    { label: "Black-throated Gray warbler", value: 1, color:"#F89A14"},
                    { label: "Pelican", value: 6, color:"#67C5DF"},
                    { label: "Bewick's Wren", value: 5, color:"#EF6F6C"},
                    { label: "Cowbird", value: 1, color:"#EF6F6C"},
                    { label: "Fox Sparrow", value: 6, color:"#EF6F6C"},
                    { label: "Common Yellowthroat", value: 5, color:"#418BCA"},
                    { label: "Virginia Rail", value: 1, color:"#418BCA"},
                    { label: "Sora", value: 1, color:"#01BC8C"},
                    { label: "Osprey", value: 1, color:"#01BC8C"},
                    { label: "Merlin", value: 1, color:"#F89A14"},
                    { label: "Kestrel", value: 1, color:"#67C5DF"}
                ]
            }
        });

        $('.jvectormap-container').css('    background-color', '#515763 !important');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>