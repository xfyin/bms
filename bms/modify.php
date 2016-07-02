<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改博客</title>
<script>
	function back(){
		window.location.href="manager.php";	
	}
</script>
</head>
	<?  
	require('conn.php');
	$id=intval($_GET['id']);
	$sql="select * from bms_article where id=$id";
	$result=mysql_query($sql,$conn);
	$row=mysql_fetch_assoc($result);
	?>
	<h2 align="center">修改博客</h2>
	<form method="post" action="modcheck.php?id=<?=$row['id']?>">
		<table width="95%" align="center" border="1" cellpadding="2">
			<tr><td>标题:</td><td width="10%"><input style="width:100%;font-size:18px" type="text" name="title" value="<?=$row['atitle']?>"></td></tr>
			<tr height="439px"><td>内容:</td><td width="90%" align="center"><textarea  style="height:439px;width:1186px"  name="content" ><?=$row['acontent']?>	</textarea></td></tr>
			<tr><td colspan="2" width="95%" align="center"><input type="submit" style="margin-right: 26px;" name="submit" value="提交"><input type="button" onclick="back();" value="返回"></td></tr>
		</table>
	</form>
<body>
</body>
</html>
