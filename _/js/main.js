( function ($){


	function enableSkrollr(){
		console.log('We are on desktop');



		if(!Modernizr.touch){
			var s = skrollr.init({
	             forceHeight: false,
	             render: function(data) {
	                //Log the current scroll position.
	                //console.log(data.curTop);
	                $('#offset').text(data.curTop);
	            }

	        });
        }

	}

	function disableSkrollr(){
		console.log('We are on mobile')
		
		var s = skrollr.init({});
		s.destroy();

	}

	enquire.register("screen and (min-width: 768px)", {
	    match : function() {
	        enableSkrollr()
	    },  
	    unmatch : function() {
	        disableSkrollr()
	    }
	});




})( jQuery )
