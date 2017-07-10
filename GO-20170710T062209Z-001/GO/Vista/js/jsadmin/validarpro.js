function validarCampos() {
    
    var categoria, nombre, descripcion, tamano, color, existencia, costo;
    categoria = document.getElementById("categoria").value;
    nombre = document.getElementById("nombre").value;
    descripcion = document.getElementById("descripcion").value;
    tamano = document.getElementById("tamano").value;
    color = document.getElementById("color").value;
    existencia = document.getElementById("existencia").value;
    costo = document.getElementById("costo").value;
    
    
    
	
 if(categoria===""){
	alert("Porfavor, rellena el campo categoria");
	return false;
 }
 if(nombre===""){
	alert("Porfavor, rellena el campo nombre");
	return false;
 }
 if(descripcion===""){
	alert("Porfavor, rellena el campo descripcion");
	return false;
 }
 if(tamano===""){
	alert("Porfavor, rellena el campo tamano");
	return false;
 }
  if(color===""){
	alert("Porfavor, rellena el campo color");
	return false;
 }
 if(existencia===""){
	alert("Porfavor, rellena el campo existencia");
	return false;
 }
 
	else if(isNaN(existencia)){
		alert("El campo existencia debe introducirse en una serie de digitos, por favor introduce solo numeros")
		return false;
	}
 
 
 
  if(costo===""){
	alert("Porfavor, rellena el campo costo");
	return false;
 }
 
	
	
	
    
    else if (nombre.length>50){
        alert("El nombre del producto es demasiado largo, por favor introduce uno mas corto");
        return false;
    }
	
	 else if (categoria.length>50){
        alert("La categoria del producto es demasiado largo, por favor introduce uno mas corto");
        return false;
    }
    

  else if (descripcion.length>20){
        alert("La descripcion del producto es demasiado largo, por favor introduce uno mas corto");
        return false;
    }
    
	  else if (tamano.length>10){
        alert("El campo tamano del producto es demasiado largo, por favor introduce uno mas corto");
        return false;
    }
	else if (color.length>30){
        alert("Los colores del producto son demasiados largos (caracteres), por favor introduce uno mas corto");
        return false;
    }
  
	
	
	
    
    
    
	else if(isNaN(costo)){
		alert("El campo costo debe introducirse en una serie de digitos, por favor introduce solo numeros")
		return false;
	}
    
    
}
