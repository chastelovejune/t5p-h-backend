<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"C:\phpStudy\PHPTutorial\WWW\TP5\public/../application/index\view\test\test2.html";i:1490249850;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>显示图表</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
var url = '<?php echo url("student/editView"); ?>';
url = url + '?a=10';
    console.log(url);
            var gg="dsafdsafdsafdsafsdaf";
            function ggMM() {
                alert("2222222222222222222222222222222");
            }
            function callIframeMethod() {
                //document.getElementById("ii").contentWindow.test();
                $("#ii")[0].contentWindow.test(); //用jquery调用需要加一个[0]
            }
            function callIframeField() {
                alert($("#ii")[0].contentWindow.ff);
            }
            function callIframeHtml() {
                alert($("#ii")[0].contentWindow.$("#dd").val());
                //alert($("#ii")[0].contentWindow.document.getElementById("dd").value);
                //alert($("#ii")[0].contentWindow.document.getElementById("dd").value);
            }
            function giveParameter() {
                $("#ii")[0].contentWindow.hellobaby="dsafdsafsdafsdafsdafsdafsadfsadfsdafsadfdsaffdsaaaaaaaaaaaaa";
            }

    </script>
</head>
<body>
<a onclick="ggMM()">123</a>
<a href="#" onClick="giveParameter();">参数传递</a>
<a href="#" onClick="callIframeMethod();">调用子iframe方法</a>
<a href="#" onClick="callIframeField();">调用子iframe变量</a>
<a href="#" onClick="callIframeHtml();">调用子iframe组件</a></br>
<iframe id="ii" src="test1.html" width="100%" frameborder="0"></iframe>
</body>
</html>