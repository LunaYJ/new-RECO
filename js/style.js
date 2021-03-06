//<![CDATA[
$(function(){
	$("#rank1_player").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				mp3:"music/1.mp3",
			});
		},
		play: function() { // To avoid both jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		}, 
		swfPath: "js",
		cssSelectorAncestor: "#jp_container_1",
		supplied: "mp3",
		wmode: "window"
	});
	$("#rank2_player").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				mp3:"music/bye-bye-beautiful.mp3",
			});
		},
		play: function() { // To avoid both jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		swfPath: "js",
		supplied: "mp3",
		cssSelectorAncestor: "#jp_container_2",
		wmode: "window"
	});
	$("#rank3_player").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				mp3:"music/1.mp3",
			});
		},
		play: function() { // To avoid both jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		swfPath: "js",
		supplied: "mp3",
		cssSelectorAncestor: "#jp_container_3",
		wmode: "window"
	});
	$("#rank4_player").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				mp3:"music/1.mp3",
			});
		},
		play: function() { // To avoid both jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		swfPath: "js",
		supplied: "mp3",
		cssSelectorAncestor: "#jp_container_4",
		wmode: "window"
	});
	$("#rank5_player").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				mp3:"music/1.mp3",
			});
		},
		play: function() { // To avoid both jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		swfPath: "js",
		cssSelectorAncestor: "#jp_container_5",
		supplied: "mp3",
		wmode: "window"
	});
	$("#rank6_player").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				mp3:"music/1.mp3",
			});
		},
		play: function() { // To avoid both jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		swfPath: "js",
		supplied: "mp3",
		cssSelectorAncestor: "#jp_container_6",
		wmode: "window"
	});
	$("#rank7_player").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				mp3:"music/1.mp3",
			});
		},
		play: function() { // To avoid both jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		swfPath: "js",
		supplied: "mp3",
		cssSelectorAncestor: "#jp_container_7",
		wmode: "window"
	});
	$("#rank8_player").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				mp3:"music/1.mp3",
			});
		},
		play: function() { // To avoid both jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		swfPath: "js",
		supplied: "mp3",
		cssSelectorAncestor: "#jp_container_8",
		wmode: "window"
	});
	$("#rank9_player").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				mp3:"music/1.mp3",
			});
		},
		play: function() { // To avoid both jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		swfPath: "js",
		supplied: "mp3",
		cssSelectorAncestor: "#jp_container_9",
		wmode: "window"
	});
	$("#rank10_player").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				mp3:"music/1.mp3",
			});
		},
		play: function() { // To avoid both jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		swfPath: "js",
		cssSelectorAncestor: "#jp_container_10",
		supplied: "mp3",
		wmode: "window"
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
		});
	});
	$(".recommendTitle .prev").bind("click", function(event){
		$("#recommendList").animate({
			scrollTop: "-=" + step + "px"
		});
	});
	
	var H = 1030;
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
//]]>