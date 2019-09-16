<?php

require_once('util.php');
    
    encabezado();
?>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Regresar</a></li>
        </ul>
    </nav>
    <h1 class="content-align center">RESULTADO</h1>
    <h2 class="content-align center">Hola: <?php echo htmlspecialchars(htmlentities($_GET["nombre"]),ENT_QUOTES,'UTF-8'); ?> </h2>
    
    <h4 class="content-align center">Te informamos que tu resultado es: <br/>
    <?php
        echo htmlspecialchars(htmlentities($mensaje,ENT_QUOTES,'UTF-8'));
    ?></h4>
    <br/>
    <br/>
    <br/>
    
</body>

<?php
    require_once('util.php');
    footer();
?>