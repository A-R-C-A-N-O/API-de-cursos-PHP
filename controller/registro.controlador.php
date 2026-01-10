<?php

class CONTROLADOR_CLIENTES
{
    public function index()
    {
        $json = array(
            "detalle" => "Estas en lista clientes"
        );

        echo (json_encode($json, true));

        return;
    }
}
