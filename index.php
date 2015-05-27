<?php

$FIREFOX = false;
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $agent = $_SERVER['HTTP_USER_AGENT'];
    

}
if (strlen(strstr($agent, 'Firefox')) > 0){ $FIREFOX = true;    }

$links = array(
    "webinar" => "http://b2b.careerbuilder.com/l/27812/2015-04-30/kw4h",
    
    "report" => "http://b2b.careerbuilder.com/l/27812/2015-04-30/kw4f",

    'passive'=>'http://careerbuildercommunications.com/candidatebehavior2012/2012/',

    'consumer'=>'http://careerbuildercommunications.com/candidatebehavior2013/',
//'consumer'=>'http://thehiringsite.careerbuilder.com/2013/10/22/candidate-behavior-webinar/',
    'facebook'=>'http://facebook.com/cbforemployers',
    'twitter'=>'http://twitter.com/cbforemployers',
    'youtube'=>'http://youtube.com/cbforemployers',
    'linkenin'=>'https://www.linkedin.com/company/careerbuilder-for-employers'
);



?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Career Builder - Candidate Process</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="_/css/bootstrapCarMod.min.css">
	<link rel="stylesheet" type="text/css" href="_/css/style.css">
	<script src="_/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>


  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-13285887-18', 'auto');
  ga('require', 'linkid', 'linkid.js');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
  </script>


