/**
<!--
started code			-> April 11, 2014
web designer & developer 	-> king paulo aquino
email 				-> kingpauloaquino@mail.com
mobile				-> +63 917 325 4062
skype				-> king052188
linkedin			-> http://ph.linkedin.com/in/kingpauloaquino 
-->
 */

function msieversion() {
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
    	var version = parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)));
    	if (version == 7 || version == 8 || version == 9 || version == 10) {
    		alert("Please use the latest IE Browser");
    		window.location.href = "http://windows.microsoft.com/en-ph/internet-explorer/download-ie-MSN";
    	}
    }
   	return false;
}

function MyLocations() {
	var currentURL = window.location.href;
	window.location.href= currentURL;
}

function ItsBeingUpdated(){
	alert("It's being updated...");
	return false;
}

function Do_Search(Criteria){
	var inputKeyword = $("#txtSearch").val();
	if(inputKeyword == "") {
		inputKeyword = "No Value Given!";
	}
	
	if (Criteria == "NoCriteria") {
		window.location.href= "?search="+inputKeyword;
	}
	else {
		window.location.href= "?search="+inputKeyword+"&criteria="+Criteria;
	}
}

function makeIDCarsMenuShow(){
	$(document).ready(function(){
		$('#criteria').click();
		return false;
	});
}

$(function() {
	$('.click-nav > ul').hover('no-js js');
	$('.click-nav .js ul').hide();
});

var lastScrollTop = 0;
$(document).ready(function(){
	$(window).scroll(function(event){
	   var st = $(this).scrollTop();
	   if (st > lastScrollTop){
	       // downscroll code
	      $("#before_main").removeAttr("class", "before_main")
	   } else {
	      // upscroll code
	      $("#before_main").attr("class", "before_main")
	   }
	   lastScrollTop = st;
	});
});

$(document).ready(function() {
	$("#top_notify").hide();
	// Tooltip only Text
	$('.masterTooltip').hover(function(){
	        // Hover over code
	        var title = $(this).attr('title');
	        $(this).data('tipText', title).removeAttr('title');
	        $('<p class="tooltip"></p>')
	        .text(title)
	        .appendTo('body')
	        .fadeIn(300);
	}, function() {
	        // Hover out code
	        $(this).attr('title', $(this).data('tipText'));
	        $('.tooltip').remove();
	}).mousemove(function(e) {
	        var mousex = e.pageX + 20; //Get X coordinates
	        var mousey = e.pageY + 10; //Get Y coordinates
	        $('.tooltip')
	        .css({ top: mousey, left: mousex })
	});
});

// $(function () {
	// $(document).ready(function() { 
		// $('#fAbout').hover(function() {
	  		// $('#fAbout').removeAttr('src', 'weconx/assets/images/about.png');
	  		// $('#fAbout').attr('src', 'weconx/assets/images/about_hovered.png');
	  	// });
	  	// $('#fAbout').mouseleave(function() {
	  		// $('#fAbout').removeAttr('src', 'weconx/assets/images/about_hovered.png');
	  		// $('#fAbout').attr('src', 'weconx/assets/images/about.png');
	  	// });
// 	  	
	  	// // fContact
	  	// $('#fContact').hover(function() {
	  		// $('#fContact').removeAttr('src', 'weconx/assets/images/contact.png');
	  		// $('#fContact').attr('src', 'weconx/assets/images/contact_hovered.png');
	  	// });
	  	// $('#fContact').mouseleave(function() {
	  		// $('#fContact').removeAttr('src', 'weconx/assets/images/contact_hovered.png');
	  		// $('#fContact').attr('src', 'weconx/assets/images/contact.png');
	  	// });
// 	  	
	  	// //fMobile
	  	// $('#fMobile').hover(function() {
	  		// $('#fMobile').removeAttr('src', 'weconx/assets/images/mobile.png');
	  		// $('#fMobile').attr('src', 'weconx/assets/images/mobile_hovered.png');
	  	// });
	  	// $('#fMobile').mouseleave(function() {
	  		// $('#fMobile').removeAttr('src', 'weconx/assets/images/mobile_hovered.png');
	  		// $('#fMobile').attr('src', 'weconx/assets/images/mobile.png');
	  	// });
// 	  	
	  	// //fDisclaimer
	  	// $('#fDisclaimer').hover(function() {
	  		// $('#fDisclaimer').removeAttr('src', 'weconx/assets/images/disclaimer.png');
	  		// $('#fDisclaimer').attr('src', 'weconx/assets/images/disclaimer_hovered.png');
	  	// });
	  	// $('#fDisclaimer').mouseleave(function() {
	  		// $('#fDisclaimer').removeAttr('src', 'weconx/assets/images/disclaimer_hovered.png');
	  		// $('#fDisclaimer').attr('src', 'weconx/assets/images/disclaimer.png');
	  	// });
	// });
// });

// footer about menu context
 
$(document).ready(function(){
    $.fn.kiNotice({
	    autoOpen: true, 
	    content: $('#important-message'),
	    animationSpeed: 500,
		extraNoticeInterval: 6000
	});
});

$(document).ready(function(){
	$("#weconex-more").slideUp({ duration: 10, easing: "easeInOutQuart" });
	
	$('#fAbout').click( function() {
	    $("#weconex-more").slideDown({ duration: 1000, easing: "easeInOutQuart" });
	});
	
	$('#about-close').click( function() {
	    $("#weconex-more").slideUp({ duration: 1000, easing: "easeInOutQuart" });
	});
});

// $(document).ready(function(){
	// context.init({preventDoubleContext: false});
	// context.attach('#fAbout', [
		// {header: 'WECONEX'},
		// {text: 'Company', href: '#', target:'_blank', action: function(e){
			// _gaq.push(['_trackEvent', 'WECONEX', this.pathname, this.innerHTML]);
		// }},
		// {text: 'Services', href: '#', target:'_blank', action: function(e){
			// _gaq.push(['_trackEvent', 'WECONEX', this.pathname, this.innerHTML]);
		// }},
		// {text: 'Opportunities', href: '#', target:'_blank', action: function(e){
			// _gaq.push(['_trackEvent', 'WECONEX', this.pathname, this.innerHTML]);
		// }},
		// {text: 'Policies', href: '#', target:'_blank', action: function(e){
			// _gaq.push(['_trackEvent', 'WECONEX', this.pathname, this.innerHTML]);
		// }}
	// ]);
// 	
	// $(document).on('mouseover', '.me-codesta', function(){
		// $('.finale h1:first').css({opacity:0});
		// $('.finale h1:last').css({opacity:1});
	// });
// 	
	// $(document).on('mouseout', '.me-codesta', function(){
		// $('.finale h1:last').css({opacity:0});
		// $('.finale h1:first').css({opacity:1});
	// });
// });
























