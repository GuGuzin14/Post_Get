<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo" >
        <form method="GET" action="logica/processamento.php">
            <label>Valor de medida:</label>
            <input type="text" name="tamanho" placeholder="Qual a medida">
           
            <select name="selectOperacoes">
                <option value="metros">Centimetros para Metros</option>
                <option value="centimetros">Metros para centimetros</option>
                <option value="kmmetros">Quilometros para Metros</option>
                <option value="km">Metros para Quilometros</option>
            </select>
            <input id="botao" type="submit" value="Calcular">
        </form>
        <h1 id="resultado">
            <?php
            //verificando se existe a variavel de session resultado
            if(isset($_SESSION['tamanho'])){
                //caso exista, utiliza um echo para exibir o resultado
                echo $_SESSION['tamanho'];
            }
            ?>
        </h1>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas - AMS</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>