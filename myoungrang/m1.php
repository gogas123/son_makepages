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
			$.ajax({
     url:"./t1.php",
     data:"",
     type:'POST',dataType:'json',
     charset:'utf-8',
     error: function(XMLHttpRequest,textStatus,errorThrown) { alert("Error: " + textStatus + " " + errorThrown + "\n" +XMLHttpRequest.getAllResponseHeaders());  },
     success:function(e) {
			var fd=e;
			var br='<br>';
			var key= Object.keys(fd);
			// console.log(fd);
			// document.write(fd.fruit.apple);
						// for(var q=0;q<fd.length;q++){
						// 	for(var w=0;w<fd[q].length;w++){
						// 		// console.log(fd);
						// 		document.write("ssss");
						// 	}
						// }
						// console.log(fd.length);
						/*
						for (var i in fd)
						{
							for(var j in fd[i]){
								
								document.write(fd[i][j]);
							}
						}	*/
						Object.keys(fd).forEach(function(i,idx){
							Object.keys(fd[i]).forEach(function(j,sidx){
								document.write(i+j+" "+fd[i][j]+"\n");
								document.write('\n'+br);
							});
							document.write('\n'+br);
						})
		 }
		});
		</script>

	</body>
	</html>