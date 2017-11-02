<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:82:"D:\phpStudy\WWW\paiming\news\public/../application/admin\view\rule\rule_group.html";i:1507712274;s:77:"D:\phpStudy\WWW\paiming\news\public/../application/admin\view\layout\top.html";i:1508468134;s:80:"D:\phpStudy\WWW\paiming\news\public/../application/admin\view\layout\header.html";i:1508461597;s:78:"D:\phpStudy\WWW\paiming\news\public/../application/admin\view\layout\left.html";i:1509519749;s:80:"D:\phpStudy\WWW\paiming\news\public/../application/admin\view\layout\footer.html";i:1507712274;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>角色列表</title>

    <!--STYLESHEET-->
<!--=================================================-->

<!--Open Sans Font [ OPTIONAL ]-->


<!--Bootstrap Stylesheet [ REQUIRED ]-->
<link rel="stylesheet" href="../../../../public/static/css/main.css">
<link href="__STATIC__/css/bootstrap.min.css" rel="stylesheet">
<link href="__STATIC__/css/main.css" rel="stylesheet">

<!--Nifty Stylesheet [ REQUIRED ]-->
<link href="__STATIC__/css/nifty.min.css" rel="stylesheet">
<!--白色-->

<link href="__STATIC__/css/theme-light.min.css" rel="stylesheet">

<!--Nifty Premium Icon [ DEMONSTRATION ]-->
<link href="__STATIC__/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


<!--Demo [ DEMONSTRATION ]-->
<link href="__STATIC__/css/demo/nifty-demo.min.css" rel="stylesheet">

<link href="__STATIC__/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">


<!--Morris.js [ OPTIONAL ]-->
<link href="__STATIC__/plugins/morris-js/morris.min.css" rel="stylesheet">


<!--Magic Checkbox [ OPTIONAL ]-->
<link href="__STATIC__/plugins/magic-check/css/magic-check.min.css" rel="stylesheet">

<link href="__STATIC__/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!--Pace - Page Load Progress Par [OPTIONAL]-->
<link href="__STATIC__/plugins/pace/pace.min.css" rel="stylesheet">
<script src="__STATIC__/plugins/pace/pace.min.js"></script>


<!--jQuery [ REQUIRED ]-->
<script src="__STATIC__/js/jquery-2.2.4.min.js"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
<script src="__STATIC__/js/bootstrap.min.js"></script>


<!--NiftyJS [ RECOMMENDED ]-->
<script src="__STATIC__/js/nifty.min.js"></script>


<!--Demo script [ DEMONSTRATION ]-->
<script src="__STATIC__/js/demo/nifty-demo.min.js"></script>
<script src="__STATIC__/js/echarts.common.min.js"></script>

<!--Morris.js [ OPTIONAL ]-->
<script src="__STATIC__/plugins/morris-js/morris.min.js"></script>
<script src="__STATIC__/plugins/morris-js/raphael-js/raphael.min.js"></script>


<!--Sparkline [ OPTIONAL ]-->
<script src="__STATIC__/plugins/sparkline/jquery.sparkline.min.js"></script>

<link href="__STATIC__/plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">




    
    <!--Bootstrap Validator [ OPTIONAL ]-->
    <script src="__STATIC__/plugins/bootstrap-validator/bootstrapValidator.min.js"></script>


    <!--Masked Input [ OPTIONAL ]-->
    <script src="__STATIC__/plugins/masked-input/jquery.maskedinput.min.js"></script>


    <!--Form validation [ SAMPLE ]-->
    <script src="__STATIC__/js/demo/form-validation.js"></script>

<!--Specify page [ SAMPLE ]-->
<script src="__STATIC__/js/demo/dashboard.js"></script>
<script src="__STATIC__/layer/layer.js"></script>



    <!--富文本编辑器-->
