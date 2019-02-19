<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManytoMany;
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
     * @ORM\Column(name="aulas", type="string")
     * @ManyToMany(targetEntity="Asignatura", mappedBy="aulas")
     * @ORM\JoinColumn(name="numAula_aulas", referencedColumnName="id")
     */
    private $numAula;

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

    public function __toString()
    {
      return $this->numAula;
    }
}
