function validarPasswd(){
	
var p1 = document.getElementById("passwd").value;
var p2 = document.getElementById("passwd2").value;

if (p1 != p2) {
     alert("Las Contraseñas deben de coincidir ");
     return false;
 } else {
    return true; 
   }

}