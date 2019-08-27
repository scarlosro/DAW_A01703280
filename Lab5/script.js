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


function carrito(){
    alert("It will work");
    
    let iphones;
    let sams;
    let huaw;
    let text;
    let pro1=0;
    let cos1=0;
    let pro2=0;
    let cos2=0;
    let pro3=0;
    let cos3=0;
    text ="El resumen de tu compra es <br/>";
    
    iphones = document.getElementById("iph").value;
    sams = document.getElementById("sam").value;
    huaw = document.getElementById("hua").value;
    
    if(iphones > 0){
        cos1 = 20000*iphones;
        pro1 = (cos1*1.16);
        text+= iphones + " iPhones sería un subtotal de " + cos1 + " IVA " + parseInt(cos1*.16) + " Total " + pro1 + "<br/>";
    }
    
    if(sams > 0){
        cos2 = 18000*sams;
        pro2 = (cos2*1.16);
        text+= sams + " Samsungs sería un subtotal de " + cos2 + " IVA " + parseInt(cos2*.16) + " Total " + pro2 + "<br/>";
    }
    
    if(huaw > 0){
        cos3 = 10000*huaw;
        pro3 = (cos3*1.16);
        text+= huaw + " Huawei sería un subtotal de " + cos3 + " IVA " + parseInt(cos3*.16) + " Total " + pro3 + "<br/>";
    }
    text+="Total a pagar: " + parseInt(pro1+pro2+pro3);
    
    document.getElementById("resu").innerHTML = text;
}


function calculoAnual(){
    let ing;
    let egre;
    let impPag;
    
}