<link href="__STATIC__/plugins/summernote/summernote.min.css" rel="stylesheet">
<script src="__STATIC__/plugins/summernote/summernote.min.js"></script>
<script src="__STATIC__/js/demo/form-text-editor.js"></script>


        


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
    <div id="navbar-container" class="boxed">

        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
                <img src="__STATIC__/img/logo.png" alt="新闻后台管理" class="brand-icon">
                <div class="brand-title">
                    <span class="brand-text">新闻后台管理</span>
                </div>
            </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->


        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content clearfix">
            <ul class="nav navbar-top-links pull-left">

                <!--Navigation toogle button-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="tgl-menu-btn">
                    <a class="mainnav-toggle" href="#">
                        <i class="demo-pli-view-list"></i>
                    </a>
                </li>

            </ul>
            <ul class="nav navbar-top-links pull-right">


                <li id="dropdown-user" class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
                                    <!--<img class="img-circle img-user media-object" src="images/profile-photos/1.png" alt="Profile Picture">-->
                                    <i class="demo-pli-male ic-user"></i>
                                </span>
                        <div class="username hidden-xs"><?php echo \think\Session::get('admin.name'); ?></div>
                    </a>


                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                        <!-- Dropdown heading  -->
                        <div class="pad-all bord-btm">
                            <p class="text-main mar-btm"><span
                                    class="text-bold">欢迎回来！<?php echo \think\Session::get('admin.name'); ?>!</span></p>
                            <div class="pad-all bord-btm">
                                奋斗的青春最美丽！
                            </div>
                        </div>

                        <div class="pad-all text-right">
                            <a href="<?php echo url('Admin/Index/logout'); ?>" class="btn btn-primary">
                                <i class="demo-pli-unlock"></i> 退出登录
                            </a>
                        </div>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user dropdown-->
            </ul>
        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->

    </div>
</header>
    <!--END NAVBAR-->

    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">

            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="page-title">

            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->


            <!--Breadcrumb-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <ol class="breadcrumb">
                <li><a href="<?php echo url('Admin/Index/index'); ?>">首页</a></li>
                <li><a href="#">权限控制</a></li>
                <li class="active">角色列表</li>
            </ol>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End breadcrumb-->

            <div class="panel">
                <!-- <div class="panel-heading">
                    <h3 class="panel-title">Sample Toolbar</h3>
                </div> -->

                <!--Data Table-->
                <!--===================================================-->
                <div class="panel-body">
                    <div class="pad-btm form-inline">
                        <div class="row">
                            <div class="col-sm-6 table-toolbar-left">
                                <button id="demo-btn-addrow" class="btn btn-mint" onclick="add()">新增角色</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>分组名</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$v): ?>
                            <tr>
                                <td><?php echo $v['title']; ?></td>
                                <td>
                                    <a href="javascript:;" ruleId="<?php echo $v['id']; ?>" ruleTitle="<?php echo $v['title']; ?>"
                                       onclick="edit(this)">修改</a> |
                                    <a href="javascript:if(confirm('确定删除？'))location='<?php echo url('Admin/Rule/delete_group',array('id'=>$v['id'])); ?>'">删除</a>
                                    |
                                    <a href="<?php echo url('Admin/Rule/rule_distribution',array('id'=>$v['id'])); ?>">分配权限</a>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--===================================================-->
                <!--End Data Table-->

            </div>
        </div>


        <style>
    body,button, input, select,nav,ul,li,a,span,strong,textarea,h1 ,h2, h3, h4, h5, h6 ,ul,li,a{ font-family: Microsoft YaHei, "\5b8b\4f53", sans-serif !important;}

