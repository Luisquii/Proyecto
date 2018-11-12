<?php

function loadJson($file){

    $jsonString = file_get_contents($file);
    if($jsonString){
      return json_decode($jsonString, true);
    }
    //return json_decode($jsonString, true);

    return false;

}

function saveJson($data, $path){
    return file_put_contents($path, $data);
}
