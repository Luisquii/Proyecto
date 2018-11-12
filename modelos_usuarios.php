<?php

require_once "./json.php";

$userlistPath = "./userlist.json";

function saveProduct($userData){

    global $userlistPath;

    //Cargar el archivo a memoria
    $data = loadJson($userlistPath);
    //CREO QUE AQUI VA LA VALIDACION DEL GAME TAG PERO AUN NO ESTA BIEN
    foreach ($data as $gTag){
      if($gTag["nombre"]["gamertag"] == $_POST["gamertag"]){
        header("Location: ./form-register.html");
        die();
      }
    }
    //Hacer append del producto
    $data["nombre"][] = $userData;
    //Guardar la estructura
    $jsonString = json_encode($data,JSON_PRETTY_PRINT);

    return saveJson($jsonString, $userlistPath);
}

function getProducts(){
    global $userlistPath;
    //echo $userlistPath;
    //cargar JSON
    $data = loadJson($userlistPath);
    //Devolver la info
    return $data["nombre"];

}
?>
