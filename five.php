<?php

const MAX_PERIMETER = 1/9;
const LIMIT_PERIMETER = 4/9;

/**
 * @throws Exception Position not exists
 */
function getNumberByPosition(string $case){
    if (strpos($case, ' ') === false) {
        throw new Exception('Case must have blank space');
    }

    $data = explode(' ', $case);
    $l = intval($data[0]);

    $n = intval($data[1]);

    $area = $l * $l;

    if ($n > $area) {
        throw new Exception("Can't take $n blocks, area has only $area blocks");
    }

    $relation = $area/$n;

    if($relation <= MAX_PERIMETER){
        $perimeter = ($l * 4) + ($n * 4);
    }elseif($relation <= LIMIT_PERIMETER){
        $perimeter = ($l * 4) + ($n * 2);
    }else{
        $perimeter = $l*4;
    }

    return $perimeter;
    
}