<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:75:"D:\phpStudy\WWW\paiming\public/../application/paiming\view\media\index.html";i:1509346307;s:76:"D:\phpStudy\WWW\paiming\public/../application/paiming\view\layout\cssjs.html";i:1508912602;s:74:"D:\phpStudy\WWW\paiming\public/../application/paiming\view\layout\top.html";i:1509081588;s:75:"D:\phpStudy\WWW\paiming\public/../application/paiming\view\layout\left.html";i:1509527298;s:75:"D:\phpStudy\WWW\paiming\public/../application/paiming\view\layout\foot.html";i:1508897612;}*/ ?>
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
<body ><div class="" style="display: none; position: absolute;"><div class="aui_outer"><table class="aui_border"><tbody><tr><td class="aui_nw"></td><td class="aui_n"></td><td class="aui_ne"></td></tr><tr><td class="aui_w"></td><td class="aui_c"><div class="aui_inner"><table class="aui_dialog"><tbody><tr><td colspan="2" class="aui_header"><div class="aui_titleBar"><div class="aui_title" style="cursor: move;"></div><a class="aui_close" href="javascript:/* www.xiaofuwulala.com */;">×</a></div></td></tr><tr><td class="aui_icon" style="display: none;"><div class="aui_iconBg" style="background: none;"></div></td><td class="aui_main" style="width: auto; height: auto;"><div class="aui_content" style="padding: 20px 25px;"></div></td></tr><tr><td colspan="2" class="aui_footer"><div class="aui_buttons" style="display: none;"></div></td></tr></tbody></table></div></td><td class="aui_e"></td></tr><tr><td class="aui_sw"></td><td class="aui_s"></td><td class="aui_se" style="cursor: se-resize;"></td></tr></tbody></table></div></div>
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
                    <div id="serviceCollapse" class="collapse in" aria-expanded="false" role="tabpanel" aria-labelledby="serviceHeading">
                        <ul class="sub-menu">
                            <li> <a href="<?php echo url('paiming/Media/index'); ?>" data-named="peacock">媒体列表</a> </li>                     
                        </ul>
                    </div>
                    <?php endif; if($c == Manus): ?>
                    <div class="upper-menu-wrap" role="tab" id="serviceHeading">
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
                        <a class="collapsed upper-menu menu-icon-service" role="button" data-toggle="collapse" data-parent="#accordion" href="#service" aria-expanded="false" aria-controls="serviceCollapse">
                            稿件管理
                        </a>
                    </div>
                    <div id="service" class="collapse" role="tabpanel" aria-labelledby="serviceHeading">
                        <ul class="sub-menu ">

                            <li><a href="<?php echo url('paiming/Manus/add_manus'); ?>" data-named="peacock">发布稿件</a></li>                          
                            <li><a href="<?php echo url('paiming/Manus/index'); ?>" data-named="peacock">全部稿件</a></li>                            
                            <li><a href="<?php echo url('paiming/Manus/tobeannounce'); ?>" data-named="peacock">待发布</a></li>                            
                            <li><a href="<?php echo url('paiming/Manus/published'); ?>" data-named="peacock">已发布</a></li>                            
                            
                        </ul>
                    </div>
                    <?php endif; ?>

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
    <div class="crumb-container" data-nav="peacock" id="crumbNavContainer"><ol class="breadcrumb ny-crumb">
        <li><a href="/coo.php" class="crumb-home">商户中心</a></li>
        <!-- 一级目录 -->
        <li><a>媒体管理</a></li>

        <!-- 二级目录（部分模块没有二级目录） -->
        <li>
            <a>
                媒体列表
            </a>
        </li>
    </ol></div>
    <div id="contentBox"><div class="ny-panel">
        <div class="ny-panel-heading">
            <div class="ny-panel-title">媒体列表</div>
        </div>

        <form method="post">
            <div class="effectkeyfind">
                <input type="hidden" name="c" value="web">
                <input type="hidden" name="a" value="index">
                媒体名称:
                        <input type="text" name="title" placeholder="" id="demo-inline-inputmail" class="ny-btn btn-primary btn-reverse secretary-feedback">
               <!--  <input name="title" type="text" class="ny-btn btn-primary btn-reverse secretary-feedback" placeholder="项目名/网址" value="<?php echo \think\Request::instance()->get('title'); ?>"> -->
                收录类型:
                        <select name="in_type_id" id="demo-inline-inputpass1" class="ny-btn btn-primary btn-reverse secretary-feedback">
                            <option value="">全部</option>
                           <?php if(is_array($souinfo) || $souinfo instanceof \think\Collection || $souinfo instanceof \think\Paginator): if( count($souinfo)==0 ) : echo "" ;else: foreach($souinfo as $key=>$v): ?>
                            <option value="<?php echo $v['id']; ?>" ><?php echo $v['title']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>

                频道类型:
                        <select name="ch_type_id" id="demo-inline-inputpass2" class="ny-btn btn-primary btn-reverse secretary-feedback">
                            <option value="">全部</option>
                            <?php if(is_array($pinfo) || $pinfo instanceof \think\Collection || $pinfo instanceof \think\Paginator): if( count($pinfo)==0 ) : echo "" ;else: foreach($pinfo as $key=>$v): ?>
                            <option value="<?php echo $v['id']; ?>" ><?php echo $v['title']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                           
                        </select>

                媒体类型:
                        <select name="media_type_id" id="demo-inline-inputpass3" class="ny-btn btn-primary btn-reverse secretary-feedback">
                            <option value="">全部</option>
                            <?php if(is_array($mtinfo) || $mtinfo instanceof \think\Collection || $mtinfo instanceof \think\Paginator): if( count($mtinfo)==0 ) : echo "" ;else: foreach($mtinfo as $key=>$v): ?>
                            <option value="<?php echo $v['id']; ?>"><?php echo $v['title']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>    
                        </select>
                媒体来源:
                        <select name="media_from_id" id="demo-inline-inputpass4" class="ny-btn btn-primary btn-reverse secretary-feedback">
                            <option value="">全部</option>
                            <?php if(is_array($mfinfo) || $mfinfo instanceof \think\Collection || $mfinfo instanceof \think\Paginator): if( count($mfinfo)==0 ) : echo "" ;else: foreach($mfinfo as $key=>$v): ?>
                            <option value="<?php echo $v['id']; ?>"><?php echo $v['title']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            
                        </select>
                门户类型:
                        <select name="gate_id" id="demo-inline-inputpass5" class="ny-btn btn-primary btn-reverse secretary-feedback">
                            <option value="">全部</option>
                            <?php if(is_array($minfo) || $minfo instanceof \think\Collection || $minfo instanceof \think\Paginator): if( count($minfo)==0 ) : echo "" ;else: foreach($minfo as $key=>$v): ?>
                           <option value="<?php echo $v['id']; ?>" ><?php echo $v['title']; ?></option>
                           <?php endforeach; endif; else: echo "" ;endif; ?>
                            
                        </select>
                地区:
                        <select name="province" id="demo-inline-inputpass" class="ny-btn btn-primary btn-reverse secretary-feedback">
                            <option value="">全部</option>
                           <?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): if( count($province)==0 ) : echo "" ;else: foreach($province as $key=>$v): ?>
                           <option value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option>
                           <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>

               <!--  <select name="user_id" class="ny-btn btn-primary btn-reverse secretary-feedback">
                    <option value="">--选择客户--</option>
                    <foreach name="usersList" key="k" item="vo">
                        <eq name="vo['id']" value="$Think.get.user_id">
                            <option value="<?php echo $vo['id']; ?>" selected><?php echo $vo['realname']; ?></option>
                            <else/>
                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['realname']; ?></option>
                        </eq>
                    </foreach>
                </select>


                <select name="sales_id" class="ny-btn btn-primary btn-reverse secretary-feedback">
                    <option value="">--选择经纪人--</option>
                    <foreach name="userSalesList" key="k" item="vo">
                        <eq name="vo['id']" value="$Think.get.sales_id">
                            <option value="<?php echo $vo['id']; ?>" selected><?php echo $vo['name']; ?></option>
                            <else/>
                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                        </eq>
                    </foreach>
                </select> -->


             <!--    <input type="submit" name="button" id="button" value="查询" class="ny-btn btn-primary connect-secretary">

                <input type="button" onclick="window.location.href='/coo.php?c=web'" name="button" id="button" value="全部列表"  class="ny-btn btn-primary btn-reverse secretary-feedback">

                <input style=" margin-left: 30px;" type="button" name="button" id="chsAdd" value="添加媒体" class="ny-btn btn-strong btn-operate-add"> -->
                    <input type="submit" value="搜索"  class="btn btn-primary">
                    <span onclick="daochu()" class="btn btn-primary">导出数据</span>
            </div>
        </form>
                <script>
                    function daochu(){
                        var title = $("input[name=title]").val();//alert(title);
                        //var username = $("input[name=user]").val();//alert(username);
                        var in_type_id = $('#demo-inline-inputpass1 option:selected').val(); //alert(in_type_id)       //收录类型                      
                        var ch_type_id = $('#demo-inline-inputpass2 option:selected').val(); //alert(ch_type_id)       //频道类型                      
                        var media_type_id = $('#demo-inline-inputpass3 option:selected').val(); //alert(media_type_id)       //媒体类型                      
                        var media_from_id = $('#demo-inline-inputpass4 option:selected').val(); //alert(media_from_id)       //媒体来源类型                      
                        var gate_id = $('#demo-inline-inputpass5 option:selected').val(); //alert(gate_id)       //门户类型                      
                        var province = $('#demo-inline-inputpass option:selected').val(); //alert(province)       //省                      
                        window.location.href="<?php echo url('Media/export');?>"+'?title='+title+'&in_type_id='+in_type_id+'&ch_type_id='+ch_type_id+'&media_type_id='+media_type_id+'&media_from_id='+media_from_id+'&gate_id='+gate_id+'&prov='+province;


                    }                                       
                </script>

        <div class="ny-panel-body">
         
            <table class="ny-table margin-bottom-20" data-nonedata_text="">
                <thead>
                <tr>
                    <th>媒体名称</th>
                    <th>收录类型</th>
                  <!--   <th>收录效果</th> -->
                    <th>媒体类型</th>
                    <th>媒体来源</th>
                    <th>频道类型</th>
                    <th>地区</th>
                    <th>门户类型</th>
                    <th>成本价</th>
                    <th>指导价</th>
                    <th>案例</th>
                    <th>备注</th>
                  <!--   <th>操作</th> -->
                </tr>
                </thead>
                <tbody>
         <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): if( count($info)==0 ) : echo "" ;else: foreach($info as $key=>$v): ?>
                <tr >                    
                    <td><?php echo $v['title']; ?></td>
                    <td><?php echo $v['in_type_id']; ?></td>
                  <!--   <td><?php echo $v['in_effect_id']; ?></td> -->
                    <td><?php echo $v['media_type_id']; ?></td>
                    <td><?php echo $v['media_from_id']; ?></td>
                    <td><?php echo $v['ch_type_id']; ?></td>
                    <td><?php echo $v['prov']; ?></td>
                    <td><?php echo $v['gate_id']; ?></td>
                    <td><?php echo $v['cost_price']; ?></td>
                    <td><a href="javascript:;" mediaId="<?php echo $v['id']; ?>" media_price="<?php echo $v['guide_price']; ?>"  onclick="edit(this)"><button class="btn btn-primary"><?php echo $v['guide_price']; ?></button></a></td>
                    <td><?php echo $v['case']; ?></td>
                    <td><?php echo $v['remark']; ?></td>
               <!--      <td>
                        <a  href="<?php echo url('paiming/media/edit_media',array('id'=>$v['id'])); ?>" "><button class="btn btn-primary">修改</button></a>
                        <a href="javascript:if(confirm('确定删除？'))location='<?php echo url('paiming/media/delete',array('id'=>$v['id'])); ?>'"><button class="btn btn-danger">删除</button></a>
                    </td> -->
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
             <?php echo $info->render(); ?>
        </div>
    </div></div>
