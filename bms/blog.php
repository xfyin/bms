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
<body>
<div class="bms">
	<div class="head">
		<div class="index_top">
        	<ul>
				<li><? 
					ob_start();
					@session_start(); 
					echo '<a href="index.php?action=logout">注销</a>'
					?></li>    	
                <? 
				//注销登录
				if($_GET['action'] == "logout"){
					unset($_SESSION['user']);
					echo '注销成功！点击此处 <a href="login.php">登录</a>';
					exit;
				}
				?>
                <li><a href="myblog.php">写博客</a></li>
                <li><a href="manager.php">博客管理</a></li>
				<li><a href="login_index.php">首页</a></li>
                <li><span style="color:red;margin-right: 10px;">欢迎：<? echo $_SESSION['user']?></span></li>
			</ul>
        </div>
		<div style="height:98px;">
			<div style="text-align:center">
				<h2><? echo $_SESSION['user'].'的Blog'?></h2>
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
                                $content=substr($row['acontent'],0,60).'...';
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