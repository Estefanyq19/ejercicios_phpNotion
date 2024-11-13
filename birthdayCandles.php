<?php

/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles($candles) {
    //write your code here
    $max_height = max($candles);// Para encontrar la altura máxima de las velitas
    
    // Nos servirá para contar cuántas velas tienen esa altura
    $count = 0;
    foreach ($candles as $candle) {
        if ($candle == $max_height) {
            $count++;
        }
    }
    
    return $count;
}

$candles = [4, 4, 1, 3]; 
$result = birthdayCakeCandles($candles);

echo $result . "<br>";

// $fptr = fopen(getenv("OUTPUT_PATH"), "w");

// $candles_count = intval(trim(fgets(STDIN)));

// $candles_temp = rtrim(fgets(STDIN));

// $candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));

// $result = birthdayCakeCandles($candles);

// fwrite($fptr, $result . "<br>");

// fclose($fptr);
