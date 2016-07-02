<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/register.css" rel="stylesheet" type="text/css"/>  
<title>搜索博客</title>
</head>
<? 	@session_start(); ?>
<script>
function back(){
	window.history.go(-1);
	}
</script>
<body>
<div class="head">
 	
</div>
<h2 align="center">查询结果</h2>
<?
	require('conn.php');
	$keyword=trim($_GET['keyword']);
	$sel=$_GET['sel'];
	$sql="select * from bms_article ";
	if(trim($keyword)==""){
		echo "<script>alert('请输入关键字查询');history.go(-1)</script>";
	}else{
		$sql=$sql." where $sel like '%$keyword%'";
		$rs=mysql_query($sql) or die("执行失败");
		if(mysql_num_rows($rs) >0){
			echo "<p style=' margin-left: 35px'>关键字:'<span style='color:red'>$keyword</span>',共为您找到<span style='color:red'>".mysql_num_rows($rs)."</span>篇博客'</p>";
			?>
        <table border="1" width="95%"  align="center">
                        <tr bgcolor="#e0e0e0" >
                            <th width="280px">标题</th><th>内容</th><th>作者</th><th width="160px">上传时间</th>
                        </tr>
                        <? while($row=mysql_fetch_assoc($rs)){
                            $content=substr($row['acontent'],0,60)."...";
                        ?>
                        <tr align="center">
                        <td><a href="check.php?id=<?=$row['id']?>"><?=$row['atitle'] ?></a></td>
                        <td><?=$content?></td>
                        <td><?=$row['aauthor']?></td>
                        <td><?=$row['adate'] ?></td>
                        </tr>			
                        <?} ?>
          </table>
		<? }else{
        	echo "没有搜索到任何博客<br>";
			echo "<input style='width:46px' type='button' value='返回' onclick='back()'/>";
        }
	}
?>

</body>
</html>
