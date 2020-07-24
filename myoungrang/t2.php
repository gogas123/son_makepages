
<!-- // $json = file_get_contents("./t2.json");
// $result_json = json_decode($json,true);
// print_r($result_json);
  -->
	<!DOCTYPE html>	
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<title>Document</title>
	</head>
	<body>
	<script type="text/javascript">
		function downloadImg() {
	$.getJSON('http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?', 
		{
			tags:'bts',
			tagmode:'any',
			format:'json'
		},
		function(data) {
			$('img').attr('src', data.items[1].media.m);
			$('#one').attr('src', data.items[2].media.m);
			$('#two').attr('src', data.items[3].media.m);
			$('#three').attr('src', data.items[4].media.m);
		}
	);
}
$(document).ready(function() {
	$('button').click(function() {
		downloadImg();
	});
});
</script>
<button>download</button>
<div id='images'></div>
<img src='' alt=''/>
<img src='' alt='' id='one'/>
<img src='' alt='' id='two'/>
<img src='' alt='' id='three'/>
	</body>
	</html>
	





