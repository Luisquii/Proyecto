<?php
$userlistPath = "./torneos.json";
if(isset($_GET['action'])||$_POST['action']){
  switch ($_GET['action']){ // error en esta
      case "storeMatch":
          storeMatch();
      break;
      case "storeTeam":
          storeTeam();
      break;
      default:
          echo "Acción no válida.";
      break;
  }
}

function getTorneos()
{
    global $userlistPath;
    //cargar JSON
    $data = loadJson($userlistPath);

    //Devolver la info
    return $data;
}

function getInfoTorneosOw()
{
    session_start();
    $jsondata = file_get_contents("torneos.json");
    $torneos = json_decode($jsondata, true);
    $output = "<ul>";
    foreach ($torneos as $torneo)
    {
        if ($torneo['juego'] == "ow")
        {
            $output .= "<h1>" . "Torneo: " . $torneo['nombre'] . "</h1>";
            $output .= "<h2>" . "Lugar: " . $torneo['lugar'] . "</h2>";
            $output .= "<a href=" . "TorneoInfo.php" . ">" . "Más información" . "</a>";
        }
        $output .= "</ul>";
        echo $output;
    }
}

function getInfoTorneosLOL()
{
    session_start();
    $jsondata = file_get_contents("torneos.json");
    $torneos = json_decode($jsondata, true);
    $output = "<ul>";
    foreach ($torneos as $torneo)
    {
        if ($torneo['juego'] == "lol")
        {
            $output .= "<h1>" . "Torneo: " . $torneo['nombre'] . "</h1>";
            $output .= "<h2>" . "Lugar: " . $torneo['lugar'] . "</h2>";
            $output .= "<a href=" . "TorneoInfo.php" . ">" . "Más información" . "</a>";
        }
        $output .= "</ul>";
        echo $output;
    }
}

function getInfoTorneosRl()
{
    session_start();
    $jsondata = file_get_contents("torneos.json");
    $torneos = json_decode($jsondata, true);
    $output = "<ul>";
    foreach ($torneos as $torneo)
    {
        if ($torneo['juego'] == "rl")
        {
            $output .= "<h1>" . "Torneo: " . $torneo['nombre'] . "</h1>";
            $output .= "<h2>" . "Lugar: " . $torneo['lugar'] . "</h2>";
            $output .= "<a href=" . "TorneoInfo.php" . ">" . "Más información" . "</a>";
        }
        $output .= "</ul>";
        echo $output;
    }
}
function agregarEquipo()
{
    session_start();
    //Aquí se saca el equipo al cual pertenece el capitán que viene guardado en su sesión.
    $_SESSION["equipo"];
    $jsondata = file_get_contents("torneos.json");
    $torneos = json_decode($jsondata, true);
    $equipos = array();
    $out = "<ul>";
    foreach ($torneos as $torneo)
    {
        if ($torneo['id'] == 1)
        {
            //$equipos=$torneo.['equipos'];
            $out .= "<li>" . $equipos . "</li>";
            array_push($equipos, "equipo1");
            $out .= "<h1>" . $equipos . "</h1>";
            $final = json_encode($torneos);
            //file_put_contents("torneos.json",$final);
            //$out.="</ul>";
            echo $out;
        }
    }
}

//Función que agrega las partidas al json.
function storeMatch()
{
    $jsondata = file_get_contents("torneos.json");
    $torneos = json_decode($jsondata, true);
    echo $_GET['idTorneo'];
    echo $_GET['action'];
    $idTorneo = $_GET['idTorneo'];
    $round = $_POST['round'];
    for ($i = 0;$i < count($torneos);$i++)
    {
        if ($torneos[$i]["id"] == $idTorneo)
        { //Encontrando el torneo.
            if ($round == "r1" && count($torneos) < 16)
            { //Ronda 1
                if ($_POST['win'] = "equipo1")
                {
                    $re1 = "w";
                    $re2 = "l";
                    $torneos[$i]["ganadores"][] = $_POST['equipo1'];
                    $torneos[$i]["perdedores"][] = $_POST['equipo2'];
                }
                $torneos[$i]["r1Matches"][] = ["equipo1" => $_POST['equipo1'], "equipo2" => $_POST['equipo2'], "re1" => $re1, "re2" => $re2, "statsE1" => $_POST['stats1'], "statsE2" => $_POST['stats2']];
                $torneosJSON = json_encode($torneos);
                file_put_contents("torneos.json", $torneosJSON);
            }
            elseif ($round == "r2" && count($torneos) < 8)
            { //Ronda 2
                if ($_POST['win'] = "equipo1")
                {
                    $re1 = "w";
                    $re2 = "l";
                    $torneos[$i]["ganadores"][] = $_POST['equipo1'];
                    $torneos[$i]["perdedores"][] = $_POST['equipo2'];
                }
                $torneos[$i]["r2Matches"][] = ["equipo1" => $_POST['equipo1'], "equipo2" => $_POST['equipo2'], "re1" => $re1, "re2" => $re2, "statsE1" => $_POST['stats1'], "statsE2" => $_POST['stats2']];
                $torneosJSON = json_encode($torneos);
                file_put_contents("torneos.json", $torneosJSON);
            }
            elseif ($round == "semi" && count($torneos) < 4)
            { //Semifinal
                if ($_POST['win'] = "equipo1")
                {
                    $re1 = "w";
                    $re2 = "l";
                    $torneos[$i]["ganadores"][] = $_POST['equipo1'];
                    $torneos[$i]["perdedores"][] = $_POST['equipo2'];
                }
                $torneos[$i]["semiMatches"][] = ["equipo1" => $_POST['equipo1'], "equipo2" => $_POST['equipo2'], "re1" => $re1, "re2" => $re2, "statsE1" => $_POST['stats1'], "statsE2" => $_POST['stats2']];
                $torneosJSON = json_encode($torneos);
                file_put_contents("torneos.json", $torneosJSON);
            }
            elseif ($round == "final" && count($torneos) < 2)
            { //Final
                if ($_POST['win'] = "equipo1")
                {
                    $re1 = "w";
                    $re2 = "l";
                    $torneos[$i]["ganadores"][] = $_POST['equipo1'];
                    $torneos[$i]["perdedores"][] = $_POST['equipo2'];
                }
                $torneos[$i]["finalMatch"][] = ["equipo1" => $_POST['equipo1'], "equipo2" => $_POST['equipo2'], "re1" => $re1, "re2" => $re2, "statsE1" => $_POST['stats1'], "statsE2" => $_POST['stats2']];
                $torneosJSON = json_encode($torneos);
                file_put_contents("torneos.json", $torneosJSON);
            }
            else
            { //Fallo cuando se registran más partidas de las permitidas.
                echo "Error";
            }
        }
    }
    header("Location: ./registrar_partidas.php?id=$idTorneo");
}
//Función que guarda los equipos.
function storeTeam()
{
    $jsondata = file_get_contents("torneos.json");
    $torneos = json_decode($jsondata, true);
    $idTorneo = $_POST['idTorneo'];
    $team=$_POST['team'];
    for ($i = 0;$i < count($torneos);$i++)
    {
        if ($torneos[$i]["id"] == $idTorneo)
        {
            $torneos[$i]["equipos"][] = $team;
            break;
        }
    }
    $torneosJSON = json_encode($torneos);
    file_put_contents("torneos.json", $torneosJSON);
    $out = ["result" => true];
    echo json_encode($out);

}
storeTeam();
