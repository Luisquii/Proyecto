<?php

require_once "./json.php";

$userlistPath = "./userlist.json";

function saveProduct($userData){

    global $userlistPath;

    //Cargar el archivo a memoria
    $data = loadJson($userlistPath);
    //Hacer append del producto
    $data["nombre"][] = $userData;
    //Guardar la estructura
    $jsonString = json_encode($data,JSON_PRETTY_PRINT);

    return saveJson($jsonString, $userlistPath);
}

function getProducts(){

    global $userlistPath;

    //cargar JSON
    $data = loadJson($userlistPath);
    //Devolver la info
    return $data["Users"];
    
}
?>