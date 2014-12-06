<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-06 23:50:34
         compiled from "templates/login.html" */ ?>
<?php /*%%SmartyHeaderCode:12104570485481614ecd0864-40038846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a2203b3297ca06c252e2d34e6ee094170008fa3' => 
    array (
      0 => 'templates/login.html',
      1 => 1417881009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12104570485481614ecd0864-40038846',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5481614ed19794_22138583',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5481614ed19794_22138583')) {function content_5481614ed19794_22138583($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/loginsignup.css">
<?php echo '<script'; ?>
 src="/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/angular.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/validation.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/login.js"><?php echo '</script'; ?>
>
</head>
<body ng-app="loginApp" class="ng-scope">
	<div>
	<!-- 导航栏 -->
		<nav class="navbar header" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="/" class="logo"><img alt="" src="/img/LOGO3.png"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/login">登录</a></li>
						<li><a href="/signup">注册</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- 主体 -->
		<div ng-controller="loginController" class="container-fluid">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">登录</div>
						<div class="panel-body">
							<form class="form-horizontal w5c-form" role="form"
							w5c-form-validate="vm.validateOptions"
								name="loginForm" novalidate >
								<div class="form-group">
									<label for="username" class="col-sm-3 control-label">用户名或邮箱</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="username"
											placeholder="用户名或邮箱"  ng-model="username" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-3 control-label">密码</label>
									<div class="col-sm-6">
										<input type="password" class="form-control" name="password"
											placeholder="密码"  ng-model="password" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-6">
										<div class="checkbox">
											<label> <input type="checkbox"> 记住我
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-3">
										<button type="submit" class="btn btn-default" w5c-form-submit="vm.saveEntity()">登录</button>
									</div>
									<div class="col-sm-3">
										<div class="forgot-password text-right">
											<a href="/password/remind">忘记密码？</a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- 整体 -->
</body>
</html><?php }} ?>
