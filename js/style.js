$(function(){
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
		});
	});
	$(".recommendTitle .prev").bind("click", function(event){
		$("#recommendList").animate({
			scrollTop: "-=" + step + "px"
		});
	});
	
	var H = 1025;
	$(".albumRankTitle .prev").bind("click", function(event){
		$("#albumRankList").animate({
			scrollTop: "-=" + H + "px"
		});
	});
	$(".albumRankTitle .next").bind("click", function(event){
		$("#albumRankList").animate({
			scrollTop: "+=" + H + "px"
		});
	});
	$(".singerRankTitle .prev").bind("click", function(event){
		$("#singerRankList").animate({
			scrollTop: "-=" + H + "px"
		});
	});
	$(".singerRankTitle .next").bind("click", function(event){
		$("#singerRankList").animate({
			scrollTop: "+=" + H + "px"
		});
	});
})

