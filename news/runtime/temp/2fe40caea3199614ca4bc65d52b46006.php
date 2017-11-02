<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:82:"D:\phpStudy\WWW\paimingla\news\public/../application/paiming\view\sales\index.html";i:1509603852;s:83:"D:\phpStudy\WWW\paimingla\news\public/../application/paiming\view\layout\cssjs.html";i:1509528764;s:81:"D:\phpStudy\WWW\paimingla\news\public/../application/paiming\view\layout\top.html";i:1509531569;s:82:"D:\phpStudy\WWW\paimingla\news\public/../application/paiming\view\layout\left.html";i:1509531569;s:82:"D:\phpStudy\WWW\paimingla\news\public/../application/paiming\view\layout\foot.html";i:1509528764;}*/ ?>
<!DOCTYPE html>
<html><head lang="en"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <title>排名啦搜索营销系统管理平台</title>
    
    <link rel="stylesheet" href="/Public/plugins/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="__STATIC__/paiming/admin/usercss/bootstrap.min.css" charset="utf-8">
    <link rel="stylesheet" href="__STATIC__/paiming/admin/usercss/bootstrap-theme-ny.css">
    <link rel="stylesheet" href="__STATIC__/paiming/admin/usercss/ucCommon.css">
    <link rel="stylesheet" href="__STATIC__/paiming/admin/usercss/ucComponent.css">

    <script src="__STATIC__/paiming/admin/userjs/jquery-1.12.2.min.js" charset="utf-8"></script>
    <script src="__STATIC__/paiming/admin/userjs/bootstrap.min.js" charset="utf-8"></script>
    <script src="__STATIC__/paiming/admin/userjs/template.js" charset="utf-8"></script>
    <script src="__STATIC__/paiming/admin/userjs/jquery.cookie.js" charset="utf-8"></script>
    <link rel="stylesheet" href="__STATIC__/paiming/admin/usercss/ucDialog.css">
    <script src="__STATIC__/paiming/admin/usercss/jquery.dialog.js"></script>
    <script src="__STATIC__/paiming/admin/userjs/iframeTools.js"></script>
    <script src="__STATIC__/paiming/admin/userjs/NY-1.32.5.min.js"></script>
    <script src="__STATIC__/paiming/admin/userjs/ucCommon.js"></script>
    <link href="__STATIC__/plugins/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="__STATIC__/plugins/umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="__STATIC__/plugins/umeditor/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="__STATIC__/plugins/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="__STATIC__/plugins/umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="__STATIC__/plugins/umeditor/lang/zh-cn/zh-cn.js"></script>
    <style>
        .userServiceList {
            height: 320px;
            width: 620px;
            background-color: #F7F7F7;
            margin-top: 14px;
            padding: 10px 5px;
            font-size: 12px;
            line-height: 2em;
        }
    </style>
</head>
<body><div class="" style="display: none; position: absolute;"><div class="aui_outer"><table class="aui_border"><tbody><tr><td class="aui_nw"></td><td class="aui_n"></td><td class="aui_ne"></td></tr><tr><td class="aui_w"></td><td class="aui_c"><div class="aui_inner"><table class="aui_dialog"><tbody><tr><td colspan="2" class="aui_header"><div class="aui_titleBar"><div class="aui_title" style="cursor: move;"></div><a class="aui_close" href="javascript:/* www.xiaofuwulala.com */;">×</a></div></td></tr><tr><td class="aui_icon" style="display: none;"><div class="aui_iconBg" style="background: none;"></div></td><td class="aui_main" style="width: auto; height: auto;"><div class="aui_content" style="padding: 20px 25px;"></div></td></tr><tr><td colspan="2" class="aui_footer"><div class="aui_buttons" style="display: none;"></div></td></tr></tbody></table></div></td><td class="aui_e"></td></tr><tr><td class="aui_sw"></td><td class="aui_s"></td><td class="aui_se" style="cursor: se-resize;"></td></tr></tbody></table></div></div>
<!-- header -->
<div class="ny-header link-undecorated">
    <div class="ny-logo pull-left">
        <a href="http://www.paimingla.com/" class="text-hide" title="返回官网首页" target="_blank">服务啦啦首页</a>
    </div>
    <div class="header-main text-right">
        <div class="menu-control-outer pull-left">
            <a href="#" id="menuControl" class="menu-collapse-control" title="折叠菜单">
            </a>
        </div>
        <span class="hello-user">
				你好，<span id="helloUserName"><?php echo \think\Session::get('admin.name'); ?></span>

           <?php if(session('admin')['type'] == 1): ?>
                【 <font color=yellow><b>运营中心</b></font> 】
                <?php elseif(session('admin')['type'] == 2): ?>
            【 <font color=yellow><b>经纪人</b></font> 】
            <?php else: ?>
            【 <font color=yellow><b>客户</b></font> 】
            <?php endif; ?>
          
			</span>
        <div class="pull-right">

            <!--<a href="workorder.html" class="header-link header-link-workorder">工单服务</a>-->
            <a href="http://www.paimingla.com/" target="_blank" class="header-link header-link-home">官网首页</a>
            <!--<a href="#a_null" class="header-link header-link-docs">更改资料</a>-->
            <a href="<?php echo url('paiming/index/logout'); ?>" id="chsLoginOut" class="header-link header-link-logout">退出登录</a>
        </div>
    </div>
