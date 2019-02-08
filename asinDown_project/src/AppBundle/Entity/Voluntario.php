<?php

namespace AppBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Validator\Constraints as Assert;
/**
 * Voluntario
 *
 * @ORM\Table(name="voluntario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VoluntarioRepository")
 */
class Voluntario implements UserInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string")
     * @ORM\Id
     * 
     * One Customer has One Cart.
     * @ORM\OneToOne(targetEntity="Usuario", mappedBy="voluntario")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string")
     * 
     * @ORM\OneToOne(targetEntity="Usuario", mappedBy="voluntario")
     * 
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
     * @ORM\Column(name="correo", type="string", length=255)
     */
    private $correo;

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
     * @var bool
     *
     * @ORM\Column(name="disponibilidad", type="boolean")
     */
    private $disponibilidad;

    /**
    * @ORM\OneToMany(targetEntity="Asignatura", mappedBy="voluntario")
    */
   private $voluntario;

   public function __construct()
   {
       $this->voluntario = new ArrayCollection();
       $this->roles = array('ROLE_USER');

   }

       /**
       * @var array
       *
       * @ORM\Column(name="roles", type="json_array")
       */
      private $roles;


    private $plainPassword;


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
     * Set username.
     *
     * @param string $username
     *
     * @return Voluntario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return Voluntario
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
     * @return Voluntario
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
     * @return Voluntario
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
     * Set correo.
     *
     * @param string $correo
     *
     * @return Voluntario
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
     * Set telefono.
     *
     * @param int $telefono
     *
     * @return Voluntario
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
     * @return Voluntario
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
     * Set disponibilidad.
     *
     * @param bool $disponibilidad
     *
     * @return Voluntario
     */
    public function setDisponibilidad($disponibilidad)
    {
        $this->disponibilidad = $disponibilidad;

        return $this;
    }

    /**
     * Get disponibilidad.
     *
     * @return bool
     */
    public function getDisponibilidad()
    {
        return $this->disponibilidad;
    }

      /**
   * Set roles
   *
   * @param array $roles
   *
   * @return Voluntario
   */
  public function setRoles($roles)
  {
      $this->roles = $roles;

      return $this;
  }

  /**
   * Get roles
   *
   * @return array
   */
  public function getRoles()
  {
      return $this->roles;
  }


        public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }


 public function getSalt()
{
  // The bcrypt and argon2i algorithms don't require a separate salt.
  // You *may* need a real salt if you choose a different encoder.
  return null;
}

    public function eraseCredentials()
    {
    }
}
