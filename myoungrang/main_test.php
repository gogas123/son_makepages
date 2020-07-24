	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<title>Document</title>
	</head>
	<body>
		<?php $ddd = "fdsfdsfds"; ?>
			<script>
		
		var jdata = [{code:'a',tit:'aaa'},{code:'b',tit:'bbbb'}];
		var jdata2 = [
			{groupname:'서태지',d:'1992',c:3 , member:[
				{name:'',he:'',w:''},
				{name:'',he:'',w:'',etc:[{},{}]}
			]},
			{groupname:'fff',d:'1992',c:3 , member:[
				{name:'',he:'',w:''},
				{name:'',he:'',w:''}
			]}
		]

		jdata[0].tit;
		jdata[1].tit;
		jdata[1].code;

for(var idx=0; idx < jdata.length; idx ++){
	jdata[idx].tit;
	for(var sidx=0; sidx < jdata[idx].length; sidx ++){
		jdata[idx].member[sidx].name;
	}
}
		
		jdata2.foreach(function(row,idx){
			console.log(row.groupname);
			console.log(row.d);
			console.log(row.c);
			console.log(row.member);
			console.log(row.member[1].name);
			row.member.foreach(function(srow, sidx){
				srow.name;
			})

		})

    $.ajax({
     url:"./test123.php",
     data:"",
     type:'POST',dataType:'json',
     charset:'utf-8',
     error: function(XMLHttpRequest,textStatus,errorThrown) { alert("Error: " + textStatus + " " + errorThrown + "\n" +XMLHttpRequest.getAllResponseHeaders());  },
     success:function(q) {
			var jd = q;
			var jdata = q;
			console.log (jd);

			jdata.foreach(function(row,idx){
				console.log(row.tit);
			})

			// document.write(jd.[2][2]);
			// $qwe =jd.mulgogi[13]
			// jd.gamja[12]
      // alert();
      // alert();
      // alert(jd.gokuma[15]);
     }
    });
	</script>
	
	</body>
	</html>
