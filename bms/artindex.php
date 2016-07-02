<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>最新文章</title>
</head>
<style>
p{margin: -0.3em  0;}
</style>
<body>
<?
	require('conn.php');
	$sql="select * from bms_article";
	$i=0;
	$result_ar=mysql_query($sql);
	while($rows=mysql_fetch_assoc($result_ar)){
		$i++;
	?>
	<p align="left"><a style="text-decoration:none" href="check.php?id=<?=$rows['id']?>">&nbsp;&nbsp;<?=$i.'.'.$rows['atitle'] ?></a></p>
	<p align="right">作者:<?=$rows['aauthor']?></p>
	<? }?>
</body>
</html>
