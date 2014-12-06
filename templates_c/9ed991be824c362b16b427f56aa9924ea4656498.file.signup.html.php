<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-06 15:46:06
         compiled from "templates/signup.html" */ ?>
<?php /*%%SmartyHeaderCode:171523391554829bcc10a837-19282366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ed991be824c362b16b427f56aa9924ea4656498' => 
    array (
      0 => 'templates/signup.html',
      1 => 1417851962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171523391554829bcc10a837-19282366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54829bcc139074_09971720',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54829bcc139074_09971720')) {function content_54829bcc139074_09971720($_smarty_tpl) {?><!DOCTYPE html>
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
 src="/js/signup.js"><?php echo '</script'; ?>
>
</head>
<body ng-app="signupApp" class="ng-scope">
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
		<div ng-controller="validataionController" class="container-fluid">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">立即免费注册</div>
						<div class="panel-body">
							<form class="form-horizontal ng-pristine ng-valid" role="form" novalidate>
								<div class="form-group">
									<label for="inputEmail" class="col-sm-3 control-label">邮箱</label>
									<div class="col-sm-6">
									<input type="email" id="email" class="form-control ng-pristine ng-valid ng-valid-email" placeholder="邮箱" autocapitalize="off" ng-model="signupForm.email">
									<p ng-show="signupForm.email.$invalid && !signupForm.email.$pristine" class="help-block">邮箱无效
									.</p>
									</div>
								</div>
								<div class="form-group">
									<label for="inputUsername" class="col-sm-3 control-label">用户名</label>
									<div class="col-sm-6">
									<input type="text" id="name" class="form-control ng-pristine ng-valid" placeholder="用户名" ng-model="signupForm.username" ng-minlength="3" ng-maxlength="128">
									<p ng-show="signupForm.username.$error.minlength" class="help-block">用户名太短.</p>
        <p ng-show="signupForm.username.$error.maxlength" class="help-block">用户名太长.</p>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-3 control-label">密码</label>
									<div class="col-sm-6">
														<input type="password" class="form-control ng-pristine ng-valid" placeholder="密码" ng-model="signupForm.password">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-3 control-label">重复密码</label>
									<div class="col-sm-6">
											<input type="password" class="form-control ng-pristine ng-valid" placeholder="重复密码" ng-model="signupForm.passwordConfirmation">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-6">
										<div class="checkbox">
											<label> <input type="checkbox"> 我同意<a>用户协议</a>
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-3">
										<button type="submit" class="btn btn-default" ng-click="register()" ng-disabled="siggupForm.invalid">注册</button>
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
