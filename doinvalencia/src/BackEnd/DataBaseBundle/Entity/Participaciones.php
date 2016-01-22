<?php

namespace BackEnd\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participaciones
 *
 * @ORM\Table(name="participaciones")
 * @ORM\Entity(repositoryClass="BackEnd\DataBaseBundle\Repository\ParticipacionesRepository")
 */
class Participaciones
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var int
     *
     * @ORM\Column(name="Usuario_id", type="integer")
     */
    private $usuarioId;

    /**
     * @var int
     *
     * @ORM\Column(name="Evento_id", type="integer")
     */
    private $eventoId;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Participaciones
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
     * Set usuarioId
     *
     * @param integer $usuarioId
     * @return Participaciones
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return integer 
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set eventoId
     *
     * @param integer $eventoId
     * @return Participaciones
     */
    public function setEventoId($eventoId)
    {
        $this->eventoId = $eventoId;

        return $this;
    }

    /**
     * Get eventoId
     *
     * @return integer 
     */
    public function getEventoId()
    {
        return $this->eventoId;
    }
}
