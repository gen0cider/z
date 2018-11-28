<?php
system('clear');
include '.bomtokped.php';

$init = new Bom();
echo "\n\n\n";
echo "\033[31;1m...::::::::[ Created by : Zaa Eka Gumilar ]::::::::...\n";

echo "\033[32;1m----------------------------------------------------\n";
echo "\033[00;3mNote :
Target akan menerima sms/call dari TOKOPEDIA.COM
Eksekusi Call/Sms hanya 3x perjam.. 
Pastikan anda memiliki koneksi internet..\n";
echo "\033[32;1m----------------------------------------------------\n\n";


echo "\033[00;1mMasukan Nomor Target (tanpa 62/0)\n\033[33;1mInput : ";
$a = trim(fgets(STDIN));

echo "\033[00;1msms atau call?\n\033[33;1mInput : ";
$b = trim(fgets(STDIN));
$init->type = "$b";
$init->no = "$a";

if ($init->type == sms) {
	for ($i=0; $i < 2; $i++) { 
	    $init->Verif($init->no,$init->type);
	}
}elseif ($init->type == call) {
	 $init->Verif($init->no,$init->type);
}
