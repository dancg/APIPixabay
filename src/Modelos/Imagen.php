<?php
namespace App\Modelos;

class Imagen{
    private string $foto;
    private string $autor;
    private int $meGusta;

    public function __constructor(){

    }
    
    

    /**
     * Get the value of foto
     */ 
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set the value of foto
     *
     * @return  self
     */ 
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of meGusta
     */ 
    public function getMeGusta()
    {
        return $this->meGusta;
    }

    /**
     * Set the value of meGusta
     *
     * @return  self
     */ 
    public function setMeGusta($meGusta)
    {
        $this->meGusta = $meGusta;

        return $this;
    }
}