<?php
$docIp = fopen('docIp.txt', 'r+');
$ip = [];
$n = 0;
$p = 0;
$text = "limite ?";
echo $text;
$c = readline();


if($c){
    $ip0 = 'ping -c 1 10.216.0.';
    while ($n <= 999 && $n<$c) {
        $ipn= 0;

        $p++;
        $ip[] = exec($ip0.$n);
        $ipn = $ip0.$n;
        echo "ping ".$p." ".$ipn."\n";
        $n++;
    }
}
    for($e=0;$e<$c;$e++){
        if ($ip[$e] && $e<=999 ){

            fputs($docIp,"l'adresse 10.216.0.".$e." existe\n"); // On écrit le nouveau nombre de pages vues.
        }
    }
    fclose($docIp);
