<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\ManyToOne(targetEntity="Aula", inversedBy="id")
     * @ORM\JoinColumn(name="id_aula", referencedColumnName="id")
     */
    private $id_aula;

    /**
     * @ORM\ManyToOne(targetEntity="Profesor", inversedBy="asignatura")
     * @ORM\JoinColumn(name="username_profesor", referencedColumnName="username")
     */
    private $username_profesor;

    /**
     * @ORM\ManyToOne(targetEntity="Programa", inversedBy="asignatura")
     * @ORM\JoinColumn(name="id_programa", referencedColumnName="id")
     */
    private $id_programa;

    /**
     * @ORM\ManyToOne(targetEntity="Voluntario", inversedBy="asignatura")
     * @ORM\JoinColumn(name="username_voluntario", referencedColumnName="username")
     */
    private $username_voluntario;

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
}
