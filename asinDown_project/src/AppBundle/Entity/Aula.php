<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManytoOne;
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
     * @ORM\Column(name="numAula", type="string")
     */
    private $numAula;

    /**
     * Many Asignaturas have Many Usuarios.
   * @ORM\ManyToMany(targetEntity="Asignatura", inversedBy="aulas")
   * @ORM\JoinTable(name="aulas_asignaturas")
     */
    private $asignaturasA;

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

    /**
     * Set asign
     *
     * @param string $asign
     *
     * @return Aula
     */
    public function setAsign($asign)
    {
        $this->asign = $asign;

        return $this;
    }

    /**
     * Get asign
     *
     * @return string
     */
    public function getAsign()
    {
        return $this->asign;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->asign = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add asign
     *
     * @param \AppBundle\Entity\Asignatura $asign
     *
     * @return Aula
     */
    public function addAsign(\AppBundle\Entity\Asignatura $asign)
    {
        $this->asign[] = $asign;

        return $this;
    }

    /**
     * Remove asign
     *
     * @param \AppBundle\Entity\Asignatura $asign
     */
    public function removeAsign(\AppBundle\Entity\Asignatura $asign)
    {
        $this->asign->removeElement($asign);
    }

    /**
     * Set asignaturas
     *
     * @param string $asignaturas
     *
     * @return Aula
     */
    public function setAsignaturas($asignaturas)
    {
        $this->asignaturas = $asignaturas;

        return $this;
    }

    /**
     * Get asignaturas
     *
     * @return string
     */
    public function getAsignaturas()
    {
        return $this->asignaturas;
    }

    /**
     * Add asignaturasA
     *
     * @param \AppBundle\Entity\Asignatura $asignaturasA
     *
     * @return Aula
     */
    public function addAsignaturasA(\AppBundle\Entity\Asignatura $asignaturasA)
    {
        $this->asignaturasA[] = $asignaturasA;

        return $this;
    }

    /**
     * Remove asignaturasA
     *
     * @param \AppBundle\Entity\Asignatura $asignaturasA
     */
    public function removeAsignaturasA(\AppBundle\Entity\Asignatura $asignaturasA)
    {
        $this->asignaturasA->removeElement($asignaturasA);
    }

    /**
     * Get asignaturasA
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAsignaturasA()
    {
        return $this->asignaturasA;
    }
}
