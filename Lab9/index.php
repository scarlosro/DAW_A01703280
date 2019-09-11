<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 9</title>
    </head>
    <body>
        <header>
        
        
        </header>
        <section>
            
            <h1> Calculo del promedio</h1>
            <form action="problema1.php" method ="post">
                <label>Calificacion 1</label><input type="number" name="valor1"/>
                <label>Calificacion 2</label><input type="number" name="valor2"/>
                <label>Calificacion 3</label><input type="number" name="valor3"/><br/>
                <input type="submit" value="promedio" />
            </form>
        </section>
        <section>
            <h2> Calculo de la mediana</h2>
            <form action="problema2.php" method="post">
                <label>Calificacion 1</label><input type="number" name="valor1"/>
                <label>Calificacion 2</label><input type="number" name="valor2"/>
                <label>Calificacion 3</label><input type="number" name="valor3"/>
                <label>Calificacion 4</label><input type="number" name="valor4"/>
                <label>Calificacion 5</label><input type="number" name="valor5"/><br/>
                <input type="submit" value="Mediana" />
            </form>
        </section>
        <section>
            <h2> Orden Asc y Desc</h2>
            <form action="problema3.php" method="post">
                <label>Num 1</label><input type="number" name="valor1"/>
                <label>Num 2</label><input type="number" name="valor2"/>
                <label>Num 3</label><input type="number" name="valor3"/>
                <label>Num 4</label><input type="number" name="valor4"/>
                <label>Num 5</label><input type="number" name="valor5"/><br/>
                <input type="submit" value="Mediana" />
            </form>
        </section>
        
        <section>
            <h2> INSERTA UN NUMERO</h2>
            <form action="problema4.php" method="post">
                <label>Num 1</label><input type="number" name="n"/><br/>
                <input type="submit" value="POTENCIAS" />
            </form>
        </section>
        
        <section>
            <h2> FRASE POLINDROMA</h2>
            <form action="problema5.php" method="post">
                <label>Num 1</label><input type="text" name="frase"/><br/>
                <input type="submit" value="POLINDROMA?" />
            </form>
        </section>
        
        <section>
            <h3>Preguntas</h3>
                <lo>
                    <li>¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención</li>
                    <p>Nos muestra la configuracion que esta en el PHP</p>
                    <p>INFO_CONFIGURATION: Valores locales  y maestros actuales de las directivas de PHp.</p><p>INFO_ENVIROMENT: Información de las variables de entorno</p>
                    <p>INFO_LICENSE: información de la licensia de PHP[1]</p>
                    <li>¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción?</li>
                    <p>Sobre las conmpilaciones  y extensiones utilizadas en PHP[1]</p>
                    <li>¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.
                    <p> Nosotros hacemos peticiones desde un archivo de HTML residente en el servidor, por lo cual envía la información para que sea procesada, recordando que PHP es un Preprocesador de Hipertextos[2]</p>
                    </li>
                </lo>
        </section>
        <footer>
        <ol>
            <li>https://www.php.net/manual/es/function.phpinfo.php</li>
        <li>http://www.adelat.org/media/docum/nuke_publico/lenguajes_del_lado_servidor_o_cliente.html</li>
            </ol>
        </footer>
    </body>