</div>

<link rel="stylesheet" href="/css/page.css">
<!-- header end-->
<!-- menu -->

<META HTTP-EQUIV="pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control" CONTENT="no-store, must-revalidate">
<META HTTP-EQUIV="expires" CONTENT="Wed, 26 Feb 1997 08:21:57 GMT">
<META HTTP-EQUIV="expires" CONTENT="0">

<div class="sidebar-limit">
    <div class="sidebar-scroll-container">
        <div class="sidebar-main link-undecorated">
            <!-- 手风琴菜单 -->
            <div class="ny-menu default-transition-tree-fast" id="accordion" role="tablist" aria-multiselectable="true">

                <div class="panel">
                    <div class="upper-menu-wrap" role="tab">
                        <a href="" id="chsIndex" data-named="phoenix" class="collapsed upper-menu menu-linkable menu-icon-home">
                            后台总览
                        </a>
                    </div>
                </div>
                
                <!--站点管理-->
                <div class="panel">
                    <?php if($c == media): ?>
                    <div class="upper-menu-wrap" role="tab" id="serviceHeading">
                        <a class="collapsed upper-menu menu-icon-service menu-active" role="button" data-toggle="collapse" data-parent="#accordion" href="#serviceCollapse" aria-expanded="false" aria-controls="serviceCollapse">媒体管理</a>
                    </div>
                    <div id="serviceCollapse" class="collapse" aria-expanded="false" style="height: 0px;" role="tabpanel" aria-labelledby="serviceHeading">
                        <ul class="sub-menu">
                            <li> <a href="<?php echo url('paiming/Media/index'); ?>" data-named="peacock">媒体列表</a> </li>

                        </ul>
                    </div>
                    <?php else: ?>
                        <div class="upper-menu-wrap" role="tab" id="serviceHeading">
                        <a class="collapsed upper-menu menu-icon-service" role="button" data-toggle="collapse" data-parent="#accordion" href="#serviceCollapse" aria-expanded="false" aria-controls="serviceCollapse">媒体管理</a>
                    </div>
                    <div id="serviceCollapse" class="collapse " aria-expanded="false" role="tabpanel" aria-labelledby="serviceHeading">
                        <ul class="sub-menu">
                            <li> <a href="<?php echo url('paiming/Media/index'); ?>" data-named="peacock">媒体列表</a> </li>
                      
                        </ul>
                    </div>
                    <?php endif; if($c == Manus): ?>
                    <div class="upper-menu-wrap" role="tabpanel" id="serviceHeading">
                        <a class="collapsed upper-menu menu-icon-service" role="button" data-toggle="collapse" data-parent="#accordion" href="#service" aria-expanded="false" aria-controls="serviceCollapse">
                            稿件管理
                        </a>
                    </div>
                    <div id="service" class="collapse" role="tabpanel" aria-labelledby="serviceHeading">
                        <ul class="sub-menu ">
                            <li><a href="<?php echo url('paiming/Manus/add_manus'); ?>" data-named="peacock">发布稿件</a></li>
                            <li><a href="<?php echo url('paiming/Manus/index'); ?>" data-named="peacock">全部稿件</a></li>

                        </ul>
                    </div>
                    <?php else: ?>
                     <div class="upper-menu-wrap" role="tab" id="serviceHeading">
                        <a class="collapsed upper-menu menu-icon-service" role="button" data-toggle="collapse" data-parent="#accordion" href="#services" aria-expanded="false" aria-controls="serviceCollapse">
                            稿件管理
                        </a>
                    </div>
                    <div id="services" class="collapse" role="tabpanel" aria-labelledby="serviceHeading">
                        <ul class="sub-menu ">

                            <li><a href="<?php echo url('paiming/Manus/add_manus'); ?>" data-named="peacock">发布稿件</a></li>                          
                            <li><a href="<?php echo url('paiming/Manus/index'); ?>" data-named="peacock">全部稿件</a></li>
                            <li><a href="<?php echo url('paiming/Manus/tobeannounce'); ?>" data-named="peacock">待发布</a></li>                            
                            <li><a href="<?php echo url('paiming/Manus/published'); ?>" data-named="peacock">已发布</a></li>                            
                            
                        </ul>
                    </div>
                    <?php endif; ?>


                    <div class="upper-menu-wrap" role="tab" id="serviceHeading">
                        <a class="collapsed upper-menu menu-icon-service menu-active" role="button" data-toggle="collapse" data-parent="#accordion" href="#servicehui" aria-expanded="false" aria-controls="serviceCollapse">会员管理</a>
                    </div>
                    <div id="servicehui" class="collapse" aria-expanded="false" style="height: 0px;" role="tabpanel" aria-labelledby="serviceHeading">
                        <ul class="sub-menu">
                            <li> <a href="<?php echo url('paiming/Sales/index'); ?>" data-named="peacock">修改密码</a> </li>

                        </ul>
                    </div>
                </div>
              
                <!--站点管理-->          
            </div>
        </div>
    </div>
