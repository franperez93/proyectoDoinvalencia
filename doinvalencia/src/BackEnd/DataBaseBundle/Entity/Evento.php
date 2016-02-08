<?php

namespace BackEnd\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table(name="evento")
 * @ORM\Entity(repositoryClass="BackEnd\DataBaseBundle\Repository\EventoRepository")
 */
class Evento
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="localizacion", type="string", length=25)
     */
    private $localizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=20)
     */
    private $ciudad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var int
     *
     * @ORM\Column(name="reservas", type="integer")
     */
    private $reservas;

    /**
     * @var int
     *
     * @ORM\Column(name="reservas_restantes", type="integer")
     */
    private $reservasRestantes;

    /**
     * @var string
     *
     * @ORM\Column(name="informacion", type="string", length=500)
     */
    private $informacion;

    /**
     * @var string
     *
     * @ORM\Column(name="precio_reserva", type="decimal", precision=10, scale=0)
     */
    private $precioReserva;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=200, nullable=true)
     */
    private $tags;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_evento_id", type="integer")
     */
    private $tipoEventoId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string")
     */
    private $imagen;


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
     * @return Evento
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
     * Set localizacion
     *
     * @param string $localizacion
     * @return Evento
     */
    public function setLocalizacion($localizacion)
    {
        $this->localizacion = $localizacion;

        return $this;
    }

    /**
     * Get localizacion
     *
     * @return string 
     */
    public function getLocalizacion()
    {
        return $this->localizacion;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Evento
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Evento
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set reservas
     *
     * @param integer $reservas
     * @return Evento
     */
    public function setReservas($reservas)
    {
        $this->reservas = $reservas;

        return $this;
    }

    /**
     * Get reservas
     *
     * @return integer 
     */
    public function getReservas()
    {
        return $this->reservas;
    }

    /**
     * Set reservasRestantes
     *
     * @param integer $reservasRestantes
     * @return Evento
     */
    public function setReservasRestantes($reservasRestantes)
    {
        $this->reservasRestantes = $reservasRestantes;

        return $this;
    }

    /**
     * Get reservasRestantes
     *
     * @return integer 
     */
    public function getReservasRestantes()
    {
        return $this->reservasRestantes;
    }

    /**
     * Set informacion
     *
     * @param string $informacion
     * @return Evento
     */
    public function setInformacion($informacion)
    {
        $this->informacion = $informacion;

        return $this;
    }

    /**
     * Get informacion
     *
     * @return string 
     */
    public function getInformacion()
    {
        return $this->informacion;
    }

    /**
     * Set precioReserva
     *
     * @param string $precioReserva
     * @return Evento
     */
    public function setPrecioReserva($precioReserva)
    {
        $this->precioReserva = $precioReserva;

        return $this;
    }

    /**
     * Get precioReserva
     *
     * @return string 
     */
    public function getPrecioReserva()
    {
        return $this->precioReserva;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return Evento
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set tipoEventoId
     *
     * @param integer $tipoEventoId
     * @return Evento
     */
    public function setTipoEventoId($tipoEventoId)
    {
        $this->tipoEventoId = $tipoEventoId;

        return $this;
    }

    /**
     * Get tipoEventoId
     *
     * @return integer 
     */
    public function getTipoEventoId()
    {
        return $this->tipoEventoId;
    }
    
    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }
    
    /**
     * Set tipoImagen
     *
     * @param string $imagen
     * @return imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }


}
