<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-06 17:31:36
         compiled from "templates/me.html" */ ?>
<?php /*%%SmartyHeaderCode:1164018785482bb2b365120-42645794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44663ae19b8a56c522a6e8a81b10df6eeacf1fd9' => 
    array (
      0 => 'templates/me.html',
      1 => 1417857424,
      2 => 'file',
    ),
    '4c2931ce817849e09c1a95d82e24e0195c38e64e' => 
    array (
      0 => 'templates/layout.html',
      1 => 1417858293,
      2 => 'file',
    ),
    '97bc87ce39bfd469598b5ab393e6922ac5d805c6' => 
    array (
      0 => 'templates/base.html',
      1 => 1417853864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1164018785482bb2b365120-42645794',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5482bb2b3e0e94_18759574',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5482bb2b3e0e94_18759574')) {function content_5482bb2b3e0e94_18759574($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<title>Tongjo</title>

<!-- Bootstrap -->
<link
	href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css"
	rel="stylesheet">
<link href="/css/lib.css" rel="stylesheet">
<link href="/css/main.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 data-main="" src="/js/require.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var API_URL = 'http://api.jige.olege.com';
	//var API_URL = 'http://api.jige.la.me';
	var UID = "53ca235ebadeb80e03d63af1";
<?php echo '</script'; ?>
>
</head>
<body>

	

<div class="top">
	<div class="wrapper clearfix">
		<a href="/" class="logo"><img alt="" src="/img/LOGO3.png"></a>
		<ul class="topbar">
			<li><a><span class="glyphicon glyphicon-envelope"></span></a></li>
			<li><a><span class="glyphicon glyphicon-bell"></span></a></li>
			<li><a><span class="glyphicon glyphicon-user"></span>
					guodong</a></li>
		</ul>
	</div>
</div>
<div class="subnav">
	<a href="/">发布项目</a> <a href="/">浏览项目</a>
</div>
<div class="container-fluid main">

	<div class="row">
		<div
			class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
			

</div>
	</div>
</div>

<div class="bottom">

	<div class="wrapper">
		<div class="subbottom">
			<div class="row">
				<div class="col-md-4">
					<p>1,423</p>
					<p class="sm">用户数</p>
				</div>
				<div class="col-md-4">
					<p>1,423</p>
					<p class="sm">项目数</p>
				</div>
				<div class="col-md-4">
					<p>1,423</p>
					<p class="sm">团队数</p>
				</div>
			</div>
		</div>
		<div class="text">
		<p>同舟2014版权所有</p>
		<p>
			<a>关于同舟</a> <a>隐私条款</a> <a>服务范围</a> <a>帮助手册</a>
		</p>
		</div>
	</div>
</div>


</body>
</html><?php }} ?>
