<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpStudy\WWW\paimingla\news\public/../application/paiming\view\login\login.html";i:1509531569;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="__STATIC__/paiming/admin/css/global.css" />
    <link rel="stylesheet" href="__STATIC__/paiming/admin/css/style.css" />
    <script type="text/javascript" src="__STATIC__/paiming/admin/js/jquery-1.7.2.js"></script>
</head>
<body>
<div class="whole">
    <!--top-->
    <div class="login-top">
        <div class="top ">
            <div class="logo"><a href="http://www.paimingla.com"><img src="__STATIC__/paiming/admin/images/login-logo3.png"></a></div>
            <div class="nav">
                <ul>
                    <li class="on"><a href="http://www.paimingla.com">首页</a></li>
                    <li><a href="http://www.paimingla.com/service">产品服务</a></li>
                    <li><a href="http://www.paimingla.com/join">加盟政策</a></li>
                    <li><a href="http://www.paimingla.com/query">授权认证</a></li>
                    <li><a href="http://www.paimingla.com/help">帮助中心</a></li>
                    <li><a href="http://www.paimingla.com/about">关于我们</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--top-->
    <!--content-->
    <div class="login-center">
        <div class="login-left">
            <dl>
                <dt><img src="__STATIC__/paiming/admin/images/login-img1.png"></dt>
                <dd>
                    <p>10年专注搜索营销</p>
                    专业的研发团队
                </dd>
            </dl>
        </div>
        <div class="login-right">
            <div class="login-right-logo"><img src="__STATIC__/paiming/admin/images/login-logo2.png"></div>
            <div class="login-right-tab">
                <script>function Show(Name, Class, num, count, more,v) {
                    for (var i = 0; i < count; i++) {
                        var tag = document.getElementById(Name + "_tab_" + i);
                        var cont = document.getElementById(Name + "_cont_" + i);
                        $("#level").val(v);
                        var mores;
                        if (more) {
                            mores = document.getElementById(Name + "_more_" + i);
                        }
                        if (i == num) {
                            tag.className = Class + "On";
                            var str="<input name='logintype' value='0' type='hidden'>";
                            document.getElementById("showh").innerHTML=str;
                        } else {
                            tag.className = Class;
                            var str="<input name='logintype' value='1' type='hidden'>";
                            document.getElementById("showh").innerHTML=str;
                        }
                    }
                }
                </script>
    
                <ul class="main">
                    <li onmousedown="Show('zzq','zzq',0,2,0,1)" id="zzq_tab_0" class="zzqOn"><a href="###">运营中心</a></li>
                    <li onmousedown="Show('zzq','zzq',1,2,0,2)" id="zzq_tab_1" class="zzq"><a href="###">经纪人</a></li>
                </ul>
                <form action="" method="post">
                    <div id="showh"><input name='logintype' value='1' type='hidden'></div>
                <div class="box" id="zzq_cont_0" style="display: block;">
                    <input style="background: url(images/login-img2.png)no-repeat 10px center;" id="js-mobile_ipt" name="username" type="text" value="用户名" onfocus="if(value=='用户名')
                                {this.style.color='#666';value=''}" onblur="if(value==''){this.style.color='#666666';value='用户名'}">
               
                    <input style="background: url(images/login-img3.png)no-repeat 10px center;" id="js-mobile_pwd_ipt"  name="password" type="text" value="密码" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value)
                            {value=defaultValue; this.type='text';}" style="color:#666666;" />
                    <!--密码框-->
                    <div style="overflow: hidden;">
                        <input style="width: 138px;padding-left: 20px;float: left;" type="text" name="vcode" value="验证码" id="js-mobile_vcode_ipt"  onfocus="if(value=='验证码')
                                {this.style.color='#666';value=''}" onblur="if(value==''){this.style.color='#666666';value='验证码'}">
                        <div style="float: left;margin-left: 20px; margin-top: 28px;"><img class="left15" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src=this.src+'?'+Math.random()"width="120" alt="验证码" style="cursor:pointer;" id="chsCheck" title="点击刷新"></div>
                       <!--  <img class="left15" width="120" alt="验证码" style="cursor:pointer;" src="/user.php?c=login&a=verify" id="chsCheck"  title="点击刷新"> --></div>
                    </div>

                    <input type="hidden" name="level" id="level" value="1">

                    <div class="login-right-botton">

                    <a id="js-mobile_btn"  ><button class="button btn-green" >立即登录</button></a></div>
                   <!--  <button class="button btn-green" >立即登录</button> -->
                </div>
                <div class="box" id="zzq_cont_1" style="display: none;">
                  
                </div>
            </div>
            </form>
        </div>
    </div>
    <script>

        $(function () {
            var captcha_img = $('#chsCheck');
            var verifyimg = captcha_img.attr("src");
            captcha_img.attr('title', '点击刷新');
            captcha_img.click(function(){
                if( verifyimg.indexOf('?')>0){
                    $(this).attr("src", verifyimg+'&random='+Math.random());
                }else{
                    $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
                }
            });


            $(document).keyup(function(keyEvent){
                if(keyEvent.which == 13){
                    login.check();
                }
            });
        });
    </script>
    <div class="login-footer">
        <ul>
            <li><a href="http://www.paimingla.com/about">关于我们</a></li>
            <li>|</li>
            <li><a href="http://www.paimingla.com/join">加盟合作</a></li>
            <li>|</li>
            <li><a href="http://www.paimingla.com/help">帮助中心</a></li>
            <li>|</li>
            <li><a href="http://www.paimingla.com/contact">联系我们</a></li>
        </ul>
        <div class="login-beian">@排名啦&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://www.miibeian.gov.cn" target="_blank">沪ICP备15040334号-7</a></div>
    </div>
    <!--footer-->
</div>
</body>
</html>