</head>
<body id="home">
	<div id="loader-wrapper">
		<img src="_/img/logo.svg" />
	    <div id="loader">
		    <span></span>
		    <span></span>
		    <span></span>
		    <span></span>

		</div>	 
	</div>

	<nav>
		<div class="wrapper">
				<ul>
					<li><a href="#slide2"> Candidate-Powered Economy</a></li>
					<li><a href="#slide3"> Candidate Process	</a></li>
					<li><a href="#slide4"> Pressured-Employer Economy</a></li>
					<li><a href="#slide5"> Hiring Process		</a></li>
					<li><a href="#slide6"> Recommendations	</a></li>
				</ul>
				<object data="_/img/logo.svg" type="image/svg+xml">
				  <img src="" />
				</object>
		</div>
		
	</nav>
	<section id="slide1"
			data-center-bottom="background-position: 0% 0%; "  
            data-top-bottom="background-position: 0% -150%;   "		 
	>
		<div id="slide1a"
			data-anchor-target="#slide1"
			data-center-bottom="background-position: 100% 50%; transform: translateY(0px);"
            data-top-bottom="background-position: 100% 0%; transform: translateY(150px);" >
        </div>
		<div id="slide1copy"
			data-anchor-target="#slide1"
			data-start="top: 60%; opacity:1;"
		    data-top-bottom="top: 40%; opacity:0;">
			<img src="_/img/bg1Copy.png"/>
		</div>
	</section>

	<article id="message1"
	data-bottom-top="background-position: 0px -250px; "			
    data-top-bottom="background-position: 0px 0px;">
    
		<h2
		data-anchor-target="#message1"
		data-start-top="opacity:1; transform: translateY(0px) scale(1)"
		data--5p-top="opacity:1; transform: translateY(0px) scale(1)"
		data--15p-top="opacity:0;  transform: translateY(-60px) scale(.8)"
		>The Recruitment Power Shift: <br/>How Candidates are Powering the Economy</h2>
		<p data-anchor-target="#message1"
		   data--15p-top="opacity:1; transform: translateY(0px) scale(1)"
		   data--25p-top="opacity:0;  transform: translateY(-80px) scale(.8)">
		<span>
				Today the power has shifted from the employer to the candidate, as employers find
				themselves losing top performers, and candidates with specialized skills are in high demand — and even harder to find. This study will help hiring managers and recruitment professionals get a behind-the-scenes look at candidates’ job search process as well as other employers’ hiring process to empower them with the insights necessary to gain a competitive recruitment edge.

			</span></p>
		<div
		data-anchor-target="#message1"
		data-center="transform: translateY(0px) "
		data-top-bottom="  transform: translateY(-20px) ">
		<a 
		data-anchor-target="#message1"
		data-center-top="opacity:1; left: 50%;"
		data--15p-top="opacity:1; left: 50%;"
		data--25p-top="opacity:0; left: 20%;"
		class="left open-popup-link" href="<?php echo $links['webinar'];?>"
		data-toggle="modal" data-target="#myModal">Join the Webinar</a>
		<a 
		data-anchor-target="#message1"
		data-center-top="opacity:1; left: 50%;"
		data--15p-top="opacity:1; left: 50%;"
		data--25p-top="opacity:0; left: 80%;"
		class="right open-popup-link" href="<?php echo $links['report'];?>"
		data-toggle="modal" data-target="#myModal2">Download the report</a>
		</div>
	</article>

	<div id="slide2All">
	<section id="slide2"
			
			data-bottom-top="background-position: 50% 200%;"  
            data-top-bottom="background-position: 50% -150%;" >
		<h1
		data-anchor-target="#slide2All"
        data-0p-top="position:relative;      transform: translateY(0px); opacity:1; "     
        data--5p-top="position:fixed;      transform: translateY(-60px); opacity:1; " 
        data--10p-top="position:fixed;      transform: translateY(0px); opacity:1; "   
        data--40p-bottom="position:fixed; transform: translateY(0px); opacity:1; "
        data--60p-bottom="position:fixed;  transform: translateY(-60px); opacity:0; "

        ><span
			data-anchor-target="#slide2"
			data-bottom-top="transform: translateY(0px)  scale(1.5); opacity:0; "
			data-center="transform: translateY(0px)   scale(1);  opacity:1; "
			>Candidate-Powered Economy</span></h1>
       	<div id="slide2a"
			data-anchor-target="#slide2"
			data-bottom-top="background-position: 50% 100%;"  
            data-top-bottom="background-position: 50% -50%;"
			
		></div>
		<div id="slide2copy"
		    data-anchor-target="#s2l"
			data-bottom-top="top: 20%; opacity: 0"
			data-60p-top="top: 50%; opacity:1"


			data-10p-top="top: 50%; opacity:1"
            data-top-bottom="top: 50%; opacity:0" 
		></div>


			<span id="s2l" class="left"

			data-bottom-top="opacity:0; left: 20%;"
			data-60p-top="opacity:1; left: 50%;"
			data--200-top="opacity:1; left: 50%;"
			data--500-top="opacity:0; left: 20%;">
				<strong>5,013</strong>
				Candidates surveyed in the U.S.				
			</span>
			<span class="right"

			data-bottom-top="opacity:0; left: 80%;"
			data-60p-top="opacity:1; left: 50%;"

			data--200-top="opacity:1; left: 50%;"
			data--500-top="opacity:0; left: 80%;">
				<strong>2,002</strong>
				Hiring managers in the U.S.
			</span>
	

	</section>
	<article id="message2">
		<h2
		    data-anchor-target="#slide2"
		    data-bottom-top="transform: translateY( 60px)  scale(.8); opacity:1;"
			data-center-top="transform: translateY( 0px)   scale(1);  opacity:1;"
			data--80p-bottom="transform: translateY(0px)   scale(1);  opacity:1;"
			data-top-bottom="transform: translateY( -20px) scale(1);  opacity:0;"
			>The New Candidate-Powered Economy</h2>
		<p 
			data-anchor-target="#slide2"
		    data-bottom-top="transform: translateY( 120px) scale(.8);"
			data-center-top="transform: translateY( 0px) scale(1);"
			data--80p-bottom="transform: translateY(0px) scale(1); opacity:1"
			data-top-bottom="transform: translateY( -20px) scale(1); opacity:0"
			>
			Amid the backdrop of a strengthening U.S. economy and slowly downward-trending unemployment rate, the power has been shifting from the employer back to the candidate.</p>
		
		<div id="m2b1" class="box"
			data-anchor-target="#slide2"
		 	data-bottom-top="transform: translateY(40px);"
			data-center-top="transform: translateY(0px);"
			>
			<em class="centerIcon"
			data-anchor-target="#slide2"
			data-bottom-top="transform: translateY(40px); opacity: 0;"
			data-center-top="transform: translateY(0px); opacity: 1"
			data-top-bottom="transform: translateY(0px); opacity:1"
			data--120p-bottom="transform: translateY(-20px); opacity:.5;"
			><?php include '_/php/icon1_muscle.php'; ?></em>
			<div
				data-anchor-target="#slide2"
				data-bottom-top="background-color: rgb(166,168,171)"
			    data-center-top="background-color: rgb(96,97,99)"
			>
				
				<p
				data-anchor-target="#slide2"
				data-bottom-top="transform: translate(20px, 100px);"
			    data-center-top="transform: translate(0px, 0px);"
			    data-top-bottom="transform: translate(0px, 0px); opacity:1;"
			    data--120p-bottom="transform: translate(0px, -20px); opacity:0;"
				>
				3 in 4 full-time employed workers are open to or actively looking for new job opportunities.</p>
				
				<p
				data-anchor-target="#slide2"
				data-bottom-top="transform: translate(20px, 100px);"
			    data-center-top="transform: translate(0px, 0px);"
			    data-top-bottom="transform: translate(0px, 0px); opacity:1;"
			    data--120p-bottom="transform: translate(0px, -20px); opacity:0;">
			    On average, job seekers use 18 different sources when searching for a job — a steady increase from previous years and reinforcing the idea of the consumer candidate.</p>
			</div>
			

		</div>
		
		<p
		    data-anchor-target="#m2b1"
			data-bottom-top="transform: translateY(60px) scale(.8); opacity: 0;"
			data-center-top="transform: translateY(0px) scale(1); opacity: 1"
			data--80p-bottom="transform: translateY(0px) scale(1); opacity:1"
			data-top-bottom="transform: translateY(-20px) scale(1); opacity:0"
			>Today’s candidates are much more selective in terms of where they apply, as evidenced by the array of online resources they use to evaluate potential employers. They do their due diligence — much like they would do their homework if they were buying a house or a car — before ever deciding whether to take that next step and apply. Your organization won’t even appear on their radar if you haven’t built a strong presence on these channels.
		</p>
	</article>
	</div>
	<div id="slide3All">
	<section id="slide3"
			style="transform-origin: center center;"
			data-bottom-top="background-position: 50% -25%; background-size: 4226px 1278px"  
            data-center="background-position: 50% 0%; background-size: 2113px 650px"
            data-bottom-top="background-position: 50% 0%; background-size: 2113px 650px"
            >
		<h1
		data-anchor-target="#slide3All"
        data-0p-top="position:relative;      transform: translateY(0px); opacity:1; "     
        data--5p-top="position:fixed;      transform: translateY(-60px); opacity:1; " 
        data--10p-top="position:fixed;      transform: translateY(0px); opacity:1; "          
        data--40p-bottom="position:fixed; transform: translateY(0px); opacity:1; "
        data--60p-bottom="position:fixed;  transform: translateY(-60px); opacity:0; ">
		<span>Candidate Process</span>
		</h1>

		<!--div id="slide3a"
			style="transform-origin: center top;"
			data-anchor-target="#slide3"
			data-bottom-top="transform: translate(0px, 0px) scale(2);" 
			data-center="transform: translate(0px, 0px) scale(1);" 
            data-top-bottom="transform: translate(0px, 200px) scale(1);"
            >
			
		</div-->	


		<div class="left"
			data-anchor-target="#slide3"
			data-bottom-top="top: 50%; "
			data--50p-bottom="top: 10%;"
            data-top-bottom="top: 0%; " >
			
		</div>
		<div class="right"
			data-anchor-target="#slide3"
			data-bottom-top="top:10%; "			
            data-top-bottom="top: 0%; ">
			
		</div>

	</section>
	

	<article id="message3">
	<h2 	data-bottom-top="transform:  translateY(50px) scale(.8); opacity:.5; "
			data-80p-top="transform:     translateY(0px) scale(1);  opacity:1; "
			data-5p-top=="transform:    translateY(0px) scale(1);  opacity:1; "
			
			data-top-bottom="transform:  translateY(-50px) scale(1);  opacity:.5;">
			The Candidate Process: <br/>The 4 Phases of the Job Search</h2>
	<p

		    data-bottom-top="transform: translateY(150px) scale(.8); opacity:.5; "
			data-80p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			data-10p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			
			data-top-bottom="transform: translateY(-40px) scale(.9);  opacity:0;"

	>How do candidates go about conducting their research? They go through four key phases along the journey of finding a new job. </p>

	<div id="myCarousel" class="carousel slide" data-ride="carousel"
			data-bottom-top="transform: translateY(120px) scale(.8); opacity:.8; "
			data-5p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			data-80p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			data-top-bottom="transform: translateY(-20px) scale(.9);  opacity:0;"
	>
    <!-- Indicators --> 
     <div class="myCarouselWrapper">
		  <div id="ci0" class="cNumber color0"
		    data-anchor-target="#slide3"
		    data-bottom-top="transform: translate(-100px, 200px); "
			data-center-top="transform: translate(0px, 0px); ">
		  	<strong>1</strong>
		  	<i>Orientation</i>
		  	<span class="color0"></span>
		    </div>
		  <div id="ci1p" class="carousel slide" data-ride="carousel"
		  	data-anchor-target="#slide3"
		  	data-bottom-top="transform: translate(0px, 50px);"
			data-center-top="transform: translate(0px, 0px); ">
		      <div id="ci1" class="carousel-inner">
		        <div class="item active"></div>
		        <div class="item"></div>
		        <div class="item"></div>
		        <div class="item"></div>
		      </div>

		      <div class="icons icon0"
		      data-anchor-target="#slide3"
		      data-bottom-top="transform: translateY(50px);"
			  data-center-top="transform: translateY(0px); ">
		      		<span class="icon1">
		      			
		      		</span>
		      </div>
	      </div>
	      <div id="ci2p" class="carousel slide" data-ride="carousel" >
	       <div id="ci2" class="carousel-inner">
	        <div class="item active">
	    	<!--<img src="_/img/bg3_1.jpg"/> -->  
		
	        This phase consists of a candidate's self-evaluation and evaluation of the market. During this phase, candidates will update their resumes; search for jobs on major search engines including Google, Bing, Yahoo; network with colleagues, family and friends; and visit job boards to assess the market.
	        </div>
	        <div class="item">
	        <!-- <img src="_/img/bg3_2.jpg"/>    -->
	         During this phase, the job search moves from solitary practice to an interactive social experience. Candidates tap into their social networks to get a more transparent look at the companies they are considering. At this point candidates will visit companies' career sites; network with colleagues, family and friends; and check out companies' social media presence.
	        </div>
	        <div class="item">
	        	<!--<img src="_/img/bg3_3.jpg"/> -->  
	          In this phase, candidates are actively applying to jobs. During this phase, candidates will conduct in-depth research on your organization and form opinions based on the application experience, which will influence their decision to apply in the future or recommend this company to others. 
	        </div>
	        <div class="item">
	        	<!--<img src="_/img/bg3_4.jpg"/> -->  
	          In this last phase, candidates are interacting with employers, interviewing and considering job offers. This is where your earlier employment brand efforts pay off. 
	        </div>
	      </div>
	     </div>

	      <ol class="carousel-indicators"
	      	data-anchor-target="#slide3"
	      	data-bottom-top="transform: translateY(50px) scale(2); opacity:.2;"
			data-center-top="transform: translateY(0px) scale(1);  opacity:1;">
	        <li data-slide-to="0" class="active"></li>
	        <li data-slide-to="1" class=""></li>
	        <li data-slide-to="2" class=""></li>
	        <li data-slide-to="3" class=""></li>
	      </ol>


      </div>

      <a class="left carousel-control" data-slide="prev"
      
       		data-bottom-top="transform: translateX(-300px); opacity:.2;"
			data-80p-top=" transform: translateX(0px); opacity:1; "
			data-top-bottom="transform: translateX(0px);  opacity:1;">

				 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="75px" >
					<polyline fill="none" stroke="#59595B" stroke-width="3.001" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" 
					points="
					38.5,1.5 
					1.5,37.477 
					38.481,73.5 "
		            data-anchor-target="#ci2"
                    data-bottom=" opacity: 1"
                    data--30p-bottom="opacity: 1"
                />
				</svg>
      </a>
      <a class="right carousel-control" data-slide="next"
      		data-bottom-top="transform: translateX(300px); opacity:.2;"
			data-80p-top="transform: translateX(0px);  opacity:1;"
			data-top-bottom="transform: translateX(0px);  opacity:1;">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="75px">
				<polyline fill="none" stroke="#59595B" stroke-width="3.001" stroke-linecap="round" stroke-linejoin="round" 
				stroke-miterlimit="10" 
				points="
				1.519,1.5 
				38.5,37.523 
				1.5,73.5 "

                    data-anchor-target="#ci2"
                    data-bottom="@stroke-dashoffset: 120; opacity: 1"
                    data-center="@stroke-dashoffset: 0; opacity: 1"
                

				/>
			</svg>

      </a>
    </div>


	<h2     data-bottom-top="transform: translateY(150px); opacity:0; translate: scale(.5)"
			data-80p-top="transform: translateY(0px);  opacity:1;  translate: scale(1)"
			data-20p-top="transform: translateY(0px);  opacity:1;  translate: scale(1)"
			data-top-bottom="transform: translateY(-20px);  opacity:0;  translate: scale(.8)">
			What the Numbers Say</h2>
	<p
			data-bottom-top="transform: translateY(150px); opacity:0; translate: scale(.5)"
			data-80p-top="transform: translateY(0px);  opacity:1;  translate: scale(1)"
			data-20p-top="transform: translateY(0px);  opacity:1;  translate: scale(1)"
			data-top-bottom="transform: translateY(-20px);  opacity:0;  translate: scale(.8)">
		Make selections in this graphic to learn specifically about the candidate process from start to finish.</p>
	
	<?php $subCat = array(
						array("Country", 0),
						array("Gender", 1),
						array("Generation", 2),
						array("Employment Status", 3),
						array("Education", 4),
						array("Job Level", 5),
						array("US Region", 6),
						array("Industry", 7),
						array("Job Type", 8),
						array("Ethnicity", 9),
						array("Salary", 10)
					);	?>
	
	
	<div id="numbers"
			
			data-bottom-top="transform: translate(0px, 250px); opacity:.2;"
			data-90p-top="transform: translate(0px, 0px);  opacity:1;"
			data--40p-top="transform: translate(0px, 0px);  opacity:1;"
			data-top-bottom="transform: translate(0px, -20px) ;  opacity:0;"

			>
		<div id="numbersInner">
	
			<div id="col1-2">
				<div class="col1">
					<h3>Research Category </h3>
					<ul id="subCat">
						<?php
						foreach ($subCat as $vIndex => $v) {
						    echo '<li data-id="'. $v[1] .'">' . $v[0] .'</li>';
						}
						?>
					</ul>
				
				</div>
				<div class="col2">
					<h3>Research Subcategory</h3>
					<ul id="resCat">
						
					</ul>
				</div>
			</div>
			
			
			<div id="results" class="col3">
				<h3>Results</h3>
				<h4>
					<img src="_/img/icon-orientation.png"/>
					<span class="color0">
						Phase 1: Orientation
					</span>
				</h4>
				<div class="white">
					<span id="r1">
						<p></p><strong>use Google search</strong>
					</span>
					<span id="r2">
						<p></p><strong>use a job board</strong>
					</span>
				</div>
				<h4>
					<img src="_/img/icon-strategy.png"/>
					<span class="color1">
						Phase 2: Consideration
					</span> 
				</h4>
				<div class="white">
					<span id="r3">
						<p></p><strong>use a career site</strong>
					</span>
					<span id="r4">
						<p></p><strong>use social media</strong>
					</span>
				</div>
				<h4>
					<img src="_/img/icon-seeking.png"/>
					<span class="color2">
						Phase 3: Action
					</span> 
				</h4>
				<div class="white">
					<span id="r5">
						<p></p><strong>consider employers to be responsive</strong>
					</span>
				</div>
				<h4>
					<img src="_/img/icon-engagement.png"/>
					<span class="color3">
						Phase 4: Engagement
					</span> 
				</h4>
				<div class="white last">
					<span id="r6">
						<p></p><strong>Would compromise on salary for a good experience</strong>
					</span>
				</div>
				
			</div><!-- end of results -->

		</div>
	</div>


	<!-- begin my terrible mobile hack -->
	<?php $subCat2 = array(
						array("Select",),
						array("Country", 0),
						array("Gender", 1),
						array("Generation", 2),
						array("Employment Status", 3),
						array("Education", 4),
						array("Job Level", 5),
						array("US Region", 6),
						array("Industry", 7),
						array("Job Type", 8),
						array("Ethnicity", 9),
						array("Salary", 10)
					);	?>

	<div id="numbersMobile">
		<h2>Select Subcategory </h2>
		<div>
												<!-- delete '2' from subCat to remove terrible hack -->
			<select id="subCatMobile" name="subCatMobile"> <?php foreach ($subCat2 as $vIndex => $v) {
					    echo '<option value="'. $v[1] .'">' . $v[0] .'</option>';
					} ?>
			</select>
		</div>

		<h2>Select Research Category</h2>
		<div>
			<select id="resCatMobile"> 
					<option value="0">Select</option>
			</select>
		</div>
		
		<div id="resMobHeader">
			<h2>Results</h2>
		</div>
		<div id="resultsMobile">
			<span id="r1m"><p></p><strong>use Google search</strong></span>
			<span id="r2m"><p></p><strong>use a job board</strong></span>
			<span id="r3m"><p></p><strong>use a career site</strong></span>
			<span id="r4m"><p></p><strong>use social media</strong></span>
			<span id="r5m"><p></p><strong>consider employers to be responsive</strong></span>
			<span id="r6m"><p></p><strong>would compromise on salary for a good experience</strong></span>
		</div>
	</div>

		
	</article>
	</div>
	<div id="slide4All">
	<section id="slide4"
		    	>
	<h1	data-anchor-target="#slide4All"
        data-0p-top="position:relative;      transform: translateY(0px); opacity:1; "     
        data--5p-top="position:fixed;      transform: translateY(-60px); opacity:1; " 
        data--10p-top="position:fixed;      transform: translateY(0px); opacity:1; "         
        data--40p-bottom="position:fixed; transform: translateY(0px); opacity:1; "
        data--60p-bottom="position:fixed;  transform: translateY(-60px); opacity:0; ">
        <span>Pressured-Employer Economy</span></h1>	
		<div id="slide4a"
			data-bottom-top="transform: translate(200px, 150px) scale(1.5); background-position: 100% 0%;"
			data-center-bottom="transform: translate(0px, 50px) scale(1); background-position: 100% 0%;"  
			data-top-bottom="transform: translate(0px, 0px) scale(1); background-position: 100% 0%;"></div>	
	</section>


	<article id="message4">

	<h2		
			
			data-bottom-top="transform: scale(.8); opacity:.5; transform:  translateY(0px)"
			data-80p-top="transform:  scale(1);  opacity:1;transform:  translateY(0px)"
			data-20p-top="transform:  scale(1);  opacity:1;transform:  translateY(0px)"
			data-top-bottom="transform: scale(.9);  opacity:1; transform:  translateY(-40px)"
			>The Pressured-Employer Economy</h2>
	<p
		 
		 	data-bottom-top="transform: translateY(150px) scale(.8); opacity:.5; "
			data-80p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			data-20p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			data-top-bottom="transform: translateY(0px) scale(.9);  opacity:1;"
			>Employers may have enjoyed the upper hand in the hiring process during the recession, 
		as millions of highly skilled workers found themselves out of jobs. As a result, many 
		candidates wound up with lower-than-average salary offers for highly skilled jobs. 
		Now, the employment landscape has shifted since the economy began its rebound.</p>

	<div id="m4b1" class="box"
			data-anchor-target="#message4"
		 	data-bottom-top="transform: translateY(120px);"
			data-80p-top="transform: translateY(0px);"
			data-20p-top="transform: translateY(0px);"
			data--50p-bottom="transform: translateY(-120px);">
		<em class="centerIcon"
			data-anchor-target="#message4"
			data-bottom-top="transform: translateY(80px); opacity: 1;"
			data-center-top="transform: translateY(0px); opacity: 1"
			data-top-bottom="transform: translateY(-20px); opacity:1"
			><?php include '_/php/icon2_pipe.php'; ?></em>
		<div
				data-anchor-target="#message4"
				data-bottom-top="background-color: rgb(166,168,171)"
			    data-80p-top="background-color: rgb(96,97,99)"
			    data-top-bottom="background-color: rgb(96,97,99)"  
			>
			
			<p  data-anchor-target="#m4b1"
				data-bottom-top="transform: translateY(100px);"
			    data-90p-top="transform: translateY(0px);"
			    data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-55px);">
				More than half of employers admit that over the past five years it has grown 
				increasingly difficult to find qualified candidates. 
			</p>
			<div class="bar bar1" 
				data-anchor-target="#m4b1"
				data-bottom-top="transform: translateY(100px);"
			    data-90p-top="transform: translateY(0px);"
			    data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-20px);">
				<span
				data-bottom-top="width:0%";
				data--30p-bottom="width:50%";
				></span><i>54%</i></div>
			<p  data-anchor-target="#m4b1"
				data-bottom-top="transform: translateY(140px);"
			    data-90p-top="transform: translateY(0px);"
			    data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-20px);">
				Half of all employers say it’s hard to find candidates with the appropriate skills for the positions they are hiring for.
			</p>
			<div class="bar bar2"
				data-anchor-target="#m4b1"
				data-bottom-top="transform: translateY(140px);"
			    data-90p-top="transform: translateY(0px);"
			    data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-20px);">
				<span
				data-bottom-top="width:0%";
				data--30p-bottom="width:50%";
				></span><i>50%</i></div>
			<p 
			    data-anchor-target="#m4b1"
				data-bottom-top="transform: translateY(200px);"
			    data-90p-top="transform: translateY(0px);"
			    data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-20px);">
				The vast majority of employers admit that making a bad hire is far more costly than leaving a position open.
			</p>
			<div class="bar bar3" 
				data-anchor-target="#m4b1"
				data-bottom-top="transform: translateY(200px);"
			    data-90p-top="transform: translateY(0px);"
			    data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-20px);">
			    <span
				data-bottom-top="width:0%";
				data--30p-bottom="width:73%";
				></span><i>73%</i></div>

			<h4 data-anchor-target="#m4b1"
			    data-bottom-top="transform: translateY(250px); color:rgb(255,255,255)"
			    data-center-top="transform: translateY(0px);   color:rgb(255,255,255)"
			    data-35p-top=" 								   color:rgb(244,159,35)"
			    data-top-bottom="transform: translateY(-20px); color:rgb(244,159,35)">Hint: Data Matters!</h4>
			<p  data-anchor-target="#m4b1"
			    data-bottom-top="transform: translateY(250px);"
			    data-center-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
				Data and analytics are crucial to determining what is — and what isn't — working when it comes to workforce planning and recruitment. 
			</p>
		</div>
		

	</div>

	</article>

	
	<h2 class="phoneOnly orange">Did you know?</h2>
	<div id="diduknow-1-alt">
		<span class="left"
		data-anchor-target="#diduknow-1-alt"
		data-bottom-top="background-position: 50% 60%;"
		data-center="background-position: 50% 30%;    left: 0%;"
		data-top="background-position: 50% 30%;       left: 0%; opacity:1;"
		data-top-bottom="background-position: 50% 0%; left: -50%; opacity:0;">
	    </span>
		<span class="right"
		data-anchor-target="#diduknow-1-alt"
		data-bottom-top="background-position: 50% 60%;"
		data-center="background-position: 50% 30%;      left: 50%;"
		data-top="background-position: 50% 30%;         left: 50%; opacity:1;"
		data-top-bottom="background-position: 50% 0%;   left: 100%; opacity:0">
			<div><em><?php include '_/php/IntuitiveData.php'; ?>
			</em><span>Intuitive Data and Analytics</span></div>
			<p>CareerBuilder’s comprehensive workforce data and analytics solutions enable you to find where the candidates are and how much to pay them — in just a few clicks; build an effective, long-term workforce planning strategy; and compare your supply of candidates to the rest of the market for more informed sourcing decisions.</p>
		</span>
		<img 
			data-anchor-target="#diduknow-1-alt"
			data-bottom-top="top:-50%;"  
			data-center="top:150%;" 
		src="_/img/dyk-icon.png" alt="">
	</div>
	</div>
	
	<div id="slide5All">
	<section id="slide5"
		data-bottom-top="background-position: 100% 25%;" 
		data-top-bottom="background-position: 50% -25%;">
	<h1 data-anchor-target="#slide5All"
        data-0p-top="position:relative;      transform: translateY(0px); opacity:1; "     
        data--5p-top="position:fixed;      transform: translateY(-60px); opacity:1; " 
        data--10p-top="position:fixed;      transform: translateY(0px); opacity:1; "          
        data--40p-bottom="position:fixed; transform: translateY(0px); opacity:1;"
        data--60p-bottom="position:fixed;  transform: translateY(-60px); opacity:0; ">
        <span>The Hiring Process</span></h1>
			
	<div id="slide5a"
			data-bottom-top="transform: translate(10%, 0px)"

			data-top-bottom="transform: translate(-10%, 0px)"
			></div>
				
	</section>
	<article id="message5">
		<h2 
			
			data-bottom-top="transform: translateY(100px) scale(.8); opacity:0; "
			data-80p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			data-20p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			data-top-bottom="transform: translateY(-40px) scale(.9);  opacity:1;"
			>
			The Hiring Process — Unveiled</h2>

		<p  
			
			data-bottom-top="transform: translateY(100px) scale(.8); opacity:0; "
			data-80p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			data-20p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			data-top-bottom="transform: translateY(-40px) scale(.9);  opacity:1;"> 
			Have you ever wondered what other companies’ hiring processes are like? We surveyed more than 2,000 hiring managers to give you an idea of what your peers are doing.</p>


		<div id="m5b1" class="box"
		    data-bottom-top="transform: translateY(120px);"
			data-95p-top="transform: translateY(0px);"
			data-20p-top="transform: translateY(0px);"
			data-top-bottom="transform: translateY(-120px);">
			<em class="topLeftIcon"
			data-bottom-top="transform: translateY(120px); opacity: .5;"
			data-90p-top="transform: translateY(0px); opacity: 1"
			data-20p-top="transform: translateY(0px); opacity: 1"
			data-top-bottom="transform: translateY(-20px); opacity:1">
			<?php include '_/php/runningMan.php'; ?></em>
			<div data-anchor-target="#m5b1"
				 data-bottom-top="background-color: rgb(166,168,171)"
			     data-80p-top="background-color: rgb(96,97,99)"
				>
				<h4>When asked if employers prefer an active or passive candidate
				 <small>(who most employers define as an employed individual who’s open to a new job opportunity)</small>:</h4>
				<p>
					51% say they prefer active candidate
				</p>
				<div class="bar bar1">
					<span
					data-bottom-top="width:0%";
					data--30p-bottom="width:51%";
					></span><i>51%</i>
				</div>
				<p>
					41% say they don’t have a preference.
				</p>
				<div  class="bar bar2">
					<span
					data-bottom-top="width:0%";
					data--30p-bottom="width:41%";></span><i>41%</i>
				</div>

				<hr>
				<h4><em class="inlineLeftIcon"
				data-bottom-top="transform: translateY(120px); opacity: .5;"
				data-90p-top="transform: translateY(0px); opacity: 1"
				data-20p-top="transform: translateY(0px); opacity: 1"
				data-top-bottom="transform: translateY(-20px); opacity:1">
				<?php include '_/php/icon4_pair.php'; ?></em>When a position opens up:</h4>
				<p>
					72% of employers say they first look at interal resources - including ATS, talent community/network, referrals — before posting a job.
				</p>
				<div class="bar bar3">
					<span
					data-bottom-top="width:0%";
					data--30p-bottom="width:73%"></span><i>73%</i>
				</div>
				<p>
					28% of emplyers directly post open positions externally.
				</p>
				<div class="bar bar4">
					<span
					data-bottom-top="width:0%";
					data--30p-bottom="width:54%"></span><i>54%</i>
				</div>
				<hr>
				<h4><em class="inlineLeftIcon"
					data-bottom-top="transform: translateY(120px); opacity: .5;"
					data-90p-top="transform: translateY(0px); opacity: 1"
					data-20p-top="transform: translateY(0px); opacity: 1"
					data-top-bottom="transform: translateY(-20px); opacity:1">
					<?php include '_/php/icon5_watch.php'; ?></em>
					Could they be more efficient though?<br/>Absolutely:</h4>
				<p>
					Nearly three-quarters of employers say it takes them more than 30 minutes to post a job to all the places they source candidates, 
				</p>
				<div  class="bar bar5">
					<span 
					data-bottom-top="width:0%";
					data--30p-bottom="width:78%"></span><i>78%</i>
				</div>
				<p>
					while 42% say it takes them more than an hour. 
				</p>
				<div  class="bar bar6">
					<span 
					data-bottom-top="width:0%";
					data--30p-bottom="width:42%"></span><i>42%</i>
				</div>
				<p>
					Is that time well spent? Despite taking time to post in all of these places, the majority say they don’t even don't even source code where an applicant comes from.

				</p>
				<div  class="bar bar7">
					<span 
					data-bottom-top="width:0%";
					data--30p-bottom="width:56%"></span><i>56%</i>
				</div>

				<?php  include '_/php/arrows.php' ?>
				
			</div>
			

		</div>
		<p  data-bottom-top="transform: translateY(50px) scale(1); opacity:1; "
			data-80p-top="transform: translateY(-40x)  scale(1.2);  opacity:1; "
			data-20p-top="transform: translateY(-40px)  scale(1.2);  opacity:1; "
			data-top-bottom="transform: translateY(-50px) scale(1.2);  opacity:1;">This is an example of working harder and not necessarily smarter. By being more strategic about where they post depending on the ROI they get, employers could cut this time down while seeing better results.</p>



	</article>
	<h2 class="phoneOnly orange">Did you know?</h2>
	<div id="diduknow-2-alt">
		<span class="left"
		data-anchor-target="#diduknow-2-alt"
		data-bottom-top="background-position: 50% 60%;"
		data-center="background-position: 50% 30%;    left: 0%;"
		data-top="background-position: 50% 30%;       left: 0%; opacity:1;"
		data-top-bottom="background-position: 50% 0%; left: -50%; opacity:0;">
	    </span>
		<span class="right"
		data-anchor-target="#diduknow-2-alt"
		data-bottom-top="background-position: 50% 60%;"
		data-center="background-position: 50% 30%;      left: 50%;"
		data-top="background-position: 50% 30%;         left: 50%; opacity:1;"
		data-top-bottom="background-position: 50% 0%;   left: 100%; opacity:0">
			<div><em><?php include '_/php/RecruiterEfficiency.php' ?></em><span>Recruiter Efficiency</span></div>
				<p>Engaging candidates takes time and effort that clients do not often have, so we at CareerBuilder build our software tools to help clients do in just a few clicks what used to take hours to do manually. Because recruiter efficiency saves you time and money — and who doesn’t want to add time back in their day?
			</p>	
		</span>
		<img 
			data-anchor-target="#diduknow-2-alt"
			data-bottom-top="top:-50%;"  
			data-center="top:150%;" 
			src="_/img/dyk-icon.png" alt="">
	</div>

	<article id="message5a" 
			data-top-bottom="background-position: 50% -150%;"
			data-bottom-top="background-position: 50% 150%;	">

		<h2 data-bottom-top="transform: scale(.8); opacity:.5; "
			data-80p-top="transform:  scale(1.2);  opacity:1; "
			data-20p-top="transform:  scale(1.2);  opacity:1; "
			data-top-bottom="transform: scale(1.1;  opacity:1;">
			The Interview Process</h2>
		<div id="m5ab1" class="box"
			data-bottom-top="transform: translateY(60px);"
			data-90p-top="transform: translateY(0px);"
			data-20p-top="transform: translateY(0px);"
			data-top-bottom="transform: translateY(-120px);">
			<em class="topLeftIcon"
			data-bottom-top="transform: translateY(80px); opacity: 1;"
			data-90p-top="transform: translateY(0px); opacity: 1"
			data-20p-top="transform: translateY(0px); opacity: 1"
			data-top-bottom="transform: translateY(-20px); opacity:1">
			<?php include '_/php/icon6_vol.php'; ?></em>
			<div>
				<h4 data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">When it comes to interviewing candidates, communication is still an area that could use improvement.</h4>
				<p 	data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
					58% of employers say they don't communicate to applicats how long the application or interview process will take.
				</p>
				<div class="bar bar1"
					data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
			    	<span
					data-bottom-top="width:0%";
					data-80p-top="width:58%"></span><i>58%</i>
				</div>
				<hr>

				<h4 data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
			    	<em class="inlineLeftIcon"
					data-bottom-top="transform: translateY(40px); opacity: 0;"
					data-80p-top="transform: translateY(0px); opacity:1;"
			    	data-20p-top="transform: translateY(0px); opacity:1;"
					data-top-bottom="transform: translateY(-20px); opacity:1">
					<?php include '_/php/icon7_phone.php'; ?></em>
					When it comes to the actual interview:</h4>
				<p  data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
					The majority of employers say less than half of candidates make it past an initial screening and are offered a phone or in-person interview.
				</p>
				<div class="bar bar2"
					data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
			    	<span
					data-bottom-top="width:0%";
					data-80p-top="width:73%"></span><i>73%</i>
				</div>
				<p  data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
					67% of employers say less than half of candidates make it through the initial screening or phone interview but are eliminated after a bad in-person interview.
				</p>
				<div class="bar bar3" 
					data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
			    	<span
					data-bottom-top="width:0%";
					data-80p-top="width:67%"></span><i>67%</i>
				</div>
				<p  data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
					On average, employers conduct 3 phone interviews and 3 in-person interviews for an open position.
				</p>
				<hr> 
				<h4 data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
			    	<em class="inlineLeftIcon"
					data-bottom-top="transform: translateY(80px); opacity: 1;"
					data-90p-top="transform: translateY(0px); opacity: 1"
					data-20p-top="transform: translateY(0px); opacity: 1"
					data-top-bottom="transform: translateY(-20px); opacity:1">
					<?php include '_/php/icon8_think.php'; ?></em>
					When it comes to the post-interview process:</h4>
				<p  data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
					Nearly half say it takes between 1—2 days after the final interview to extend an offer to a candidate.
				</p>
				<div class="bar bar4"
					data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
			    	<span		
			    	data-bottom-top="width:0%";
					data-80p-top="width:45%"></span><i>45%</i>
				</div>
				<p  data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
					However, it takes some more than 3 days to do so.
				</p>
				<div class="bar bar5" 
				    data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
			    	<span
					data-bottom-top="width:0%";
					data-80p-top="width:38%"></span><i>38%</i>
				</div>
				<p  data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
					On average, employers say about 18% of candidates reject the initial offer and negotiate for a better one.
				</p>
				<div class="bar bar6"
					data-bottom-top="transform: translateY(100px);"
			    	data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    	data-top-bottom="transform: translateY(-40px);">
			    	<span
					data-bottom-top="width:0%";
					data-80p-top="width:18%"></span><i>18%</i>
				</div>			
			</div>
			

		</div>



	</article>

	<article id="message5b">
		<h2 data-bottom-top="transform: scale(.8); opacity:.5; "
			data-80p-top="transform:  scale(1);  opacity:1; "
			data-20p-top="transform:  scale(1);  opacity:1; "
			data-top-bottom="transform: scale(1);  opacity:1;">The High Cost of a Bad Impression </h2>

		<p  data-bottom-top="transform: translateY(150px) scale(.8); opacity:.5; "
			data-80p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			data-20p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			data-top-bottom="transform: translateY(-20px) scale(1);  opacity:1;">For every 9 applications that a job seeker submits, he or she only gets called in on average for 2 interviews. Even worse, they say that only 40% of their applications ever receive a response.</p>

		<p 	data-bottom-top="transform: translateY(150px) scale(.8); opacity:.5; "
			data-80p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			data-20p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			data-top-bottom="transform: translateY(-20px) scale(1);  opacity:1;">The perception out there is that employers simply aren’t responsive during the hiring process. And the data backs it up. Only 14% of candidates feel companies have been responsive to them.</p>


		<div id="m5bb1" class="box" 
			data-bottom-top="transform: translateY(60px);"
			data-80p-top="transform: translateY(0px);"
			data-20p-top="transform: translateY(0px);"
			data-top-bottom="transform: translateY(-120px);">
			<em class="topLeftIcon" 
			data-bottom-top="transform: translateY(80px); opacity: 1;"
			data-90p-top="transform: translateY(0px); opacity: 1"
			data-20p-top="transform: translateY(0px); opacity: 1"
			data-top-bottom="transform: translateY(-20px); opacity:1">
				<?php include '_/php/icon9_speech.php'; ?></em>
			<div data-bottom-top="background-color: rgb(166,168,171)"
			     data-center-top="background-color: rgb(96,97,99)"
			     data-top-bottom="background-color: rgb(96,97,99)"  >
				<h4 class="white" data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">

			    <strong>Employers agree that they aren’t as responsive as they could be.</strong> More than half of companies say they respond to less than half of the candidates that apply. <strong>Why?</strong></h4>
				
				<p data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					32% say they don’t think they need to respond to everyone.
				</p>
				<div class="bar bar1 " data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					<span
					data-bottom-top="width:0%";
					data--30p-bottom="width:32%"></span><i>32%</i>
				</div>
				<p data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					29%  say there are too many candidates to respond to.
				</p>
				<div class="bar bar2" data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					<span
					data-bottom-top="width:0%";
					data--30p-bottom="width:29%"></span><i>29%</i>
				</div>
				<p data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					18% say they don’t have enough time.
				</p>
				<div class="bar bar3" data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					<span
					data-bottom-top="width:0%";
					data--30p-bottom="width:18%"></span><i>18%</i>
				</div>
				<p data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					10% say it’s company policy not to respond.
				</p>
				<div class="bar bar4" data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					<span
					data-bottom-top="width:0%";
					data--30p-bottom="width:10%"></span><i>10%</i>
				</div>
				<hr>


				<h4 class="white" data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
			    <em class="inlineLeftIcon" 
					data-bottom-top="transform: translateY(80px); opacity: 1;"
					data-90p-top="transform: translateY(0px); opacity: 1"
					data-20p-top="transform: translateY(0px); opacity: 1"
					data-top-bottom="transform: translateY(-20px); opacity:1">
					<?php include '_/php/icon10_speech.php'; ?></em>
					Only 27% of candidates say an employer gave them an explanation of why they didn’t get a job after interviewing.</h4>
				

				<h4 data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">The unfortunate reality is that employers often underestimate how much of an impact a poor candidate experience can have.</h4>
				<p data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">69% of job seekers say they are less likely to buy from a company they had a bad experience with during the interview process.</p>
				<div class="bar bar5" data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					<span
					data-bottom-top="width:0%";
					data--30p-bottom="width:69%"></span><i>69%</i>
				</div>

				<p data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					65% of job seekers say they are less likely to buy from a company who they didn’t hear back from after an interview.
				</p>
				<div class="bar bar6" data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					<span
					data-bottom-top="width:0%";
					data--30p-bottom="width:65%"></span><i>65%</i>
				</div>
				<p data-bottom-top="transform: translateY(90px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">58% of job seekers say they are less likely to buy from a company they didn't hear back from after submitting an application.</p>
				<div class="bar bar7" 
				data-bottom-top="transform: translateY(80px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					<span
					data-bottom-top="width:0%";
					data--30p-bottom="width:58%"></span><i>58%</i>
				</div>
				<p data-bottom-top="transform: translateY(80px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">45% of job seekers say they are less likely to buy from a company they received a low offer letter from.</p>
				<div class="bar bar8" data-bottom-top="transform: translateY(80px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					<span
					data-bottom-top="width:0%";
					data--30p-bottom="width:45%"></span><i>45%</i>
				</div>
				<hr>

				<h4 data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
			    <em class="inlineLeftIcon" 
			    data-bottom-top="transform: translateY(80px); opacity: 1;"
				data-90p-top="transform: translateY(0px); opacity: 1"
				data-20p-top="transform: translateY(0px); opacity: 1"
				data-top-bottom="transform: translateY(-20px); opacity:1">
				<?php include '_/php/icon11_speech.php'; ?></em>
					On the other end of the spectrum, making a positive impression can do wonders for a brand’s consumer image.</h4>
				<p data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">69% of job seekers say they are more likely to buy from a company who treated them with respect during the application process.</p>
				<div class="bar bar9" data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					<span
					data-bottom-top="width:0%";
					data--30p-bottom="width:69%"></span><i>69%</i>
				</div>
				<p data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    	data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">67% of job seekers say they are more likely to buy from a company that provided consistent updates throughout the application process.</p>
				<div class="bar bar10" 
				data-bottom-top="transform: translateY(100px);"
			    data-80p-top="transform: translateY(0px);"
			    data-20p-top="transform: translateY(0px);"
			    data-top-bottom="transform: translateY(-40px);">
					<span
					data-bottom-top="width:0%";
					data--30p-bottom="width:67%"></span><i>67%</i>
				</div>
			</div>
			

		</div>


	</article>

	<h2 class="phoneOnly orange">Did you know?</h2>

	<div id="diduknow-3-alt">
		<span class="left"
		data-anchor-target="#diduknow-3-alt"
		data-bottom-top="background-position: 50% 60%;"
		data-center="background-position: 50% 30%;    left: 0%;"
		data-top="background-position: 50% 30%;       left: 0%; opacity:1;"
		data-top-bottom="background-position: 50% 0%; left: -50%; opacity:0;">
	    </span>
		<span class="right"
		data-anchor-target="#diduknow-3-alt"
		data-bottom-top="background-position: 50% 60%;"
		data-center="background-position: 50% 30%;      left: 50%;"
		data-top="background-position: 50% 30%;         left: 50%; opacity:1;"
		data-top-bottom="background-position: 50% 0%;   left: 100%; opacity:0">
			<div><em><?php  include '_/php/CandidateExperience.php' ?>	
