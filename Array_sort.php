<?php 

// For Printing Array as it is
  function pre_r($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
  }

  $singleArray = array();
  // For making First Multidimensional Indexed Array to a single dimension array
  function sortIndexedArray($givenArray) {
    global $singleArray;
    foreach($givenArray as $val){
      //Print out the element if it isn't an array.
      if(!is_array($val)){
          array_push($singleArray,$val);
      } else {
        sortIndexedArray($val);
      }
    }
    return $singleArray;
  }

  $keyArray = array();
  // For sorting Associative Array
  function sortAssociativeArray($givenArray) {
    global $keyArray;
   foreach ($givenArray as $key => $value) {
    if(!is_array($value)){
      $keyArray[$key] = $value; 
    } else {
    sortAssociativeArray($value);
    }
   }
   return $keyArray;
  }

  // for sorting single array according to its keys
  function sortAcctoKeys($onlyKeyArray) {
    for ($i = 0; $i < count($onlyKeyArray); $i++) {
      $j = $i;
      while ($j > 0 && $onlyKeyArray[$j] < $onlyKeyArray[$j-1]) {
        $tmp = $onlyKeyArray[$j-1];
        $onlyKeyArray[$j-1] = $onlyKeyArray[$j];
        $onlyKeyArray[$j] = $tmp;
        $j--;
      }
    }
    return $onlyKeyArray;
  }

  $even = [];
  $odd = [];
  // for seperating single array by its values in Even and Odd
  function evenOddSeperator($givenArray) {
    global $even,$odd;
    foreach ($givenArray as $key => $value) {
      if ($key % 2 == 0) {
        $even[$key] = $value; 
      } else {
        $odd[$key] = $value; 
      }
    }
  }

  // sorting single dimensional array 
  function arraySorting($store) {
    for ($i=0; $i < count($store); $i++) { 
      for ($j= $i + 1; $j < count($store) ; $j++) { 
        if($store[$j] < $store[$i]) {
          $temp = $store[$i];
          $store[$i] = $store[$j];
          $store[$j] = $temp;
        }
      }
    }
    return $store;
  }

?>