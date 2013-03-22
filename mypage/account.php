<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RECO力可</title>
<link rel="stylesheet" href="../css/style.css" media="all" charset="utf-8" type="text/css" />
<script type="text/javascript" src="../js/jquery-1.9.1.js" charset="utf-8" ></script>
<script type="text/javascript" src="../js/jquery.bxslider.min.js" charset="utf-8" ></script>
<script type="text/javascript" src="../js/style.js" charset="utf-8" ></script>

</head>

<body class="accountPage">
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
							<li class="music current"><a href="/">音乐</a>
								<span class="naviArrow">
									<img src="../images/icon/arrow.png" />
								</span>
							</li>
							<li class="community">
								<a href="/community">社区</a>
								<span class="naviArrow">
									<img src="../images/icon/arrow.png" />
								</span>
							</li>
						</ul>
					</div>
					<div id="myAccountTool">
						<div class="cart">
							<a class="myCart" href="/mypage/mycart.php"><img src="../images/icon/sample_avatar_small.png" width="24" height="24" alt="购物车" title="购物车" /></a>
						</div>
						<div class="myMail">
							<a class="myMailOpen" href="javascript:void(0)"><img src="../images/icon/sample_avatar_small.png" width="24" height="24" alt="消息" title="信息中心" /></a>
							<ul>
								<li class="separat"><a href="#">全部信息</a></li>
								<li class="atDiary"><a href="#">@我的日记 </a><span class="count">2</span></li>
								<li class="atReply"><a href="#">@我的评论 </a><span class="count"></span></li>
								<li class="mail"><a href="#">私信 </a><span class="count">3</span></li>
								<li class="reply"><a href="#">收到的评论 </a><span class="count"></span></li>
								<li class="sendReply"><a href="#">发出的评论 </a></li>
								<li class="likeMe"><a href="#">喜欢我的</a></li>
								<li class="reprint"><a href="#">转载</a></li>
								<li class="msg"><a href="#">通知 </a><span class="count">1</span></li>
							</ul>
						</div>
						<div class="myLink">
							<a class="myLinkOpen" href="javascript:void(0)"><img src="../images/icon/sample_avatar_small.png" width="24" height="24" alt="用户名" title="用户名" /></a>
							<ul>
								<li><a href="#">我的页面</a></li>
								<li><a href="/mypage/account.php">我的账户</a></li>
								<li class="separat"><a href="#">设置中心</a></li>
								<li><a href="#">退出</a></li>
							</ul>
						</div>
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
				<div id="topNavi">
					<div class="topNaviInner">
						
						<ul class="clearfix">
							<li class=""><a href="javascript:void(0);">首页</a></li>
							<li><a href="javascript:void(0);">排行榜</a></li>
							<li><a href="javascript:void(0);">分类浏览</a></li>
							<li><a href="javascript:void(0);">我的音乐</a></li>
							<li><a href="javascript:void(0);">管理</a></li>
						</ul>
					</div>
				</div>
				<div id="main">					
					<div class="myAccount">
						<h2>账户</h2>
						<ul class="clearfix">
							<li class="current"><a href="/mypage/account.php">我的账户</a></li>
							<li class=""><a href="/mypage/orderform.php">我的订单</a></li>
							<li class=""><a href="/mypage/cart.phtml">购物车</a></li>
							<li class=""><a href="/mypage/recharge.phtml">账户充值</a></li>
						</ul>
						<div class="accountInner clearfix">
							<div class="fl myAvatar">
								<img src="../images/avatar/sample_myavatar.png" width="90" height="90" alt="user name" />
							</div>
							<div class="fl accountInfo">
								<table>
									<tr>
										<th>用户名：</th>
										<td>user name</td>
									</tr>
									<tr>
										<th>账号：</th>
										<td>E-mail</td>
									</tr>
									<tr>
										<th>余额：</th>
										<td>￥ <span class="mysum">102.80</span></td>
									</tr>
								</table>
								<a class="spend" href="/mypage/recharge.phtml"><input type="button" value="充值" /></a>
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