
function downloadImg() {
$.getJSON('http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?',
	{
		tags: 'northkorea',
		tagmode: 'any',
		format: 'json'
	},
	
	function (data) {
		var numItems = $('.son1').length;
		for (var i = 0; i < numItems+i;i++){
			$('#' + i + '_screen').attr('src', data.items[i].media.m);
			// $('#' + i + '_screen').attr('src', data.items[i+1].media.m).width("250px").height("350px").css("float", "left").css("text-align", "center");
			if(data.items[i].media.m==null){
				for (var j = 0; i < numItems + j; j++) {
					$('#' + j + '_screen').attr('src', data.items[j].media.m);
			}
					}
}
	}
);
}


downloadImg();
