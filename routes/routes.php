<?php
$arrayRutas = explode("/", $_SERVER['REQUEST_URI']);


echo "<pre>";
print_r($arrayRutas);
echo "<pre>";




if (count(array_filter($arrayRutas)) == 2) {

    $json = array(
        "detalle" => "no encontrado"
    );
    echo (json_encode($json, true));
    return;
} else {
    if (count(array_filter($arrayRutas)) == 3) {
        if (array_filter($arrayRutas)[3] == "cursos") {
            $json = array(
                "detalle" => "no encontrado cursos"
            );
            echo (json_encode($json, true));
            return;
        }
        if (array_filter($arrayRutas)[3] == "registro") {
            $json = array(
                "detalle" => "no encontrado registro"
            );
            echo (json_encode($json, true));
            return;
        }
    }
}
