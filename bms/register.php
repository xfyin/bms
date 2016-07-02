<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<title>注册MBlog</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<script type="text/javascript" src="js/checkCode.js"></script> 
<link href="css/register.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/birthday.js"></script>
<script type="text/javascript">
$(function(){ 
    $.ms_DatePicker({ 
            YearSelector: ".sel_year", 
            MonthSelector: ".sel_month", 
            DaySelector: ".sel_day" 
    }); 
});
function valpwd(){
	var pwd=document.getElementById("pwd").value;
	var reg=/^[A-Za-z0-9]+$/;
	if(!reg.test(pwd) || pwd.length<6 || pwd.length>12){
		alert("密码必须为6-12位的数字和字母的组合");
		return false;
	}
}
function formReset(){
	document.getElementById("regester").reset();
}
</script>
<body>
<div class="bms">
	<div class="head">
		<div class="index_top">
			<ul>
				<li><a href="login.php">登录</a></li>
				<li><a href="myblog.php">写博客</a></li>
				<li><a href="blog.php">博客列表</a></li>
				<li><a href="index.php">首页</a></li>
			</ul>
		</div>
		<div>
			<div style="float:left;margin:auto auto;">
				<image src="images/logo.jpg">
			</div>
			<div style="text-align:center">
				<h2>Blog</h2>
			</div>
		</div>
	</div>
	<div class="regeste0"> 
		<div class="reg_head">
			<span style="color:red">*</span>&nbsp;必填内容
		</div>
		<div>
			<form id="regester" action="regcheck.php" method="post">
				<table height="501px">
					<tr>
						<td class="reg"><span style="color:red">*</span>真实姓名</td>
						<td class="reg_put"><input type="text" onblur="realname();" id="realname" name="realname" placeholder="注册后不可更改"></td>
						<td></td>
					</tr>
					<tr>
						<td class="reg"><span style="color:red">*</span>用户名</td>
						<td class="reg_put"><input type="text" id="username" name="username" placeholder="昵称"></td>
					</tr>
					<tr>
						<td class="reg">性别</td>
						<td class="reg_put">
							<input class="sex" type="radio" name="sex" id="male" value="1" checked="checked"><label for="male">男</label>
							<input class="sex" type="radio" name="sex" id="female" value="0"><label for="female">女</label>
							<input class="sex" type="radio" name="sex" id="nomale" value="2"><label for="nomale">O</label>
						</td>
					</tr>
					<tr>
						<td class="reg"><span style="color:red">*</span>密码</td>
						<td class="reg_put"><input type="password" onblur="valpwd();" id="pwd" name="pwd" placeholder="请输入6~12位的数字、字母组合"></td>
					</tr>
					<tr>
						<td class="reg"><span style="color:red">*</span>确认密码</td>
						<td class="reg_put"><input type="password" id="pwd1" name="pwd1" placeholder="请重复上述密码"></td>
					</tr>
					<tr>
						<td class="reg"><span style="color:red">*</span>出生日期</td>
						<td class="reg_put">
							<select class="sel_year" name="b_year" rel="-"> </select>&nbsp;年 
							<select class="sel_month" name="b_month" rel="-"> </select>&nbsp;月 
							<select class="sel_day" name="b_day" rel="-"> </select>&nbsp;日 
						</td>
					</tr>
					<tr>
						<td class="reg">Email</td>
						<td class="reg_put"><input type="text" id="email" name="email"></td>
					</tr>
					<tr>
						<td class="reg">手机号</td>
						<td class="reg_put"><input type="text" id="phone" name="phone"></td>
					</tr>
				</table>
                <div class="reg_bottom">
					<input type="submit" name="submit" value="注册" onClick="register();" >&nbsp;&nbsp;
					<input type="button" value="重置" onClick="formReset();">					
				</div>	
			</form>
		</div>
	</div>
</div>
<?
require('foot.php');
?>
</body>
</html>