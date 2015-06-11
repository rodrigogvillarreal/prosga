<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FichaDeProceso
 */
class FichaDeProceso
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoDeFicha;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var Persona
     */
    private $personaPrepara;

    /**
     * @var Persona
     */
    private $personaAprueba;

    /**
     * @var \DateTime
     */
    private $fechaDeEmision;

    /**
     * @var \DateTime
     */
    private $fechaDeRevision;

    /**
     * @var integer
     */
    private $nroDeRevision;

    /**
     * @var string
     */
    private $objetivo;

    /**
     * @var Persona
     */
    private $personaResponsable;

    /**
     * @var string
     */
    private $alcance;

    /**
     * @var FichaDeProceso
     */
    private $fichaDeProcesoAntecesor;

    /**
     * @var FichaDeProceso
     */
    private $fichaDeProcesoPredecesor;


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
     * Set codigoDeFicha
     *
     * @param string $codigoDeFicha
     * @return FichaDeProceso
     */
    public function setCodigoDeFicha($codigoDeFicha)
    {
        $this->codigoDeFicha = $codigoDeFicha;
    
        return $this;
    }

    /**
     * Get codigoDeFicha
     *
     * @return string 
     */
    public function getCodigoDeFicha()
    {
        return $this->codigoDeFicha;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return FichaDeProceso
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
     * Set PersonaPrepara
     *
     * @param Persona $personaPrepara
     * @return FichaDeProceso
     */
    public function setPersonaPrepara($personaPrepara)
    {
        $this->personaPrepara = $personaPrepara;
    
        return $this;
    }

    /**
     * Get PersonaPrepara
     *
     * @return Persona 
     */
    public function getPersonaPrepara()
    {
        return $this->personaPrepara;
    }

    /**
     * Set PersonaAprueba
     *
     * @param Persona $personaAprueba
     * @return FichaDeProceso
     */
    public function setPersonaAprueba($personaAprueba)
    {
        $this->personaAprueba = $personaAprueba;
    
        return $this;
    }

    /**
     * Get PersonaAprueba
     *
     * @return Persona 
     */
    public function getPersonaAprueba()
    {
        return $this->personaAprueba;
    }

    /**
     * Set fechaDeEmision
     *
     * @param \DateTime $fechaDeEmision
     * @return FichaDeProceso
     */
    public function setFechaDeEmision($fechaDeEmision)
    {
        $this->fechaDeEmision = $fechaDeEmision;
    
        return $this;
    }

    /**
     * Get fechaDeEmision
     *
     * @return \DateTime 
     */
    public function getFechaDeEmision()
    {
        return $this->fechaDeEmision;
    }

    /**
     * Set fechaDeRevision
     *
     * @param \DateTime $fechaDeRevision
     * @return FichaDeProceso
     */
    public function setFechaDeRevision($fechaDeRevision)
    {
        $this->fechaDeRevision = $fechaDeRevision;
    
        return $this;
    }

    /**
     * Get fechaDeRevision
     *
     * @return \DateTime 
     */
    public function getFechaDeRevision()
    {
        return $this->fechaDeRevision;
    }

    /**
     * Set nroDeRevision
     *
     * @param integer $nroDeRevision
     * @return FichaDeProceso
     */
    public function setNroDeRevision($nroDeRevision)
    {
        $this->nroDeRevision = $nroDeRevision;
    
        return $this;
    }

    /**
     * Get nroDeRevision
     *
     * @return integer 
     */
    public function getNroDeRevision()
    {
        return $this->nroDeRevision;
    }

    /**
     * Set objetivo
     *
     * @param string $objetivo
     * @return FichaDeProceso
     */
    public function setObjetivo($objetivo)
    {
        $this->objetivo = $objetivo;
    
        return $this;
    }

    /**
     * Get objetivo
     *
     * @return string 
     */
    public function getObjetivo()
    {
        return $this->objetivo;
    }

    /**
     * Set PersonaResponsable
     *
     * @param Persona $personaResponsable
     * @return FichaDeProceso
     */
    public function setPersonaResponsable($personaResponsable)
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
     * Set alcance
     *
     * @param string $alcance
     * @return FichaDeProceso
     */
    public function setAlcance($alcance)
    {
        $this->alcance = $alcance;
    
        return $this;
    }

    /**
     * Get alcance
     *
     * @return string 
     */
    public function getAlcance()
    {
        return $this->alcance;
    }

    /**
     * Set FichaDeProcesoAntecesor
     *
     * @param FichaDeProceso $fichaDeProcesoAntecesor
     * @return FichaDeProceso
     */
    public function setFichaDeProcesoAntecesor($fichaDeProcesoAntecesor)
    {
        $this->fichaDeProcesoAntecesor = $fichaDeProcesoAntecesor;
    
        return $this;
    }

    /**
     * Get FichaDeProcesoAntecesor
     *
     * @return FichaDeProceso 
     */
    public function getFichaDeProcesoAntecesor()
    {
        return $this->fichaDeProcesoAntecesor;
    }

    /**
     * Set FichaDeProcesoPredecesor
     *
     * @param FichaDeProceso $fichaDeProcesoPredecesor
     * @return FichaDeProceso
     */
    public function setFichaDeProcesoPredecesor($fichaDeProcesoPredecesor)
    {
        $this->fichaDeProcesoPredecesor = $fichaDeProcesoPredecesor;
    
        return $this;
    }

    /**
     * Get FichaDeProcesoPredecesor
     *
     * @return FichaDeProceso 
     */
    public function getFichaDeProcesoPredecesor()
    {
        return $this->fichaDeProcesoPredecesor;
    }
}