</style>
<nav id="mainnav-container">
    <div id="mainnav">

        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <!--================================-->

                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap">
                            <div class="pad-btm">
                               <!--  <?php if(\think\Session::get('admin_cate.headpic') == ''): ?>
                                <img alt="Avatar" class="img-lg img-circle img-border mar-btm" src="__STATIC__/img/profile-photos/1.png">

                                <?php else: ?>
                                <img class="img-circle img-sm img-border" src="\<?php echo \think\Session::get('admin_cate.headpic'); ?>"alt="Profile Picture">
                                <?php endif; ?> -->
                            </div>
                            <a href="#profile-nav" class="box-block collapsed" data-toggle="collapse"
                               aria-expanded="false">

                                <p class="mnp-name"><?php echo \think\Session::get('admin.name'); ?></p>
                                <span class="mnp-desc"><?php echo \think\Session::get('admin_cate.email'); ?></span>
                            </a>
                        </div>
                    </div>

                    <?php if(session('admin')['id'] == 1): ?>

                    <ul id="mainnav-menu" class="list-group">

                        <?php if($c == 'Staff'): ?>
                        <li class="active">
                            <a href="#" aria-expanded="true">
                                <i class="demo-psi-bar-chart"></i>
                                <span class="menu-title">
                                                <strong>个人中心</strong>
                                            </span>
                                <i class="arrow"></i>
                            </a>

                            <ul class="collapse in" aria-expanded="true">
                                <li><a href="<?php echo url('/staff_index'); ?>">我的资料</a></li>
                                <li><a href="<?php echo url('/my_center'); ?>">资料修改</a></li>
                                <li><a href="<?php echo url('/my_salary'); ?>">我的薪资</a></li>
                            </ul>
                        </li>
                        <?php else: ?>
                        <li>
                            <a href="#">
                                <i class="demo-psi-bar-chart"></i>
                                <span class="menu-title">
                                                <strong>个人中心</strong>
                                            </span>
                                <i class="arrow"></i>
                            </a>


                            <ul class="collapse">
                                <li><a href="<?php echo url('/staff_index'); ?>">我的资料</a></li>
                                <li><a href="<?php echo url('/my_center'); ?>">资料修改</a></li>
                                <li><a href="<?php echo url('/my_salary'); ?>">我的薪资</a></li>
                            </ul>
                        </li>
                        <?php endif; if($c == 'Media'): ?>
                        <li class="active">
                            <a href="#" aria-expanded="true">
                                <i class="demo-psi-receipt-4"></i>
                                <span class="">
                                        <strong>媒体管理</strong>
                                            </span>
                                <i class="arrow"></i>
                            </a>

                            <ul class="collapse in" aria-expanded="true">
                                <li><a href="<?php echo url('Admin/Media/index'); ?>" data-original-title>媒体列表</a></li>                          
                                <li><a href="<?php echo url('Admin/Media/add_media'); ?>">添加媒体</a></li>

                            </ul>
                        </li>
                        <?php else: ?>
                        <li>
                            <a href="#">
                                <i class="demo-psi-receipt-4"></i>
                                <span class="">
                                                <strong>媒体管理</strong>
                                            </span>
                                <i class="arrow"></i>
                            </a>

                            <ul class="collapse ">
                                <li><a href="<?php echo url('Admin/Media/index'); ?>" data-original-title>媒体列表</a></li>                          
                                <li><a href="<?php echo url('Admin/Media/add_media'); ?>">添加媒体</a></li>

                            </ul>
                        </li>
                        <?php endif; if($c == 'Mediatype'): ?>
                        <li class="active">
                            <a href="#" aria-expanded="true">
                                <i class="demo-psi-receipt-4"></i>
                                <span class="">
                                                <strong>媒体类型</strong>
                                            </span>
                                <i class="arrow"></i>
                            </a>

                            <ul class="collapse in" aria-expanded="true">
                                <li><a href="<?php echo url('Admin/Mediatype/index'); ?>" data-original-title>媒体类型列表</a></li>                          
                                 <li><a href="<?php echo url('Admin/Mediatype/add_media_type'); ?>">添加媒体类型</a></li>
                            </ul>
                        </li>
                        <?php else: ?>
                        <li>
                            <a href="#">
                                <i class="demo-psi-receipt-4"></i>
                                <span class="">
                                                <strong>媒体类型</strong>
                                            </span>
                                <i class="arrow"></i>
                            </a>

                            <ul class="collapse ">
                                   <li><a href="<?php echo url('Admin/Mediatype/index'); ?>" data-original-title>媒体类型列表</a></li>                          
                                <li><a href="<?php echo url('Admin/Mediatype/add_media_type'); ?>">添加媒体类型</a></li>

                            </ul>
                        </li>
                        <?php endif; ?>

                     <!--    <?php if($c == 'Manus'): ?>
                        <li class="active">
                            <a href="#" aria-expanded="true">
                                <i class="demo-psi-pen-5"></i>
                                <span class="menu-title">
                                                <strong>稿件管理</strong>
                                            </span>
                                <i class="arrow"></i>
                            </a>

                            <ul class="collapse in" aria-expanded="true">
                                <li><a href="<?php echo url('Admin/Manus/add_manus'); ?>">发布稿件</a></li>
                                <li><a href="<?php echo url('Admin/Manus/index'); ?>">全部稿件</a></li>
                                <li><a href="<?php echo url('Admin/Manus/index'); ?>">待发布</a></li>
                                <li><a href="<?php echo url('Admin/Manus/index'); ?>">已发布</a></li>
                                <li><a href="<?php echo url('Admin/Manus/index'); ?>">待确认</a></li>

                            </ul>
                        </li>
                        <?php else: ?>
                        <li>
                            <a href="#">
                                <i class="demo-psi-pen-5"></i>
                                <span class="menu-title">
                                                <strong>稿件管理</strong>
                                            </span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse ">
                                <li><a href="<?php echo url('Admin/Manus/add_manus'); ?>">发布稿件</a></li>
                                <li><a href="<?php echo url('Admin/Manus/index'); ?>">全部稿件</a></li>
                                <li><a href="<?php echo url('Admin/Manus/index'); ?>">待发布</a></li>
                                <li><a href="<?php echo url('Admin/Manus/index'); ?>">已发布</a></li>
                                <li><a href="<?php echo url('Admin/Manus/index'); ?>">待确认</a></li>
                            </ul>
                        </li>
                        <?php endif; ?> -->

                        <?php if($c == 'Rule'): ?>

                        <li class="active">
                            <a href="#" aria-expanded="true">
                                <i class="demo-psi-gear-2"></i>
                                <span class="menu-title">
                                                <strong>权限控制</strong>

                                            </span>
                                <i class="arrow"></i>
                            </a>

                            <ul class="collapse in" aria-expanded="true">
                                <li><a href="<?php echo url('/rule_list'); ?>">权限管理</a></li>
                                <li><a href="<?php echo url('/rule_group'); ?>">角色管理</a></li>
                               <!--  <li><a href="<?php echo url('/user_index'); ?>">用户管理</a></li> -->
                            </ul>
                        </li>
                        <?php else: ?>
                        <li>
                            <a href="#">
                                <i class="demo-psi-gear-2"></i>
                                <span class="menu-title">
                                                <strong>权限控制</strong>

                                            </span>
                                <i class="arrow"></i>
                            </a>

                            <ul class="collapse">
                                <li><a href="<?php echo url('/rule_list'); ?>">权限管理</a></li>
                                <li><a href="<?php echo url('/rule_group'); ?>">角色管理</a></li>
                              <!--   <li><a href="<?php echo url('/user_index'); ?>">用户管理</a></li> -->
                            </ul>
                        </li>
                        <?php endif; if($c == 'User'): ?>

                        <li class="active">
                            <a href="#" aria-expanded="true">
                                <i class="demo-psi-gear-2"></i>
                                <span class="menu-title">
                                                <strong>用户管理</strong>

                                            </span>
                                <i class="arrow"></i>
                            </a>

                            <ul class="collapse in" aria-expanded="true">
                                <li><a href="<?php echo url('Admin/User/index'); ?>">管理员列表</a></li>
                                <li><a href="<?php echo url('Admin/User/add_user'); ?>">添加管理员</a></li>
                               <!--  <li><a href="<?php echo url('/user_index'); ?>">用户管理</a></li> -->
                            </ul>
                        </li>
                        <?php else: ?>
                        <li>
                            <a href="#">
                                <i class="demo-psi-gear-2"></i>
                                <span class="menu-title">
                                                <strong>用户管理</strong>

                                            </span>
                                <i class="arrow"></i>
                            </a>

                            <ul class="collapse">
                               <li><a href="<?php echo url('Admin/User/index'); ?>">管理员列表</a></li>
                                <li><a href="<?php echo url('Admin/User/add_user'); ?>">添加管理员</a></li>
                            </ul>
                        </li>
                        <?php endif; if($c == 'Manus'): ?>

                        <li class="active">
                            <a href="#" aria-expanded="true">
                                <i class="demo-psi-gear-2"></i>
                                <span class="menu-title">
                                                <strong>稿件管理</strong>

                                            </span>
                                <i class="arrow"></i>
                            </a>

                            <ul class="collapse in" aria-expanded="true">
                                <li><a href="<?php echo url('Admin/Manus/checkarticle'); ?>">待审核列表</a></li>
                                <li><a href="<?php echo url('Admin/Manus/add_user'); ?>">待退稿列表</a></li>
                               <!--  <li><a href="<?php echo url('/user_index'); ?>">用户管理</a></li> -->
                            </ul>
                        </li>
                        <?php else: ?>
                        <li>
                            <a href="#">
                                <i class="demo-psi-gear-2"></i>
                                <span class="menu-title">
                                                <strong>稿件管理</strong>

                                            </span>
                                <i class="arrow"></i>
                            </a>

                            <ul class="collapse">
                                <li><a href="<?php echo url('Admin/Manus/checkarticle'); ?>">待审核列表</a></li>
                                <li><a href="<?php echo url('Admin/Manus/rejection'); ?>">待退稿列表</a></li>
                            </ul>
                        </li>
                        <?php endif; ?>
                       <!--   <li >
                            <a href="#" aria-expanded="true">
                                <i class="demo-psi-gear-2"></i>
                                <span class="menu-title">
                                                <strong>基本设置</strong>

                                            </span>
                                <i class="arrow"></i>
                            </a>

                             <ul class="collapse " aria-expanded="true">
                                <li><a href="<?php echo url('Admin/Company/index'); ?>">公司架构管理</a></li>
                                <li><a href="<?php echo url('Admin/Depart/depart_list'); ?>">部门管理</a></li>
                                <li><a href="<?php echo url('Admin/Position/position_list'); ?>">职位管理</a></li>
                                <li><a href="<?php echo url('Admin/Ptype/ptype_list'); ?>">项目类型管理</a></li>
                            </ul>
                        </li> -->


                        <?php else: ?>
                        <ul id="mainnav-menu" class="list-group">
                            <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): if( count($menu)==0 ) : echo "" ;else: foreach($menu as $key=>$vo): ?>

                            <li <?php $arr=explode('/',$vo['name']);$pcon=$arr[1];if($pcon==$c){echo 'class="active"';}?>>
                            <a href="#" <?php $arr=explode('/',$vo['name']);$pcon=$arr[1];if($pcon==$c){echo 'aria-expanded="true"';}?> >
                                <i class="demo-psi-split-vertical-2"></i>
                                <span class="menu-title">
                                            <strong><?php echo $vo['title']; ?></strong>
                                            </span>
                                <i class="arrow"></i>
                            </a>


                            <ul>
                          
                            <?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): if( count($vo['children'])==0 ) : echo "" ;else: foreach($vo['children'] as $key=>$vo2): ?>
                            <li
                            <?php if($name==$vo2['name']){echo 'class="active"';}?>>
                            <a href="<?php echo url($vo2['name']); ?>"> <?php echo $vo2['title']; ?>
                            </a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>

                    <div class="mainnav-widget">

                        <!-- Show the button on collapsed navigation -->
               <!--          <div class="show-small">
                            <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                <i class="demo-pli-monitor-2"></i>
                            </a>
                        </div> -->
                        <!-- Hide the content on collapsed navigation -->
              <!--       </div> -->
                    <!--================================-->
                    <!--End widget-->
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>


    </div>


    <!-- FOOTER -->
    <footer id="footer">

    <!-- Visible when footer positions are fixed -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="show-fixed pull-right">
        You have <a href="#" class="text-bold text-main"><span class="label label-danger">3</span> pending action.</a>
    </div>


    <!-- Visible when footer positions are static -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <p class="pad-lft">&#0169; 2017 智火科技</p>


