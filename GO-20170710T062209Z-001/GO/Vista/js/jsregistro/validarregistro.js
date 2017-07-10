function validarregistro() {
    
    var nombre, apepat, apemat, correo, telefono, pass,rpass,expresion;
    nombre = document.getElementById("nombre").value;
    apepat = document.getElementById("apepat").value;
    apemat = document.getElementById("apemat").value;
    correo = document.getElementById("correo").value;
    telefono = document.getElementById("telefono").value;
    pass = document.getElementById("pass").value;
    rpass = document.getElementById("rpass").value;
    
    
    expresion = /\w+@\w+\.+[a-z]/;
	

    
	
    
    
	if(nombre===""){
	alert("El campo nombre es obligatorio, por favor rellena este campo.");
	return false;
 }
 if(apepat===""){
	alert("El campo Apellido paterno es obligatorio, por favor rellena este campo.");
	return false;
 }
 if(apemat===""){
	alert("El campo Apellido  es obligatorio, por favor rellena este campo.");
	return false;
 }
 if(correo===""){
	alert("El campo correo es obligatorio, por favor rellena este campo.");
	return false;
 }
  if(telefono===""){
	alert("El campo telefono es obligatorio, por favor rellena este campo.");
	return false;
 }
 
 
 
 
  
  else if(!expresion.test(correo)){
        alert("El correo no es valido");
		 return false;
    }
 if(pass===""){
	alert("El campo contrase\u00f1a esta vacio, es obligatorio rellenarlo.");
	return false;
 }
 

 
	if(rpass===""){
	alert("Por favor repite tu contrase\u00f1a.");
	return false;
 }
	
	
	
    
    else if (nombre.length>20){
        alert("El nombre es muy largo");
        return false;
    }
	
	 else if (apepat.length>20){
        alert("El apellido paterno es muy largo");
        return false;
    }
    

  else if (apemat.length>20){
        alert("El apellido materno es muy largo");
        return false;
    }
    
	  else if (correo.length>20){
        alert("El correo es muy largo");
        return false;
    }
	else if (telefono.length>30){
        alert("El pais es muy largo");
        return false;
    }
  
    
	else if (pass.length>40){
        alert("La contraseña es muy larga");
        return false;
    }
	else if (rpass.length>40){
        alert("La contraseña es muy larga");
        return false;
    }
    
    
   
	
	
    
    
}
