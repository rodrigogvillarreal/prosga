<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividad
 */
class Actividad
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaActividad;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var Persona
     */
    private $personaResponsable;

    /**
     * @var Sector
     */
    private $sector;

    /**
     * @var Proceso
     */
    private $proceso;

    /**
     * @var Norma
     */
    private $norma;

    /**
     * @var MatrizLegal
     */
    private $matrizlegal;

    /**
     * @var Control
     */
    private $control;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var Auditoria
     */
    private $auditoria;

    /**
     * @var String
     */
    private $aspectoAmbiental;

    /**
     * @var String
     */
    private $accionPrevencion;


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
     * Set fechaActividad
     *
     * @param \DateTime $fechaActividad
     * @return Actividad
     */
    public function setFechaActividad($fechaActividad)
    {
        $this->fechaActividad = $fechaActividad;
    
        return $this;
    }

    /**
     * Get fechaActividad
     *
     * @return \DateTime 
     */
    public function getFechaActividad()
    {
        return $this->fechaActividad;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Actividad
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

    /**
     * Set PersonaResponsable
     *
     * @param Persona $personaResponsable
     * @return Actividad
     */
    public function setPersonaResponsable(Persona $personaResponsable)
    {
        $this->personaResponsable = $personaResponsable;
    
        return $this;
    }

    /**
     * Get PersonaResponsable
     *
     * @return Persona 
     */
    public function getPersonaResponsable()
    {
        return $this->personaResponsable;
    }

    /**
     * Set Sector
     *
     * @param Sector $sector
     * @return Actividad
     */
    public function setSector(Sector $sector)
    {
        $this->sector = $sector;
    
        return $this;
    }

    /**
     * Get Sector
     *
     * @return Sector 
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set Proceso
     *
     * @param Proceso $proceso
     * @return Actividad
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
     * Set Norma
     *
     * @param Norma $norma
     * @return Actividad
     */
    public function setNorma(Norma $norma)
    {
        $this->norma = $norma;
    
        return $this;
    }

    /**
     * Get Norma
     *
     * @return Norma
     */
    public function getNorma()
    {
        return $this->norma;
    }

    /**
     * Set Matrizlegal
     *
     * @param MatrizLegal $matrizlegal
     * @return Actividad
     */
    public function setMatrizlegal(MatrizLegal $matrizlegal)
    {
        $this->matrizlegal = $matrizlegal;
    
        return $this;
    }

    /**
     * Get Matrizlegal
     *
     * @return MatrizLegal 
     */
    public function getMatrizlegal()
    {
        return $this->matrizlegal;
    }

    /**
     * Set Control
     *
     * @param Control $control
     * @return Actividad
     */
    public function setControl(Control $control=null)
    {
        $this->control = $control;
    
        return $this;
    }

    /**
     * Get Control
     *
     * @return Control 
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Actividad
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
     * Set Auditoria
     *
     * @param Auditoria $auditoria
     * @return Actividad
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

    public function tieneProceso(){
        if($this->proceso == null){
            return false;
        }
        return true;
    }

    public function tieneAuditoria(){
        if($this->auditoria == null){
            return false;
        }
        return true;
    }

     /**
     * Set aspectoAmbiental
     *
     * @param string $aspectoAmbiental
     * @return Actividad
     */
    public function setAspectoAmbiental($aspectoAmbiental='')
    {
        $this->aspectoAmbiental = $aspectoAmbiental;
    
        return $this;
    }

    /**
     * Get aspectoAmbiental
     *
     * @return string 
     */
    public function getAspectoAmbiental()
    {
        return $this->aspectoAmbiental;
    }

    /**
     * Set accionPrevencion
     *
     * @param string $accionPrevencion
     * @return Actividad
     */
    public function setAccionPrevencion($accionPrevencion='')
    {
        $this->accionPrevencion = $accionPrevencion;
    
        return $this;
    }

    /**
     * Get accionPrevencion
     *
     * @return string 
     */
    public function getAccionPrevencion()
    {
        return $this->accionPrevencion;
    }

    public function __toString(){
        return $this->nombre;
    }
    
}
