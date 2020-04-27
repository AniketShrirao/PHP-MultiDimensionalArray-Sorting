<?php 
  include "Array_sort.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>
<body>
  <h1> Given Array: </h1>
  <p>
    <?php 
      $firstArray = [5, 2, 1, [0, 8, 3], [4, 7, [9, 11, 56], 68], [12, 76, [19, 34], 35]];
      pre_r($firstArray);
    ?>
  </p>
  <p><b> Sorted Array:</b>
    <?php 
      $store = sortIndexedArray($firstArray);
      $fArray = arraySorting($store);
      echo pre_r($fArray);
    ?>
  </p>

  <h1> Given Array: </h1>
  <p><?php
      $secondArray =["6" => "six", "1" => "one", ["4" => "four", "9" => "nine", ["7" => "seven", "3" => "three"], "8" => "eight", "10" => "ten"], "2" => "two", ["5" => "five", "14" => "fourteen"], "11" => "eleven", "13" => "thirteen", ["15" => "fifteen"], "12" => "twelve"];
      pre_r($secondArray);
     ?>
  </p>
  <p><b> Sorted Array:</b> 
    <?php
    $newKeyArray = sortAssociativeArray($secondArray);
    $sorted = array();
    $keys = array_keys($newKeyArray);
    foreach (sortAcctoKeys($keys) as $key) {
    $sorted[$key] = $newKeyArray[$key];
    }
    echo pre_r($sorted);
    ?>
  </p>
  <h1> Given Array: </h1>
  <p><?php
        $thirdArray =["6" => "six", "1" => "one", ["4" => "four", "9" => "nine", ["7" => "seven", "3" => "three"], "8" => "eight", "10" => "ten"], "2" => "two", ["5" => "five", "14" => "fourteen"], "11" => "eleven", "13" => "thirteen", ["15" => "fifteen"], "12" => "twelve"];
        pre_r($thirdArray);
    ?>
  </p>
  <p><b> Sorted Array:</b> <br><br>
    <?php 
    $tnewKeyArray = sortAssociativeArray($thirdArray);
    $tsorted = array();
    $tkeys = array_keys($tnewKeyArray);
    foreach (sortAcctoKeys($tkeys) as $key) {
    $tsorted[$key] = $tnewKeyArray[$key];
    }
    evenOddSeperator($tsorted);
    ?>
   <h4><b> Even: </b></h4> <?php  echo pre_r($even);  ?> 
   <h4><b> Odd:  </b></h4> <?php  echo pre_r($odd); ?>
  </p>
</body>
</html>