//<![CDATA[
$(function(){
	
	$('.moveTop').click(function(){
		$('html,body').animate({scrollTop: '0px'}, 800);
	}); 
	var toBottom = $(document).height()-$(window).height();
	$('.moveBottom').click(function(){
		$('html,body').animate({scrollTop: toBottom}, 800);
	});

	$(".playMusic").on("click", function(){
		$(this).parent().hide();
		$(this).parent().parent().find(".play").show();
	});
	
	$(".bannerTopInner").bxSlider({
		mode: 'fade',
		controls: false,
		auto: true,
		speed: 300
	});
	
	$(".myLink").hover(function(){
		var linkOpen = $(this).find("ul");
		linkOpen.show();
		linkOpen.animate({height: "105px"});
	}, function(){
		$(this).find("ul").animate({height: "0"}, function(){
			$(this).hide();
		})
	});
	$(".myMail").hover(function(){
		var linkOpen = $(this).find("ul");
		linkOpen.css("display", "block");
		linkOpen.animate({height: "235px"});
	}, function(){
		$(this).find("ul").animate({height: "0"}, function(){
			$(this).hide();
		})
	});
	$(".uploadbutton .close").click(function(){
		$(".uploadImgDiv").hide();
	});
	$(".writeNews .uploadImg").click(function(){
		$(".uploadImgDiv").show();
	});
	
	$('a[rel*=leanModal]').leanModal({ top : 200, closeButton: ".modal_close" }); 
	
/* 	社区文字超出4行显示“...”并添加查看全部 */
	$(".newsContent .usernews p").each(function(){
		var newslength = $(this).html().length;
		var overlim = $(this).html().substring(160, newslength);
		//alert(overlim);
		var newslim = 173;
		if (newslength > newslim){
			$(this).html($(this).html().substring(0, 160)+ "<span class='over'>……</span>");
			$(this).append("<span class='overlim'>"+overlim+"</span>");
			$(this).append("&nbsp;&nbsp;&nbsp;&nbsp;<span class='seeAll'><a class='red' href='javascript:void(0)'>展开全部>></a></span>");
			
			$(this).find(".seeAll").click(function(){
				$(this).parent().find(".over").toggle();
				var seeAll = $(this).parent().find(".seeAll");
				if(seeAll.text() == "展开全部>>"){
					seeAll.html("<a class='red' href='javascript:void(0)'>收起</a>");
				}else{
					seeAll.html("<a class='red' href='javascript:void(0)'>展开全部>></a>");
				};
				$(this).parent().find(".overlim").toggle();
			});
		};
		
	});
	
	
	
	
	
/* 	新鲜事发布选项 */
	$(".selectPub").click(function(event){
		$(".pubOption").show();
	});
	$(".pubOption a").on("click", function(){
		var pub = $(this).html();
		var state = $(this).attr("name");
		$(".selectPub #selected").html(pub);
		$(".selectPub #selected").removeClass();
		$(".selectPub #selected").addClass(state);
		$(".pubOption").hide();
	});
	
/* 	新鲜事字数限制 */
	$('#sthNew').bind('keypress keyup change', function(){         
		var len =$(this).val().length;
        var remain = 140 - len;
        var txt = $(this).parent().find('.limitNote');
         if( remain<0 ){
             txt.html("已经超过<span class='limit red'>"+Math.abs(remain)+"</span>个字");
         }else{
             txt.html("还可以输入<span class='limit'>"+Math.abs(remain)+"</span>字");
         }
	 });
	
/* 	图片滚动 */
	var step = 495;
	$(".recommendTitle .next").bind("click", function(event){
		$("#recommendList").animate({
			scrollTop: "+=" + step + "px"
		}, 1000);
	});
	$(".recommendTitle .prev").bind("click", function(event){
		$("#recommendList").animate({
			scrollTop: "-=" + step + "px"
		}, 1000);
	});
	
	var rank = 1030;
	$(".albumRankTitle .prev").bind("click", function(event){
		$("#albumRankList").animate({
			scrollTop: "-=" + rank + "px"
		}, 1000);
	});
	$(".albumRankTitle .next").bind("click", function(event){
		$("#albumRankList").animate({
			scrollTop: "+=" + rank + "px"
		}, 1000);
	});
	$(".singerRankTitle .prev").bind("click", function(event){
		$("#singerRankList").animate({
			scrollTop: "-=" + rank + "px"
		}, 1000);
	});
	$(".singerRankTitle .next").bind("click", function(event){
		$("#singerRankList").animate({
			scrollTop: "+=" + rank + "px"
		}, 1000);
	});
	
	var nowUsers = 576;
	$(".nowUser .next").bind("click", function(event){
		$("#userList").animate({
			scrollLeft: "+=" + nowUsers + "px"
		}, 1000);
	});
	$(".nowUser .prev").bind("click", function(event){
		$("#userList").animate({
			scrollLeft: "-=" + nowUsers + "px"
		}, 1000);
	});
	
	var userListLi = $(".nowUser #userList li").width() + 14;
	var userListWidth = 0;
	$(".nowUser #userList li").each(function(){
		$(this).width();
		userListWidth += userListLi;
	})
	$(".nowUser #userList ul").width(userListWidth);
	
})
//]]>