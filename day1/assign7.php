<!-- <?php
echo (cos(5)); 
?>    -->

<?php
for ($i = 1; $i <= 6; $i ++){
  for ($j = 1; $j <= $i; $j ++){
    if($j == 1){
      $number[$i][$j] = 1; // start with 1
      echo $number[$i][$j]." ";
    }elseif($j == $i){
      $number[$i][$j] = 1; // end with 1
      echo $number[$i][$j]." " ;
    }else{
      $number[$i][$j] = $number[$i-1][$j-1] + $number[$i-1][$j];
      echo $number[$i][$j]." ";
    }
  }
  echo "<br />";
}
?>