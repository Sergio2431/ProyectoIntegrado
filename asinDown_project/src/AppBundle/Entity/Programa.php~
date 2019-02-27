<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManytoOne;

/**
 * Programa
 *
 * @ORM\Table(name="programa")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProgramaRepository")
 */
class Programa
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * Many Asignaturas have Many Usuarios.
     * @ORM\ManyToMany(targetEntity="Usuarios", mappedBy="programas")
     */
    private $usuarios;

    /**
     * Many Asignaturas have Many Usuarios.
   * @ORM\ManyToMany(targetEntity="Asignatura", inversedBy="programas")
   * @ORM\JoinTable(name="programas_asignaturas")
     */
    private $asignaturas;

    /**
     * @var string
     *
     * @ORM\Column(name="duracion", type="string", length=255)
     */
    private $duracion;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="horario", type="string", length=255)
     */
    private $horario;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->asignaturas = new \Doctrine\Common\Collections\ArrayCollection();
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
     *
     * @return Programa
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
     * Set duracion
     *
     * @param string $duracion
     *
     * @return Programa
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return string
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Programa
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set horario
     *
     * @param string $horario
     *
     * @return Programa
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return string
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Add usuario
     *
     * @param \AppBundle\Entity\Usuarios $usuario
     *
     * @return Programa
     */
    public function addUsuario(\AppBundle\Entity\Usuarios $usuario)
    {
        $this->usuarios[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario
     *
     * @param \AppBundle\Entity\Usuarios $usuario
     */
    public function removeUsuario(\AppBundle\Entity\Usuarios $usuario)
    {
        $this->usuarios->removeElement($usuario);
    }

    /**
     * Get usuarios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }

    /**
     * Add asignatura
     *
     * @param \AppBundle\Entity\Asignatura $asignatura
     *
     * @return Programa
     */
    public function addAsignatura(\AppBundle\Entity\Asignatura $asignatura)
    {
        $this->asignaturas[] = $asignatura;

        return $this;
    }

    /**
     * Remove asignatura
     *
     * @param \AppBundle\Entity\Asignatura $asignatura
     */
    public function removeAsignatura(\AppBundle\Entity\Asignatura $asignatura)
    {
        $this->asignaturas->removeElement($asignatura);
    }

    /**
     * Get asignaturas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAsignaturas()
    {
        return $this->asignaturas;
    }
    public function __toString() {
    return $this->nombre;
    }
}
