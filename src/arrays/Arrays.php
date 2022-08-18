<?php
namespace arrays;

class Arrays implements ArraysInterface{


    public function repeatArrayValues(array $input): array
    {
        $new_array = [];
        // TODO: Implement repeatArrayValues() method.
        for ($i = 0; $i<count($input); $i++) {
            for ($j = 0; $j< $input[$i]; $j++){
                array_push($new_array, $input[$i]);
            }
        }
        print_r($new_array);
        return $new_array;
    }

    public function getUniqueValue(array $input): int
    {
        // TODO: Implement getUniqueValue() method.
        $new_array = [];
        $unique_in_array = array_count_values($input);


        foreach ($unique_in_array as $key=>$value) {
            if ($unique_in_array[$key] == 1 ) {
                array_push($new_array, $key);
            }
        }
        if (count($new_array)== 0) {
            $returneble = 0;
        }
        elseif (count($new_array)== 1) {
            $returneble = $new_array[0];
        }
        elseif (count($new_array)>1){
            sort($new_array);
            $returneble = $new_array[0];
        }
        return $returneble;


    }

    public function groupByTag(array $input): array
    {
        $result = [];
        foreach ($input as $tags) {
            foreach ($tags['tags'] as $tag) {
                $result[$tag][] = $tags['name'];
                sort($result[$tag], SORT_ASC);
            }
        }
        return $result;

        // TODO: Implement groupByTag() method.
    }
}