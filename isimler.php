<?php
$dizi[1] = "aşk 101";
$dizi[2] = "aşk 101 izle";
$dizi[3] = "a101";
$dizi[4] = "aöf";
$dizi[5] = "atv";
$dizi[6] = "aras kargo";
$dizi[7] = "altın";
$dizi[8] = "akbank";
$dizi[9] = "atatürk";
$dizi[9] = "ayla";
$dizi[10] = "atiye";
$dizi[11] = "alef";
$dizi[12] = "akbaba";
$dizi[13] = "adana";
$dizi[14] = "ankara";
$dizi[15] = "artvin";
$dizi[16] = "alsancak";
$dizi[17] = "al";
$dizi[18] = "akvaryum";
$dizi[19] = "at";
$dizi[20] = "asıl";
$dizi[21] = "google";
$dizi[22] = "aferin";
$dizi[23] = "alina boz";
$dizi[24] = "aşk 101 oyuncuları";
$dizi[25] = "afra saraçoğlu";
$dizi[26] = "aamir khan";
$dizi[27] = "aaron hernandez";
$dizi[28] = "bash";
$dizi[29] = "apple";
$dizi[30] = "antartika";

$q = $_REQUEST["q"];

$ara = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($dizi as $isim) {
        if (stristr($q, substr($isim, 0, $len))) {
            if ($ara === "") {
                $ara = $isim;
            } else {
                $ara .= ", $isim";
            }
        }
    }
}

echo $ara === "" ? "" : $ara;

?>
<br>