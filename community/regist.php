<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="community-page" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RECO力可</title>
<link rel="stylesheet" href="../css/style.css" media="all" charset="utf-8" type="text/css" />
<link rel="stylesheet" href="../css/jquery.bxslider.css" media="all" charset="utf-8" type="text/css" />
<script type="text/javascript" src="../js/jquery-1.9.1.js" charset="utf-8" ></script>
<script type="text/javascript" src="../js/jquery.bxslider.min.js" charset="utf-8" ></script>
<script type="text/javascript" src="../js/style.js" charset="utf-8" ></script>

</head>

<body class="registPage">
	<div id="Wrapper">
		<div id="header">
			<div id="headerInner">
				<div id="head" class="clearfix">
					<h1 id="logo">
						<a href="/"><img src="../images/logo.png" width="150" height="57" alt="RECO" /></a>
					</h1>
					<div class="searchArea">
						<form name="search" method="get" action="?">
							<input type="text" placeholder="搜索音乐、话题或人..." value="" />
							<input type="image" value="确认" src="../images/icon/search_icon.png" width="21" />
						</form>
					</div>
					<div class="mainNavi">
						<ul class="clearfix">
							<li class="music"><a href="/">音乐</a></li>
							<li class="community"><a href="/community">社区</a>
								<span class="naviArrow">
									<img src="../images/icon/arrow.png" />
								</span>
						</li>
						</ul>
					</div>
					<div id="login">
						<a href="/community">已有账号登陆</a>
					</div>
				</div>
			</div>
		</div>
		<div id="content">
			<div id="contentInner">
				<div class="move">
					<a href="javascript:void(0)" class="moveTop">Top</a>
					<a href="javascript:void(0)" class="moveBottom">Bottom</a>
				</div>
				<div id="main">
					<div class="registWrap">
						<h1>欢迎加入我们</h1>
						<div class="registInner clearfix">
							<div class="fl">
								<form action="?" method="post" name="regist">
									<dl>
										<dt>
											您的邮箱
										</dt>
										<dd>
											<input type="text" name="username" value="" placeholder="用于登陆和找回密码" />
										</dd>
										<dt>
											设定密码 <span class="registError error">密码长度不足</span>
										</dt>
										<dd>
											<input type="password" name="pwd" value="" placeholder="4-20个字符，英文、符号或数字" maxlength="20" />
										</dd>
										<dt>
											你的昵称
										</dt>
										<dd>
											<input type="text" name="nickname" value="" placeholder="中英文均可" />
										</dd>
									</dl>
									<span class="codeError error">验证码输入有误</span>
									<div class="confirmCode">
										验证码：<input type="text" name="code" value="" /> <img src="../images/confirm_code.png" width="100" height="36" alt="验证码" /> <a href="javascript:void(0)" class="refreshCode">刷新</a>
									</div>
									<p><label><input type="checkbox" />我已阅读并接受</label>《<a href="#">使用协议</a>》</p>
									<input type="submit" value="立即注册" class="registNow" />
								</form>
							</div>
							<div class="fr socialRegist">
								<h2>使用合作网站账号登陆</h2>
								<ul class="clearfix">
									<li class="sina"><a href="#">新浪微博</a></li>
									<li class="renren"><a href="#">人人网</a></li>
									<li class="qq"><a href="#">QQ</a></li>
									<li class="baidu"><a href="#">百度</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		<div id="footer">
			<div id="footerInner">
				<div class="outLink">
					<p><a href="#">关于我们</a> - <a href="#">合作伙伴</a> - <a href="#">版权声明</a> - <a href="#">合作网站</a> - <a href="#">用户协议</a> - <a href="#">帮助中心</a></p>
				</div>
				<p class="copyright">沪ICP备12048358号<br /><a href="http://www.reco.cn">www.reco.cn</a></p>
			</div>
		</div>
	</div>
</body>
</html>