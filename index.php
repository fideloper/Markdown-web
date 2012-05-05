<?php
require_once('./lib/markdown.php');
$content = Markdown(file_get_contents('README.md'));
?><!DOCTYPE html>
<html>
<head>
	<title>Markdown API</title>
	<meta name="description" content="A simple Markdown API" />
	<meta name="keywords" content="Markdown API" />
	<meta name="author" content="@fideloper and contributors">

	<meta property="og:image" content="https://si0.twimg.com/profile_images/1136703091/f.jpg" />
  	<meta property="og:description" content="Markdown API"/>
  	<meta property="og:title" content="Markdown API"/>

	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
	<div id="content">
<?php echo $content; ?>
	</div>
	<!-- Just another API. No big deal -->
	<div id="footer">
		<ul class="clearfix">
			<li>Started by <a href="http://twitter.com/fideloper">@fideloper</a></li>
			<li class="legal">This was created with the intent of being <strong>simple</strong>.<br />It is powered by Markdown.</li>
		</ul>
	</div>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-20914866-1']);
	  _gaq.push(['_setDomainName', 'fideloper.com']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</body>
</html>
