<?
	header("Content-type: text/html; charset=utf-8"); 
	@session_start();
	require('conn.php');
	$subject=$_POST['subject'];
	$editor=$_POST['editor'];
	$author=$_SESSION['user'];
	if($subject=="" || $editor==""){
		echo "<script>alert('主题和内容均不能为空！');history.go(-1);</script>";
	}else{
	$sql="insert into bms_article(atitle,acontent,aauthor,adate) values('$subject','$editor','$author',now())";	
	$result_ins=mysql_query($sql) or die("保存博客失败");
	if($result_ins){
		echo "<script>alert('保存成功,再来一篇..'); window.location.href='myblog.php';</script>";  	
	}else{
		echo "<script>alert('系统繁忙，请稍后重试！'); history.go(-1);</script>";  
		}	
	}
?>