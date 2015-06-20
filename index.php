<?php
include "settings.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Albert Carter</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/jQuery.BlackAndWhite.min.js"></script>
    <script src="js/JSON.js" type = "text/javascript"></script>
	<script src="js/node.js" type="text/javascript"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="colorvar" href="css/gray.css">
	
    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:200,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>

    
    <div id="header">
	
	<div class="inner">
	<iframe src="#" id="fake-target" name="fake-target" style="width:0px; height:0px; border:0px;"></iframe>
	     
	    <div id="logo"><a href="#home" title="" class="scroll"><img src="img/logo.png" /></a></div> <!-- #logo -->
	    
	    <div id="navigation">
		<ul>
		    <li><a href="#home" title="" class="scroll selected s-home">Home</a></li>
		    <li><a href="#aboutme" title="" class="scroll time-href">Projects</a></li>
		    <li><a href="#mail-animation" title="" class="scroll">Contact Me</a></li>
		    <li><a href="/img/AlCarterResumeUpright.pdf" target="_blank">PDF Resume</a></li>
		    <li><a href="/img/AlCarterResumePlaintext.txt" target="_blank">Plaintext Resume</a></li>
		</ul>
		<div class="underline"></div>
	    </div> <!-- #navigation -->
	    
	</div> <!-- .inner -->
	
    </div> <!-- #header -->
    
    <div id="home">
	
	<div class="inner">
	
	    <h1 class="h1-bold">hello.</h1>
	    <h1 class="h1-my-name">my name is</h1>
	    <h1 class="h1-name">Al Carter</h1>
	    <h2 class="h2-welcome">I am looking for employment as a developer at a mobile or web consultancy.</h2>	
	    <br />
	    <!-- telescopic text goes here. -->
	    <p><span id="tText"></span></p>

	    <p><br />Thank You,<br />Al<br /><br />arcarter@csail.mit.edu<br />251.533.8331</p>

	    	<!-- <a href="/img/AlCarterResumeUpright.pdf" target="_blank" style="font-size:200px; font-family: 'EntypoRegular'; display:inline-block;">l</a>

	    	<a href="/img/AlCarterResumeUpright.pdf" target="_blank">PDF Resume</a> 
	    	<a href="/img/AlCarter.pdf" target="_blank">Plaintext Resume</a>
 -->

	    


	    <a class="go-to-second scroll" href="#aboutme"><span>Projects</span></a>
	
	</div> <!-- .inner -->
	
    </div> <!-- #home -->

    <div id="third">
	
	<div class="inner">
	    
	    <div id="aboutme">
		
		<h3>Projects</h3>
		
	    </div> <!-- #aboutme -->
	    
	    <p>Below are some projects from my time at Northeastern (MS, 2014), Brown University (BA, 2009), my startup, and at the nonprofit bicycle collective I helped become successful.</p>
	
	<!-- Can add icon font by using spans here <span>1</span> -->
	    <div class="column-two">
		<h4>Database (SQL)</h4>
				<p style="text-align:left;">a mock web interface and database for  a hospital<p>
				<p style="text-align:left; color:#6666FF">Project Manager for 4 Students, Northeastern University</p>
				<li style="text-align:left;">45+ entities, 65+ relationships</li>
				<li style="text-align:left;">languages: Oracle SQL, PL/SQL, Java, Javascript w/ jQuery via Coffeescript</li>
				<p style="text-align:left; color:#6666FF">Personally:</p>
				<li style="text-align:left;">determined business rules, entities, functional dependencies, relational schema, and overall architecture</li>
				<li style="text-align:left;">developed front-end client views</li>

	   </div> <!-- .column -->
	    
	    <div class="column-two last">
		<h4>Mobile (iOS)</h4>
			<p style="text-align:left;">a multi-tasking, multi-threading, and geomaping app<br /></p>
			<p style="text-align:left; color:#6666FF">Student, Northeastern University</p>
			<li style="text-align:left;">selected api's and packages: Google Geolocation, Google Places, CLLocation, CMDeviceMotion, MKOverlayView, MKMapView, MKAnnotation</li>
			<li style="text-align:left;">languages: Objective-C, SQLite, C, Javascript</li>

	    </div> <!-- .column -->
	    
	    <div class="column-two">
		<h4>Web Client (JS)</h4>
			<p style="text-align:left;">Telescopic Text, a graph-based text exploration program</p>
			<p style="text-align:left; color:#6666FF">Independent open source project</p>
			<li style="text-align:left;">enabled at the top of this webpage</li>
			<li style="text-align:left;">inspired by <a href='http://www.telescopictext.com' target='_blank'>Joe Davis's Telescopic Text</a></li>
			<li style="text-align:left;">overcomes many technical obstacles of original (tree-based) implementation</li>

	    </div> <!-- .column -->
	    
	    <div class="column-two last">
		<h4>Desktop (Java)</h4>
		<p style="text-align:left;">a mock vaccine invoicing and tracking system for the CDC</p>
		<p style="text-align:left; color:#6666FF">Student, Northeastern University</p>
		<li style="text-align:left;">support for 3+ user-types in 5+ organizations</li>
		<li style="text-align:left;">selected usecases: vaccine ordering, invoicing, manufacturing, distribution, administration</li>
		<li style="text-align:left;">my first software program</li>
		<li style="text-align:left;">language: Java</li>
	    </div> <!-- .column -->


	   	<div class="column-two">
		<h4>Mapping (ArcGIS)</h4>
		<p style="text-align:left;">a spacial analysis of bicycle parking at Brown University</p>
		<p style="text-align:left; color:#6666FF">Student, Brown University</p>
		<li style="text-align:left;">surveyed bicycle parking on campus</li>
		<li style="text-align:left;">digitized, and analyzed factors including population density, crime, and parking</li>
		<li style="text-align:left;">presented findings to administrators and student government</li>
		<li style="text-align:left;">persuaded the university to install new bike racks in locations across campus</li>
	    </div> <!-- .column -->

	    <div class="column-two last">
		<h4>Startup</h4>
		<p style="text-align:left;">Konnessi, a web marketing startup</p>
		<p style="text-align:left; color:#6666FF">Project Manager, C00, 2nd most senior employee</p>
		<li style="text-align:left;">bootstrapped a still-operational company</li>
		<li style="text-align:left;">grew company from 4 employees to 19 employees and 35 signed contracts</li>
		<li style="text-align:left;">managed hiring and terminating employees</li>
		<li style="text-align:left;">prepared sales materials</li>
		<li style="text-align:left;">managed the company's most important client relationships and projects</li>
	    </div> <!-- .column -->

	    <div class="column-two">
		<h4>Turnaround (Finance)</h4>
		<p style="text-align:left;">Brown Student Agencies (BSA), a campus contracting business</p>
		<p style="text-align:left; color:#6666FF">CFO, Student, Brown University</p>
		<li style="text-align:left;">negotiated vendor and partner contracts</li>
		<li style="text-align:left;">restructured operations and implementation of important contracts</li>
		<li style="text-align:left;">increased net annual earnings from -$3,218 to $12,400</li>
	    </div> <!-- .column -->



	    
	    <div class="column-two last">
		<h4>Nonprofit</h4>
		<p style="text-align:left;">Recycle-a-Bike, a bicycle education and repair nonprofit</p>
		<p style="text-align:left; color:#6666FF">Grant Writer, Mechanic, Educator</p>
		<li style="text-align:left;">taught bicycle maintenance to 30+ non-english speaking recent immigrants</li>
		<li style="text-align:left;">wrote grant applications and secured funding for new programs</li>
		<li style="text-align:left;">restructured the collective and incorporated it as a 501C(3)</li>

	    </div> <!-- .column -->

	    <div class="column-two">
		<h4>Nutrition Hacking</h4>
		<p style="text-align:left;">Soylent, a nutritionally complete and shelf stable food substitute</p>
		<p style="text-align:left; color:#6666FF">Project manager for 15 Boston area hackers</p>
		<li style="text-align:left;">provides FDA recommended nutrition with minimal effort</li>
		<li style="text-align:left;">inspired by <a href='http://soylent.me/' target='_blank'>Rob Rinehart's Soylent Project</a></li>
		<li style="text-align:left;">samples available upon request</li>
	    </div> <!-- .column -->
	    

	
	</div> <!-- .inner -->

	<div style="clear:both"></div>
	<a class="go-to-second scroll" href="#mail-animation"><span>Contact</span></a>
	
    </div> <!-- #third -->
    
    




    <div id="sixth">
		<div id="mail-animation">a</div>
    	<div class="mail-animation">

    		<div class="mail-one"></div>

    		<div class="mail-two"></div>

    		<div class="mail-three"></div>

    		<div class="mail-four"></div>

    		<div class="mail-five"></div>


    	</div>
	
	
	<div class="inner">
		
		
	    <h3>Please feel free to contact me</h3>

	    <div class="contact-about">
	    
	    <p>I am actively searching for startup opportunities in the Boston, MA and SF Bay area.  My interests (as you can see) are varied, but I generally enjoy working in fields where I feel that existing actors are not innovating, and where my contribution can make an impact. Ideally I hope to work as a junior developer in a small team of developers, or to project manage a small team of developers and designers.
	    </p>

		<div class="address">
		
			<span><img src="img/home.png" /></span>

			<ul>
		    	<li>Albert Carter</li>
		    	<li>77 Massachusetts Ave</li>
		    	<li>38-409C</li>
		    	<li>Cambridge, MA 02139</li>
			</ul>
		
	    </div> <!-- .address end -->
	    
	    <div class="address last">
		
			<span><img src="img/phone.png" /></span>
			<ul>
		    	<li>al@albertrcarter.com</li>
		    	<li style="font-size:17px">+1.617.258.8773</li>
		    	<li>albertrcarter.com</li>
			</ul>
		
	    </div> <!-- .address last end -->

	   	<ul class="social">
		
			<li><a href="http://goo.gl/maps/bqsc8" target="_blank"><img src="img/map.png" /></a></li>
			<li><a href="http://github.com/RogerTangos/" target="_blank"><img src="img/github.png" /></li>
			<li><a href="http://facebook.com/al.carter" target="_blank"><img src="img/facebook.png" /></a></li>
			<li><a href="http://plus.google.com/103691356959735865255/posts" target="_blank"><img src="img/google.png" /></a></li>
		
	    </ul><!-- .social end -->
	    </div> <!-- .contact-about -->
	    
	    <!-- <form id="form">
		
		<input type="text" value="Your name" id="formName" name="name" onblur="if (this.value == '') {this.value = 'Your name';}"  onfocus="if (this.value == 'Your name') {this.value = '';}" />
		
		<input type="text" value="Your email" id="formEmail" name="email" onblur="if (this.value == '') {this.value = 'Your email';}"  onfocus="if (this.value == 'Your email') {this.value = '';}" />
		
		<input type="text" value="Subject" id="formSubject" name="subject" onblur="if (this.value == '') {this.value = 'Subject';}"  onfocus="if (this.value == 'Subject') {this.value = '';}" />

		<textarea name="message" id="message" onblur="if (this.value == '') {this.value = 'Your message';}"   onfocus="if (this.value == 'Your message') {this.value = '';}">Your message</textarea>

		<input type="submit" id="submit" name="submit" value="SEND">
		    
	    </form> -->

