<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<script type="text/javascript" src="js/checkCode.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<link href="css/register.css" rel="stylesheet" type="text/css"/>  
<link href="css/calendar.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript"> 
var $ = function(id) {
	return "string" == typeof id ? document.getElementById(id) : id;
};
var Class = {
	create : function() {
		return function() {
			this.initialize.apply(this, arguments);
		}
	}
}
Object.extend = function(destination, source) {
	for ( var property in source) {
		destination[property] = source[property];
	}
	return destination;
}
var Calendar = Class.create();
Calendar.prototype = {
	initialize : function(container, options) {
		this.Container = $(container);// table结构容器
		this.Days = [];// 日期列表
		this.SetOptions(options);
		this.Year = this.options.Year;
		this.Month = this.options.Month;
		this.SelectDay = this.options.SelectDay ? new Date(
				this.options.SelectDay) : null;
		this.onSelectDay = this.options.onSelectDay;
		this.onToday = this.options.onToday;
		this.onFinish = this.options.onFinish;
		this.Draw();
	},

	SetOptions : function(options) {
		this.options = {// 默认值
			Year : new Date().getFullYear(),
			Month : new Date().getMonth() + 1,
			SelectDay : null,// 选择日期
			onSelectDay : function() {
			},
			onToday : function() {
			},
			onFinish : function() {
			}
		};
		Object.extend(this.options, options || {});
	},
	// 上月
	PreMonth : function() {
		// 取得上月日期对象
		var d = new Date(this.Year, this.Month - 2, 1);
		// 设置属性
		this.Year = d.getFullYear();
		this.Month = d.getMonth() + 1;
		// 重绘日历
		this.Draw();
	},
	// 下一个月
	NextMonth : function() {
		var d = new Date(this.Year, this.Month, 1);
		this.Year = d.getFullYear();
		this.Month = d.getMonth() + 1;
		this.Draw();
	},

	Draw : function() {
		// 保存日期列表
		var arr = [];
		// 用当月第一天在一周中的日期值作为当月离第一天的天数
		for ( var i = 1, firstDay = new Date(this.Year, this.Month - 1, 1)
				.getDay(); i <= firstDay; i++) {
			arr.push(" ");
		}
		// 用当月最后一天在一个月中的日期值作为当月的天数
		for ( var i = 1, monthDay = new Date(this.Year, this.Month, 0)
				.getDate(); i <= monthDay; i++) {
			arr.push(i);
		}
		// /
		var frag = document.createDocumentFragment();
		this.Days = [];
		while (arr.length > 0) {
			// 每个星期插入一个tr
			var row = document.createElement("tr");
			// 星期
			for ( var i = 1; i <= 7; i++) {
				var cell = document.createElement("td");
				cell.innerHTML = " ";
				if (arr.length > 0) {
					var d = arr.shift();
					cell.innerHTML = d;
					if (d > 0) {
						this.Days[d] = cell;
						// 获取今日
						if (this.IsSame(new Date(this.Year, this.Month - 1, d),
								new Date())) {
							this.onToday(cell);
						}
						// 判断用户是否作了选择
						if (this.SelectDay
								&& this.IsSame(new Date(this.Year,
										this.Month - 1, d), this.SelectDay)) {
							this.onSelectDay(cell);
						}
					}
				}
				row.appendChild(cell);
			}
			frag.appendChild(row);
		}
		// 此先清空然后再插入(ie的table不能用innerHTML)
		while (this.Container.hasChildNodes()) {
			this.Container.removeChild(this.Container.firstChild);
		}
		this.Container.appendChild(frag);
		this.onFinish();
	},
	// 判断是否同一日
	IsSame : function(d1, d2) {
		return (d1.getFullYear() == d2.getFullYear()
				&& d1.getMonth() == d2.getMonth() && d1.getDate() == d2
				.getDate());
	}
};
</script>
<body>
<div class="bms">
	<div class="head">
		<div class="index_top">
			<ul>
          	  <? 
			  	ob_start();
				@session_start();
				//注销登录
				if($_GET['action'] == "logout"){
					unset($_SESSION['user']);
					session_unset();
					echo '注销登录成功！点击此处 <a href="login.php">登录</a>';
					exit;
				}
				?>
				<li><? echo '<a href="index.php?action=logout">注销</a>'?></li>    	
                
				<li><a href="myblog.php">写博客</a></li>
                <li><a href="manager.php">管理博客</a><li>
				<li><a href="blog.php">博客列表</a></li>
                <li style="color:red;margin-right: 10px;">
                <? 
					if(isset($_SESSION['user'])){
						echo"欢迎您,".$_SESSION['user'];
					}else{
						echo "未登录用户不允许访问！";		
					}
				?>
                </li>
			</ul>
		</div>
		<div style="height:98px">
			<div style="text-align:center">
				<h1><? echo $_SESSION['user'].'的博客'?></h1>
			</div>
		</div>
	</div>
	<div>
		<table>
			<tr>
				<td width="236px" height="501px" align="center">
					<div class="Calendar"> 
						<div id="idCalendarPre">&lt;&lt;</div> 
						<div id="idCalendarNext">&gt;&gt;</div> 
						<span id="idCalendarYear">2008</span>年 <span id="idCalendarMonth">8</span>月 
						<table cellspacing="0"> 
							<thead> 
								<tr> 
									<td>日</td> 
									<td>一</td> 
									<td>二</td> 
									<td>三</td> 
									<td>四</td> 
									<td>五</td> 
									<td>六</td> 
								</tr> 
							</thead> 
							<tbody id="idCalendar"> 
							</tbody> 
						</table> 
					</div> 
					<div  style="height:60%">
						<h4>最新文章</h4>
                        <? require('artindex.php');?>
					</div>
				</td>
				<td width="714px" height="501px">
					<div class="notice">
						<image src="images/laba.jpeg">&nbsp;最新公告
					</div>
					<div style="height:467px;width:100%;background:#FFFFE0 " >
						<marquee onmouseover=this.stop() onmouseout=this.start() scrollmount=2 scrolldelay=7 direction=up>
							<? require('notindex.php');?>
						</marquee>
					</div>
				</td>
			</tr>
		</table>
	</div>
<?
require('foot.php');
?>
<script language="JavaScript"> 
var cale = new Calendar(
		"idCalendar",
		{
			SelectDay : new Date().setDate(10),
			onSelectDay : function(o) {
				o.className = "onSelect";
			},
			onToday : function(o) {
				o.className = "onToday";
			},
			onFinish : function() {
				$("idCalendarYear").innerHTML = this.Year;
				$("idCalendarMonth").innerHTML = this.Month;
				var flag = [ 10, 15, 20 ];
				for ( var i = 0, len = flag.length; i < len; i++) {
					this.Days[flag[i]].innerHTML = "<a href='javascript:void(0);' onclick=\"alert('您选择的日期是："
							+ this.Year
							+ "/"
							+ this.Month
							+ "/"
							+ flag[i]
							+ "');return false;\">" + flag[i] + "</a>";
				}
			}
		});
$("idCalendarPre").onclick = function() {
	cale.PreMonth();
}
$("idCalendarNext").onclick = function() {
	cale.NextMonth();
} 
</script>	
</body>
</html>