<?php

function calculoAnual($ing, $egre, $impPag){
    $utilidad=0;
    $tasa=0.0000;
    $cuoxTa=0.00;
    $cuoFi=0.00;
    $stotal=0.00;
    $total=0.00;
    $limInf=0.00;
    $exc=0.00;
    
    
    $utilidad = $ing - $egre;
    
    if($utilidad > 0){
        if($utilidad >= 0.01 && $utilidad <= 6942.20 ){
            $limInf = 0.01;
            $tasa= 0.0192;
            $cuoFi=0.00;
        }
        else if($utilidad >=6942.21 && $utilidad <= 58922.16){
            $limInf = 6942.21;
            $tasa= 0.0640;
            $cuoFi=133.28;
            
            
        }
        else if($utilidad >=58922.17 && $utilidad <= 103550.44){
            $limInf = 58922.17;
            $tasa= 0.1088;
            $cuoFi=3460.01;
        }
        else if($utilidad >=103550.45 && $utilidad <= 120372.83){
            $limInf = 103550.45;
            $tasa= 0.1600;
            $cuoFi=8315.57;
        }
        else if($utilidad >=120372.84 && $utilidad <= 144119.23){
            $limInf = 120372.84;
            $tasa= 0.1792;
            $cuoFi=11007.14;
        }
        else if($utilidad >=144119.24 && $utilidad <= 290667.75){
            $limInf = 144119.24;
            $tasa= 0.2136;
            $cuoFi=15262.49;
        }
        else if($utilidad >=290667.76 && $utilidad <= 458132.29){
            $limInf = 290667.76;
            $tasa= 0.2352;
            $cuoFi=46565.26;
        }
        else if($utilidad >=458132.30 && $utilidad <= 874650.00){
            $limInf = 458132.30;
            $tasa= 0.3000;
            $cuoFi=85952.92;
        }
        else if($utilidad >=874650.01 && $utilidad <= 1166200.00){
            $limInf = 874650.01;
            $tasa= 0.3200;
            $cuoFi=210908.23;
        }
        else if($utilidad >=120372.84 && $utilidad <= 3498600.00){
            $limInf = 120372.84;
            $tasa= 0.3400;
            $cuoFi=304204.21;
        }
        else if($utilidad >= 3498600.01){
            $limInf = 3498600.01;
            $tasa= 0.3500;
            $cuoFi=1097220.21;
        }
        
        
        $exc=$utilidad-$limInf;
        $cuoxTa = ($exc*$tasa);
        
        $stotal = $cuoFi + $cuoxTa;
        
        $total = $stotal - $impPag;
        
    }
    else{
        $total= -$impPag;
    }
    
    return $total;
}

if(isset($_GET['calcular'])){
    
   
    $nom = $_GET['nombre'];
    $ingr = $_GET['ingreso'];
    $egre = $_GET['egreso'];
    $paga = $_GET['impPag'];

    if(!empty($nom) && is_numeric($ingr) && is_numeric($egre) && is_numeric($paga) && $ingr >= 0 && $egre>= 0 && $paga >=0){
        $calculo = calculoAnual($ingr,$egre,$paga);
        if($calculo == 0){
            $mensaje = "No pagaras impuesto";
        }
        else if($calculo > 0){
            $mensaje = "El impuesto a pagar es de " .$calculo;
        }
        else if($calculo < 0){
            $mensaje = "El impuesto a favor es de " .$calculo;
        }
    }
    else{
        $error ="Los datos son incorrectos";
        include("_head.html");
        include("_body.html");
        include("_footer.html");
    }
}
else{
        include("_head.html");
        include("_body.html");
        include("_footer.html");
        echo 'ends here2';
    }
?>