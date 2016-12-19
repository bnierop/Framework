<?php


require_once "request.php";

$request = new Request();

if($request->hasGet("page")) {

  echo 'Page number: '.$request->get('page');

} else if($request->hasGet('song')) {

  echo "Playing song: ".$request->get('song');

} else {

  echo "No datas available main!!!!!!!";

}
