document.addEventListener("DOMContentLoaded", () => {	
	var elem = document.querySelector("p.countdown"); 
	var start = document.querySelector("#start"); 
	var stop = document.querySelector("#stop");
	var ID = 0;
	
	function comenzar(){
		let counter = document.querySelector("#seconds").value; 
		if (counter <= 0){
			alert("Introduce un valor mayor que 0")
		} else {
			elem.style.color = "black";
			elem.innerHTML = counter;
			// Se crea un setInterval en cuyo código se comprueba un contador
			// Cuando se llega a 0 el propio setInterval para la animación actual
			ID = setInterval(() => {
			  counter--;
			  elem.innerHTML = counter;
			  if (counter === 0) {
				clearInterval(ID);
				elem.style.color = "red";		
			  }
			}, 1000);						
		}					
	}
	
	// Se guarda un ID y se 
	function parar(){
		if (ID) clearInterval(ID);
	}
					
	start.addEventListener("click", comenzar);
	stop.addEventListener("click", parar);	  
});