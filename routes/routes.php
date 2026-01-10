<?php
$arrayRutas = explode("/", $_SERVER['REQUEST_URI']);


// echo "<pre>";
// print_r($arrayRutas);
// echo "<pre>";




if (count(array_filter($arrayRutas)) == 2) {

    $json = array(
        "detalle" => "no encontrado"
    );
    echo (json_encode($json, true));
    return;
} else {
    if (array_filter($arrayRutas)[2] !== "API") {
        echo "404";
        return;
    }
    if (count(array_filter($arrayRutas)) == 3) {
        if (array_filter($arrayRutas)[3] == "cursos") {
            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {

                $cursos = new CONTROLADOR_CURSOS;
                $cursos->create();
            } elseif (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "GET") {
                $cursos = new CONTROLADOR_CURSOS;
                $cursos->index();
            }
        }

        if (array_filter($arrayRutas)[3] == "clientes") {

            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "GET") {

                $cursos = new CONTROLADOR_CLIENTES;
                $cursos->index();
            }
        }
    }
}
