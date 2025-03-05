document.addEventListener("DOMContentLoaded", () => {		
	var divs = document.querySelectorAll("div.animate");
	var arrayID = [];

	// Los divs vuelven a permanecer ocultos y se reinicia la animaci�n
	function reiniciar(){		
		// Se vac�a el array con setTimeout
		arrayID = [];
	
		divs.forEach((curDIV) => {
			curDIV.style.display = "none";
		})
		aparecer();
	}
	
	/* El m�todo forEach recibe como par�metro una funci�n que a su vez tiene tres par�metros:
	   uno obligatorio que es el elemento actual del array y dos opcionales: el �ndice actual y una referencia al array al completo
	   Por ejemplo, en la funci�n aparecer se declara con dos par�metros. Otra opci�n ser�a declarar la funci�n de forEach aparte e incluirla despu�s 
	   
	function iniciarSecuencia(elem, index){
		// Se ejecuta un setTimeout por cada ID cada vez con un milisegundo de retardo m�s: 0, 1000, 2000, 3000, etc
			let newID = setTimeout(() => {
				elem.style.display = "block"; // Por cada setTimeout mostramos el bot�n
			}, 1000*index);
			
			arrayID.push(newID);
	}
	
	// En este caso se pasar�a como par�metro en aparecer el nombre de la funci�n y el propio forEach se encarga de enviar a "iniciarSecuencia"
	// los par�metros asociados con el elemento e �ndice del array
	
	function aparecer(){
		divs.forEach(iniciarSecuencia); // divs.forEach(iniciarSecuencia()); Esta l�nea ser�a incorrecta, se pasa solo el nombre de la funci�n
	} */
	

	function aparecer(){		
		divs.forEach((elem, index) =>{			
			// Se ejecuta un setTimeout por cada ID cada vez con un milisegundo de retardo m�s: 0, 1000, 2000, 3000, etc
			let newID = setTimeout(() => {
				elem.style.display = "block"; // Por cada setTimeout mostramos el bot�n
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
