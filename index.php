<?php
  function FaktoriyelHesapla($sayi) {
    $faktoriyel = 1;

    if ($sayi < 0) {
        return "Negatif sayının faktoriyeli hesaplanamaz.";
    } elseif ($sayi == 0) {
        return 1;
    } else {
        for ($i = 1; $i <= $sayi; $i++) {
            $faktoriyel *= $i;
        }
        return $faktoriyel;
    }
  }
for( $i=0 ; $i<=10 ; $i++) {
    $sonuc = FaktoriyelHesapla($i);
    echo $i." 'in faktoriyeli: " . $sonuc;
    echo'<br>';
}