</em><span>Candidate Experience</span></div><p>
			Providing a great candidate experience also means recognizing that today's job seekers use multiple job search sources. That’s why CareerBuilder has built a digital platform to give our clients' jobs more exposure from any type of device — from desktop to mobile.
			</p>
		</span>
		<img 
			data-anchor-target="#diduknow-3-alt"
			data-bottom-top="top:-50%;"  
			data-center="top:150%;" 
		src="_/img/dyk-icon.png" alt="">
	</div>


	<div class="grayFiller"></div>
	</div>




	<div id="slide6All" >
	<section id="slide6"
			data-bottom-top="background-position: 0% 150%;"  
            data-top-bottom="background-position: 0% 0%;">
	<h1 data-anchor-target="#slide6"
        data-0p-top="position:relative;      transform: translateY(0px); opacity:1; "     
        data--5p-top="position:fixed;      transform: translateY(-60px); opacity:1; " 
        data--10p-top="position:fixed;      transform: translateY(0px); opacity:1; "          
        >
        <span>Recommendations</span></h1>
		<div id="slide6a"
			data-anchor-target="#slide6"
			data-bottom-top="transform: translate(0px, 150px) scale(2.5);" 
			data-center="transform: translate(0px, 0px) scale(1);" 
            data-top-bottom="transform: translate(0px, -50px) scale(1);"
            >
			
		</div>		
	</section>
	<article id="message6">
		<h2 data-bottom-top="transform: translateY(50px) scale(.8); opacity:.5; "
			data-80p-top="transform:  translateY(0px) scale(1);  opacity:1; "
			data-10p-top="transform:  translateY(0px)scale(1);  opacity:1; "
			data-top-bottom="transform: translateY(-40px) scale(1);  opacity:0;"
			>Tips Based on Real Data</h2>

		<p  data-bottom-top="transform: translateY(50px) scale(.8); opacity:.5; "
			data-80p-top="transform:  translateY(0px) scale(1);  opacity:1; "
			data-10p-top="transform:  translateY(0px)scale(1);  opacity:1; "
			data-top-bottom="transform: translateY(-40px) scale(1);  opacity:0;"
			>CareerBuilder knows candidates better than anyone else. We’ve been studying candidate behavior in-depth each year so we can bring you the latest data and insights to help you get the right job in front of the right people at the right time.

		</p>

		<p  data-bottom-top="transform: translateY(50px) scale(.8); opacity:.5; "
			data-80p-top="transform:  translateY(0px) scale(1);  opacity:1; "
			data-10p-top="transform:  translateY(0px)scale(1);  opacity:1; "
			data-top-bottom="transform: translateY(-40px) scale(1);  opacity:0;"


			>Here are a few key tips to keep in mind.</p>

	<div id="myCarousel2" class="carousel slide" data-ride="carousel"
			data-bottom-top="transform: translateY(50px) scale(.8); opacity:.5; "
			data-80p-top="transform:  translateY(0px) scale(1);  opacity:1; "
			data-5p-top="transform:  translateY(0px)scale(1);  opacity:1; "
			data-top-bottom="transform: translateY(-40px) scale(1);  opacity:1;">
		<div class="myCarouselWrapper">

		  <div id="ci0a" class="cNumber color0"
		  	data-bottom-top="transform: translate(-50px, 100px); opacity:1;"
			data-80p-top="transform: translate(0px, 0px);  opacity:1;"
			data-top-bottom="transform: translate(0px, 0px);  opacity:1;">
			<i>Tip #</i>
		  	<strong>1</strong>
		  	<span class="color0" style="display:none;"></span>
		  </div>
		 
	      <div id="ci2pa" class="carousel slide" data-ride="carousel" 
	        data-bottom-top="transform: translate(50px, 100px); opacity:1;"
			data-80p-top="transform: translate(0px, 0px);  opacity:1;"
			data-top-bottom="transform: translate(0px, 0px);  opacity:1;">
	       <div id="ci2a" class="carousel-inner">

	        <div class="item active">
	         <strong><em>Really</em> get to know your candidates.</strong> Research your candidate pool, learn more about the sources they’re using and understand their process. A health care professional is likely looking for a different type of culture than an IT professional, so understand the nuances and use the right sources with the right message.
	          </div>
	        <div class="item">
	         <strong>Your employment brand is crucial to attracting candidates — don’t ignore it.</strong> From social media to job boards to career sites, job seekers use 18 different sources on average before hitting the apply button. Be where your candidates are, and find a way to tell your company’s story in a compelling way so you can differentiate yourself from competitors.
	        </div>
	        <div class="item">
	         <strong>Today’s candidates are always on, so think a few steps ahead.</strong> 3 in 4 full-time employed workers are open to or actively looking for new job opportunities. You can’t afford to wait until you have a position open to start looking. You should be marketing and branding yourself so that when you do have an opening, you’re already ahead of the game.
	        </div>
	        <div class="item">
	         <strong>Be responsive during the hiring process.</strong> Only 14 percent of candidates feel companies have been responsive to them. More than half (52 percent) of companies say they respond to less than half of applicants. Think long term about the impact that will have on your brand — not only to potential candidates, but also to potential consumers.
	        </div>
	        <div class="item">
	         <strong>Consider your candidates’ experience on mobile.</strong> If candidates can’t get to the right information or apply in a few clicks, you will probably lose them. Set up analytics and put tracking in place on your career site to inform you where people are coming from and whether they’re trying to apply to jobs via mobile devices.
	        </div>
	        <div class="item">
	         <strong>Create a strong talent pipeline.</strong>Not every job seeker is looking to apply right away, and not every candidate who applies will be a good fit for your current open positions — but may be a great fit down the road. You need to create a talent network so that when the right roles pop up in the future, you can easily re-engage them. 
	        </div>

	      </div>
	     </div>

	      <ol class="carousel-indicators"
	      	data-bottom-top="transform: translateY(50px) scale(1.5); opacity:.2;"
			data-center-top="transform: translateY(0px) scale(1);  opacity:1;"
			data-top-bottom="transform: translateY(0px) scale(1);  opacity:1;">
	        <li data-slide-to="0" class="active"></li>
	        <li data-slide-to="1" class=""></li>
	        <li data-slide-to="2" class=""></li>
	        <li data-slide-to="3" class=""></li>
	        <li data-slide-to="4" class=""></li>
	        <li data-slide-to="5" class=""></li>
	      </ol>
      </div>
	  <a class="left carousel-control" data-slide="prev"
	  		data-bottom-top="transform: translateX(-300px); opacity:.2;"
			data-80p-top="transform: translateX(0px);  opacity:1;"
			data-top-bottom="transform: translateX(0px);  opacity:1;">
				 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="75px" >
					<polyline fill="none" stroke="#59595B" stroke-width="3.001" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" 
					points="
					38.5,1.5 
					1.5,37.477 
					38.481,73.5 "
				
                    data-anchor-target="#ci2pa"
                    data-bottom="opacity: 0"
                    data-80p-top="opacity: 1"
                />
				</svg>
      </a>
      <a class="right  carousel-control" data-slide="next"
      		data-bottom-top="transform: translateX(300px); opacity:.2;"
			data-80p-top="transform: translateX(0px);  opacity:1;"
			data-top-bottom="transform: translateX(0px);  opacity:1;">
      	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="75px">
				<polyline fill="none" stroke="#59595B" stroke-width="3.001" stroke-linecap="round" stroke-linejoin="round" 
				stroke-miterlimit="10" 
				points="
				1.519,1.5 
				38.5,37.523 
				1.5,73.5 "
				
                    data-anchor-target="#ci2pa"
                    data-bottom="opacity: 0"
                    data-80p-top="opacity: 1"
                />
			</svg>
      </a>
	</div>
	</article>
	<article id="message6a">
		<p  data-bottom-top="transform: translateY(-40px) scale(.8); opacity:.5; "
			data-75p-top="transform: translateY(0px)   scale(1);  opacity:1; "
			
