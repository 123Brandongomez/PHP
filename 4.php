<?php

function menu() {
    $consultar_saldo = readline("desea consultar saldo: ");
    $consignar_dinero = readline("desea consignar dinero: ");
    $retirar_dinero = readline("desea retirar dinero: ");

    return [$consultar_saldo, $consignar_dinero, $retirar_dinero];
}

list($consultar_saldo, $consignar_dinero, $retirar_dinero) = menu();

if ($consultar_saldo == "si") {
    echo saldo();
    
} elseif ($consignar_dinero == "si") {
    $dinero = intval(readline("Ingrese su cantidad: "));
    consignar_dinero($dinero);



} elseif ($retirar_dinero == "si") {
    $retirar_dinero = intval(readline("ingrese el dinero a retirar: "));
    retirado($retirar_dinero);
} else {
    echo "opción incorrecta";
}

function saldo() { 
    $saldo = 100; 
    return "su saldo es de: ". $saldo;
}

function consignar_dinero($dinero) {   
    echo "has consignado $". $dinero;
}

function retirado($retirar_dinero) { 
    echo "su dinero retirado es de $". $retirar_dinero;
}
