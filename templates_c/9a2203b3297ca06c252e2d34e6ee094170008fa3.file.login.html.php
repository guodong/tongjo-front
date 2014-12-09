<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-09 22:06:28
         compiled from "templates/login.html" */ ?>
<?php /*%%SmartyHeaderCode:12104570485481614ecd0864-40038846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a2203b3297ca06c252e2d34e6ee094170008fa3' => 
    array (
      0 => 'templates/login.html',
      1 => 1418122971,
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
<body ng-app="loginApp">
	<div>
	<!-- 导航栏 -->
	   <!--  
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
		-->
		<div class="fullscreen_post_bg" style="background-image: url('/img/denglu.jpg');">
        </div>
		<!-- 主体 -->		
		<div ng-controller="loginController" class="container-fluid loginsignupbox">
			<div class="row">
			<div class="div-logo-mid">
			<a href="/index">
                <h3 class="logo-mid">
                </h3>
            </a>
            </div>
				<div class="col-sm-12">
							<form class="form-horizontal w5c-form" role="form"
							w5c-form-validate="vm.validateOptions"
								name="loginForm" novalidate >
								<div class="form-group">
									<div class="col-sm-12">
										<input type="text" class="form-control" name="username"
											placeholder="请输入用户名或邮箱"  ng-model="username" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="password" class="form-control" name="password"
											placeholder="请输入密码"  ng-model="password" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12 boxcenter">
										<div class="checkbox boxtext">
											<label> <input type="checkbox"> 记住我
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<button type="submit" class="btn btn-primary col-sm-12" w5c-form-submit="vm.saveEntity()">登录</button>
									</div>
								</div>
							</form>
				</div>
		    <div>
            <div class="col-sm-5 col-sm-offset-1"><a  class = "logina" href="">找回密码</a></div>
            <div class="col-sm-5 col-sm-offset-1"><a  class = "logina" href="/signup">快速注册</a></div>
            </div>
			</div>
          
		</div>
	</div><!-- 整体 -->
</body>
</html><?php }} ?>
