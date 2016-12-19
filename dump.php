<?php


$page = 1;

$_POST = array(
	"page" => 3
)


if(isset($_GET["page"])){
  $page = $_GET["page"];
}

die();
