<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
		function downloadImg() {
	$.getJSON('http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?', 
		{
			tags:'수지',
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
		downloadImg();
</script>
<div id='images'></div>
<img src='' alt=''/>
<img src='' alt='' id='one'/>
<img src='' alt='' id='two'/>
<img src='' alt='' id='three'/>
	</body>
	</html>
	





