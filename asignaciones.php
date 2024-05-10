<?php
function asignaPrecio($codigo)
{
    switch ($codigo) {
        case 'p001':            return 1599;
        case 'p002':            return 1103;
        case 'p003':            return 599;
        case 'p004':            return 1499;
        case 'p005':            return 699;
        case 'p006':            return 999;
        case 'p007':            return 350;
        case 'p008':            return 299;
        case 'p009':            return 2999;
        case 'p010':            return 599;
    }
}

function muestraDescripcion($codigo)
{
    switch ($codigo) {
        case 'p001':            return 'EA SPORT FC 24';
        case 'p002':            return 'WWW 2K24';
        case 'p003':            return 'HOGWARTS LEGACY';
        case 'p004':            return 'FORZA HORIZON 5';
        case 'p005':            return 'GRAND THEFT AUTO V';
        case 'p006':            return 'MARIO KART 8 DELUXE';
        case 'p007':            return 'MINECRAFT';
        case 'p008':            return 'NARUTO SHIPPUDEN ULTIMATE NINJA STORM 4';
        case 'p009':            return 'STAR WARS OUTLAWS GOLDEN EDITION';
        case 'p010':            return 'RED DEAD REDEMPTION II';
    }
}
?>