<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumno
 *
 * @ORM\Table(name="alumno")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AlumnoRepository")
 */
class Alumno
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string")
     * @ORM\Id
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string")
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="diversidad", type="string", length=255)
     */
    private $diversidad;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=255)
     */
    private $correo;

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
     * @ORM\ManyToOne(targetEntity="Programa", inversedBy="nombre")
     * @ORM\JoinColumn(name="nombre", referencedColumnName="nombre_programa")
     */
    private $nombre_programa;

    /**
     * @ORM\Column(name="username_voluntario", type="string")
     * @ORM\ManyToOne(targetEntity="Voluntario", inversedBy="username")
     * @ORM\JoinColumn(name="username", referencedColumnName="username_voluntario")
     */
    private $username_voluntario;


    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return Alumno
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Alumno
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
     * Set apellidos.
     *
     * @param string $apellidos
     *
     * @return Alumno
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos.
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set diversidad.
     *
     * @param string $diversidad
     *
     * @return Alumno
     */
    public function setDiversidad($diversidad)
    {
        $this->diversidad = $diversidad;

        return $this;
    }

    /**
     * Get diversidad.
     *
     * @return string
     */
    public function getDiversidad()
    {
        return $this->diversidad;
    }

    /**
     * Set telefono.
     *
     * @param int $telefono
     *
     * @return Alumno
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono.
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set direccion.
     *
     * @param string $direccion
     *
     * @return Alumno
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion.
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set correo.
     *
     * @param string $correo
     *
     * @return Alumno
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo.
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
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
     * Set nombre_programa.
     *
     * @param int $nombre_programa
     *
     * @return Asignatura
     */
    public function setid_programa($nombre_programa)
    {
        $this->id_aula = $nombre_programa;

        return $this;
    }

    /**
     * Get nombre_programa.
     *
     * @return int
     */
    public function getid_programa()
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
}
