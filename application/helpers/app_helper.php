<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function kategoriRisiko($kat){
    switch ($kat) {
        case 0:
            # code...
            return "Risiko Kebijakan/ Stratejik";
            break;
        case 1:
            return "Risiko Operasional";
            break;
        case 2:
            return "Risiko Kepatuhan";
            break;
        
        case 3:
            return "Risiko Finansial";
            break;
        
        default:
            # code...
            break;
    }
}
function sumberRisiko($kat){
    switch ($kat) {
        case 0:
            # code...
            return "SDM";
            break;
        case 1:
            return "Material";
            break;
        case 2:
            return "Mesin/Alat";
            break;
        
        case 3:
            return "Metode";
            break;
        case 4:
            return "Anggaran";
            break;
        default:
            # code...
            break;
    }
}
function tipeRisiko($kat){
    switch ($kat) {
        case 0:
            # code...
            return "Uncontrollable";
            break;
        case 1:
            return "Controllable";
            break;
        default:
            # code...
            break;
    }
}