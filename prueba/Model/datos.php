<?php 

    function consultaApp($id){
        $idCiudad = $id;
        $app_Key = '7371bb585afa68745b00c85afc7dee8f';
        $app_url = 'https://api.openweathermap.org/data/2.5/weather?id='.$idCiudad.'&appid='.$app_Key.'';

        $response = file_get_contents($app_url);

        //$datos = json_decode($response);
        $datos = $response;
        print_r($datos);
        //die;

    }
?>