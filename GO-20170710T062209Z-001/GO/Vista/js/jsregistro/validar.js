function validar() {
    
    var nombre,apepat,apemat,correo,telefono, pass,rpass,expresion;
	
   nombre = document.getElementById("nombre").value;
   apepat = document.getElementById("apepat").value;
   apemat = document.getElementById("apemat").value;
   telefono = document.getElementById("telefono").value;

   
  


  
    expresion = /\w+@\w+\.+[a-z]/;
	
	
	
	if(nombre===""){
	alert("El campo nombre es obligatorio, por favor rellena este campo.");
	return false;
 }
 
 if(apepat===""){
	alert("El campo apellido paterno es obligatorio, por favor rellena este campo.");
	return false;
 }
  if(apemat===""){
	alert("El campo apellido materno es obligatorio, por favor rellena este campo.");
	return false;
 }
 
   if(telefono===""){
	alert("El campo telefono es obligatorio, por favor rellena este campo.");
	return false;
 }

	
	

	
	



}
