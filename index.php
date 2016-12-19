<?php


require_once "request.php";
include "form.php";

$request = new Request();



if($request->hasPost("firstname")){

    $name = $request->post("firstname");
    echo "This is your first name: $name";
}

if($request->hasPost("lastname")){

    $lastName = $request->post("lastname");
    echo "This is your last name: $lastName";
}
