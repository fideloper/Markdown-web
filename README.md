# A simple Markdown API

This is an API to parse Markdown and return valid HTML.

## Two Methods to Retrieve Data:

### POST (Preferred)

**End Points:**

1. `http://apis.fideloper.com/markdown.json`
2. `http://apis.fideloper.com/markdown.html`

**Parameters:**

1. `markdown` - The string to parse into HTML

**Examples:**

> NOTE: POST is preferred, which means you'll have to use a server-side cURL request. 

>If you must use an ajax request to call your own server script which can in turn make a cURL request. Because the internet isn't broken...

**PHP**
	
	/* HTML:
	*************************/

	//Grab a markdown file, for example
	$markdown = file_get_contents('content.md');

	//open connection
	$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, 'http://apis.fideloper.com/markdown.html');
	curl_setopt($ch,CURLOPT_POST,count($fields));
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE); //Return result intead of output to browser
	curl_setopt($ch,CURLOPT_POSTFIELDS,'markdown='.$markdown);

	//execute post
	$html_result = curl_exec($ch);

	//close connection
	curl_close($ch);


	/* JSON:
	*************************/

	//Grab a markdown file, for example
	$markdown = file_get_contents('content.md');

	//open connection
	$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, 'http://apis.fideloper.com/markdown.json');
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE); //Return restult instead of output to browser
	curl_setopt($ch,CURLOPT_POST,count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS,'markdown='.$markdown);

	//execute post
	$result = curl_exec($ch);

	$json_results = json_decode($result);

	//close connection
	curl_close($ch);

### GET (Via jsonp - Unreliable)

**End Points:**

1. `http://apis.fideloper.com/markdown.jsonp`

**Parameters:**

1. `callback` - Callback function for jsonp. Automagically generated by jQuery
2. `markdown` - *URL Encoded* string to parse into HTML
	http://apis.fideloper.com/markdown.jsonp?callback=myfunction&markdown=this%20is%20markdown

**Examples:**

	$(function() {
	  $.ajax({
			url:'http://apis.fideloper.com/markdown.jsonp',
			dataType:'jsonp',
			type: 'GET',
			data: {markdown:'## This is a title \n [how](http://google.com) ridiculous is using a GET string?'},
			error: function(jqXHR, textStatus, errorThrown) {
			  console.log(textStatus, errorThrown);
			},
			success: function(data) {
			  console.log(data.html);
			}
  		});
	});

