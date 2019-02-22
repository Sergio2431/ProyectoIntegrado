<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Asignatura
 *
 * @ORM\Table(name="asignatura")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AsignaturaRepository")
 */
class Asignatura
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
     * @ORM\Column(name="aulas", type="string")
     * @ORM\ManyToOne(targetEntity="Aula")
     * @ORM\JoinColumn(name="aulas_numAula", referencedColumnName="id")
     */
    private $aulas;


    /**
     * Many Asignaturas have Many Usuarios.
     * @ORM\ManyToMany(targetEntity="Usuarios", mappedBy="asignaturas")
     */
    private $usuarios;

    /**
    * @ORM\Column(name="NombrePrograma", type="string")
    * @ORM\ManyToOne(targetEntity="Programa")
    * @ORM\JoinColumn(name="nombreprograma_nombre", referencedColumnName="id")
     */
    public $NombrePrograma;

    /**
     * @ORM\Column(name="duracion", type="string")
     */
    private $duracion;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Asignatura
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Set aulas.
     *
     * @param string $aulas
     *
     * @return Asignatura
     */
    public function setaulas($aulas)
    {
        $this->aulas = $aulas;

        return $this;
    }

    /**
     * Get aulas.
     *
     * @return string
     */
    public function getaulas()
    {
        return $this->aulas;
    }


    /**
     * Set NombrePrograma.
     *
     * @param string $NombrePrograma
     *
     * @return Asignatura
     */
    public function setNombrePrograma($NombrePrograma)
    {
        $this->NombrePrograma = $NombrePrograma;

        return $this;
    }

    /**
     * Get NombrePrograma.
     *
     * @return string
     */
    public function getNombrePrograma()
    {
        return $this->NombrePrograma;
    }

    /**
     * Set duracion.
     *
     * @param string $duracion
     *
     * @return Asignatura
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }
     /**
     * Get duracion.
     *
     * @return string
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Add usuario.
     *
     * @param \AppBundle\Entity\Usuarios $usuario
     *
     * @return Asignatura
     */
    public function addUsuario(\AppBundle\Entity\Usuarios $usuario)
    {
        $this->usuarios[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario.
     *
     * @param \AppBundle\Entity\Usuarios $usuario
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeUsuario(\AppBundle\Entity\Usuarios $usuario)
    {
        return $this->usuarios->removeElement($usuario);
    }

    /**
     * Get usuarios.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
}
