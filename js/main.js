// JavaScript Document
$(document).ready(function(){
	
	$('.drop-down').slideUp();
	
	$('.link-div li').mouseover(function(){
		var vid=$(this).attr('id');
		//alert(vid);
		$('.drop-down#'+vid).slideDown();
		}); 
	$('.left-pannel').mouseleave(function(){
		$('.drop-down').slideUp();
		}); 
		
	
		
		
	$("html, body").animate({ scrollTop:$(window.location.hash).offset().top},1000);
             return false;
			 
			 
		  /*$("html, body").animate({ scrollTop:$('#chap201').offset().top},3000);
             return false;*/
  });