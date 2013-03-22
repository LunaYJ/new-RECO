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


<!--  								未完成此页        					          -->


<body class="homePage">
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
							<li class="community current"><a href="/community">社区</a>
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
							<li class="current"><a href="javascript:void(0);">新鲜事</a></li>
							<li><a href="javascript:void(0);">我的页面</a></li>
						</ul>
					</div>
				</div>
				<div id="main" class="homeMain">
					<div class="clearfix">
						<div class="fl newsInner">
							<div class="writeNews">
								<form action="?" method="post" name="publish">
									<div class="clearfix">
										<h2 class="fl">和朋友闲聊几句吧：</h2>
										<span class="fr limitNote">还可以输入<span class="limit">140</span>字</span>
									</div>
									<textarea name="sthNew" id="sthNew"></textarea>
									<div class="clearfix">
										<div class="fl addFn">
											<a class="face" href="javascript:void(0)">表情</a>
											<a class="uploadImg" href="javascript:void(0)"><img src="../images/icon/sample_uploadimg.png" width="20" height="20" /> 照片</a>	
											<div class="uploadImgDiv">
												<div>
													<span class="uploadTitle"><img src="../images/icon/sample_uploadimg.png" width="20" height="20" /> 照片</span>
												</div>
												<div class="uploadbutton">
													<a href="javascript:void(0)" class="close"><img src="../images/icon/popup_close.png" width="20" height="20" /></a>
													<table>
														<tr>
															<td><input type="button" onclick="uploadImgfile.click()" value="添加图片" /><form action="?" method="post"><input name="uploadImgfile" id="uploadImgfile" type="file" /></form></td>
														</tr>
													</table>
													<p>支持上传单张2M以下的gif、jpg、png文件</p>
												</div>
											</div>
										</div>
										<div class="btn_area fr">
											<span class="pubarea">
												<a class="selectPub">
													<span id="selected" class="publish">公开</span>
													<span class="selectArrow"><img src="../images/icon/arrow_down_black.png" width="11" height="9" />
												</a>
												<ul class="pubOption">
													<li><a name="publish" href="javascript:void(0)">公开</a></li>
													<li><a name="onlyFri" href="javascript:void(0)">仅好友可见</a></li>
													<li><a name="onlyMe" href="javascript:void(0)">仅自己可见</a></li>
												</ul>
											</span>
											<input type="submit" value="立刻发表" />
											<input  type="button" value="写篇长的" />
										</div>
									</div>
								</form>
							</div>
							<div class="allNews">
								<div class="newsFeed">
									<div class="clearfix">
										<div class="fl userAvatar">
											<img src="../images/avatar/u282_normal.png" width="60" height="60" />
										</div>
										<div class="fr newsContent">
											<div class="username"><h3>用户名A <img src="../images/icon/sample_uploadimg.png" width="20" height="20" /></h3></div>
											<div class="usernews">
												<p>文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……</p>
											</div>
										</div>
									</div>
								</div>
								<div class="newsFeed">
									<div class="clearfix">
										<div class="fl userAvatar">
											<img src="../images/avatar/sample_avatar.png" width="60" height="60" />
										</div>
										<div class="fr newsContent">
											<div class="username"><h3>用户自己 <img src="../images/icon/sample_uploadimg.png" width="20" height="20" /></h3></div>
											<div class="usernews">
												<p>文字长度4行内，闲聊只能插入1张图……文字长度4行内文字长度4行内，闲聊只能插入1张图……文字长度4行内文字长度4行内，闲聊只能插入1张图……文字长度4行内文字长度4行内，闲聊只能插入1张图……文字长度4行内文字长度4行内，闲聊只能插入1张图……文字长度4行内文字长度4行内，闲聊</p>
											</div>
										</div>
									</div>
								</div>
								<div class="newsFeed">
									<div class="clearfix">
										<div class="fl userAvatar">
											<img src="../images/avatar/sample_avatar.png" width="60" height="60" />
										</div>
										<div class="fr newsContent">
											<div class="username"><h3>用户名A <img src="../images/icon/sample_uploadimg.png" width="20" height="20" /></h3></div>
											<div class="usernews">
												<p>文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……文字长度4行内，闲聊只能插入1张图……</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="fr myArea">
							
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