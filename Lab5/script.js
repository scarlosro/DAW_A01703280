let pass;
let pass2;
let tamano;
let num=false;
let upper=false;
let minus=false;
let charac=false;


function validarContrasena(){
    pass = document.getElementById("pass1").value;
    pass2 = document.getElementById("pass2").value;
    tamano = pass.length;
    let feedback = "La contraseña necesita ser: "
    if(pass != pass2){
        alert("Contraseñas no coinciden");
        return;
    }
     else{
        if(tamano >= 8){
            for(i = 0; i < tamano; i++){
                if(pass.charAt(i) >= 'A' && pass.charAt(i) <= 'Z'){
                    upper = true;
                }
                if(pass.charAt(i) >= 'a' && pass.charAt(i) <= 'z'){
                    minus = true;
                }
                if(pass.charAt(i) == '%' || pass.charAt(i) == '_' || pass.charAt(i) == '-' || pass.charAt(i) == '$' || pass.charAt(i) == '!' || pass.charAt(i) == '='){
                    charac = true;
                    
                }
                if(pass.charAt(i) >= '0' && pass.charAt(i) <= '9'){
                    num=true;
                }
                
            }
            }
         else{
             alert("La contraseña no tiene el mínimo de caracteres")
             return;
         }
    }
    
    if(upper == true && minus == true && charac == true && num == true){
        alert("La contraseña es segura");
    }
    else{
        if(!upper)
            feedback+= "Tener mayuscula.";
        if(!minus)
            feedback+= " Tener minuscula.";
        if(!charac)
            feedback+= "Tener un simbolo.";
        alert(feedback);
    }
}