/* =======================================================
					onSingle CSS
======================================================== */
;
(function($){

	var onSingle = {
		'css':{
			'half': function(){
				var a = $('.on-half'), b, c, d;
					b = a.parent().width(); 
					return console.log(b);
			}
		}
	}

	window.resize(function(event) {
		onSingle.css.half();
	});
	window.load(function() {
		onSingle.css.half();
	});

})(jQuery);



