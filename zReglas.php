<?php

// Función para la suma de las Variables Competencias Duras

function sumaCompDuras($var1, $var2, $var3, $var4, $var5)
{
    include 'config.php';
    $suma_result = $var1 + $var2 + $var3 + $var4 + $var5;
    return $suma_result;
}

// Funcion par la suma de las Variables Competencias Blandas

function sumaCompBlandas($var1, $var2, $var3, $var4, $var5){

    include 'config.php';
    $suma_resultado = $var1 + $var2 + $var3 + $var4 + $var5;
    return $suma_resultado;
}

// Función para la Salida de VCB

function cambioFuzzy($varCB){
    if ($varCB >=0 and $varCB <= 25){
        $varCB = "Bajo";
    }elseif($varCB >=26 and $varCB <= 50){
        $varCB = "Medio";
    }elseif($varCB >=51 and $varCB <= 75){
        $varCB = "Alto";
    }else{
        $varCB = "Optimo";
    }
    return $varCB;
}

// Funcion para la Salida de VCD

function cambioFuzzyVCD($varSuma){
    if ($varSuma >= 51){
        $varSalida = "Habilitado";
    }else{
        $varSalida = "Inhabilitado";
    }
    return $varSalida;
} 

// Funcion para las REGLAS DE PRODUCCION

function reglasFuzzy($var1, $var2, $var3, $var4, $var5){

    if ($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Bajo"){
        $vcb_salida = "Malo";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Medio"){
        $vcb_salida = "Malo";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Alto"){
        $vcb_salida = "Malo";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Optimo"){
        $vcb_salida = "Malo";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Bajo"){
        $vcb_salida = "Malo";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Medio"){
        $vcb_salida = "Malo";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Alto"){
        $vcb_salida = "Malo";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Optimo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Bajo"){
        $vcb_salida = "Malo";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Optimo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Optimo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Bajo"){
        $vcb_salida = "Malo";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Optimo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Optimo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Alto"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Bajo" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Bajo"){
        $vcb_salida = "Malo";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Optimo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Optimo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Alto"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Medio" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Alto"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Bajo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Medio"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Alto"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Bajo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Medio"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Alto"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Medio" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Optimo"){
        $vcb_salida = "Excelente";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Bajo"){
        $vcb_salida = "Malo";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Medio"){
        $vcb_salida = "Malo";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Optimo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Bajo"){
        $vcb_salida = "Malo";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Optimo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Optimo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Bajo" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Optimo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Optimo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Medio"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Alto"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Bajo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Medio"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Alto"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Alto" and $var2 == "Medio" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Bajo" and $var5 == "Optimo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Medio"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Alto"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Bajo" and $var4 == "Medio" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Medio"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Alto"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Alto" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Bajo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Medio"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Alto"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Alto" and $var3 == "Medio" and $var4 == "Optimo" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Bajo"){
        $vcb_salida = "Observado";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Medio"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Alto"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Bajo" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Bajo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Medio"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Alto"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Alto" and $var4 == "Medio" and $var5 == "Optimo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Bajo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Medio"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Alto"){
        $vcb_salida = "Excelente";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Alto" and $var5 == "Optimo"){
        $vcb_salida = "Excelente";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Bajo"){
        $vcb_salida = "Optimo";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Medio"){
        $vcb_salida = "Excelente";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Alto"){
        $vcb_salida = "Excelente";
    }elseif($var1 == "Optimo" and $var2 == "Optimo" and $var3 == "Optimo" and $var4 == "Optimo" and $var5 == "Optimo"){
        $vcb_salida = "Excelente";
    }else{
        $vcb_salida = "Observado";
    }

    return $vcb_salida;
}

// Funcion para las META-REGLAS DE PRODUCCION

function metaReglasFuzzy($var_vcd, $var_vcb){

    if($var_vcd == "Habilitado" and $var_vcb == "Malo"){
        $resultado = "Rechazado";
    }elseif($var_vcd == "Habilitado" and $var_vcb == "Observado"){
        $resultado = "Observado";
    }elseif($var_vcd == "Habilitado" and $var_vcb == "Optimo"){
        $resultado = "Aceptado";
    }elseif($var_vcd == "Habilitado" and $var_vcb == "Excelente"){
        $resultado = "Aceptado";
    }else{
        $resultado = "Rechazado";
    }


    return $resultado;
}



?>