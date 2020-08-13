<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:103:"C:\phpStudy\PHPTutorial\WWW\xianrenzhang\public/../application/admin\view\student\timetablestudent.html";i:1490249850;s:92:"C:\phpStudy\PHPTutorial\WWW\xianrenzhang\public/../application/admin\view\public\header.html";i:1490249850;s:92:"C:\phpStudy\PHPTutorial\WWW\xianrenzhang\public/../application/admin\view\public\footer.html";i:1490249850;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="__CSS__/select2.css" rel="stylesheet">
    <link href="__CSS__/toastr.min.css" rel="stylesheet">
    <link href="__CSS__/bootstrap-switch/bootstrap3/bootstrap-switch.min.css" rel="stylesheet">

    <style type="text/css">
    .long-tr th{
        text-align: center
    }
    .long-td td{
        text-align: center
    }
    </style>
</head>

<body class="gray-bg">
    <div class="form-group" style="width: 200px; background-color: gray;">
        <div class="input-group">
            <div class="input-group-addon" >班级</div>
            <select id="getClass" class="select2-search__field form-control" name="class">
            </select>
        </div>
    </div>
    <div class="text-left">
        <h1 class="text-center">
            课程表
        </h1>
        <h2>
            <?php if(!empty($class)): ?>
                <?php echo $class; endif; ?>
        </h2>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight" name="timetable">
    <div class="ibox float-e-margins">
        <div class="example-wrap">
            <div class="example">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr class="long-tr">
                        <th  ></th>
                        <th >星期一</th>
                        <th >星期二</th>
                        <th >星期三</th>
                        <th >星期四</th>
                        <th >星期五</th>
                        <th >星期六</th>
                        <th >星期日</th>
                    </tr>
                    </thead>
                    <tbody id="timetables">
                        <tr>
                            <td rowspan="2" width="20px">上午</td>
                            <td >第12节</td>
                            <?php if(!empty($list)): if(is_array($list[1]) || $list[1] instanceof \think\Collection): if( count($list[1])==0 ) : echo "" ;else: foreach($list[1] as $key=>$vo): if(!empty($vo)): ?>
                                        <td>
                                            <?php echo $vo['room']; ?><br/>
                                            <?php echo $vo['cname']; ?>
                                        </td>
                                    <?php endif; if(empty($vo)): ?>
                                        <td ></td>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; endif; if(empty($list)): ?>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td width="20px" class="">第34节</td>
                            <?php if(!empty($list)): if(is_array($list[2]) || $list[2] instanceof \think\Collection): if( count($list[2])==0 ) : echo "" ;else: foreach($list[2] as $key=>$vo): if(!empty($vo)): ?>
                                        <td>
                                            <?php echo $vo['room']; ?><br/>
                                            <?php echo $vo['cname']; ?>
                                        </td>
                                    <?php endif; if(empty($vo)): ?>
                                        <td ></td>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; endif; if(empty($list)): ?>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td rowspan="2" width="20px">下午</td>
                            <td >第56节</td>
                            <?php if(!empty($list)): if(is_array($list[3]) || $list[3] instanceof \think\Collection): if( count($list[3])==0 ) : echo "" ;else: foreach($list[3] as $key=>$vo): if(!empty($vo)): ?>
                                        <td>
                                            <?php echo $vo['room']; ?><br/>
                                            <?php echo $vo['cname']; ?>
                                        </td>
                                    <?php endif; if(empty($vo)): ?>
                                        <td ></td>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; endif; if(empty($list)): ?>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td width="20px" class="">第78节</td>
                            <?php if(!empty($list)): if(is_array($list[4]) || $list[4] instanceof \think\Collection): if( count($list[4])==0 ) : echo "" ;else: foreach($list[4] as $key=>$vo): if(!empty($vo)): ?>
                                        <td>
                                            <?php echo $vo['room']; ?><br/>
                                            <?php echo $vo['cname']; ?>
                                        </td>
                                    <?php endif; if(empty($vo)): ?>
                                        <td ></td>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; endif; if(empty($list)): ?>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td >晚上</td>
                            <?php if(!empty($list)): if(is_array($list[5]) || $list[5] instanceof \think\Collection): if( count($list[5])==0 ) : echo "" ;else: foreach($list[5] as $key=>$vo): if(!empty($vo)): ?>
                                        <td>
                                            <?php echo $vo['room']; ?><br/>
                                            <?php echo $vo['cname']; ?>
                                        </td>
                                    <?php endif; if(empty($vo)): ?>
                                        <td ></td>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; endif; if(empty($list)): ?>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                                <td ></td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>

<script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/static/admin/js/content.min.js?v=1.0.0"></script>
<script src="/static/admin/js/plugins/chosen/chosen.jquery.js"></script>
<script src="/static/admin/js/plugins/iCheck/icheck.min.js"></script>
<script src="/static/admin/js/plugins/layer/laydate/laydate.js"></script>
<script src="/static/admin/js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="/static/admin/js/plugins/switchery/switchery.js"></script><!--IOS开关样式-->
<script src="/static/admin/js/jquery.form.js"></script>
<script src="/static/admin/js/layer/layer.js"></script>
<script src="/static/admin/js/laypage/laypage.js"></script>
<script src="/static/admin/js/laytpl/laytpl.js"></script>
<script src="/static/admin/js/select2.full.js"></script>
<script src="/static/admin/js/select2.js"></script>
<script src="/static/admin/js/i18n/es.js"></script>
<script src="/static/admin/js/i18n/zh-CN.js"></script>
<script src="__JS__/bootstrap-switch.js"></script>
<script src="__JS__/toastr.min.js"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>

<script type="text/javascript">

    $(function () {
        toastr.options.positionClass = 'toast-bottom-center';

        $('#getClass').select2({
            multiple: false,
            placeholder: '选择班级',
            tags: true,
            ajax: {
                url: '<?php echo url("student/getClass"); ?>',
                dataType: 'json',
                delay: 50,
                data: function (item) {
                    return item
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    }
                },
                cache: true
            },
            minimumInputLength: 0,
            templateResult: function(item){ return '<span style="font-size:8px">' + item .text + '</span>'},
            templateSelection: function(item) { return item.text },
            escapeMarkup: function (markup) { return markup;},
        });

        $('#getClass').change(function () {
            var Class = $(this).val();
            var text = $(this).text();
            $.ajax({
                url: '<?php echo url("student/timetableStudent"); ?>',
                type: 'get',
                dataType: 'json',
                data: {
                    class: Class,
                },
                success: function(data) {
                    $('body').html(data);
                }
            });
        });

        
    })

</script>

