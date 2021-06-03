<?php

class Session{

    public $attributes= [];



    public function updateAttribut($key, $value){
        return $this->attribut;
    }

//methode magique __get
    public function __get($key){
        return $this->attributes[$key];
    }


//methode magique __set
public function __set($key, $value){
    $this->attributes[$key] = $value;
    }

//methode magique __isset
public function __isset($key){
    return isset($this->attributes[$key]);
    }


//method magique __unset
public function __unset($key){
    unset($this->attributes[$key]);
    }

}

?>
    