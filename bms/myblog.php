<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>写博客</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link href="css/myblog.css" rel="stylesheet" type="text/css"/>  
<link href="css/register.css" rel="stylesheet" type="text/css"/>  
<link href="css/bootstrap-combined.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
<script>
$(function() {
	$('#editControls a').click(function(e) {
		switch($(this).data('role')) {
			case 'h1':
			case 'h2':
			case 'p':
				document.execCommand('formatBlock', false, '<' + $(this).data('role') + '>');
				break;
			default:
				document.execCommand($(this).data('role'), false, null);
				break;
		}			
	})
});
function blog_reset(){
	document.getElementById("newblog").reset();
};
function subject(){
	var subject=document.getElementById("subject").value;
	if(subject.length=="0"){		
		alert("主题未填写！");		
	}
}
</script>
<body>
<div class="bms">
	<div class="head">
		<div class="index_top">
			<ul>
				<li><? 
					ob_start();
					@session_start(); 
					echo '<a href="index.php?action=logout">注销</a>'?></li>    		
                <? 
				//注销登录
				if($_GET['action'] == "logout"){
					unset($_SESSION['user']);
					echo '注销登录成功！点击此处 <a href="login.php">登录</a>';
					exit;
				}
				?>				
				<li><a href="manager.php">博客管理</a></li>	
                <li><a href="blog.php">博客列表</a></li>	
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
		<form id="newblog" action="blogcheck.php" method="post">
			<div>
				<table class="new_blog">
					<tr>
						<td class="mybolg">主题：</td>
						<td class="mybolg2"><input type="text" id="subject" name="subject" onblur="subject();"></td>
						<td><span id="null_sub" class="null_sub">请填写主题</span></td>
					</tr>
					<tr>
						<td class="mybolg">内容：</td>
						<td>
							<div class="content">
								<div class="container-fluid">
									<div id='pad-wrapper'>
										<div id="editparent">
											<div id='editControls' class='span9	' style=' padding:5px;'>
												<div class='btn-group'>
													<a class='btn' data-role='undo' href='#'><i class='icon-undo'></i></a>
													<a class='btn' data-role='redo' href='#'><i class='icon-repeat'></i></a>
												</div> 
												<div class='btn-group'>
													<a class='btn' data-role='bold' href='#'><b>Bold</b></a>
													<a class='btn' data-role='italic' href='#'><em>Italic</em></a>
													<a class='btn' data-role='underline' href='#'><u><b>U</b></u></a>
													<a class='btn' data-role='strikeThrough' href='#'><strike>abc</strike></a>
												</div>
												<div class='btn-group'>
													<a class='btn' data-role='justifyLeft' href='#'><i class='icon-align-left'></i></a>
													<a class='btn' data-role='justifyCenter' href='#'><i class='icon-align-center'></i></a>
													<a class='btn' data-role='justifyRight' href='#'><i class='icon-align-right'></i></a>
													<a class='btn' data-role='justifyFull' href='#'><i class='icon-align-justify'></i></a>
												</div>
												<div class='btn-group'>
													<a class='btn' data-role='indent' href='#'><i class='icon-indent-right'></i></a>
													<a class='btn' data-role='outdent' href='#'><i class='icon-indent-left'></i></a>
												</div>
												<div class='btn-group'>
													<a class='btn' data-role='insertUnorderedList' href='#'><i class='icon-list-ul'></i></a>
													<a class='btn' data-role='insertOrderedList' href='#'><i class='icon-list-ol'></i></a>
												</div>
												<div class='btn-group'>
													<a class='btn' data-role='h1' href='#'>h<sup>1</sup></a>
													<a class='btn' data-role='h2' href='#'>h<sup>2</sup></a>
													<a class='btn' data-role='p' href='#'>p</a>
												</div>
												<div class='btn-group'>
													<a class='btn' data-role='subscript' href='#'><i class='icon-subscript'></i></a>
													<a class='btn' data-role='superscript' href='#'><i class='icon-superscript'></i></a>
												</div>
											</div>
											<div  class='span8' style='' contenteditable>
                                            	<textarea  name="editor" class='content_editor'></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>					
				</table>
			</div>
            <div class="new_blog_bottom">
				<input type="submit" value="提交" onclick="blog_submit();">&nbsp;&nbsp;
				<input type="button" value="重写" onclick="blog_reset();">					
			</div>
		</form>
	</div>	
</div>	
<?
require('foot.php');
?>
</body>
</html>