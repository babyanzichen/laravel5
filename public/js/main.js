$(document).ready(function(){
	 $(".drag-menu").hover(function(){
	 	$(".sub-menu").show();},
	 	function(){
          $(".sub-menu").hide();
	}); 
	//轮播图	
	$('#demo1').slideBox();
	$('#demo2').slideBox({
		direction : 'left',//left,top#方向
		duration : 1,//滚动持续时间，单位：秒
		easing : 'linear',//swing,linear//滚动特效
		delay : 5,//滚动延迟时间，单位：秒
		startIndex : 1//初始焦点顺序
	});
	$('#demo3').slideBox({
		duration : 0.3,//滚动持续时间，单位：秒
		easing : 'linear',//swing,linear//滚动特效
		delay : 5,//滚动延迟时间，单位：秒
		hideClickBar : false,//不自动隐藏点选按键
		clickBarRadius : 10
	});
	$('#demo4').slideBox({
		hideBottomBar : true//隐藏底栏
	}); 	
 });
