<?php

require_once ('BaseEntity.php');

class PostEntity extends BaseEntity
{
 
    private $titulo;
    private $entrada;
    private $autor;
    private $categoria;
    private $comentarios;
    private $etiquetas;

    public function __construct()
    {
        parent::__construct();

        $this->etiquetas = array();
        $this->comentarios = array();
    }
    /**
     * Defino los Getters
     * 
     */
     
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getEntrada()
    {
        return $this->entrada;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function getComentarios()
    {
        return $this->comentarios;
    }
    public function getEtiquetas()
    {
        return $this->etiquetas;
    }
    /**
     * Defino los Setters
     * 
     */
    
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setEntrada($entrada)
    {
        $this->entrada = $entrada;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;
    }
    public function setEtiquetas($etiquetas)
    {
        $this->etiquetas = $etiquetas;
    }
}
