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
     * @ORM\Column(name="id_aula", type="string")
     * @ORM\ManyToMany(targetEntity="Aula", inversedBy="id")
     * @ORM\JoinColumn(name="aula_id", referencedColumnName="id_aula")
     */
    private $id_aula;

    /**
     * @ORM\Column(name="username_profesor", type="string")
     * @ORM\ManyToOne(targetEntity="Profesor", inversedBy="username")
     * @ORM\JoinColumn(name="Profesor_username", referencedColumnName="username_profesor")
     */
    private $username_profesor;

    /**
     * @ORM\Column(name="id_programa", type="string")
     * @ORM\ManyToOne(targetEntity="Programa", inversedBy="id")
     * @ORM\JoinColumn(name="id", referencedColumnName="id_programa")
     */
    private $id_programa;

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
     * Set id_aula.
     *
     * @param int $id_aula
     *
     * @return Asignatura
     */
    public function setid_aula($id_aula)
    {
        $this->id_aula = $id_aula;

        return $this;
    }

    /**
     * Get id_aula.
     *
     * @return int
     */
    public function getid_aula()
    {
        return $this->id_aula;
    }
    public function __toString(){
      return $this->id_aula;
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
     * Set id_programa.
     *
     * @param int $id_programa
     *
     * @return Asignatura
     */
    public function setid_programa($id_programa)
    {
        $this->id_aula = $id_programa;

        return $this;
    }

    /**
     * Get id_programa.
     *
     * @return int
     */
    public function getid_programa()
    {
        return $this->id_programa;
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
}
