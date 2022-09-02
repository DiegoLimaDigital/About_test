<?php
class Main
{
    private $id;
    private $titulo;
    private $cuerpo;
    private $footer;

    private function __construct($id=null,$titulo=null,$cuerpo=null,$footer=null)
    {
        $this->id=$id;
        $this->titulo=$titulo;
        $this->cuerpo=$cuerpo;
        $this->footer=$footer;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of cuerpo
     */
    public function getCuerpo()
    {
        return $this->cuerpo;
    }

    /**
     * Set the value of cuerpo
     */
    public function setCuerpo($cuerpo): self
    {
        $this->cuerpo = $cuerpo;

        return $this;
    }

    /**
     * Get the value of footer
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * Set the value of footer
     */
    public function setFooter($footer): self
    {
        $this->footer = $footer;

        return $this;
    }
}