document.addEventListener("DOMContentLoaded", () => {		
	var divs = document.querySelectorAll("div.animate");
	var arrayID = [];

	// Los divs vuelven a permanecer ocultos y se reinicia la animación
	function reiniciar(){		
		// Se vacía el array con setTimeout
		arrayID = [];
	
		divs.forEach((curDIV) => {
			curDIV.style.display = "none";
		})
		aparecer();
	}
	
	/* El método forEach recibe como parámetro una función que a su vez tiene tres parámetros:
	   uno obligatorio que es el elemento actual del array y dos opcionales: el índice actual y una referencia al array al completo
	   Por ejemplo, en la función aparecer se declara con dos parámetros. Otra opción sería declarar la función de forEach aparte e incluirla después 
	   
	function iniciarSecuencia(elem, index){
		// Se ejecuta un setTimeout por cada ID cada vez con un milisegundo de retardo más: 0, 1000, 2000, 3000, etc
			let newID = setTimeout(() => {
				elem.style.display = "block"; // Por cada setTimeout mostramos el botón
			}, 1000*index);
			
			arrayID.push(newID);
	}
	
	// En este caso se pasaría como parámetro en aparecer el nombre de la función y el propio forEach se encarga de enviar a "iniciarSecuencia"
	// los parámetros asociados con el elemento e índice del array
	
	function aparecer(){
		divs.forEach(iniciarSecuencia); // divs.forEach(iniciarSecuencia()); Esta línea sería incorrecta, se pasa solo el nombre de la función
	} */
	

	function aparecer(){		
		divs.forEach((elem, index) =>{			
			// Se ejecuta un setTimeout por cada ID cada vez con un milisegundo de retardo más: 0, 1000, 2000, 3000, etc
			let newID = setTimeout(() => {
				elem.style.display = "block"; // Por cada setTimeout mostramos el botón
			}, 1000*index);
			
			arrayID.push(newID);
		});
	}
	
	aparecer();
		
	divs.forEach((elem) => {
		elem.addEventListener("click", () => {
			// Al hacer click en cada DIV podemos finalizar todos los setTimeout pendientes
			arrayID.forEach((curID) => {
				clearTimeout(curID);				
			});
			
			reiniciar();
		})
	});

			  
});
