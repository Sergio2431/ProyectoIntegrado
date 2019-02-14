<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\ManyToMany(targetEntity="Asignatura", inversedBy="id_aula")
     * @ORM\JoinColumn(name="aula_id", referencedColumnName="id")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numAula", type="string", length=255)
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
}
