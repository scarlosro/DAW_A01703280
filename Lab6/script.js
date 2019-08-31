let pass;
let pass2;
let tamano;
let num=false;
let upper=false;
let minus=false;
let charac=false;
let pasar = setInterval(cadaTiempo,1000);
let otra = setTimeout(saluda,1000)
var n=20;


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
    let ing=0;
    let egre=0;
    let utilidad=0;
    let impPag=0;
    let tasa=0.0000;
    let cuoxTa=0.00;
    let cuoFi=0.00;
    let stotal=0.00;
    let total=0.00;
    let limInf=0.00;
    let exc=0.00;
    ing = document.getElementById("ingreso").value;
    egre = document.getElementById("egreso").value;
    impPag = document.getElementById("impPag").value;
    if(ing == "")
        ing=parseFloat(0);
    if(egre == "")
        egre=parseFloat(0);
    if(impPag == "")
        impPag=parseFloat(0);
    
    utilidad = parseFloat(ing) - parseFloat(egre);
    
    if(utilidad > 0){
        alert(utilidad);
        if(utilidad >= 0.01 && utilidad <= 6942.20 ){
            limInf = 0.01;
            tasa= 0.0192;
            cuoFi=0.00;
        }
        else if(utilidad >=6942.21 && utilidad <= 58922.16){
            limInf = 6942.21;
            tasa= 0.0640;
            cuoFi=133.28;
        }
        else if(utilidad >=58,922.17 && utilidad <= 103550.44){
            limInf = 58,922.17;
            tasa= 0.1088;
            cuoFi=3460.01;
        }
        else if(utilidad >=103550.45 && utilidad <= 120372.83){
            limInf = 103550.45;
            tasa= 0.1600;
            cuoFi=8315.57;
        }
        else if(utilidad >=120372.84 && utilidad <= 144119.23){
            limInf = 120372.84;
            tasa= 0.1792;
            cuoFi=11007.14;
        }
        else if(utilidad >=144119.24 && utilidad <= 290667.75){
            limInf = 144119.24;
            tasa= 0.2136;
            cuoFi=15262.49;
        }
        else if(utilidad >=290667.76 && utilidad <= 458132.29){
            limInf = 290667.76;
            tasa= 0.2352;
            cuoFi=46565.26;
        }
        else if(utilidad >=458132.30 && utilidad <= 874650.00){
            limInf = 458132.30;
            tasa= 0.3000;
            cuoFi=85952.92;
        }
        else if(utilidad >=874650.01 && utilidad <= 1166200.00){
            limInf = 874650.01;
            tasa= 0.3200;
            cuoFi=210908.23;
        }
        else if(utilidad >=120372.84 && utilidad <= 3498600.00){
            limInf = 120372.84;
            tasa= 0.3400;
            cuoFi=304204.21;
        }
        else if(utilidad >= 3498600.01){
            limInf = 3498600.01;
            tasa= 0.3500;
            cuoFi=1097220.21;
        }
        exc=parseFloat(utilidad-limInf);
        cuoxTa = parseFloat(exc*tasa).toFixed(2);
        cuoFi = parseFloat(cuoFi).toFixed(2);
        stotal = parseFloat(cuoFi) + parseFloat(cuoxTa);
        total = parseFloat(stotal) - parseFloat(impPag);
        
    }
    else{
        total= -impPag;
    }
        document.getElementById("inf").innerHTML = limInf;
        document.getElementById("exc").innerHTML = exc;
        document.getElementById("tasa").innerHTML = parseFloat((tasa*100)).toFixed(2) +"%";
        document.getElementById("impT").innerHTML = cuoxTa;
        document.getElementById("cuoF").innerHTML = cuoFi;
        document.getElementById("total").innerHTML = stotal;
        document.getElementById("fin").innerHTML = total.toFixed(2);
    
}


function encima(){
    document.getElementById("arriba").innerHTML = "Pasaste x aquí";
    
}

function fuera(){
    document.getElementById("arriba").innerHTML = "Pon el mouse en esta parte :)";
}

function cambiarFormato(){
    document.getElementById("dar").style.fontFamily ="monospace";
    document.getElementById("dar").style.fontSize = "50";
}

function cadaTiempo(){
    document.getElementById("crece").style.fontSize = n;
    n = n + 1;
}

function saluda(){
    alert("Bienvenido a la página web");
}