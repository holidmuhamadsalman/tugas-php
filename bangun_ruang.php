<?php

// menghitung bangun ruang kubus
function kubus (){
 $sisi = 20;
 $volume = $sisi*$sisi*$sisi;
 echo " <b>1. Rumus Menghitung Volume Kubus</b><br>";
 echo " Rumus Volume : V = S<sup>3</sup><br>";
 echo " Diketahui S adalah panjang rusuk kubus / sisi<br><br>";
 echo " Panjang Sisi Kubus (s) : $sisi cm<br>";
 echo " V = $sisi x $sisi x $sisi  <br>";
 echo " Hasil Volume nya adalah : $volume ";
}

//menghitung volume bangun ruang limas
function limas (){
 $p = 1/3;
 $la = 50;
 $t = 20;
 $volume = $p*$la*$t;
 echo " <b>2. Rumus Menghitung Volume Limas</b><br>";
 echo " Rumus Volume : V = 1/3 x Luas Alas x Tinggi<br><br>";
 echo " Luas Alas : $la cm<br>";
 echo " Tinggi : $t cm<br>"; 
 echo " V = 1/3 x $la x $t  <br>";
 echo " Hasil Volume nya adalah : $volume ";
}

//menghitung volume bangun ruang prisma
function prisma (){
 $la = 20;
 $t = 5;
 $volume = $la*$t;
 echo " <b>3. Rumus Menghitung Volume Prisma</b><br>";
 echo " Rumus Volume : V = Luas Alas x Tinggi<br><br>";
 echo " Luas Alas : $la cm<br>";
 echo " Tinggi : $t cm<br>"; 
 echo " V = $la x $t  <br>";
 echo " Hasil Volume nya adalah : $volume ";
}

// untuk menampilkan hasil di web browser
kubus();
echo "<br><br><br>";
limas();
echo "<br><br><br>";
prisma();
echo "<br><br><br>";

?>