<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]--><!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]--><!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]--><!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]--><head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>MetaLipsum - generate lorem ipsum with meta keywords</title>
	<meta name="description" content="MetaLipsum, generate lorem ipsum with meta keywords">
	<meta name="author" content="Paolo Ciarrocca">
        <meta name="keywords" content="Meta, Keywords, Lorem Ipsum, Generator">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">-->
	<link href='http://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css?v=2">

	<script src="js/libs/modernizr-1.7.min.js"></script>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23995834-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="header-container">
		<header class="wrapper">
			<h1 id="title">MetaLipsum</h1>
		</header>
	</div>
	<div id="main" class="wrapper">
		<article>
			<header>
				<h2>Lipsum with meta keywords</h2>
				<p>Yet another lorem ipsum generator, but this one lets you add keywords in the middle of it. Apparently it can be useful for SEO types and when showing sites to clients.</p>
			</header>
	        </article>
                <div id="form-container">
                    <h3>Choose Your Options</h3>
                    <div>
                    <p><label for="paragraphs">Number of paragraphs:</label></p>
        	    <input type="text" value="5" class="option" id="paragraphs">
                    </div>
    
    		    <div>
    		    <p>Paragraph length:</p>
        	    <label for="short"><input type="radio" value="short" id="short" name="length" class="option" >Short</label>
        	    <label for="medium"><input type="radio" value="medium" id="medium" name="length" class="option" checked >Medium</label>
        	    <label for="long"><input type="radio" value="long" id="long" name="length" class="option" >Long</label>
   		    </div>
                    
                    <div>
                    <p><label for="keywords">Keywords - comma or carriage return separated</label></p>
                    <textarea rows="5" cols="50" id="keywords"></textarea>
                    </div>
                     
                    <input id="generate-button" type="button" value="Generate"> 
                </div>
                <div id="generator-results">
                </div>
        </div>
	<div id="footer-container">
		<footer class="wrapper">
			<h3>About</h3>
                        <p>built by <a href="http://sherred.com">Paolo Sherred Ciarrocca</a> from an idea by <a href="http://twitter.com/danfrydman">Dan Frydman</a></p>
                        <p>questions? ask them on twitter - <a href="http://twitter.com/sherred">@sherred</a></p>
		</footer>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
	<script src="js/script.js"></script>
	<!--[if lt IE 7 ]>
	<script src="js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]--></body>
</html>
