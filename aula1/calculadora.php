<!DOCTYPE HTML>
<html>
    <head>
        <title>Calculadora</title>
    </head>
    <body>
        <form action="verificaCalculo.php" method="post">
            <input type="number" name="valor1"/><br />
            <input type="number" name="valor2"/><br />
            <select name="operador">
                <option value="+">SOMAR</option>
                <option value="-">SUBTRAIR</option>
                <option value="*">MULTIPLICAR</option>
                <option value="/">DIVIDIR</option>
            </select>
            <input type="submit" name="CALCULAR"/><br />
        </form>
        <h1>
            <?php
            if(isset($_GET['msg'])){
                echo $_GET['msg'];
            }
            ?>
        </h1>
    </body>
</html>