<script type="text/javascript">

function custommsg() {
	document.getElementById("form-message").style.display=""; 
	document.getElementById("form-message").innerHTML="<p>Your message has been sent. Thank you!</p>"; 
	document.getElementById("form-container").style.display="none";} 

	function validate(f){
		re = /[fF]ive/
		var answer = document.getElementById("entry_1978653138").value;
		
		if (answer.match(re)!=null){
			;
			return true; 
		} else {
			alert("Please write out the answer in text. For example, \"ten\"")
			return false;
		}
	}

</script> 

<div class="ss-form-container" style="display:none; text-align:center;" id="form-message"> </div> 
<div class="ss-form-container" id="form-container">

<form action="" method="POST" target="fake-target" onsubmit="this.action='https://docs.google.com/forms/d/1LGks5kGpHOXwF5xkHSOLNy4dSgwk6pZeWh0s6WML-EA/formResponse'; 
	if (validate(this)){
		custommsg(); 
		return true;
		} 
	else 
		return false;">

    <div>
        <input type="text" name="entry.1544378031" value="" id="entry_1544378031" dir="auto" placeholder="Your name" keyev="true">
    </div>
    <div>
        <input type="text" name="entry.2096647483" id="entry_2096647483" dir="auto" placeholder="Your email">
    </div>
    <div>
        <label for="entry_1871389427"><input type="text" name="entry.1871389427" value="" id="entry_1871389427" dir="auto" placeholder="Subject"></label>
    </div>
    <div>
        <textarea name="entry.48358604" rows="8" cols="0" id="entry_48358604" dir="auto" placeholder="Your message">
