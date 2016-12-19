<?php

class Request{

    function get($key, $default = null) {

        if( $this->hasGet($key))
            return $_GET[$key];

        return $default;
    }

    function post($key){

        if( $this->hasPost($key))
            return $_POST[$key];
    }

    function hasGet($key){

        return isset($_GET[$key]);
    }


    function hasPost($key){
        // check if the key has a value
        return isset($_POST[$key]) && !empty($_POST[$key]);
    }

}
