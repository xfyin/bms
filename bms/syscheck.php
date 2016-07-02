<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>公告</title>
</head>
<style>
.conn{
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
		window.history.go(-1);
	}
</script>
<body>
<?
	require('conn.php');
	@session_start();
	$id=intval($_GET['id']);
	$sql="select * from bms_notice where id=$id";
	$result=mysql_query($sql) or die('查询失败');
	$row=mysql_fetch_assoc($result);
?>
	<h2 align="center"><?=$row['ntitle'] ?></h2>
    <div style="text-align:center">
    <p>发布时间:<?=$row['ntime'] ?></p>
    <textarea class="conn"><?=$row['ncontent']?></textarea>
    </div>
    <input style="margin: 14px 632px" type="button" value="返回" onclick="back();"/>
</body>
</html>
