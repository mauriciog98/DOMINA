<?php

/**
 * @throws Exception Position not exists
 */
function getNumberByPosition(int $row_size, int $column_size, int $row_position, int $column_position){
    if($row_position > $row_size || $column_position > $column_size){
        throw new Exception('Position greater than size');
    }

    $max_number = $row_position + $column_position;
    $amount = 0;
    for($i = 0; $i <= $max_number; $i++){
        $amount += $i;
    }

    return $amount + $column_position;

}

echo getNumberByPosition(3,2,3,2).PHP_EOL;
try {
    echo getNumberByPosition(3, 2, 3, 9) . PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage();
}
echo getNumberByPosition(3,4,3,4).PHP_EOL;
echo getNumberByPosition(5,2,5,2).PHP_EOL;
echo getNumberByPosition(1,6,1,6).PHP_EOL;