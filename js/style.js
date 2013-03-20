//<![CDATA[
$(function(){
	
	$('.moveTop').click(function(){
		$('html,body').animate({scrollTop: '0px'}, 800);
	}); 
	var toBottom = $(document).height()-$(window).height();
	//alert(toBottom);
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