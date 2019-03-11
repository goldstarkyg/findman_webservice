<ul id="menu" class="page-sidebar-menu">
    <li <?php echo (Request::is('admin') ? 'class="active"' : ''); ?>>
        <a href="<?php echo e(route('dashboard')); ?>">
            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title"><?php echo e(_t(config('Convert.dashboard')[0], [], $_SESSION['lang'])); ?></span>
        </a>
    </li>
    <?php
    $role_id = DB::table('role_users')->where('user_id', Sentinel::getuser()->id)->first()->role_id;

    if($role_id == 1){
        $str = array();
        $sections = DB::table('findmiin_section')->get();
        array_push($str,'cardfinds');
        foreach ($sections as $section){
            array_push($str,$section->name);
        }
        array_push($str,'jobs');
        $privilege_r = $str;
        $privilege_w = $str;
    }else{
        $privilege_r = explode(",", Sentinel::getuser()->privilege_r);
        $privilege_w = explode(",", Sentinel::getuser()->privilege_w);
    }

    if($role_id == 1 || $role_id == 2 ){
    ?>
    <?php /*<li <?php echo (Request::is('admin/merchant') || Request::is('admin/merchant/create') || Request::is('admin/merchant_profile') || Request::is('admin/merchant/*') || Request::is('admin/deleted_merchant') ? 'class="active"' : ''); ?>>*/ ?>
        <?php /*<a href="#">*/ ?>
            <?php /*<i class="livicon" data-name="user-flag" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"*/ ?>
               <?php /*data-loop="true"></i>*/ ?>
            <?php /*<span class="title"><?php echo e(_t('Merchants', [], $_SESSION['lang'])); ?></span>*/ ?>
            <?php /*<span class="fa arrow"></span>*/ ?>
        <?php /*</a>*/ ?>
        <?php /*<ul class="sub-menu">*/ ?>
            <?php /*<li <?php echo (Request::is('admin/merchant') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/merchant')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t('Merchants', [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li <?php echo (Request::is('admin/deleted_merchant') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/deleted_merchant')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t('Deleted Merchants', [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
        <?php /*</ul>*/ ?>
    <?php /*</li>*/ ?>
    <?php /*<li <?php echo (Request::is('admin/request') ? 'class="active"' : ''); ?>>*/ ?>
        <?php /*<a href="<?php echo e(URL::to('admin/request')); ?>">*/ ?>
            <?php /*<i class="livicon" data-name="shopping-cart" data-size="18" data-c="#F89A14" data-hc="#F89A14"*/ ?>
               <?php /*data-loop="true"></i>*/ ?>
            <?php /*<span class="title"><?php echo e(_t('Request Merchant', [], $_SESSION['lang'])); ?></span>*/ ?>
        <?php /*</a>*/ ?>
    <?php /*</li>*/ ?>

    <li <?php echo (Request::is('admin/cardfinds') || Request::is('admin/cardfinds/create') || Request::is('admin/cardfinds/*') || Request::is('admin/tag') ? 'class="active"' : ''); ?>

         style="display: <?php echo e(in_array('cardfinds', $privilege_w)? 'block':(in_array('cardfinds', $privilege_r)? 'block':'none')); ?>">
        <a href="#">
            <i class="livicon" data-name="credit-card" data-size="18" data-c="#e9573f" data-hc="#e9573f"
               data-loop="true"></i>
            <span class="title">Cardfinds</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php echo (Request::is('admin/cardfinds/1') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/cardfinds/1')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('Clients Actives', [], $_SESSION['lang'])); ?>

                </a>
            </li>
            <li <?php echo (Request::is('admin/cardfinds/2') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/cardfinds/2')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('Clients inactives', [], $_SESSION['lang'])); ?>

                </a>
            </li>
            <li <?php echo (Request::is('admin/cardfinds/create/1') ? 'class="active" id="active"' : ''); ?>

                    <?php echo e(in_array('cardfinds', $privilege_w)? 'block':'none'); ?>>
                <a href="<?php echo e(URL::to('admin/cardfinds/create/1')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e('Add New Client', [], $_SESSION['lang']); ?>

                </a>
            </li>
            <li <?php echo (Request::is('admin/tag') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/tag')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('Add New Category', [], $_SESSION['lang'])); ?>

                </a>
            </li>
        </ul>
    </li>
    <?php } ?>
    <li <?php echo (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active"' : ''); ?>>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title"><?php echo e(_t('Users', [], $_SESSION['lang'])); ?></span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php echo (Request::is('admin/users') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/users')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('Users', [], $_SESSION['lang'])); ?>

                </a>
            </li>
            <li <?php echo (Request::is('admin/deleted_users') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/deleted_users')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('Deleted Users', [], $_SESSION['lang'])); ?>

                </a>
            </li>
        </ul>
    </li>
    <?php /*<li <?php echo (Request::is('admin/invitehistory') ? 'class="active"' : ''); ?>>*/ ?>
        <?php /*<a href="<?php echo e(URL::to('admin/invitehistory')); ?>">*/ ?>
            <?php /*<i class="livicon" data-name="barchart" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"*/ ?>
               <?php /*data-loop="true"></i>*/ ?>
            <?php /*<span class="title"><?php echo e(_t('Invite History', [], $_SESSION['lang'])); ?></span>*/ ?>
        <?php /*</a>*/ ?>
    <?php /*</li>*/ ?>
    <?php /*<li <?php echo (Request::is('admin/staffs') || Request::is('admin/staffs/create') || Request::is('admin/staff_profile') || Request::is('admin/staffs/*') || Request::is('admin/deleted_staffs') ? 'class="active"' : ''); ?>>*/ ?>
        <?php /*<a href="#">*/ ?>
            <?php /*<i class="livicon" data-name="user" data-size="18" data-c="#e9573f" data-hc="#e9573f"*/ ?>
               <?php /*data-loop="true"></i>*/ ?>
            <?php /*<span class="title"><?php echo e(_t('Security', [], $_SESSION['lang'])); ?></span>*/ ?>
            <?php /*<span class="fa arrow"></span>*/ ?>
        <?php /*</a>*/ ?>
        <?php /*<ul class="sub-menu">*/ ?>
            <?php /*<li <?php echo (Request::is('admin/staffs') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/staffs')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t('Admin', [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li <?php echo (Request::is('admin/staffs/create') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/staffs/create')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t('Server Users', [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li <?php echo (Request::is('admin/deleted_staffs') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/deleted_staffs')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t('Add New Server User', [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
        <?php /*</ul>*/ ?>
    <?php /*</li>*/ ?>



    <?php /*<li <?php echo (Request::is('admin/advertise') || Request::is('admin/advertise/create') || Request::is('admin/advertise/*') ? 'class="active"' : ''); ?>>*/ ?>
        <?php /*<a href="#">*/ ?>
            <?php /*<i class="livicon" data-name="flag" data-size="18" data-c="#e9573f" data-hc="#e9573f"*/ ?>
               <?php /*data-loop="true"></i>*/ ?>
            <?php /*<span class="title"><?php echo e(config('Convert.advertises')[0]); ?></span>*/ ?>
            <?php /*<span class="fa arrow"></span>*/ ?>
        <?php /*</a>*/ ?>
        <?php /*<ul class="sub-menu">*/ ?>
            <?php /*<li <?php echo (Request::is('admin/advertise/1') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/advertise/1')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t(config('Convert.top_advertises')[0], [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li <?php echo (Request::is('admin/advertise/2') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/advertise/2')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t(config('Convert.middle_advertises')[0], [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li <?php echo (Request::is('admin/advertise/3') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/advertise/3')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t(config('Convert.bottom_advertises')[0], [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
        <?php /*</ul>*/ ?>
    <?php /*</li>*/ ?>
    <?php /*<li <?php echo (Request::is('admin/notification') ? 'class="active"' : ''); ?>>*/ ?>
        <?php /*<a href="<?php echo e(URL::to('admin/notification')); ?>">*/ ?>
            <?php /*<i class="livicon" data-name="wifi-alt" data-size="18" data-c="#F89A14" data-hc="#F89A14"*/ ?>
               <?php /*data-loop="true"></i>*/ ?>
            <?php /*<span class="title"><?php echo e(_t('Notifications', [], $_SESSION['lang'])); ?></span>*/ ?>
        <?php /*</a>*/ ?>
    <?php /*</li>*/ ?>
    <?php /*<li <?php echo (Request::is('admin/advertisement') ? 'class="active"' : ''); ?>>*/ ?>
        <?php /*<a href="<?php echo e(URL::to('admin/advertisement')); ?>">*/ ?>
            <?php /*<i class="livicon" data-name="sun" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"*/ ?>
               <?php /*data-loop="true"></i>*/ ?>
            <?php /*<span class="title"><?php echo e(_t('Advertisements', [], $_SESSION['lang'])); ?></span>*/ ?>
        <?php /*</a>*/ ?>
    <?php /*</li>*/ ?>

    <li <?php echo (Request::is('admin/section') || Request::is('admin/section/*') || Request::is('admin/category') ? 'class="active"' : ''); ?>>
        <a href="#">
            <i class="livicon" data-name="address-book" data-size="18" data-c="#F89A14" data-hc="#F89A14"
               data-loop="true"></i>
            <span class="title"><?php echo e(_t('Localfinds', [], $_SESSION['lang'])); ?></span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <?php
            $sections = \DB::table('findmiin_section')->select(['name'])->get();
            $num = 0;
            foreach($sections as $section){
            $num++;
            ?>
            <li <?php echo ( isset($_SESSION['sectionType'])?($_SESSION['sectionType'] == $section->name ? 'class="active" id="active"' : ''):''); ?>

                style="display: <?php echo e(in_array($section->name, $privilege_w)? 'block':(in_array($section->name, $privilege_r)? 'block':'none')); ?>">
                <a href="<?php echo e(URL::to('admin/section/?sectionType='.$section->name)); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t($section->name, [], $_SESSION['lang'])); ?>

                </a>
            </li>
            <?php } ?>
            <li <?php echo ( isset($_SESSION['sectionType'])?($_SESSION['sectionType'] == 'jobs' ? 'class="active" id="active"' : ''):''); ?>

                style="display: <?php echo e(in_array('jobs', $privilege_w)? 'block':(in_array('jobs', $privilege_r)? 'block':'none')); ?>">
                <a href="<?php echo e(URL::to('admin/section/?sectionType=jobs')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('Jobs', [], $_SESSION['lang'])); ?>

                </a>
            </li>
            <li <?php echo (Request::is('admin/category') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/category')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('Add New Section', [], $_SESSION['lang'])); ?>

                </a>
            </li>
        </ul>
    </li>
    <?php /*<li <?php echo (Request::is('admin/news') || Request::is('admin/news/*') ? 'class="active"' : ''); ?>>*/ ?>
        <?php /*<a href="#">*/ ?>
            <?php /*<i class="livicon" data-name="address-book" data-size="18" data-c="#F89A14" data-hc="#F89A14"*/ ?>
               <?php /*data-loop="true"></i>*/ ?>
            <?php /*<span class="title"><?php echo e(_t('Localfinds', [], $_SESSION['lang'])); ?></span>*/ ?>
            <?php /*<span class="fa arrow"></span>*/ ?>
        <?php /*</a>*/ ?>
        <?php /*<ul class="sub-menu">*/ ?>
            <?php /*<li <?php echo (Request::is('admin/news') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/news')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t('News', [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li <?php echo (Request::is('admin/comments') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/comments/0')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t('Add New Localfinds &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Category', [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
        <?php /*</ul>*/ ?>
    <?php /*</li>*/ ?>

    <?php /*<li <?php echo (Request::is('admin/activities') ? 'class="active"' : ''); ?>>*/ ?>
        <?php /*<a href="<?php echo e(URL::to('admin/activities')); ?>">*/ ?>
            <?php /*<i class="livicon" data-name="alarm" data-size="18" data-c="#418BCA" data-hc="#418BCA"*/ ?>
               <?php /*data-loop="true"></i>*/ ?>
            <?php /*<span class="title">Activities</span>*/ ?>
        <?php /*</a>*/ ?>
    <?php /*</li>*/ ?>

    <li <?php echo (Request::is('admin/plans') || Request::is('admin/city') || Request::is('admin/types') || Request::is('admin/thirdparty') ? 'class="active"' : ''); ?>>
        <a href="#">
            <i class="livicon" data-name="location" data-size="18" data-c="#418BCA" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title"><?php echo e(_t('City/Location', [], $_SESSION['lang'])); ?></span>
            <span class="fa arrow"></span>
        </a>

        <ul class="sub-menu">
            <?php /*<li <?php echo (Request::is('admin/plans') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/plans')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t('Merchant Plan', [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li <?php echo (Request::is('admin/category') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/category')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t('Category', [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li <?php echo (Request::is('admin/types') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/types')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t('Type', [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
            <li <?php echo (Request::is('admin/city') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/city')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('Add New City', [], $_SESSION['lang'])); ?>

                </a>
            </li>
            <?php /*<li <?php echo (Request::is('admin/tag') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/tag')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t('Tags', [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li <?php echo (Request::is('admin/thirdparty') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/thirdparty')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*<?php echo e(_t('Third Party', [], $_SESSION['lang'])); ?>*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li <?php echo (Request::is('admin/business') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/business')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*Business Options*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li <?php echo (Request::is('admin/pointtype') ? 'class="active" id="active"' : ''); ?>>*/ ?>
                <?php /*<a href="<?php echo e(URL::to('admin/pointtype')); ?>">*/ ?>
                    <?php /*<i class="fa fa-angle-double-right"></i>*/ ?>
                    <?php /*Point Types*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
        </ul>
    </li>
    <?php
        if($role_id == 1){
    ?>
    <li <?php echo (Request::is('admin/staffs') || Request::is('admin/staffs/create') || Request::is('admin/staff_profile') || Request::is('admin/staffs/*') || Request::is('admin/deleted_staffs') ? 'class="active"' : ''); ?>>
        <a href="#">
            <i class="livicon" data-name="user-flag" data-size="18" data-c="#e9573f" data-hc="#e9573f"
               data-loop="true"></i>
            <span class="title"><?php echo e(_t('Security', [], $_SESSION['lang'])); ?></span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <?php
            $admin = \DB::table('users')->select(['users.id'])
                    ->join('role_users', 'role_users.user_id', '=', 'users.id')
                    ->where('role_users.role_id', 1)->first();
            ?>
            <li <?php echo (Request::is('admin/staffs/'.$admin->id) ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/staffs/'.$admin->id)); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('Admin', [], $_SESSION['lang'])); ?>

                </a>
            </li>
            <li <?php echo (Request::is('admin/staffs') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/staffs')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('Server Users', [], $_SESSION['lang'])); ?>

                </a>
            </li>
            <li <?php echo (Request::is('admin/deleted_staffs') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/deleted_staffs')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('Deleted Server Users', [], $_SESSION['lang'])); ?>

                </a>
            </li>
            <li <?php echo (Request::is('admin/staffs/create') ? 'class="active" id="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/staffs/create')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('Add New Server User', [], $_SESSION['lang'])); ?>

                </a>
            </li>
        </ul>
    </li>
    <?php
    }
    ?>
    <li <?php echo (Request::is('admin/charts') || Request::is('admin/piecharts') || Request::is('admin/charts_animation') || Request::is('admin/jscharts') || Request::is('admin/sparklinecharts') ? 'class="active"' : ''); ?>>
        <a href="#">
            <i class="livicon" data-name="barchart" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title"><?php echo e(_t('Reports', [], $_SESSION['lang'])); ?></span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php echo (Request::is('admin/charts') ? 'class="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/reports/charts')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('Sales Reports', [], $_SESSION['lang'])); ?>

                </a>
            </li>
            <li <?php echo (Request::is('admin/piecharts') ? 'class="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/reports/piecharts')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('User Report', [], $_SESSION['lang'])); ?>

                </a>
            </li>
            <li <?php echo (Request::is('admin/charts_animation') ? 'class="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/reports/charts_animation')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    <?php echo e(_t('Activity Report', [], $_SESSION['lang'])); ?>

                </a>
            </li>
        </ul>
    </li>
</ul>