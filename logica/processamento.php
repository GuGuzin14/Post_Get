<?php
require 'funcoesCalculo.php';
$resultado = "";
session_start(); //iniciando a session! Permitindo uso de variaveis de session"
if(!empty($_GET['inputNum1']) && !empty($_GET['inputNum2'])){

    $numero1 = $_GET['inputNum1'];
    $numero2 = $_GET['inputNum2'];

    if ($_GET['selectOperacoes'] == "adicao")
    {
        $resultado = $numero1. " + " . $numero2 . " = ". adicao($numero1,$numero2);
    }
    else if ($_GET['selectOperacoes'] =="subtracao")
    {
        $resultado = $numero1. " - " . $numero2 . " = ". subtracao($numero1,$numero2);
    }
    else if ($_GET['selectOperacoes'] =="multiplicacao")
    {
        $resultado = $numero1. " * " . $numero2 . " = ". multiplicacao($numero1,$numero2);
    }
    else if ($_GET['selectOperacoes'] =="divisao")
    {
        $resultado = $numero1. " / " . $numero2 . " = ". divisao($numero1,$numero2);
    }
    
    $_SESSION['resultado'] = $resultado;

    header("location:../index.php");
    die();

}

if(!empty($_POST['conversor'])){

    $numero1 = $_POST['conversor'];
   

    if ($_POST['selectOperacoes'] == "fehrenheit")
    {
        $resultado = "Aproximadamente: ". fehrenheit($numero1)." °F " ;
    }
    else if ($_POST['selectOperacoes'] =="celcius")
    {
        $resultado = "Aproximadamente: ". celcius($numero1). " °C ";
    }
    $_SESSION['conversor'] = $resultado;
    header("location:../temperatura.php");
    die();

}
if(!empty($_GET['tamanho'])){

    $numero1 = $_GET['tamanho'];
   

    if ($_GET['selectOperacoes'] == "metros")
    {
        $resultado = "Centimetros para Metros: ". metros($numero1)." m " ;
    }
    else if ($_GET['selectOperacoes'] =="centimetros")
    {
        $resultado = "Metros para centimetros: ". centimetros($numero1). " cm ";
    }
    else if ($_GET['selectOperacoes'] =="kmmetros")
    {
        $resultado = "Quilometros para Metros: ". kmmetros($numero1). " m ";
    }
    else if ($_GET['selectOperacoes'] =="km")
    {
        $resultado = "Metros para Km: ". km($numero1). " km ";
    }
    $_SESSION['tamanho'] = $resultado;
    header("location:../conversor.php");
    die();

}

?>