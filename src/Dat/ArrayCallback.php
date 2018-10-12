<?php

namespace dat;
class ArrayCallback{
    public static function select($arr, $callback){
        $result = [];
        if($arr && is_array($arr)){
            foreach($arr as $key=>$val){
                $result[] = $callback($val);
            }
        }
        return $result;
    }
}
?>