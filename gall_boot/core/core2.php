	<!DOCTYPE html>
	<html lang="en">
	<head>
	<!-- https://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?bts&format=json -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<title>Document</title>
	</head>
	<body>
		<script>
				function jsonFlickrFeed(json) {
				console.log(json);
				};

				function handleButtonClick() {
				$("button").remove();
				
				$.ajax({
					url: 'https://api.flickr.com/services/feeds/photos_public.gne',
					dataType: 'jsonp',
					data: { "tags": "bts", "format": "json" },
				});	
				
				}

				handleButtonClick();


				function qwer(as,callback){
					var text = as;
					callback(text);
				};
				function qwer123(zx){
					document.write("안녕하세요"+zx+"입니다.");
				};
				qwer("gae",qwer123);

															function add(x, callback){
												let sum = x + x;
												console.log(sum);
												callback(sum);
											}

											add(3, function(result){
												add(result, function(result2){
													add(result2, function(result3){
														add(result3, function(result4){
															console.log("에너지 파")
														})
													})
												})
											})



		</script>

	</body>
	</html>


	