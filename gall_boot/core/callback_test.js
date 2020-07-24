
function calla(){
	var a = 1;
}

var rv = calla();
console.log(rv);

calla(
function(rv){
	console.log(rv);
  console.log('bbb');
 }
)

calla(rvcall);

function rvcall(rv){
console.log(rv);
}

function aaa(tet, callbal){
 calllbal(tet);
}


aaa('fff',rvcall);








