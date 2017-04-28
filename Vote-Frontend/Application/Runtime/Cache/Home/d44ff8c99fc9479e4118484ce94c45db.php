<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>候选人详情</title>
    <link href="/Public/css/reset.css" type="text/css" rel="stylesheet">
    <link href="/Public/css/style.css" type="text/css" rel="stylesheet">
    <link href="/Public/css/main.css" type="text/css" rel="stylesheet">
    <link href="/Public/css/zebra.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/Public/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/Public/js/layer.m.js"></script>
</head>
<body>
<div class="head">
    <div class="login-right-panel">
        <div class="login-logo"></div>
    </div>
    <div class="nav" style="height: 35px;">
    </div>
</div>
<!-- 网页内容  -->
<div class="content pageVote">
    <div id="container">

        <table class="zebra">

            <thead>
            <tr>
                <th colspan="2" style="font-size:20px;
	font-weight:normal;"><?php echo session('realname');?>详细信息</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>姓名</td>
                <td><?php echo session('realname');?></td>
            </tr>
            <tr>
                <td>用户名</td>
                <td><?php echo session('username');?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>

</html>