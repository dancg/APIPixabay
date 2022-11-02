<?php

namespace App\Service;

use App\Modelos\Imagen;

//ponemos la barra delante de Dotenv ya que no es un documento que pertenezca a mi namespace
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__."/../../");
$dotenv->load();

define("URL", $_ENV['URL_BASE'].$_ENV['KEY'].$_ENV['QUERY']);
define("IMG", $_ENV['URL_IMG']);

class ApiService
{
    public function getImagenes() : array
    {
        $imagenes = [];
        $datos = file_get_contents(URL);
        $datosJson = json_decode($datos);
        $datosImagenes = $datosJson->hits;

        foreach ($datosImagenes as $objImagen) {
            $imagenes[] = (new Imagen)->setFoto($objImagen->webformatURL)
                ->setAutor($objImagen->user)
                ->setMeGusta($objImagen->likes);
        }
        return $imagenes;
    }
}