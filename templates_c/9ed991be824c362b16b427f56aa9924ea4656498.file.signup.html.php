<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-09 22:06:35
         compiled from "templates/signup.html" */ ?>
<?php /*%%SmartyHeaderCode:171523391554829bcc10a837-19282366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ed991be824c362b16b427f56aa9924ea4656498' => 
    array (
      0 => 'templates/signup.html',
      1 => 1418122957,
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
 src="/js/validation.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/signup.js"><?php echo '</script'; ?>
>
</head>
<body ng-app="signupApp">
	<div>
		<!-- 导航栏 -->
		<!--  <nav class="navbar header" role="navigation">
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
		-->
		<div class="fullscreen_post_bg" style="background-image: url('/img/zhuce.jpg');">
        </div>
		<!-- 主体 -->
		
		<div ng-controller="signupController" class="container-fluid loginsignupbox">
			<div class="row">
			<div class="div-logo-mid">
			<a href="/index">
                <h3 class="logo-mid">
                </h3>
            </a>
            </div>
				<div class="col-sm-12">
							<form class="form-horizontal w5c-form"
								role="form" w5c-form-validate="vm.validateOptions"
								name="signupForm" novalidate>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="email" id="email" name="email"
											class="form-control"
											placeholder="请输入邮箱" ng-model="email" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
									<!-- w5c-unique-check="{url:''+username}" -->
										<input type="text" id="name" name="username"
											class="form-control"
											placeholder="请输入用户名" ng-model="username"
											ng-pattern="/^[A-Za-z]{1}[0-9A-Za-z_]{1,19}$/"
											 required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="password" name="password"
											class="form-control"
											placeholder="请输入密码" ng-minlength="5" ng-maxlength="15"
											ng-model="password" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="password" name="repeatpassword" w5c-repeat="password"
											class="form-control"
											placeholder="请确定密码" ng-model="repeatpassword"
											required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<div class="checkbox col-sm-12 boxcenter signuptext">
											<label> <input type="checkbox" name="agree" ng-model="agree" required> 我同意<a>用户协议</a>
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<button type="submit" class="btn btn-primary col-sm-12"
											w5c-form-submit="vm.saveEntity()">注册</button>
									</div>
								</div>
							</form>

				</div>
			</div>
		</div>
	</div>
	<!-- 整体 -->
</body>
</html><?php }} ?>
