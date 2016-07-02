<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>公告</title>
</head>
<body>
<? 
	require('conn.php');
	$sql="select * from bms_notice";
	$i=0;
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result)){
		$i++;
	?>
	<p style="margin:10px 54px"><a href="syscheck.php?id=<?=$row['id']?>">[<?=$row['ntype'] ?>]&nbsp;&nbsp;<?=$i.'.'.$row['ntitle'] ?>&nbsp;&nbsp;<?=$row['ntime'] ?></a></p>
	<? }?>
</body>
</html>
