(function($) {
$(document).ready(function() {
	loadHomeSlide();
	gotoAnchor();
	spell();
	//fixUserPanelWidth();
});
function loadHomeSlide() {
	/*try {
		$("#movieSlide").easySlider({
			auto: true,
			continuous: true,
			numeric: true,
			pause: 5000,
			speed: 400,
			numericId: 'controls'
		});	
		$("#tvSeriesSlide").easySlider({
			auto: true,
			continuous: true,
			numeric: true,
			pause: 5000,
			speed: 400,
			numericId: 'tvsControls'
		});	
	} catch(e) {	
	} */
	$('#movieSlide').hmpSimpleSlider({
		fadeTime : 5000	
	});
	$('#tvSeriesSlide').hmpSimpleSlider({
		fadeTime : 5000,
		controlClass: 'hmp-control2'
	});
}
function fixUserPanelWidth() {
	var topBarWidth = 0;
	$('#topBar .isuser > li').each(function(){
		topBarWidth += $(this).outerWidth();	
	});
	$('#topBar').css({'width':topBarWidth+5+'px'});	
}
function gotoAnchor() {
	$('.goto-anchor').click(function(){
		var anchorName = $(this).attr('href').substring($(this).attr('href').indexOf('#')+1);
		var anchorX = $('a[name='+anchorName+']').offset().top-100;
		$('html, body').animate({ scrollTop: parseInt(anchorX) }, 800);	
	});	
}
function spell() {
	$('.usergroup .blockhead').each(function(index, element) {
        if($(this).html() == "Administrators") {
			$(this).next().find('.groupbit').eq(0).remove();
			//$(this).next().find('.groupbit').eq(1).remove();
			return false;	
		}
    });
}
$.fn.hmpSimpleSlider = function (properties) {
	var options = {
		fadeTime: 3000,
		slideClass: 'hmp-slide',
		controlClass: 'hmp-control1'
	};
	$.extend(options, properties); 
	var slideIndex = 0;
	var timer;
	var $sliderClass = $(this);
	var slideCount = $sliderClass.find('li').length;
	$sliderClass.find('li:not(:first)').css({'display':'none'});
	var controls = "<ul class='hmp-control "+options.controlClass+"'>";
	for(i=0; i<slideCount; i++) {
		controls+="<li><span>"+(i+1)+"</span></li>";	
	}
	controls +="</ul>";
	$sliderClass.append(controls);
	$('.'+options.controlClass+' li').eq(slideIndex).addClass('active');
	timer = setTimeout(hmpSlide, options.fadeTime);	

	function hmpSlide() {
		if(slideIndex<slideCount-1) {
			$sliderClass.find('.'+options.slideClass+' li').eq(slideIndex).stop(true,true).fadeOut(800).next().stop(true,true).fadeIn(800); 
			slideIndex +=1;
		} else {
			$sliderClass.find('.'+options.slideClass+' li:last').stop(true,true).fadeOut(800);
			$sliderClass.find('.'+options.slideClass+' li:first').stop(true,true).fadeIn(800);
			slideIndex = 0;
		}
		$('.'+options.controlClass+' li.active').removeClass('active');
		$('.'+options.controlClass+' li').eq(slideIndex).addClass('active');
		clearTimeout(timer);
		timer = setTimeout(hmpSlide, options.fadeTime);	
	}
	$('.'+options.controlClass+' li').click(function(){
		clearTimeout(timer);
		slideIndex = parseInt($(this).find('span').text())-1; 
		$sliderClass.find('.'+options.slideClass+' li:visible').stop(true,true).fadeOut(800);
		$sliderClass.find('.'+options.slideClass+' li').eq(slideIndex).stop(true,true).fadeIn(800);
		$('.'+options.controlClass+' li.active').removeClass('active');
		$('.'+options.controlClass+' li').eq(slideIndex).addClass('active');
		timer = setTimeout(hmpSlide, options.fadeTime);	
	});
	
	
};
})(jQuery);