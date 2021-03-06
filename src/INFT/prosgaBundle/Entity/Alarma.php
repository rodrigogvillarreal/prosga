<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alarma
 */
class Alarma
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $activarCada;

    /**
     * @var Frecuencia
     */
    private $frecuencia;

    /**
     * @var string
     */
    private $modoAviso;

    /**
     * @var string
     */
    private $observacion;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Alarma
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set activarCada
     *
     * @param integer $activarCada
     * @return Alarma
     */
    public function setActivarCada($activarCada)
    {
        $this->activarCada = $activarCada;
    
        return $this;
    }

    /**
     * Get activarCada
     *
     * @return integer 
     */
    public function getActivarCada()
    {
        return $this->activarCada;
    }

    /**
     * Set Frecuencia
     *
     * @param Frecuencia $frecuencia
     * @return Alarma
     */
    public function setFrecuencia(Frecuencia $frecuencia)
    {
        $this->frecuencia = $frecuencia;
    
        return $this;
    }

    /**
     * Get Frecuencia
     *
     * @return Frecuencia 
     */
    public function getFrecuencia()
    {
        return $this->frecuencia;
    }

    /**
     * Set modoAviso
     *
     * @param string $modoAviso
     * @return Alarma
     */
    public function setModoAviso($modoAviso)
    {
        $this->modoAviso = $modoAviso;
    
        return $this;
    }

    /**
     * Get modoAviso
     *
     * @return string 
     */
    public function getModoAviso()
    {
        return $this->modoAviso;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Alarma
     */
    public function setObservacion($observacion='')
    {
        $this->observacion = $observacion;
    
        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    public function __toString(){
        return $this->nombre;
    }
}
