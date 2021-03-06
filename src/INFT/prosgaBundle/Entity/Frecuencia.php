<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Frecuencia
 */
class Frecuencia
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
     * @var string
     */
    private $descripcion;

    /**
     * @var Alarma
     */
    private $alarmas;

    /**
    * @var valorHoras
    */
    private $valorHoras;


    public function __construct(){
        $this->valorHoras = new ArrayCollection();
    }


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
     * @return Frecuencia
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Frecuencia
     */
    public function setDescripcion($descripcion='')
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function addAlarma(Alarma $alarma){
        $this->alarmas[] = $alarma;
    }

    public function removeAlarma(Alarma $alarma){
        $this->alarmas->removeElement($alarma);
    }

    public function getAlarmas(){
        return $this->alarmas;
    }

    /**
     * Set valorHoras
     *
     * @param integer $valorHoras
     * @return Frecuencia
     */
    public function setValorHoras($valorHoras)
    {
        $this->valorHoras = $valorHoras;
    
        return $this;
    }

    /**
     * Get valorHoras
     *
     * @return integer 
     */
    public function getValorHoras()
    {
        return $this->valorHoras;
    }

    public function __toString(){
        return $this->nombre;
    }

}
