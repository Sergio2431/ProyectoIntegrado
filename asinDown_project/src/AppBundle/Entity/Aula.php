<?php

namespace AppBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
/**
 * Aula
 *
 * @ORM\Table(name="aula")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AulaRepository")
 */
class Aula
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
     * @ORM\Column(name="numAula", type="string", length=255)
     */
    private $numAula;

     /**
     * @ORM\OneToMany(targetEntity="Asignatura", mappedBy="aula")
     */
    private $asignatura;

    public function __construct()
    {
        $this->asignatura = new ArrayCollection();
    }



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
     * Set numAula.
     *
     * @param string $numAula
     *
     * @return Aula
     */
    public function setNumAula($numAula)
    {
        $this->numAula = $numAula;

        return $this;
    }

    /**
     * Get numAula.
     *
     * @return string
     */
    public function getNumAula()
    {
        return $this->numAula;
    }
}
