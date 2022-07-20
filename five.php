<?php

/**
 * @throws Exception Position not exists
 */
function getNumberByPosition(int $row_size, int $column_size, int $row_position, int $column_position){
    if($row_position > $row_size || $column_position > $column_size){
        throw new Exception('Position greater than size');
    }


    
}