</div>
<div class="modal fade" id="thinkright-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    修改媒体价格
                </h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="<?php echo url('paiming/media/edit_price'); ?>" method="post">
                <input type="hidden" name="id" >
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">修改前的价格</label>
                            <div class="col-sm-9">                             
                                <input type="text" id="demo-hor-inputemail" class="form-control" name="cancel_price"
                                       required="required" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">修改后的价格</label>
                            <div class="col-sm-9">                             
                                <input type="text" id="demo-hor-inputemail" class="form-control" name="price"
                                       required="required">
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-success" type="submit">修改</button>
                    </div>
                </form>
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
<!-- 面包屑导航模板 -->
<script type="text/html" id="crumbNavTpl">
    <ol class="breadcrumb ny-crumb">
        <li><a href="" class="crumb-home">商户中心</a></li>
        <!-- 一级目录 -->
        <li><a>{{upperMenuText}}</a></li>
        <?php if(subMenuText): ?>
        <!-- 二级目录（部分模块没有二级目录） -->
        <li>
            <a {<?php if(subMenuLink): ?>}href="{{subMenuLink}}"{<?php endif; ?>}>
            {{subMenuText}}
            </a>
        </li>
        <?php endif; if(insideTitle): ?>
        <!-- 详情页面 -->
        <li>
            <a>{{insideTitle}}</a>
        </li>
        <?php endif; ?>
    </ol>
