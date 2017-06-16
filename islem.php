<?php
$sayi=rand(1,49);
$sayac=1;
$sayilar[]=$sayi;
while($sayac<6){
   $sayi=rand(1,49);
   
   $varmi=false;
   $indis=0;
   while(@$sayilar[$indis]){
      if ($sayilar[$indis]==$sayi)
         $varmi=true;
      $indis++;
   }

   if ($varmi==false){
      $sayilar[]=$sayi;
      $sayac++;
   }
}
	sort($sayilar);
	for($i=0;$i<=5;$i++){
		echo '<span id="top">'.$sayilar[$i].'</span>';
	}
	echo '<br><br><br>';
?>