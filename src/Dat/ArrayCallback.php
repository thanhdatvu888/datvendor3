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
    public static function filter($arr, $callback){
        $result = [];
        if($arr && is_array($arr)){
            foreach($arr as $key=>$val){
                if($callback($val)){
                    $result[] = $val;
                }
            }
        }
        return $result;
    }
    public static function find($arr, $callback){
        if($arr && is_array($arr)){
            foreach($arr as $key=>$val){
                if($callback($val)){
                    return $val;
                }
            }
        }
        return null;
    }
}
?>