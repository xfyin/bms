<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>博客列表</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<script type="text/javascript" src="js/checkCode.js"></script>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link href="css/myblog.css" rel="stylesheet" type="text/css"/>  
<link href="css/register.css" rel="stylesheet" type="text/css"/>  
<link href="css/calendar.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-combined.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
<script>	
	function writeblog(){		
	<?
		if($_SESSION['user'] == ""){
			echo "alert('请您先登录！');";
		}else{
			echo "window.location.href='myblog.php';";	
		}
	?>
	}	
	function managerblog(){
		<?
		if($_SESSION['user'] == ""){
			echo "alert('请您先登录！');";
		}else{
			echo "window.location.href='myblog.php';";	
		}
	?>
	}	
	function blog(){
		<?
		if($_SESSION['user'] == ""){
			echo "window.location.href='blogout.php';";
		}else{
			echo "window.location.href='blog.php';";	
		}
	?>
	}
</script>
<body>
<div class="bms">
	<div class="head">
		<div class="index_top">
        	<ul>
            	<li><a href="register.php">注册</a>|<a href="login.php">登录</a></li>
                <li><? @session_start(); echo "<a href='javascript:void(0);' onClick='writeblog();'>写博客</a>";?></li>
                <li><? @session_start(); echo "<a href='javascript:void(0);' onClick='managerblog();'>管理博客</a>";?></li>
				<li><a href="index.php">首页</a></li>
			</ul>
        </div>
		<div style="height:98px;">
			<div style="text-align:center">
				<h2>篇篇博客，点滴生活</h2>
			</div>
		</div>
	</div>
	<div class="my_content">
			
            	<div style="padding:10px">
            	<form method="get" action="search.php">
                	<div>
                    查找文章：请输入关键字<input name="keyword" type="text">
                    <select style="width:67px" name="sel">
                    	<option value="atitle">标题</option>
                        <option value="acontent">内容</option>
                    </select>
                    <input type="submit" value="搜索"></input>
             		</div>
                    <div>
						<?
                            require('conn.php');
							$author=$_SESSION['user'];
                            $result=mysql_query("select * from bms_article",$conn);
                        ?>
                        <table border="1" width="95%"  align="center">
                            <tr bgcolor="#e0e0e0" >
                                <th width="220px">标题</th><th>内容</th><th>作者</th><th width="160px">上传时间</th>
                            </tr>
                            <? while($row=mysql_fetch_assoc($result)){
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
               		</div>	  
               </form>
          </div>
	</div>
</div>	
<?
require('foot.php');
?>
</body>
</html>