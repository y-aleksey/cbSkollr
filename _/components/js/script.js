( function ($){
	new imagesLoaded( document.querySelector('body'), function( instance ) {
	  
	  console.log('all images are loaded');

	  setTimeout(function(){
			$('body').toggleClass('loaded'); 
			$('html,body').animate({	scrollTop: 0 })
	  }, 1000);


	});

	//$('body').toggleClass('loaded'); 

	var researchCategory = {

		"0": [
	      {"name": "USA", "value": 1},
	      {"name": "Canada", "value": 2},
	      {"name": "UK", "value": 3},
	      {"name": "Germany", "value": 4},
	      {"name": "France", "value": 5}
	    ],
	    "1": [
	      {"name": "Male", "value": 101},
	      {"name": "Female", "value": 102}
	    ],
	    "2": [
	      {"name": "Generation X", "value": 201},
	      {"name": "Generation Y", "value": 202},
	      {"name": "Boomers", "value": 203}
	    ],
	    "3": [
	      {"name": "Unemployed", "value": 301},
	      {"name": "Working", "value": 302}
	    ],
	    "4": [
	      {"name": "High School or GED", "value": 401},
	      {"name": "Two-year technical degree", "value": 402},
	      {"name": "Bachelor's degree or similar", "value": 403},
	      {"name": "Master's degree or higher", "value": 404}
	    ],
	    "5": [
	      {"name": "Entry-level", "value": 501},
	      {"name": "Mid-level", "value": 502},
	      {"name": "Senior-level", "value": 503},
	      {"name": "Executive", "value": 504}
	    ],
	    "6": [
	      {"name": "Northeast", "value": 601},
	      {"name": "South", "value": 602},
	      {"name": "Midwest", "value": 603},
	      {"name": "West", "value": 604}
	    ],
	    "7": [
	      {"name": "Agriculture", "value": 701},
	      {"name": "Banking / Finance", "value": 702},
	      {"name": "Distribution / Wholesale", "value": 703},
	      {"name": "Education", "value": 704},
	      {"name": "Energy", "value": 705},
	      {"name": "Entertainment / Recreation", "value": 706},
	      {"name": "Health Care", "value": 707},
	      {"name": "High Technology / Bioscience", "value": 708},
	      {"name": "Manufacturing", "value": 709},
	      {"name": "Professional Services", "value": 710},
	      {"name": "Restaurant / Hospitality", "value": 711},
	      {"name": "Retail", "value": 712},
	      {"name": "Transportation / Warehousing", "value": 713}
	    ],
	    "8": [
	      {"name": "Industrial (manufacturing, factory, construction, etc.)", "value": 801},
	      {"name": "Office / Clerical (administrative, etc.)", "value": 802},
	      {"name": "Technology / IT related", "value": 803},
	      {"name": "Research", "value": 804},
	      {"name": "Science related", "value": 805},
	      {"name": "Engineering related", "value": 806},
	      {"name": "Nursing", "value": 807},
	      {"name": "Allied Healthcare", "value": 808},
	      {"name": "Physician", "value": 809},
	      {"name": "Other healthcare jobs (not nursing, physician or allied)", "value": 810},
	      {"name": "Finance / Accounting", "value": 811},
	      {"name": "Attorney / Paralegal", "value": 812},
	      {"name": "Marketing / Creative", "value": 813},
	      {"name": "Business Development", "value": 814},
	      {"name": "Other professional jobs (not marketing or finance-related)", "value": 815},
	      {"name": "Restaurant / Hospitality", "value": 816},
	      {"name": "Sales", "value": 817},
	      {"name": "C-level executive", "value": 818},
	      {"name": "Senior Manager / Executive", "value": 819}
	    ],
	    "9": [
	      {"name": "American Indian or Alaska Native", "value": 901},
	      {"name": "Asian", "value": 902},
	      {"name": "Black or African American", "value": 903},
	      {"name": "Caucasian / White", "value": 904},
	      {"name": "Hispanic / Latino", "value": 905},
	      {"name": "Native Hawaiian or Other Pacific Islander", "value": 906},
	      {"name": "Other", "value": 907}
	    ],
	    "10": [
	      {"name": "Under $50k", "value": 1001},
	      {"name": "$50k – $100k", "value": 1002},
	      {"name": "$100k+", "value": 1003}
	    ]

	}

	/**/
	var results = {
				//google search //job board //career site //social media //responsive //good experience
		"0": 	[00,00,00,00,00,00],
		"1": 	[73,51,80,70,14,76],
		"2": 	[77,54,82,71,17,83],
		"3": 	[71,56,81,63,11,66],
		"4": 	[76,54,79,70,21,56],
		"5": 	[69,53,69,56,12,79],
		"101": 	[72,49,76,68,13,77],
		"102": 	[75,53,84,71,16,75],
		"201": 	[79,54,75,71,14,76],
		"202": 	[72,51,81,69,15,73],
		"203": 	[69,46,85,70,14,80],
		"301": 	[73,50,80,69,15,74],
		"302": 	[76,65,83,73,6,94],
		"401": 	[68,43,77,64,16,84],
		"402": 	[71,54,81,69,15,82],
		"403": 	[75,52,80,73,14,76],
		"404": 	[75,52,81,67,14,69],
		"501": 	[76,51,79,70,12,84],
		"502": 	[73,54,80,70,13,76],
		"503": 	[75,48,84,72,17,70],
		"504": 	[70,42,78,70,20,74],
		"601": 	[77,51,80,72,12,75],
		"602": 	[74,51,80,67,15,76],
		"603": 	[70,50,82,70,16,76],
		"604": 	[73,47,79,70,14,78],
		"701": 	[60,48,79,63,10,77],
		"702": 	[76,58,82,77,12,69],
		"703": 	[76,56,84,86,15,89],
		"704": 	[75,50,78,66,15,77],
		"705": 	[69,51,84,71,16,73],
		"706": 	[77,45,78,71,12,84],
		"707": 	[71,52,82,66,19,69],
		"708": 	[80,54,74,69,11,67],
		"709": 	[69,53,78,72,14,73],
		"710": 	[73,51,79,69,13,75],
		"711": 	[71,45,78,72,13,85],
		"712": 	[74,52,78,72,16,83],
		"713": 	[71,49,78,60,16,85],
		"801": 	[69,40,75,66,17,84],
		"802": 	[75,56,83,69,16,82],
		"803": 	[78,59,78,71,13,76],
		"804": 	[75,52,80,68,16,76],
		"805": 	[75,60,76,70,7,77],
		"806": 	[79,48,78,70,11,68],
		"807": 	[65,50,78,68,16,69],
		"808": 	[70,52,81,61,19,67],
		"809": 	[69,35,71,39,26,64],
		"810": 	[74,49,83,60,21,74],
		"811": 	[73,52,80,81,12,71],
		"812": 	[81,54,88,70,10,69],
		"813": 	[83,56,86,86,11,86],
		"814": 	[73,56,83,78,13,83],
		"815": 	[75,51,83,71,10,75],
		"816": 	[68,38,76,72,15,86],
		"817": 	[71,51,75,76,15,77],
		"818": 	[70,47,78,76,21,77],
		"819": 	[70,44,80,70,15,70],
		"901": 	[85,55,68,61,19,88],
		"902": 	[77,51,75,74,14,76],
		"903": 	[71,54,78,75,16,76],
		"904": 	[73,50,81,69,14,76],
		"905": 	[71,53,73,71,17,85],
		"906": 	[50,50,83,80,25,100],
		"907": 	[69,48,88,77,14,78],
		"1001": 	[73,54,81,70,14,83],
		"1002": 	[73,51,80,71,14,71],
		"1003": 	[71,42,77,66,16,67],


	}


	

	function enableSkrollr(){
		//console.log('We are on desktop');
		/* */
		if(!Modernizr.touch){
			var s = skrollr.init({
	             forceHeight: false,
	             render: function(data) {
	                //Log the current scroll position.
	                //console.log(data.curTop);
	                //$('#offset').text(data.curTop);
	            }
	        });

        }

 
	}

	function disableSkrollr(){
		//console.log('We are on mobile')
		var s = skrollr.init({});
		s.destroy();

	}

	enquire.register("screen and (min-width: 768px)", {
	    match : function() {
	        enableSkrollr()
	        //disableSkrollr()
	        $(window).scroll(windowScrollF);
	    },  
	    unmatch : function() {
	        disableSkrollr()
	        $(window).scroll(function(){ console.log('win should be disabled')});

	        //$('[data-toggle="modal"]').css('border','solid thin red');
	    }
	});



	//-------Carousel--------//

	$('.carousel').carousel({
	  interval: false,
	  wrap: true
	});



	var myCarIndex = 0;
	var imageMax = 4;

	$('#myCarousel .left').click(function() {
	  $('#ci1p, #ci2p').carousel('prev');

	  myCarIndex = $('#ci1p .active').index('#myCarousel .item');
	  myCarIndex = (imageMax + myCarIndex - 1) % imageMax;

	  updateCar(myCarIndex)
	  
	});

	$('#myCarousel .right').click(function() {
	  $('#ci1p, #ci2p').carousel('next');

	  myCarIndex = $('#ci1p .active').index('#myCarousel .item');
	  myCarIndex = (imageMax + myCarIndex + 1) % imageMax;

	  updateCar(myCarIndex)

	});

	$('#myCarousel .carousel-indicators li').click(function() {
	  $('#ci1p, #ci2p').carousel( $(this).data('slide-to')  );
	  updateCar($(this).data('slide-to'))


	});


	//Carousel2-----------//



	//Carousel2-----------//
	var imageMax2 = 6;
	$('#myCarousel2 .left').click(function() {
	  $('#ci2pa').carousel('prev');
	  myCarIndex = $('#ci2a .active').index('#myCarousel2 .item');
	  myCarIndex = (imageMax2 + myCarIndex - 1) % imageMax2;
	  updateCar2(myCarIndex)
	});

	$('#myCarousel2 .right').click(function() {
		$('#ci2pa').carousel('next');
		myCarIndex = $('#ci2a .active').index('#myCarousel2 .item');
		myCarIndex = (imageMax2 + myCarIndex + 1) % imageMax2;
		
		updateCar2(myCarIndex)
	});

	$('#myCarousel2 .carousel-indicators li').click(function() {
	  $('#ci2pa').carousel( $(this).data('slide-to')  );
	  updateCar2($(this).data('slide-to'));

	});

	
	//Carousel2- end----------//


	//Carousel2- end----------//
	
	var carMessage =  [
	{ h1:"1", p:"Orientation"  },
	{ h1:"2", p:"Consideration"  },
	{ h1:"3", p:"Action"  },
	{ h1:"4", p:"Engagement"  },
	{ h1:"5", p:"FPO"  },
	{ h1:"6", p:"FPO2"  }];

	function updateCar(uc){
	  changeCarTo(uc);
	  updateIndicator(uc, '#myCarousel');
	  changeIcon(uc);
	  updateArrows(uc);
	}

	function updateCar2(uc, target){
     $("#myCarousel2 .carousel-indicators li" ).removeClass('active');
     $("#myCarousel2 .carousel-indicators li" ).eq(uc).addClass('active');
      changeCarTo2(uc);
      updateArrows2(uc);
	}

	var car1min, car1max, car2min, car2max;
	updateArrows(0);
	function updateArrows(uc){
		car1min = 0;
		car1max = 3;

		$('#myCarousel .left').show()
		$('#myCarousel .right').show()

		
		if(uc == car1min ){
			$('#myCarousel > .left').fadeOut()
		} else if( uc == car1max){
			$('#myCarousel > .right').fadeOut()
		}
		

	}

	updateArrows2(0);
	function updateArrows2(uc){
		car2min = 0;
		car2max = 5;

		$('#myCarousel2 .left').show()
		$('#myCarousel2 .right').show()

		
		if(uc == car2min ){
			$('#myCarousel2 > .left').fadeOut()
		} else if( uc == car2max){
			$('#myCarousel2 > .right').fadeOut()
		}
		

	}
	

	$( "#ci0 span" ).hide();
	function changeCarTo(cct){
		$( "#ci0 span" )
				.removeClass( "color0 color1 color2 color3" )
				.addClass( "color" + cct )
				.fadeIn( 500, function() {
				    // Animation complete
				    $( "#ci0").removeClass( "color0 color1 color2 color3" )
				    		  .addClass( "color" + cct );
				    console.log(cct)
				    $( "#ci0 span" ).hide();
				    $( "#ci0 strong" ).hide().text( carMessage[cct].h1 ).fadeIn(500);
				    $( "#ci0 i" ).hide().text( carMessage[cct].p ).fadeIn(500);

				  });

	}

	function changeCarTo2(cct){
		$( "#ci0a span" )
				.removeClass( "color0 color1 color2 color3 color4 color5" )
				.addClass( "color" + cct )
				.fadeIn( 500, function() {
				    // Animation complete
				    $( "#ci0a").removeClass( "color0 color1 color2 color3 color4 color5" )
				    		  .addClass( "color" + cct );
				    console.log(cct)
				    $( "#ci0a span" ).hide();
				    $( "#ci0a strong" ).hide().text( carMessage[cct].h1 ).fadeIn(500);
				  

				  });

	}

	function updateIndicator(ui, target){

		$( target + " .carousel-indicators li" ).removeClass('active');
		$( target + " .carousel-indicators li" ).eq(ui).addClass('active');
	}

	$( "#ci1p .icons span" ).hide();
	function changeIcon(ci){

		$( "#ci1p .icons span" )
				.removeClass( "icon0 icon1 icon2 icon3" )
				.addClass( "icon" + ci )
				.fadeIn( 500, function() {
				    // Animation complete
				    $( "#ci1p .icons ").removeClass( "icon0 icon1 icon2 icon3" )
				    				   .addClass( "icon" + ci );
				    console.log(ci)
				    $( "#ci1p .icons span" ).hide();
				  });		
	}


	//-------Carousel--------//



	//------Number Selector -----//

	//data
	console.log('start: ' + Math.random());

	
	//console.log( researchCategory["0"][1]["name"] );
	 
	//data


	$('#subCat li').click(function() {
	 
	 fillResearchCategory( researchCategory[ $(this).data('id') ] );
	 $('#subCat').find('li.active').removeClass('active');
	 $(this).addClass('active');

	});

	$("#resCat").on( "click", 'li',function(event) {

	 fillResults( results[ $(this).data('id') ] );
	 $('#resCat').find('li.active').removeClass('active');
	 $(this).addClass('active');

	});

	// see line 184 about my terrible hack - delete '2' from researchCategory to revert
	$('select#subCatMobile').change(function() {
	 fillResearchCategory( researchCategory[ $( "#subCatMobile option:selected" ).val() ] ); 
	}); 


    $('select#resCatMobile').change(function() {
    	 fillResults( results[ $( "#resCatMobile option:selected" ).val()  ] );
	}); 

	
	function fillResearchCategory(frc){
	
		$('ul#resCat').empty();


		$.each( frc, function( key, item ) {
			 //console.log(item.name)


			 var li = $('<li/>')
			        .attr('data-id',  item.value  )
			        .appendTo('ul#resCat')
			        .text(item.name  ).hide().delay(50 * key).fadeIn();

		  //console.log( key + ": " + item.name + '::' + item.value );
		});


		//mobile//
		$('select#resCatMobile')
		    .find('option')
		    .remove()
		    .end()

		$('select#resCatMobile').append('<option value="'+  '0' + '">' + 'Select' +'</option>') 


		$.each( frc, function( key, item ) {
			 $('select#resCatMobile').append('<option value="'+  item.value+ '">' + item.name +'</option>') 
		});
		$('select#resCatMobile option')[0].selected = true;

	}


	function fillResults(fr){
		//console.log(frc)		
		$('#results p').empty();
		countFromTo(0, fr[0], 1000, '#r1 p,#r1m p' );
		countFromTo(0, fr[1], 1000, '#r2 p,#r2m p' );
		countFromTo(0, fr[2], 1000, '#r3 p,#r3m p' );
		countFromTo(0, fr[3], 1000, '#r4 p,#r4m p' );
		countFromTo(0, fr[4], 3000, '#r5 p,#r5m p' );
		countFromTo(0, fr[5], 1000, '#r6 p,#r6m p' );
	}


	// Animate the element's value from x to y:
	function countFromTo(startNum, endNum, durationNum, targetNum){

	  //duration exception
	  durationNum = (endNum/100) * durationNum;
	  
	  $({someValue: startNum }).animate({someValue: endNum }, {
	      duration: durationNum ,
	      easing:'swing', // can be anything
	      step: function() { // called on every step
	          // Update the element's text with rounded-up value:
	          $(targetNum).html(Math.round(this.someValue) + '<em>%</em>');
	      }
	  });
	 }


	 	/*
	  //start fields
	  var selectedStart = 8
	  fillResearchCategory( researchCategory[selectedStart] );
	  fillResults( results[ selectedStart * 100 + 1]);
	  $('#subCat li').eq(selectedStart).addClass('active');
	  $('#resCat li').eq(0).addClass('active');
	  //mobile
	  $('select#subCatMobile option')[selectedStart].selected = true;

		*/
	  fillResults( results[ 0]);



		//Side Navigation---------------//

		$('#sideNav li a, nav ul li a').click(function(){ 
			dist( $(this).attr('href') ); return false; 
		}); //#home

		function dist(n){  
			$('html,body').animate({	scrollTop: $(n).offset().top + 2 }, 250, function(){

					$('html,body').animate({ scrollTop: $(n).offset().top + 2 }, 50);

			})
		}
/*
		$( "#sideNav li strong" ).hide();

		$('#sideNav li').hover(
			  function() {

			    //console.log( $( "#sideNav li" ).index(this) );		  	
			    $('#sideNav li strong').hide();
			    $('#sideNav li')
			    	.eq( $( "#sideNav li" ).index(this) )
			    	.find('strong')
			    	.fadeIn()
			    	.css("display","inline-block");

			  }, function() {


			     $('#sideNav li')
			     .eq($( "#sideNav li" ).index(this))
			     .find('strong')
			     .stop()
			     .fadeOut(1)
			     .css("display","inline-block");

			  }
		);
	
		*/


		//Side Navigation---------------//

		function updateNav(un){
			$('#sideNav').find('li.active, span.active, strong.active').removeClass('active');
			$('#sideNav li').eq(un).addClass('active');
		}

		var bp1, bp2, bp3, bp4, bp5;

		function windowScrollF(){

			bp1 = 0;
			bp2 = $('#slide2').offset().top - $(window).height()*.5
			bp3 = $('#slide3').offset().top - $(window).height()*.5
			bp4 = $('#slide4').offset().top - $(window).height()*.5
			bp5 = $('#slide5').offset().top - $(window).height()*.5
			bp6 = $('#slide6').offset().top - $(window).height()*.5

			//console.log('my current scroll position:' + $(this).scrollTop()	 )
			//console.log('slide1offset:' + $('#slide1').offset().top	 )
			//console.log('slide2offset:' + $('#slide2').offset().top	 )
			
			//$('section > h1').css({'position': 'relative'});


			//update side nav
			if ( $(this).scrollTop() >= bp1 && $(this).scrollTop() < bp2 ) {
				//console.log('i am in slide 1 area'); 
				updateNav(0);
			} else if (	$(this).scrollTop() >= bp2 && $(this).scrollTop() < bp3 ) {
				//console.log('i am in slide 2 area'); 
				updateNav(1);
			} else if (	$(this).scrollTop() >= bp3 && $(this).scrollTop() < bp4 ) {
				//console.log('i am in slide 3 area'); 
				updateNav(2);
			} else if (	$(this).scrollTop() >= bp4 && $(this).scrollTop() < bp5 ) {
				//console.log('i am in slide 4 area'); 
				updateNav(3);
			} else if (	$(this).scrollTop() >= bp5 && $(this).scrollTop() < bp6 ) {
				//console.log('i am in slide 4 area'); 
				updateNav(4);
			} else if ( $(this).scrollTop() >= bp6  ){
				updateNav(5);
			}
			/*
			bp2 = $('#slide2').offset().top
			bp3 = $('#slide3').offset().top 
			bp4 = $('#slide4').offset().top 
			bp5 = $('#slide5').offset().top 
			bp6 = $('#slide6').offset().top 


			//update header
			
			if ( $(this).scrollTop() >= bp1 && $(this).scrollTop() < bp2 ) {
				
			} else if (	$(this).scrollTop() >= bp2 && $(this).scrollTop() < bp3 - 300 ) {
				$('#slide2 h1').css({'position': 'fixed', 'z-index': '999'});
				
			} else if (	$(this).scrollTop() >= bp3 && $(this).scrollTop() < bp4 - 300) {
				$('#slide3 h1').css({'position': 'fixed', 'z-index': '999'});
			} else if (	$(this).scrollTop() >= bp4 && $(this).scrollTop() < bp5 - 300) {
				$('#slide4 h1').css({'position': 'fixed', 'z-index': '999'});
			} else if (	$(this).scrollTop() >= bp5 && $(this).scrollTop() < bp6 - 300) {
				$('#slide5 h1').css({'position': 'fixed', 'z-index': '999'});
			} else if ( $(this).scrollTop() >= bp6  ){
				$('#slide6 h1').css({'position': 'fixed', 'z-index': '999'});
			}
			*/


			//bar animation			
			$('.bar > span').each(function(index) {
				//console.log(index + '::'+$(this).width() )
				$(this).next().html( 
					Math.round(
						( $(this).width() / 458 ) * 100 
					)+ '%' );
			    
			});



		}




		/*
		skrollr easing options
		linear: The default. Doesn't need to be specified.
		quadratic: To the power of two. So 50% looks like 25%.
		cubic: To the power of three. So 50% looks like 12.5%
		begin/end: They always return 0 or 1 respectively. No animation.
		swing: Slow at the beginning and accelerates at the end. So 25% -> 14.6%, 50% -> 50%, 75% -> 85.3%
		sqrt: Square root. Starts fast, slows down at the end.
		outCubic
		bounce: Bounces like a ball. See https://www.desmos.com/calculator/tbr20s8vd2 for a graphical representation.
		*/
		//.addClass( "disabled" ).css('border','solid thin red').disable(true);


		
		

})( jQuery )
