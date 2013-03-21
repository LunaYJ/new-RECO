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