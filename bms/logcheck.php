<?
	header("Content-type: text/html; charset=utf-8"); 
	session_start();
	require('conn.php');
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from bms_user where uname='$username' and upwd='$password'";
	$result=mysql_query($sql);
	if(mysql_num_rows($result)==0){
		unset($_SESSION['user']);
		echo "<script>alert('您输入的用户名或密码不正确！');history.go(-1)</script>";
	}else{
		$_SESSION['user']=$username;	
		header('Location:login_index.php');
	}
?>
