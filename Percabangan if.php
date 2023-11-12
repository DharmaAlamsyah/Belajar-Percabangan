<?php 
/* Bentuk yang paling sederhana dari percabangan adalah "if" saja.
Biasanya digunakan saat hanya ada satu tindakan yang harus dilakukan*/

// Struktur Percabangan
    if ('<kondisi>'){
        //eksekusi kode ini
    };
?>

<?php 
//Contoh
    $total_belanja = 150000;

    if($total_belanja > 0){
        echo "Anda Dapat Hadiah!!";
    }
?>