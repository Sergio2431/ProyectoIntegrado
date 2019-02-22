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
     * @var string
     *
     * @ORM\Column(name="idAsig", type="string")
     */
    private $idAsig;

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
     * Set idAsig.
     *
     * @param string $idAsig
     *
     * @return Aula
     */
    public function setIDAsig($idAsig)
    {
        $this->idAsig = $idAsig;

        return $this;
    }
    /**
     * Get idAsig.
     *
     * @return string
     */
    public function getIDAsig()
    {
        return $this->idAsig;
    }
}