</textarea>
    </div>
    <div>
    	<br />
        <input type="text" name="entry.1978653138" value="" id="entry_1978653138" dir="auto" placeholder="What is 2 plus 3? Please write out the answer in text form." pattern=".*[Ff]ive.*" title='Please write out the answer in text. For example, "ten"'>
    </div><input type="hidden" name="draftResponse" value="[] "> 
    <input type="hidden" name="pageHistory" value="0"> <input type="hidden" name="fbzx" value="349515367777315639">
    <div>
        <input type="submit" name="submit" value="Submit" id="ss-submit">
    </div>

</form>

</div>

<br />

	    
	<<div style="clear:both"></div> <!-- .inner -->
	
	<div align="center" style="margin-top:30px;"><a href="http://www.chillipear.com/"; target="_blank" style="color:#fff">site design by chillipear.com</a></div>
    
    </div> <!-- #sixth -->




<script>

	$(window).load(function(){
		// load the timeline
	    // change1();

	    // make the gallery photos grey
	    $('.gallery ul li').BlackAndWhite({
	        hoverEffect : false, // default true
	        // set the path to BnWWorker.js for a superfast implementation
	        webworkerPath : false
	    });
	});

	function pulser(count){
			if (count < 2){
				$(".clickable:visible").effect( "highlight", {color:"#FA5882"}, 2000);
				setTimeout(pulser(count+1), 10000);
			} 
			return null;
    	}

    
    $(document).ready(function() {
    	

	
	var wHeight = $(window).height();
	var wWidth = $(window).width();
	//alert(wHeight);

	$("#second").css({'width':wWidth,'margin-left':(-wWidth/2)});

	$('.href1').find('div').css('opacity','1');
	
	$("#sixth").css({'padding-top':(wHeight/15),'padding-bottom':(wHeight/3)});


	
	$("#home").css('margin-top',(wHeight/5));
	$("#home").css('margin-bottom',(wHeight/12));
	$("#second").css('margin-bottom',(wHeight/8));
	$("#third").css('margin-bottom',(wHeight/8));
	$("#fourth").css('margin-bottom',(wHeight/3));
	$("#fifth").css('margin-bottom',(wHeight/3));
    
    	$(".scroll").click(function(event){
	        $('#outputtext').animate({
		    'right':-275
		});
		//prevent the default action for the click event
		event.preventDefault();

		//get the full url - like mysitecom/index.htm#home
		var full_url = this.href;

		//split the url by # and get the anchor target name - home in mysitecom/index.htm#home
		var parts = full_url.split("#");
		var trgt = parts[1];
		
		if(trgt=='home') {
		    
		    var target_offset_html = $('html').offset();
		    var target_top_html = target_offset_html.top;
		    $('html, body').animate({scrollTop:target_top_html}, 500);
		    
		}else {
		    
		    //get the top offset of the target anchor
		    var target_offset = $("#"+trgt).offset();
		    var target_top = target_offset.top;
    
		    //goto that anchor by setting the body scroll top to anchor top
		    $('html, body').animate({scrollTop:target_top}, 500);
		}
		
		
		if(trgt=='sixth'){
		    mailAnimation();
		}
	});
	
	    // when scrolling do effects
	    
	    window.onscroll=testScroll
	    
	    function testScroll(ev){

	   	if(window.pageYOffset>300){
	    	$('#navigation a').removeClass('selected');
		    $('#navigation li:nth-child(1)').find('a').addClass('selected');
		    
		}
		if(window.pageYOffset>800){
	    	$('#navigation a').removeClass('selected');
		    $('#navigation li:nth-child(2)').find('a').addClass('selected');
		    
		}
		if(window.pageYOffset>1600){
	    	$('#navigation a').removeClass('selected');
		    $('#navigation li:nth-child(3)').find('a').addClass('selected');
		   
		}
		if(window.pageYOffset>2150){
		    circleAnima();
		}
		if(window.pageYOffset>3600){
	    	$('#navigation a').removeClass('selected');
		    $('#navigation li:nth-child(5)').find('a').addClass('selected');
		}
		if (window.pageYOffset>4400) {
		    mailAnimation();
		    $('#navigation a').removeClass('selected');
		    $('#navigation li:nth-child(6)').find('a').addClass('selected');
		}
	    }


	  $(".gallery img").each(function(){
	  	var $this = $(this);
		var workTitle = $this.data('title');
		var workParagraph = $this.data('paragraph');
		$this.parent().append("<div class='work-desc'><span>"+ workTitle +"</span><p>"+ workParagraph+"</p></div>");
  	  });

  	 $('.gallery img').hover(function(){
		$('.work-desc').remove();
		$(this).next('div').animate({'opacity':'1'},500);
	});

	$('.work-desc').on('click', function(e){

		var $this = $(this);
                offsetEl = $this.offset();
		//if firefox
		if ( $.browser.mozilla ) {
		$('body,html').animate({scrollTop: (offsetEl.top-250)}, 1);
		}
		var workTitle = $this.prev('img').data('title');
		var workDesc = $this.prev('img').data('description');
		var workImgSrc = $this.prev('img').attr('src')
		

		
		$('body').append("<div id='overlay'><div class='pop-panel'><div class='close'></div><h4>"+workTitle+"</h4><img src='"+workImgSrc+"' /><p>"+workDesc+"</p></div></div>");
		$('html').addClass('stop-scrolling');
	e.preventDefault();
	});

	$('body').on('click', '.close', function(){
		
		//if firefox
		if ( $.browser.mozilla ) {
		$('body,html').animate({scrollTop: (offsetEl.top-250)}, 1);
		}
		
		$('#overlay').remove();
		$('html').removeClass('stop-scrolling');

	});

	$('.go-to-second').on('click', function(e){
		e.preventDefault();
	});
	

	

	
	
	
	
	
	// mail animation
	
	function mailAnimation () {
	
	$('.mail-one').delay('500').fadeIn('400');
	$('.mail-two').delay('1000').fadeIn('400');
	$('.mail-three').delay('1500').fadeIn('400');
	$('.mail-four').delay('2000').fadeIn('400');
	$('.mail-five').delay('2500').fadeIn('400');
	
	}

	$('.time-line-href').on('click', function(e){
		e.preventDefault();
		$('.circleLine').css('opacity','0')
		$(this).find('div').css('opacity','1')
		$('#outputtext').animate({
		    'right':-275
		});
	});


	$('.circles').on('click',function(){

		var outputR = $('#outputtext').css('right');
		
		if(outputR == '-275px'){

			$('#outputtext').animate({
				'right':'0'
			});

		}else {

			$('#outputtext').animate({
				'right':'-275px'
			}).animate({
				'right':'0'
			});

		}	

	});

	pulser(0);	    

    }); // document.ready end

    
</script>
</body>
</html>
