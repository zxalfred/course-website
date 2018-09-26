//教师、助教选项卡切换
$('.infoTitle li').each(function(liIndex){
	$(this).mouseover(function(){
		$('.infoTitle li').attr('class','');
		$(this).attr('class','active');
		$('.info div').attr('class','infoBody');
		$('.info div').eq(liIndex).attr('class','infoBody current');
	});
});
//登录窗口显示、关闭
$('#topBtn,#pwSet').click(function(){
	$('#overlap').fadeIn(200);
	$('#loginDiv').fadeIn(200);
	$('#pwSetDiv').fadeIn(200);
});
$('#overlap,#closeBtn').click(function(){
	$('#overlap').fadeOut(200);
	$('#loginDiv').fadeOut(200);
	$('#pwSetDiv').fadeOut(200);	
});
var nowIndex=0;
$(".nav1 a").mouseover(function(){
	var $nowLi=$(".nav1 ul").children().eq(nowIndex);
	$(this).css({"color":"#fff"});
	$(this).parent().css({"width":"150px","background":"#1e6eb3"});
	$(this).parent().siblings().not($nowLi).children().css({"color":"#555"});
	$(this).parent().siblings().not($nowLi).css({"background":"#e4ecf5","width":"130px"});
});
$(".nav1 a").mouseout(function(){
	var $nowLi=$(".nav1 ul").children().eq(nowIndex);
	$nowLi.children().css({"color":"#fff"});
	$nowLi.css({"width":"150px","background":"#1e6eb3"});
	$nowLi.siblings().children().css({"color":"#555"});
	$nowLi.siblings().css({"background":"#e4ecf5","width":"130px"});
	
});
$(".nav1 a").click(function(){
	// $(this).parent().siblings().css("width","130px");
	// $(this).parent().siblings().children().css({"width":"120px","background":"#fff","color":"#555"});
	$(this).css({"color":"#fff"});
	$(this).parent().css({"width":"150px","background":"#1e6eb3"});
	$(this).parent().siblings().children().css({"color":"#555"});
	$(this).parent().siblings().css({"background":"#e4ecf5","width":"130px"});
	//作业状态页面切换
	nowIndex=$(this).attr("index");
	$(".statusDiv").fadeOut(200).eq(nowIndex).fadeIn(200);
	return false;
});



