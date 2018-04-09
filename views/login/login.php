
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập | Hệ thống Zentgroup</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="views/login/js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="views/login/css/bootstrap.min.css">
	<script type="text/javascript" src="views/login/js/bootstrap.min.js"></script>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="views/login/css/font-awesome.min.css">
	<link href="https://zent.edu.vn/icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="https://zent.edu.vn/icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed" sizes="57x57">
    <link href="https://zent.edu.vn/img/favicon.ico" rel="shortcut icon">
	<style>
		/*login*/
		/*@import url(http://fonts.googleapis.com/css?family=Roboto:400);*/
		body {
		  background-color:#fff;
		  -webkit-font-smoothing: antialiased;
		  font: normal 14px Roboto,arial,sans-serif;
		}

		.container {
		    padding: 18.7px;
		}

		.form-login {
		    background-color: #EDEDED;
		    padding-top: 10px;
		    padding-bottom: 20px;
		    padding-left: 20px;
		    padding-right: 20px;
		    border-radius: 15px;
		    border-color:#d2d2d2;
		    border-width: 5px;
		    box-shadow:0 1px 0 #cfcfcf;
		}

		h4 { 

		 padding-bottom:50px;
		 text-align: center;
		}

		.form-control {
		    margin-bottom: 10px;
		}

		.login {
		    background: url(http://i.imgur.com/GRDHVHT.jpg);
		    background-size: cover;
		}
		.login .logo {
		    margin: 60px auto 0;
		    padding: 15px;
		    text-align: center;
		}
		.login .form-login .form-title {
		    font-weight: 300;
		    margin-bottom: 25px;
		}
		.login .form-login h3 {
		    color: #4db3a5;
		    text-align: center;
		    font-size: 28px;
		    font-weight: 400!important;
		}
		.font-green {
		    color: #32c5d2!important;
		}
		.login .wrapper .form-actions {
		    clear: both;
		    border: 0;
		    padding: 25px 30px;
		    margin-left: -30px;
		    margin-right: -30px;
		}
		.login .wrapper .form-actions .btn {
		    margin-top: 1px;
		    font-weight: 600;
		    padding: 10px 20px!important;
		}
		.btn.green:not(.btn-outline) {
		    color: #FFF;
		    background-color: #32c5d2;
		    border-color: #32c5d2;
		}
		.btn:not(.btn-sm):not(.btn-lg) {
		    line-height: 1.44;
		}
		label {
		    display: inline-block;
		    margin-bottom: 5px;
		}
		.img-responsive, .img-thumbnail, .table, label {
		    max-width: 100%;
		}
		.login .wrapper .forget-password {
		    font-size: 14px;
		    float: right;
		    display: inline-block;
		    margin-top: 10px;
		}
		a {
		    text-shadow: none;
		    color: #337ab7;
		    text-decoration: none;
		}
		div.checker input {
		    opacity: 0;
		    filter: alpha(opacity=0);
		    -moz-opacity: 0;
		    border: none;
		    background: none;
		    display: -moz-inline-box;
		    display: inline-block;
		    zoom: 1;
		}
		div.checker, div.checker span, div.checker input {
		    width: 19px;
		    height: 19px;
		}
		.checker input, .radio input {
		    outline: 0!important;
		}
		.login .copyright {
		    text-align: center;
		    margin: 0 auto 30px 0;
		    padding: 10px;
		    color: white;
		    font-size: 13px;
		}
		.logo-1{
			padding: 29.5px;
		}
	</style>
</head>
<body>
	<form action="?mod=login&act=login" method="POST">
		
		<div class="login">
			<div class="container">
				<div class="logo">
		        	<img src="https://zent.edu.vn/assets/layouts/layout/img/logo-big.png" alt="" /> </a>
		      	</div>
			</div>
			<div class="container">
		    	<div class="row">
			        <div class="col-md-offset-4 col-md-4">
			            <div class="form-login">
				            <h3 class="form-title font-green">Đăng Nhập</h3>
				            <input type="text" id="user" name="user" class="form-control " placeholder=" "/>
				            <?php 
								if(isset($_COOKIE['error2'])){
							 ?>
							 		<h5 style="width: 100%;color: red;"><?php echo $_COOKIE['error2']; ?></h5>
							 <?php } ?>
							 <?php 
								if(isset($_COOKIE['error1'])){
							 ?>
					 			<h5  style="width: 100%;color: red;"><?php echo $_COOKIE['error1']; ?></h5>
					 		<?php } ?>
				            <input type="password" id="Password" name="password" class="form-control " placeholder="" />
				            <?php 
								if(isset($_COOKIE['error3'])){
							 ?>
							 		<h5 style="width: 100%;color: red;"><?php echo $_COOKIE['error3']; ?></h5>
							 <?php } ?>
				            </br>
				            <div class="wrapper">
					            <div class="form-actions">
					                <button type="submit" name="submit" class="btn green uppercase">Đăng Nhập</button>
					                <label class="rememberme check">
					                <input type="checkbox" name="remember" value="1" />Ghi nhớ</label>
					                <a href="#" id="forget-password" class="forget-password">Quên mật khẩu?</a>
					            </div>
				            </div>
			            </div>
			        </div>
		        </div>
		    </div>
		    <div class="copyright"> 2018 © ZentGroup. </div>
		    <div class="container">
				<div class="logo-1">
		        	<!-- <a href="https://zent.edu.vn/students/dashboard">
		        	<img src="https://zent.edu.vn/assets/layouts/layout/img/logo-big.png" alt="" /> </a> -->
		      	</div>
			</div>
		</div>
	</form>
</body>
</html>
