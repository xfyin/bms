<?
	header("Content-type: text/html; charset=utf-8"); 
	require('conn.php');
	@session_start();
	$id=intval($_GET['id']);
	$title=$_POST['title'];
	$content=$_POST['content'];
	$sql="update bms_article set atitle='$title',acontent='$content',adate=now() where id=$id";
	mysql_query($sql) or die('修改失败');
	echo "<script>alert('博客\"'+'$title'+'\"修改成功');location.href='manager.php';</script>";
?>