<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"D:\project\TP5\TP5\public/../application/admin\view\login.html";i:1561535923;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="renderer" content="webkit"> 
    <title><?php echo $web_name; ?></title>
    <link href="__CSS__/bootstrap.min.css" rel="stylesheet">
    <link href="__CSS__/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="__CSS__/animate.min.css" rel="stylesheet">
    <link href="__CSS__/style.min.css" rel="stylesheet">
    <link href="__CSS__/login.min.css" rel="stylesheet">
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>

</head>

<body class="signin">
<div class="signinpanel">
    <div class="row">
        <div class="col-sm-7" style="color:#fff">
            <div class="signin-info">
                <div class="logopanel m-b">
                </div>
                <div class="m-b"></div>
                <h2>欢迎使用</h2>
              <h2>  <strong><?php echo $web_name; ?></strong></h2>

            </div>
        </div>
        <div class="col-sm-5" style="color:#fff">
            <form method="post" action="<?php echo Url('admin/index/index'); ?>">
                <p class="m-t-md " id="err_msg"><strong>登录到后台</strong></p>
                <input type="text" class="form-control uname" placeholder="用户名" id="username" />
                <input type="password" class="form-control pword m-b" placeholder="密码" id="password" />
                <div style="margin-bottom:70px">
                    <input type="text" class="form-control" placeholder="验证码" style="color:black;width:120px;float:left;margin:0px 0px;" name="code" id="code"/>
                    <img src="<?php echo url('checkVerify'); ?>" onclick="javascript:this.src='<?php echo url('checkVerify'); ?>?tm='+Math.random();" style="float:right;cursor: pointer" id="verify"/>
                </div>
                <input class="btn btn-success btn-block" id="login_btn" value="登录"/>
            </form>
        </div>
    </div>
    <div class="signup-footer">
        <div class="pull-left" style="color:#fff">
            &copy; 2017-2018 All Rights Reserved.
        </div>
    </div>
</div>
<script src="__JS__/jquery.min.js?v=2.1.4"></script>
<script src="__JS__/bootstrap.min.js?v=3.3.6"></script>
<script src="__JS__/layer/layer.js"></script>
<script type="text/javascript">
    document.onkeydown=function(event){
        var e = event || window.event || arguments.callee.caller.arguments[0];
        if(e && e.keyCode==13){ // enter 键
            $('#login_btn').click();
        }
    };
    var lock = false;
    $(function () {
        $('#login_btn').click(function(){
            if(lock){
                return;
            }
            lock = true;
            $('#err_msg').hide();
            $('#login_btn').removeClass('btn-success').addClass('btn-danger').val('登陆中...');
            var username = $('#username').val();
            var password = $('#password').val();
            var code = $('#code').val();
            $.post("<?php echo url('login/doLogin'); ?>",{'username':username, 'password':password, 'code':code},function(data){
                lock = false;
                $('#login_btn').val('登录').removeClass('btn-danger').addClass('btn-success');
                if(data.code!=1){
                    $('#err_msg').show().html("<span style='color:red'>"+data.msg+"</span>");
                    $('#verify').click();
                    return;
                }else{
                    layer.msg('恭喜您，登录成功', {icon: 1,time:2000}, function(index){
                        window.location.href=data.data;
                    });
                }
            });
        });
    });
</script>
</body>
</html>