</footer>


    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->


</div>
<!--===================================================-->
<!-- END OF CONTAINER -->


<!-- SETTINGS - DEMO PURPOSE ONLY -->

<!-- END SETTINGS -->

<!-- 添加菜单模态框开始 -->
<div class="modal fade" id="thinkright-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    新增角色
                </h4>
            </div>
            <div class="modal-body">
                <form class="form-inline" action="<?php echo url('Admin/Rule/add_group'); ?>" method="post">
                    <div class="form-group">
                        <label for="demo-inline-inputmail" class="sr-only">角色名：</label>
                        <input type="text" placeholder="请输入角色" id="demo-inline-inputmail" class="form-control"
                               name="title" required="required">
                    </div>
                    <button class="btn btn-primary" type="submit">添加</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- 添加菜单模态框结束 -->

<!-- 修改菜单模态框开始 -->
<div class="modal fade" id="thinkright-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    修改规则
                </h4>
            </div>
            <div class="modal-body">
                <form id="bjy-form" class="form-inline" action="<?php echo url('Admin/Rule/edit_group'); ?>" method="post">
                    <input type="hidden" name="id">
                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <tr>
                            <th width="12%">规则名：</th>
                            <td>
                                <input class="form-control" type="text" name="title" required="required">
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-success" type="submit" value="修改">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- 修改菜单模态框结束 -->

