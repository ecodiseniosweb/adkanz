var intervalo = setInterval(mostrar, 600000);
var banner = setTimeout(mostrar, 800);

var close = document.getElementById('close');
// var submenu = document.getElementById('submenu');

function mostrar(){
	document.getElementById("ad").style.display = "block";
};

close.addEventListener("click", function(){
	document.getElementById("ad").style.display = "none";
	clearTimeout(mostrar);
});


// submenu.addEventListener("mouseover", function(){
// 	document.getElementById("submenu").style.display = "block";
// 	document.getElementById("submenu").innerHTML = '<li><a href="criadero.php">Criadero Azteca</a></li>';
// 	document.getElementById("submenu").style.background = "#ffff00";
// 	console.log(submenu);

// });
// submenu.addEventListener("mouseout", function(){
// 	document.getElementById("submenu").innerHTML = " ";
// 	document.getElementById("submenu").style.display = "none";
// });