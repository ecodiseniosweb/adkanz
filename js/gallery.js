var indicador = 17;
var limit = 17;
var ph = 1+ indicador;
var i;

function galeria(){
	
	while ( indicador <= limit){
		var nwpho = document.createElement("div");
		
		var pho = document.getElementById("photo");
		// document.getElementById("indicator").innerHTML += '<li data-target="#carouselExampleIndicators" data-slide-to="'+indicador+'"></li>'
		pho.innerHTML += '<div class="carousel-item"> <img class="d-block w-100" src="../img/gallery/'+ph+'.jpg" alt="Slide"></div>'

	indicador ++;
	ph ++;
	}
}
galeria();

// var salida = '';

// for(var i = 0; i < indicador; i++ ){
//     salida += i + '<li data-target="#carouselExampleIndicators" data-slide-to=" '  + i++ + '  "></li>';
// }
// document.getElementById("indicator").innerHTML = salida;