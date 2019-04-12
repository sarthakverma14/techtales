
var loc = window.location.href;

$(document).ready(function(){

	var SidebarAnim = new TimelineLite({paused:true});
	SidebarAnim
		.to($(".social-icons, #main-nav"),0.2,{left:0})
		.to($("#main"),0.2,{left:250,right:"-=250"},"-=0.2");
	

	$("a.mobilemenu").on("click",function(){
		SidebarAnim.play();
	});
	$(".social-icons, #main-nav, #main").on("click",function(){
		SidebarAnim.reverse();		
	});


	/*++++++++++++++++++++++++++++++++++++
		click event on ul.timeline titles
	++++++++++++++++++++++++++++++++++++++*/
	$("ul.timeline").children().eq(0).addClass("open")
		.find(".text").slideDown()

	$("ul.timeline").on("click","li", function(){
		$this = $(this);
		$this.find(".text").slideDown();
		$this.addClass("open");
		$this.siblings('li.open').find(".text").slideUp();
		$this.siblings('li').removeClass("open");
	}).on('mouseenter','li',function(){
		$this = $(this);
		var anim = new TweenLite($(this).find(".subject"),0.4,{'padding-left':20, paused:true});
		($this.hasClass('open')) || anim.play();
	}).on('mouseleave','li',function(){
		var anim = new TweenLite($(this).find(".subject"),0.2,{'padding-left':0});
	});

});