<!-- 给角色添加用户开始 -->
<div class="modal fade" id="thinkright-adduser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    添加成员
                </h4>
            </div>
            <div class="modal-body">
                <form class="form-inline" action="<?php echo url('Admin/Rule/add_user'); ?>" method="post">
                    <div class="form-group">
                        <label for="demo-inline-inputmail" class="sr-only">成员名：</label>
                        <input type="text" placeholder="请输入角色的成员" id="demo-inline-inputmail" class="form-control"
                               name="title" required="required">
                        <input type="hidden" name="group_id">
                    </div>
                    <button class="btn btn-primary" type="submit">添加</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- 给角色添加用户结束 -->


<script>
    // 添加菜单
    function add() {
        $("input[name='title']").val('');
        $('#thinkright-add').modal('show');
    }

    // 修改菜单
    function edit(obj) {
        var ruleId = $(obj).attr('ruleId');
        var ruletitle = $(obj).attr('ruletitle');
        $("input[name='id']").val(ruleId);
        $("input[name='title']").val(ruletitle);
        $('#thinkright-edit').modal('show');
    }

    // 向角色添加用户 Admin/Rule/check_user
    function adduser(obj) {
        var groupId = $(obj).attr('groupId');
        // var ruletitle=$(obj).attr('ruletitle');
        $("input[name='group_id']").val(groupId);
        // $("input[name='title']").val(ruletitle);
        $('#thinkright-adduser').modal('show');
    }
</script>

</body>
</html>
