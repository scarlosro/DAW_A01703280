var number = prompt("Escribe tu nombre", "Text");

for(i=1;i<=number;i++){
    document.write("Number is " + i +" Square is: " + Math.pow(i,2));
    document.write("<br/>");
}

function contador(){
    var arreglo = [-2,5,6,-8,-9,10,23,0];
    var neg=0, pos = 0, zeros = 0;
    
    for(n = 0; n < arreglo.length; n++){
        if(arreglo[i] > 0){
            pos++;
        }
        else if(arreglo[i]<0){
            neg++;
        }
        else{
            zeros++;
        }
    }
    
    document.write("Mayores a ceros " + pos + "<br/>");
    document.write("Ceros son " + zeros + "<br/>");
    document.write("Menores a ceros " + neg + "<br/>");
}

function promedio(){
    var matriz= [[10,9,9],[10,7,5],[8,4,8]];
    var acum = 0;
    for(o=0; o < 3;o++){
        for(j=0; j < 3; j++){
            acum+=matriz[o][j];
        }
        acum/=3;
        document.write("Promedio es " + acum + "<br/>");
        acum=0;
    }
}

function inverso(){
    var numero= 1234;
    while(Math.round(numero/10) > 0 && numero >= 10){
        document.write(parseInt(numero%10));
        parseInt(numero = numero/ 10, 10);
    }
    document.write(parseInt(numero,10))
    
}

function suma(){
    var num1, num2, res;
    num1= Math.floor(Math.random()*10);
    num2= Math.floor(Math.random()*10);
    var time1 = performance.now();
    res = prompt("Cuanto es la suma de " + num1 + " + " + num2,"Escribe tu respuesta");
    var time2 = performance.now();
    var dif = (time2-time1)/1000;
    if((num1 + num2) == res){
        alert("La respuesta es correcta tardaste " + dif );
    }
    else{
        alert("La respuesta es incorrecta tardaste " + dif );
    }
}


