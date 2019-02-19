<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManytoMany;

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
     * @ORM\ManyToMany(targetEntity="Aula", inversedBy="numAula")
     * @ORM\JoinColumn(name="aulas_numAula", referencedColumnName="id")
     */
    private $aulas;


    /**
     * @ORM\Column(name="username_profesor", type="string")
     * @ORM\ManyToOne(targetEntity="Profesor", inversedBy="username")
     * @ORM\JoinColumn(name="Profesor_username", referencedColumnName="username_profesor")
     */
    private $username_profesor;

    /**
    * @ORM\Column(name="nombre_programa", type="string")
    * @ORM\ManyToMany(targetEntity="Programa", inversedBy="nombre")
    * @ORM\JoinColumn(name="nombreprograma_nombre", referencedColumnName="id")
     */
    public $nombre_programa;

    /**
     * @ORM\Column(name="username_voluntario", type="string")
     * @ORM\ManyToOne(targetEntity="Voluntario", inversedBy="username")
     * @ORM\JoinColumn(name="username", referencedColumnName="username_voluntario")
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
     * Set username_profesor.
     *
     * @param string $username_profesor
     *
     * @return Asignatura
     */
    public function setusername_profesor($username_profesor)
    {
        $this->username_profesor = $username_profesor;

        return $this;
    }
    /**
     * Get username_profesor.
     *
     * @return string
     */
    public function getusername_profesor()
    {
        return $this->username_profesor;
    }

    /**
     * Set nombre_programa.
     *
     * @param string $nombre_programa
     *
     * @return Asignatura
     */
    public function setNombrePrograma($nombre_programa)
    {
        $this->nombre_programa = $nombre_programa;

        return $this;
    }

    /**
     * Get nombre_programa.
     *
     * @return string
     */
    public function getNombrePrograma()
    {
        return $this->nombre_programa;
    }


    /**
     * Set username_voluntario.
     *
     * @param string $username_voluntario
     *
     * @return Asignatura
     */
    public function setusername_voluntario($username_voluntario)
    {
        $this->username_voluntario = $username_voluntario;

        return $this;
    }
    /**
     * Get username_voluntario.
     *
     * @return string
     */
    public function getusername_voluntario()
    {
        return $this->username_voluntario;
    }

      public function __construct() {
          $this->aulas = new \Doctrine\Common\Collections\ArrayCollection();
          $this->nombre_programa = new \Doctrine\Common\Collections\ArrayCollection();
        }
        public function __toString()
        {
          return $this->aulas;
          return $this->nombre_programa;
        }
}
