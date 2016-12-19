<?php

class Request{

    function get($key, $default = null){

        if( $this->hasGet($key))
            return $_GET[$key];

        return $default;
    }

    function hasGet($key){
        return isset($_GET[$key]);
    }
}
