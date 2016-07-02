<?		
	header("Content-type: text/html; charset=utf-8"); 
	if(isset($_POST['submit']) && $_POST['submit'] == '注册')
	{
		$realname=$_POST["realname"];
		$username=$_POST["username"];
		$pwd=$_POST["pwd"];
		$pwd1=$_POST["pwd1"];
		$sex=$_POST["sex"];
		$b_year=$_POST["b_year"];
		$b_month=$_POST["b_month"];
		$b_day=$_POST["b_day"];
		$birthday=$b_year."-".$b_month."-".$b_day;
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$ip=$_SERVER['REMOTE_ADDR'];	
		if($realname == "" || $username == "" || $pwd == "" || $b_year =="0000" || $b_month=="00" ||$b_day=="00")
		{
			  echo "<script>alert('有必填项未填写！'); history.go(-1);</script>";  
		}
		else
		{
			if($pwd == $pwd1){
			require('conn.php');
			$sql="select * from bms_user where uname='$username'";
			$result=mysql_query($sql) or die('执行失败！');
			if(mysql_num_rows($result)>0)
			{
		 		 echo "<script>alert('该用户名已经被注册，请更换！');history.go(-1);</script>";
			}
			else
			{
				$sql_ins="insert into bms_user(urealname,uname,ugender,upwd,ubirthday,umail,uphone,uip,udate) values('$realname','$username','$sex','$pwd','$birthday','$email','$phone','$ip',now())";
				$result_ins=mysql_query($sql_ins) or die('执行失败');
				if($result_ins){
					echo "<script>alert('注册成功！点击‘确认’跳转到登录页面..'); window.location.href='login.php';</script>";  
				}
				else
				{
					echo "<script>alert('系统繁忙，请稍后重试！'); history.go(-1);</script>";  
					}
				}	
		}
		else
		{
			echo "<script>alert('两次密码不一致！');history.go(-1);</script>";  
			}
		}
	}
	else
	{
		 echo "<script>alert('提交失败！'); history.go(-1);</script>";  
	}
?>