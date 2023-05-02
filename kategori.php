<?php

$nama = "Holid Muhamad Salman";
$tinggibadan = 165/100;
$beratbadan = 53;
$bmi = $beratbadan/($tinggibadan*$tinggibadan);
if ($bmi < 17) {
        echo "Halo, $nama Nilai BMI anda adalah <b>$bmi</b>, anda termasuk <b>Kurus</b>";
}elseif ($bmi <23) {
        echo "Halo, $nama Nilai BMI anda adalah <b>$bmi</b>, anda termasuk <b>Sedang</b>";
}elseif ($bmi <27){
        echo "Halo, $nama Nilai BMI anda adalah <b>$bmi</b>, anda termasuk <b>Gemuk</b>";
}

?>