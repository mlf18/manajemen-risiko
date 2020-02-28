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
function levelKemungkinan($lv){
    switch ($lv) {
        case '1':
            # code...
            return "Hampir Tidak Terjadi";
            break;
        case '2':
            # code...
            return "Jarang Terjadi";
            break;
        case '3':
            # code...
            return "Kadang Terjadi";
            break;
        case '4':
            # code...
            return "Sering Terjadi";
            break;
        case '5':
            # code...
           return "Hampir Pasti Terjadi"; 
            break;
        default:
            # code...
            break;
    }
}

function exceptArr($arr,$e){
    $out=[];
    foreach ($arr as $key => $value) {
        # code...
        if($key!=$e){
            $out[$key]=$value;
        }
    }
    return $out;
}

function levelDampak($lv){
    switch ($lv) {
        case '1':
            # code...
            return "Tidak Signifikan";
            break;
        case '2':
            # code...
            return "Minor";
            break;
        case '3':
            # code...
            return "Moderat";
            break;
        case '4':
            # code...
            return "Signifikan";
            break;
        case '5':
            # code...
           return "Sangat Signifikan"; 
            break;
        default:
            # code...
            break;
    }
}

function tgl_indo($tanggal){
	$bulan = array (
        0=>'',
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
    
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}