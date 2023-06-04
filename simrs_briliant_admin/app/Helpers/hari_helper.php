<?php 

function nama_hari($param){
    switch ($param) {
        case 'Sun':
            return "Minggu";
            break;
        case 'Mon':
            return "Senin";
            break;
        case 'Tue':
            return "Selasa";
            break;
        case 'Wed':
            return "Rabu";
            break;
        case 'Thu':
            return "Kamis";
            break;
        case 'Fri':
            return "Jumat";
            break;
        case 'Sat':
            return "Sabtu";
            break;
        default:
            return "Tidak ada";
            break;
    }
}

?>