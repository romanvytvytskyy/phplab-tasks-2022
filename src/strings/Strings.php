<?php
namespace strings;

class Strings implements StringsInterface{
    public function snakeCaseToCamelCase(string $input): string
    {
        // TODO: Implement snakeCaseToCamelCase() method.
        $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $input)));
        $str[0] = strtolower($str[0]);
        return $str;
    }

    public function mirrorMultibyteString(string $input): string
    {
        // TODO: Implement mirrorMultibyteString() method.

        $word_imploded= array();
        $word_list = mb_split(" ", $input );
        for ($i = 0; $i < count($word_list); $i++)
        {
            $new_word = array();
            $word = $word_list[$i];
            for ($j = (strlen($word)-1); $j>=0; $j--){
                if ($j % 2 == 0) {
                    array_push($new_word, ($word[$j].$word[$j+1]));
                }
            }
            array_push($word_imploded, implode($new_word));
        }
        $string_imploded = implode(" ", $word_imploded);
        return  $string_imploded;
    }

    public function getBrandName(string $noun): string
    {
        // TODO: Implement getBrandName() method.
        if ($noun[0] == $noun[(strlen($noun)-1)]){
            $group_name = $noun . substr($noun, 1);
            $group_name[0] = strtoupper($group_name[0]);
        }
        else {
            $noun[0] = strtoupper($noun[0]);
            $group_name = "The " . $noun;
        }
        return $group_name;
    }
}