>As the power has shifted from the employer to the candidate in this age of talent, you need to update and adapt your recruitment strategy so it’s effective in this new era. To do so, you need to have the data and analytics in place to recruit smarter instead of working harder. You need to learn to improve recruiter efficiency so that you’re automating your grunt work and instead focusing on your strategic recruitment needs. And you need to understand candidate behavior to provide a stellar candidate experience to anyone who comes in contact with your brand.</p>

		<div id="mediaIcons" 
		data-bottom-top="transform: translateY(20px) scale(1.5); opacity:.8; "
			data-center="transform: translateY(0px)   scale(1);  opacity:1; ">
			<a href="http://facebook.com/cbforemployers"><i class="fa fa-facebook-square"></i></a>
			<a href="http://twitter.com/cbforemployers"><i class="fa fa-twitter"></i></a>
			<a href="http://youtube.com/cbforemployers"><i class="fa fa-youtube-square"></i></a>
			<a href="https://www.linkedin.com/company/careerbuilder-for-employers">
			<i class="fa fa-linkedin-square"></i></a>
		</div>

		<div id="splitButtons">
		<a 

		data-bottom-top="opacity:0; left: 20%;"
		data-75p-top="opacity:1; left: 50%;"
		class="left" href="<?php echo $links['webinar'];?>" target="_blank"
		data-toggle="modal" data-target="#myModal">View the Webinar</a>
		<a 
	
		data-bottom-top="opacity:0; left: 80%;"
		data-75p-top="opacity:1; left: 50%;"
		class="right" href="<?php echo $links['report'];?>" target="_blank"
		data-toggle="modal" data-target="#myModal2">Download the report</a>
		</div>	

	</article>
	<article id="message6b" >
		<p>
		   2015 Careerbuilder All Rights Reserved</p>
		<p>IN PARTNERSHIP WITH INAVERO, CAREERBUILDER SURVEYED 5,013 WORKERS, AGES 18 AND OVER, AND 2,002 HIRING DECISION MAKERS, BETWEEN FEBRUARY 3, 2015 AND FEBRUARY 18, 2015 IN THE UNITED STATES, 500 WORKERS IN CANADA, 503 WORKERS IN THE UK, 504 WORKERS IN GERMANY AND 505 WORKERS IN FRANCE IN AN EFFORT TO UNDERSTAND THE FACTORS THAT INFLUENCE CANDIDATES' JOB SEARCH BEHAVIOR.</p>
		<p>
			<a href="<?php echo $links['passive'];?>" target="_blank" >
				CLICK HERE TO VIEW “THE MYTH OF THE PASSIVE JOB-SEEKER” STUDY</a>
			<a href="<?php echo $links['consumer'];?>" target="_blank" 
				>CLICK HERE TO VIEW “THE RISE OF THE CONSUMER CANDIDATE” STUDY</a>
			<br><br>
			<!-- Button trigger modal -->

		</p>
		


	</article>
	</div>

	<div id="sideNav"
	data-anchor-target="#home"
	data-start="top:40%;"     
    data-center="top:50%;" 
    data-bottom="top:60%;" 
	>
		<ul>
			<li class="active"><a href="#home"><span ></span><strong>Home	</strong></a> </li>
			<li><a href="#slide2"><span></span><strong>Candidate-Powered Economy </strong></a></li>
			<li><a href="#slide3"><span></span><strong>Candidate Process		 </strong></a></li>
			<li><a href="#slide4"><span></span><strong>Pressured-Employer Economy</strong></a></li>
			<li><a href="#slide5"><span></span><strong>The Hiring Process</strong>		  </a> </li>
			<li><a href="#slide6"><span></span><strong>Recommendations</strong></a></li>
		</ul>
	</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <iframe src="<?php echo $links['webinar'];?>"></iframe>
	 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>

	<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <iframe src="<?php echo $links['report'];?>"></iframe>
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>



	 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
     <script>//window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
	 <script src="_/js/imagesloaded.pkgd.js"></script>
     <script src="_/js/enquire.min.js"></script>
     <script src="_/js/skrollr.min.js"></script>

       
	 <!--script src="_/js/skrollr.menu.min.js"></script -->
     <script src="_/js/plugins.js"></script>
	

	<script type="text/javascript" src="_/js/bootstrapCarMod.min.js"></script>
	<script type="text/javascript" src="_/js/script.js"></script>
	<script src="http://localhost:35729/livereload.js"></script>





	<!-- social tracking from client -->
    <script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
	<script type="text/javascript">
	twttr.conversion.trackPid('l60e8', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
	<noscript>
	<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l60e8&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
	<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l60e8&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" /></noscript>


</body>
</html>