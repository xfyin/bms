<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<link href="css/register.css" rel="stylesheet" type="text/css"/>  
<link href="css/calendar.css" rel="stylesheet" type="text/css"/>
<body">
<div class="bms" style="height:550px;margin-top:30px">
	<div style="float:left;">
		<image  src="images/blog_login.jpeg"/>
	</div>
	<div style="position:relative;float:right">
		<form class="login" method="post" action="logcheck.php">
			<h3>账号登录</h3>
			<br/>
			<table class="login_style">
				<tr >
					<td class="format">
						<label>用户名:</label>
					</td>
					<td class="format2" style="vertical-align:middle">
						<input type="text"  name="username" placeholder="请输入您的用户名"/>
					</td>
				</tr>
				</br>
				<tr>
					<td class="format" >
						<label>密&nbsp;&nbsp;码: </label>
					</td>
					<td class="format2" style="vertical-align:middle">
						<input type="password" name="password" placeholder="请输入密码"/>
					</td>
				</tr>
			</table>
			<div class="bottom">
				
				<a href="register.php" rel="register" class="linkform">还没有账户？点这里注册</a>
				<input type="submit"  value="登录" "/>
			<div class="clear"></div>
			</div>
		</form>
	</div>
</div>
<?
require('foot.php');
?>
</body>
</html>