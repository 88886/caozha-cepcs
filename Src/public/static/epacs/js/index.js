
//��Ŀ�����˵�
function myNav(){
	if($("#nav").hasClass("openNav")){
		$("#nav-over").css("display","none");
		$("#nav").removeClass("openNav");
		$("#warmp").removeClass("openMenu");
	}else{
		$("#nav-over").css("display","block");
		$("#nav").addClass("openNav");
		$("#warmp").addClass("openMenu");
				
		$("#scrollerBox").height($(window).height() - $("#nav h3").outerHeight());
		//new IScroll('#scrollerBox',{preventDefault:false});		
		$(window).resize(function(){
			$("#scrollerBox").height($(window).height() - $("#nav h3").outerHeight());
		})
	}	
}
$("#nav-over").bind("click",function(){
	$("#nav-over").css("display","none");
	$("#warmp").removeClass("openMenu");
	$("#nav").removeClass("openNav");
	$("#warmp").removeClass("openMenu")	
})
//$("#nav-over").bind("touchmove touch",function(e){e.preventDefault()},false);//��ֹĬ���¼�
$(".navHome").bind("click",myNav);
