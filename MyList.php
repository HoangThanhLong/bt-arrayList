<?php


class MyList
{
const DEFAULT_CAPACITY = 10;
public $size;
public $objectElement;
public function __construct()
{
    $this->size = 0;
    $this->objectElement = [];
}
function arrayList($arr = "") {
    if (is_array($arr) == true){
        $this->objectElement = $arr;
    } else {
        $this->objectElement = array();
    }
}
function add($index, $element)
{
    if (is_integer($index)){
        $newArrayList = array();
        for ($i = 0; $i < $this->size();$i++){
            if ($index != $i){
                array_push($newArrayList, $this->objectElement[$i]);
            } else {
                array_push($newArrayList, $element);
            }
        }return $this->objectElement = $newArrayList;
    }
}
function size(){
    return count($this->objectElement);
}
function remove ($index){
    if (is_integer($index)){
        $newArrayList = array();
        for ($i = 0; $i < $this->size(); $i++){
            if ($index != $i){
                $newArrayList[] = $this->get($i);
                $this->objectElement = $newArrayList;
            } else {
                die ("Error!");
            }
        }
    }
}
function get($index){
    if (is_integer($index) && $index < $this->size()){
        return $this->objectElement[$index];
    } else {
        die("ERROR in ArrayList.get");
    }
}
function CloneArr(){
    $MyList = $this->objectElement;
    return $MyList;
}
function contains($obj){
    for ($i = 0; $i< count($this->objectElement); $i++){
        if ($obj == $this->objectElement[$i]){
            echo "true";
            return true;
        }else {
            echo "false";
            return false;
        }
    }
}
function indexOff($obj){
    for ($i = 0; $i < count($this->objectElement); $i++){
        if ($obj == $this->objectElement[$i]){
            return $i;
        }
    }
    return -1;
}
function addLast($element){
    array_push($this->objectElement, $element);
}
function clear(){
    $this->objectElement = array();
}
}