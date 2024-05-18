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
        <form method="POST" action="logica/processamento.php">
            <label>Converta Graus</label>
            <input type="text" name="conversor" placeholder="Converta Agora">
            <select name="selectOperacoes">
                <option value="fehrenheit">Celcius para fehrenheit</option>
                <option value="celcius">Fehreheit para Celcius</option>
               
            </select>
            <input id="botao" type="submit" value="Calcular">
        </form>
        <h1 id="conversor">
            <?php
            //verificando se existe a variavel de session resultado
            if(isset($_SESSION['conversor'])){
                //caso exista, utiliza um echo para exibir o resultado
                echo $_SESSION['conversor'];
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