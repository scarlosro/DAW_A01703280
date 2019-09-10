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
        
    </body>