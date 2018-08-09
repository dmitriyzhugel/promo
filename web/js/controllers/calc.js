(function($) {
	'use strict';
	$('#frm-calc').submit(function(e){
	    $.ajax({
		    type: "POST",
		    url: '/calc/detail/',
		    dataType: "json",
		    cache: false,
		    data: {
			    SUM: $('#SUM').val(),
			    TERM: $('#TERM').val(),
			    PERCENT: $('#PERCENT').val(),
			    CURRENCY: $('#CURRENCY').val()
		    }, // post data
		    success: function (data) {
			    $('#calc-container').css('margin-top','20px');
			    $('#calc-container').css('margin-bottom','20px');
			    $('#calc-container').html('<div class="row"><div class="col-md-12" style="text-align:center;"><img src="/img/loader.gif"></div></div>');
			    setTimeout(function(){
				if (data.status === 'OK') {
				    $('#calc-container').html(data.content);
				} else {
				    $('#calc-container').html(data.message);
				}
			    },2000);
			    
		    }
	    });
	    $('html, body').animate({
		scrollTop: $('#frm-calc').offset().top
	    }, 1000);
	    e.preventDefault();
	});
	$('#frm-compare').submit(function(e){
	    $.ajax({
		    type: "POST",
		    url: '/calc/detail/',
		    dataType: "json",
		    cache: false,
		    data: {
			    SUM: $('#SUM1').val(),
			    TERM: $('#TERM1').val(),
			    PERCENT: $('#PERCENT1').val(),
			    CURRENCY: $('#CURRENCY1').val(),
			    COMPARE: true
		    }, // post data
		    success: function (data) {
			    $('#calc-container1').css('margin-top','20px');
			    $('#calc-container1').css('margin-bottom','20px');
			    $('#calc-container1').html('<div class="row"><div class="col-md-12" style="text-align:center;"><img src="/img/loader.gif"></div></div>');
			    setTimeout(function(){
				if (data.status === 'OK') {
				    $('#calc-container1').html(data.content);
				} else {
				    $('#calc-container1').html(data.message);
				}
			    },1000);
			    
		    }
	    });
	    $.ajax({
		    type: "POST",
		    url: '/calc/detail/',
		    dataType: "json",
		    cache: false,
		    data: {
			    SUM: $('#SUM2').val(),
			    TERM: $('#TERM2').val(),
			    PERCENT: $('#PERCENT2').val(),
			    CURRENCY: $('#CURRENCY2').val(),
			    COMPARE: true
		    }, // post data
		    success: function (data) {
			    $('#calc-container2').css('margin-top','20px');
			    $('#calc-container2').css('margin-bottom','20px');
			    $('#calc-container2').html('<div class="row"><div class="col-md-12" style="text-align:center;"><img src="/img/loader.gif"></div></div>');
			    setTimeout(function(){
				if (data.status === 'OK') {
				    $('#calc-container2').html(data.content);
				} else {
				    $('#calc-container2').html(data.message);
				}
			    },1000);
			    
		    }
	    });
	    $('html, body').animate({
		scrollTop: $('#frm-compare').offset().top
	    }, 1000);
	    e.preventDefault();
	});
})(jQuery);