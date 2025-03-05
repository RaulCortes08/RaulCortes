document.addEventListener("DOMContentLoaded", () => {	
	var bloque = document.querySelector(".block"); //El bloque que movemos
	var mov = document.querySelector("#mov"); // Elemento con la cantidad de píxeles a mover
	const TIME = 1000; // Los desplazamientos duran 1000, pero esto se podría cambiar o parametrizar
	
	// Función que se encarga de desplazar la coordenadada x (left) e y (top)
	// Además, se indica la dirección. Si es positivo 1 y si es negativo -1
	function desplazar(coordenada, direccion){
		var start = null;
		var desp = parseInt(mov.value)*direccion;
		var offset = parseInt(getComputedStyle(bloque).getPropertyValue(coordenada));
		function step(timestamp) {
			if (!start) start = timestamp;
			var progress = timestamp - start;
			
			// Se distribuye el desplazamiento en el tiempo de un segundo
			bloque.style.setProperty(coordenada, ((desp * progress) / TIME) + offset + "px");
						
			if (progress < TIME) {
				window.requestAnimationFrame(step);
			} else {
				bloque.style.setProperty(coordenada, (desp + offset) + "px");		

				// Comprobamos si está dentro del cuadrado grande
				comprobar();
			}	
		}
		
		window.requestAnimationFrame(step);		
	}
	
	// Función alternativa por si se crea una función por cada tipo de desplazamiento en lugar de parametrizar
	/*function desplazarDerecha(){
		var start = null;
		var desp = parseInt(mov.value); // Hay que transformar a entero para garantizar que las sumas funcionen y no concatenen texto
		var offset = parseInt(getComputedStyle(bloque).left);
		function step(timestamp) {
			if (!start) start = timestamp;
			var progress = timestamp - start;
			
			// Se distribuye el desplazamiento en el tiempo de un segundo
			bloque.style.left = ((desp * progress) / TIME) + offset + "px";
						
			if (progress < TIME) {
				window.requestAnimationFrame(step);
			} else {
				bloque.style.left = (desp + offset) + "px";
								
				// Cuando se termina la animación se hace la comprobación correspondiente
				//comprobar();
			}	
		}
		
		window.requestAnimationFrame(step);		
	}*/
	
	// Eventos al hacer click en los botones de desplazamiento
	document.querySelector("#right").addEventListener("click", (e) =>{
		desplazar("left", 1);		
		// desplazarDerecha(); Función alternativa. Se crearía una para cada dirección con el valor correspondiente
	});
	
	document.querySelector("#left").addEventListener("click", (e) =>{
		desplazar("left", -1);		
	});
	
	document.querySelector("#top").addEventListener("click", (e) =>{
		desplazar("top", -1);		
	})
	
	document.querySelector("#bottom").addEventListener("click", (e) =>{
		desplazar("top", 1);		
	})	
});
