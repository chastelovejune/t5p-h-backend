<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"C:\phpStudy\PHPTutorial\WWW\TP5\public/../application/index\view\test\test1.html";i:1490249850;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>显示图表</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>

</head>
<body>
<a href="#" onClick="getParameter();">接受参数</a>
<a href="#" onClick="callMainMethod();">调用子iframe方法</a>
<a href="#" onClick="callMainField();">调用主窗口变量</a>
<a href="#" onClick="callMainHtml();">调用子iframe组件</a>
<input id="dd" type="text" value="1111111111"/>
<script type="text/javascript">

    var ff="adfdasfdsafdsafdsaf";
    function test() {
        alert($("#dd").val());
    }
    function callMainField() {
        alert(parent.gg);
    }
    function callMainMethod() {
        parent.ggMM();
    }
    function callMainHtml() {
        alert(parent.$("#ii").attr("id"));
    }
    function getParameter() {
        alert(window.hellobaby);
    }

    console.log('<?php echo url("index/index"); ?>');
    console.log("<?php echo url("","",true,false);?>");

</script>
</body>
</html>