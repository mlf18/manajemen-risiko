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