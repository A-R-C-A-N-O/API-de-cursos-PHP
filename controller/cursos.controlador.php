<?php

class CONTROLADOR_CURSOS
{
    public function index()
    {
        $json = array(
            "detalle" => "Estas en lista cursos"
        );

        echo (json_encode($json, true));

        return;
    }
    public function create()
    {
        $json = array(
            "detalle" => "Estas en lista crear cursos"
        );

        echo (json_encode($json, true));

        return;
    }
}
