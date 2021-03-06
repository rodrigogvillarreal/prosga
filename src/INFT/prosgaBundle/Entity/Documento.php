<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Documento
 */
class Documento
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
     * @var \Datetime
     */
    private $fechaCreacion;

    /**
     * @var string
     */
    private $ubicacion;

    /**
     * @var Auditoria
     */
    private $auditoria;

    /**
     * @var Proceso
     */
    private $proceso;

    /**
     * @var Estado
     */
    private $estado;

    /**
     * @var Persona
     */
    private $persona;

    /**
     * @var Permiso[]
     */
    private $permisos;


    public function __construct(){
        $this->permisos = new ArrayCollection();
        $this->fechaCreacion = new \DateTime();
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
     * @param string nombre
     * @return Documento
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Documento
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
    
        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Documento
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    
        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set Auditoria
     *
     * @param Auditoria $auditoria
     * @return Documento
     */
    public function setAuditoria(Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    
        return $this;
    }

    /**
     * Get Auditoria
     *
     * @return Auditoria 
     */
    public function getAuditoria()
    {
        return $this->auditoria;
    }

    /**
     * Set Proceso
     *
     * @param Proceso $proceso
     * @return Documento
     */
    public function setProceso(Proceso $proceso)
    {
        $this->proceso = $proceso;
    
        return $this;
    }

    /**
     * Get Proceso
     *
     * @return Proceso 
     */
    public function getProceso()
    {
        return $this->proceso;
    }

    /**
     * Set Estado
     *
     * @param Estado Estado
     * @return Documento
     */
    public function setEstado(Estado $estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get Estado
     *
     * @return Estado 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set Persona
     *
     * @param Persona $persona
     * @return Documento
     */
    public function setPersona(Persona $persona)
    {
        $this->persona = $persona;
    
        return $this;
    }

    /**
     * Get Persona
     *
     * @return Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    public function addPermiso(Permiso $permiso){
        $this->permisos[] = $permiso;
    }

    public function removePermiso(Permiso $permiso){
        $this->permisos->removeElement($permiso);
    }

    public function getPermisos(){
        return $this->permisos;
    }

    public function __toString(){
        return $this->nombre;
    }
}
