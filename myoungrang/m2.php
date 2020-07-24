	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<title>Document</title>
	</head>
	<body>
	
		<script>
			<?php
					$url = "http://api.flickr.com/services/feeds/photos_public.gne?format=json&tags=%EC%88%98%EC%A7%80";

						$curl_handle = curl_init();

						curl_setopt($curl_handle, CURLOPT_URL, $url);

						curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);

						curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);

						curl_setopt($curl_handle, CURLOPT_USERAGENT, '   `http://api.flickr.com/services/feeds/photos_public.gne?format=json&tags=%EC%88%98%EC%A7%80`  ');



						$json = curl_exec($curl_handle);



						curl_close($curl_handle);




			?> 


		</script>

	</body>
	</html>