<?php

namespace Wixair\ReparacionesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reparacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Wixair\ReparacionesBundle\Entity\ReparacionRepository")
 */
class Reparacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_entrada", type="date",nullable=true)
     */
    private $fecha_entrada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_salida", type="date",nullable=true)
     */
    private $fecha_salida;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255,nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tlf", type="string", length=15,nullable=true)
     */
    private $tlf;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255,nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_equipo", type="integer",nullable=true)
     */
    private $tipo_equipo;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_serie", type="string", length=255,nullable=true)
     */
    private $numero_serie;

    /**
     * @var string
     *
     * @ORM\Column(name="accesorios", type="string", length=255,nullable=true)
     */
    private $accesorios;

    /**
     * @var string
     *
     * @ORM\Column(name="averia", type="string", length=255,nullable=true)
     */
    private $averia;

    /**
     * @var string
     *
     * @ORM\Column(name="reparacion", type="string", length=255,nullable=true)
     */
    private $reparacion;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="decimal",nullable=true)
     */
    private $precio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="presupuesto_aceptado", type="boolean")
     */
    private $presupuesto_aceptado=false;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text",nullable=true)
     */
    private $observaciones;


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
     * Set fecha_entrada
     *
     * @param \DateTime $fechaEntrada
     * @return Reparacion
     */
    public function setFechaEntrada($fechaEntrada)
    {
        $this->fecha_entrada = $fechaEntrada;
    
        return $this;
    }

    /**
     * Get fecha_entrada
     *
     * @return \DateTime 
     */
    public function getFechaEntrada()
    {
        return $this->fecha_entrada;
    }

    /**
     * Set fecha_salida
     *
     * @param \DateTime $fechaSalida
     * @return Reparacion
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fecha_salida = $fechaSalida;
    
        return $this;
    }

    /**
     * Get fecha_salida
     *
     * @return \DateTime 
     */
    public function getFechaSalida()
    {
        return $this->fecha_salida;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Reparacion
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
     * Set tlf
     *
     * @param string $tlf
     * @return Reparacion
     */
    public function setTlf($tlf)
    {
        $this->tlf = $tlf;
    
        return $this;
    }

    /**
     * Get tlf
     *
     * @return string 
     */
    public function getTlf()
    {
        return $this->tlf;
    }
    /**
     * Set email
     *
     * @param string $email
     * @return Reparacion
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tipo_equipo
     *
     * @param integer $tipoEquipo
     * @return Reparacion
     */
    public function setTipoEquipo($tipoEquipo)
    {
        $this->tipo_equipo = $tipoEquipo;
    
        return $this;
    }

    /**
     * Get tipo_equipo
     *
     * @return integer 
     */
    public function getTipoEquipo()
    {
        return $this->tipo_equipo;
    }

    /**
     * Set numero_serie
     *
     * @param string $numeroSerie
     * @return Reparacion
     */
    public function setNumeroSerie($numeroSerie)
    {
        $this->numero_serie = $numeroSerie;
    
        return $this;
    }

    /**
     * Get numero_serie
     *
     * @return string 
     */
    public function getNumeroSerie()
    {
        return $this->numero_serie;
    }

    /**
     * Set accesorios
     *
     * @param string $accesorios
     * @return Reparacion
     */
    public function setAccesorios($accesorios)
    {
        $this->accesorios = $accesorios;
    
        return $this;
    }

    /**
     * Get accesorios
     *
     * @return string 
     */
    public function getAccesorios()
    {
        return $this->accesorios;
    }

    /**
     * Set averia
     *
     * @param string $averia
     * @return Reparacion
     */
    public function setAveria($averia)
    {
        $this->averia = $averia;
    
        return $this;
    }

    /**
     * Get averia
     *
     * @return string 
     */
    public function getAveria()
    {
        return $this->averia;
    }

    /**
     * Set reparacion
     *
     * @param string $reparacion
     * @return Reparacion
     */
    public function setReparacion($reparacion)
    {
        $this->reparacion = $reparacion;
    
        return $this;
    }

    /**
     * Get reparacion
     *
     * @return string 
     */
    public function getReparacion()
    {
        return $this->reparacion;
    }

    /**
     * Set precio
     *
     * @param float $precio
     * @return Reparacion
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    
        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set presupuesto_aceptado
     *
     * @param boolean $presupuestoAceptado
     * @return Reparacion
     */
    public function setPresupuestoAceptado($presupuestoAceptado)
    {
        $this->presupuesto_aceptado = $presupuestoAceptado;
    
        return $this;
    }

    /**
     * Get presupuesto_aceptado
     *
     * @return boolean 
     */
    public function getPresupuestoAceptado()
    {
        return $this->presupuesto_aceptado;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Reparacion
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    
        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
}
