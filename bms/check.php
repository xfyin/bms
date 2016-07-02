<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查看博客</title>
</head>
<style>
.con{
	height: 398px;
    width: 1218px;
	max-height:398px;
	max-width:1218px;
}
p{
	text-align:right;
	margin-right:100px;}
</style>
<script>
	function back(){
		window.location.href="manager.php";	
	}
</script>
<body>
<?
	require('conn.php');
	@session_start();
	$id=intval($_GET['id']);
	$sql="select * from bms_article where id=$id";
	$result=mysql_query($sql) or die('查询失败');
	$row=mysql_fetch_assoc($result);
?>
	<h2 align="center"><?=$row['atitle'] ?></h2>
    <div style="text-align:center">
    <p>作者:<?=$row['aauthor'] ?></p>
    <p>上传时间:<?=$row['adate'] ?></p>
    <textarea class="con"><?=$row['acontent']?></textarea>
    </div>
    <input style="margin: 14px 632px" type="button" value="返回" onclick="back();"/>
</body>
</html>