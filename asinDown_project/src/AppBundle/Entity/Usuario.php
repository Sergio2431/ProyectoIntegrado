<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Security\Core\User\UserInterface;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 */
class Usuario implements UserInterface
{
    /**
     * @var string
     *
     *  @ORM\Id
     * 
     * @ORM\Column(name="username", type="string", length=255)
     * 
     * Un Usuario tiene un alumno o un profesor o un voluntario
     * 
     * @ORM\OneToMany(targetEntity="Alumno", inversedBy="username")
     * @ORM\JoinColumn(name="alumno_username", referencedColumnName="username")
     * 
     * @ORM\OneToMany(targetEntity="Profesor", inversedBy="username")
     * @ORM\JoinColumn(name="profesor_username", referencedColumnName="username")
     * 
     * @ORM\OneToMany(targetEntity="Voluntario", inversedBy="username")
     * @ORM\JoinColumn(name="voluntario_username", referencedColumnName="username")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     * 
     */
    private $password;



    private $plainPassword;

    public function __construct()
    {
        $this->roles = array('ROLE_USER');
 
    }


    /**
     * Set username
     *
     * @param string $username
     *
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
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

