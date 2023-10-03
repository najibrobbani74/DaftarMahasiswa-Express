<?php
function luasSegitiga($alas,$tinggi)
{
    return 0.5 * $alas * $tinggi;
}
function kelilingSegitiga($alas,$tinggi)
{
    $miring =  sqrt(pow($alas,2)+pow($tinggi,2));
    return $alas +$tinggi+$miring ;
}
echo "Luas = ".    number_format((float)luasSegitiga(3,4),2,',','.');
echo "Keliling = ".number_format((float)kelilingSegitiga(3,4),2,',','.');
?>