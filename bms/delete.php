<?
	header("Content-type: text/html; charset=utf-8"); 
	require('conn.php');
	$id=intval($_GET['id']);
	$sql="delete from bms_article where id=$id";
	if(mysql_query($sql) && mysql_affected_rows()==1){
		echo "<script>alert('删除成功！');location.href='manager.php'</script>";
	}else{
		echo "<script>alert('删除失败！');location.href='manager.php'</script>";
	}
?>