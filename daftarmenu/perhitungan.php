<?php

class Phone_Number {
  
  // properti
   var $no_hp;
   var $email;
}
  
// buat objek dari class Phone_Number (instansiasi)
$andi = new Phone_Number();
$rudi = new Phone_Number();

// set property untuk objek andi
$andi->no_hp="08123232";
$andi->email="andi@dtc-ilmu.com";

// set property untuk objek rudi
$rudi->no_hp="08114545";
$rudi->email="rudi@dtc-ilmu.com";
  
// Cetak property untuk objek andi
echo "Phone Number Untuk Andi"."<br>";
echo $andi->no_hp; 
echo "<br />";
echo $andi->email; 
echo "<br />";

// Cetak property untuk objek rudi
echo "<br><br>"."Phone Number Untuk Rudi"."<br>";
echo $rudi->no_hp; 
echo "<br />";
echo $rudi->email; 
echo "<br />";

?>