</script>
<script type="text/javascript">

    // 添加子菜单
    function add_child(obj) {
        var ruleId = $(obj).attr('ruleId');
        $("input[name='pid']").val(ruleId);
        $("input[name='title']").val('');
        $("input[name='name']").val('');
        $("input:radio[name='show']").val('');
        $('#thinkright-add').modal('show');
    }

    // 修改指导价菜单
    function edit(obj) {
        var mediaId = $(obj).attr('mediaId');//媒体id    //alert(mediaId);
        var mediaprice = $(obj).attr('media_price');//媒体id   //alert(mediaprice);

        $("input[name='cancel_price']").val(mediaprice);
        $("input[name='id']").val(mediaId);
    //     $("input:radio[name='show']").val(ruleshow);
        $('#thinkright-edit').modal('show');
    }
</script>


<script>var nyData = {"pager":{"page":0,"pageSize":10,"total":0},"filter":{"searchType":0,"searchKey":"","orderType":"desc","orderName":"id"},"services":{"list":[]},"common":{"userID":72838,"userName":"\u8D75\u9633","userMobile":"138****5922","sendCountDown":0,"unReadTotal":0,"backUrl":"http:\/\/console.fuwulala.com\/user\/feedback\/","domain":{"main":"http:\/\/www.fuwulala.com","static":"http:\/\/static.fuwulala.com","console":"http:\/\/console.fuwulala.com"}}};</script>


<div style="display: none; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; cursor: move; opacity: 0; background: rgb(255, 255, 255);"></div></body></html>