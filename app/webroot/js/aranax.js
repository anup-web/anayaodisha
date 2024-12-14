$(function() {
	if (document.all && !document.addEventListener) {
		jAlert('You are using the old version of browser.', 'Oops');
		setTimeout(function() {
			location.href = base_url + 'welcome/browser';
		}, 5000);
	}

	var winW = $(window).width();
	var winH = $(window).height();

	if($("body").hasClass("home")) {
		
		$("#scroller-image").css("height", winH / 2);

		var slides_var = [{
			image : 'http://www.anayaodisha.com/img/slider_02.jpg',
			title : '<h2>Chilika</h2><h3>World\'s second largest lagoon</h3>'
		}, {
			image : 'http://www.anayaodisha.com/img/slider_04.jpg',
			title : '<h2 style="color:#3BA2BF;">Bhubaneswar Golf Course</h2><h3 style="color:#3BA2BF;">a premier Golf Club</h3>'
		}, {
			image : 'http://www.anayaodisha.com/img/slider_03.jpg',
			title : '<h2>Dhokra Art</h2><h3>Tribal handicrafts</h3>'
		}];
		$.supersized({
			slide_interval : 7000, // Length between transitions
			transition : 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
			transition_speed : 2000, // Speed of transition
			slide_links : false, // Individual links for each slide (Options: false, 'num', 'name', 'blank')
			slides : slides_var
	
		});
	
		for (var i = 0; i < slides_var.length; i++) {
			$("#supersized li.slide-" + i).append(slides_var[i].title);
		}
		
		//slide effect
		$(window).fadeThis();
	
		//toggle category list items
		$(document).on('click', '.category-title', function() {
			if ($(window).width() > 767) {
				$(".category-list").toggle("slow");
				$(".right-square-ad").toggle("slow");
			} else {
				var ele = $(this).attr("id");
				$("." + ele).toggle("show");
			}
	
		});
	
		$(window).on("resize", function() {
			$(".category-list").hide();
		});
	} 
	
	//fadein/slidein
	new WOW().init();
	
	//popover
	$("[data-toggle='popover']").popover();
	
	blink_hotspot();
});

function blink_hotspot() {
	$('.hotspot').animate({ "opacity": '0.3' }, 'slow').animate({ 'opacity': '0.9' }, 'fast', function () { blink_hotspot(); });
}

// jQuery to collapse the navbar on scroll
$(window).scroll(function() {
	if ($(".navbar").offset().top > 100) {
		if ($(window).width() > 767) {
			$(".navbar").addClass("navbar-fixed-top");
			$(".navbar").addClass("top-nav-collapse");
		} else {
			$(".navbar").removeClass("navbar-fixed-top");
			$(".navbar").removeClass("top-nav-collapse");
		}
	} else {
		$(".navbar-fixed-top").removeClass("top-nav-collapse");
	}
});

/****************
 * Weather
 */
function getCurrentWeather(lat, lon){
    var apiKey = 'e0f53d62b24d574d975bb0075cd12664';
    var url = 'https://api.forecast.io/forecast/';
    var data;
	
    $.getJSON(url + apiKey + "/" + lat + "," + lon + "?units=uk&callback=?", function(data) {
      //console.log(data);
      $('#weather').html((data.currently.temperature).toPrecision(2) + "&deg;C");
    });
}

/****************
 *Carousel
 */
$("#owl-destination").owlCarousel({
	autoPlay : 8000, //Set AutoPlay to 3 seconds
	items : 4,
	itemsDesktop : [1199, 4],
	itemsDesktopSmall : [979, 3]

});