</div>

<script language="javascript">
    //sub-menu-active
    // $(function () {
    //     $('.sub-menu li').on('onlick',function () {
    //         $(this).addClass('sub-menu-active');
    //     });

    //     $('#chsIndex').on('click',function () {
    //         $(this).addClass('menu-active');
    //     })
    // });

</script>
<!-- menu end -->
<div class="ny-main">
    <div class="crumb-container" data-nav="swan" id="crumbNavContainer"><ol class="breadcrumb ny-crumb">
        <!--  <li><a href="/coo.php" class="crumb-home">商户中心</a></li> -->
    </ol></div>
    <div id="contentBox">
        <div class="ny-panel">

            <div class="ny-panel-body">

                <!-- 提交站点  begin -->
                <div class="ny-panel-heading">



                    <div class="ny-panel-body" id="gaojian" class="gaojian" >

                        <div class="ny-panel-title" >修改密码</div>

                        <form id="chs-form" action="<?php echo url('sales/index'); ?>" class="form-horizontal ny-form ny-tab-container tab-group-1" method="post">
                            <input type="hidden" name="type" value="<?php echo \think\Session::get('admin.type'); ?>">
                            <div class="form-group">
                                <div class="ny-control-label ny-label-long">
                                    <span class="necessary-mark">*</span>
                                    用户名:
                                </div>
                                <div class="col-xs-8 ny-form-control validate-control">
                                    <input id="name" type="text" class="ny-input-reset ny-long-input" name="name" required="required" value="<?php echo \think\Session::get('admin.name'); ?>" readonly>
                                    <div class="error-reminder"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="ny-control-label ny-label-long">
                                    <span class="necessary-mark">*</span>
                                    新密码:
                                </div>
                                <div class="col-xs-8 ny-form-control validate-control">
                                    <input id="pass" type="password" class="ny-input-reset ny-long-input" name="pass" required="required" >
                                    <div class="error-reminder"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="ny-control-label ny-label-long">
                                    <span class="necessary-mark">*</span>
                                    确认密码:
                                </div>
                                <div class="col-xs-8 ny-form-control validate-control">
                                    <input id="respass" type="password" class="ny-input-reset ny-long-input" name="respass" required="required" >
                                    <div class="error-reminder"></div>
                                </div>
                            </div>
                            <div class="col-xs-8 ny-form-control">
                                <!--   <a href="javascript:;" class="ny-btn btn-strong" id="submitWorkorder">添 加</a> -->
                                <button type="submit" style="margin-left: 20%" class="ny-btn btn-strong">添 加</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>


</div>







</div>
<!-- footer -->
<div class="footer">
    <style type="text/css">
        *{ font-family: 'Microsoft YaHei';}
    </style>
</div>

<!-- footer end -->
<!-- 快捷feedback提示框 -->
<div class="ui-feedback-layout" id="nyFeedback">
    <div class="ui-feedback ui-feedback-success">
        <div class="ui-feedback-icon"></div>
        <div class="ui-feedback-text">
            操作成功
        </div>
        <span class="ui-feedback-close">×</span>
    </div>
</div>
<!-- 普通提示框，来自 Bootstrap 的 Small modal -->
<div class="modal fade nytips-modal" tabindex="-1" role="dialog" id="nyTips">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">消息</h4>
            </div>
            <div class="modal-body">
                <!-- 主要内容 -->
            </div>
        </div>
    </div>
</div>




<div style="display: none; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; cursor: move; opacity: 0; background: rgb(255, 255, 255);"></div></body></html>
