<?php

namespace Qd\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chrono
 *
 * @ORM\Table(name="chrono")
 * @ORM\Entity(repositoryClass="Qd\BlogBundle\Entity\ChronoRepository")
 */
class Chrono
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="datedebut", type="string", length=255,  nullable=false)
     */
    private $datedebut;

    /**
     * @var string
     *
     * @ORM\Column(name="datefin", type="string", length=255,  nullable=false)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=255, nullable=false)
     */
    private $mois;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer", nullable=false)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="table", type="string", nullable=true)
     */
    private $table;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtable", type="integer", nullable=true)
     */
    private $idtable;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Source")
     * @ORM\JoinColumn(nullable=true)
     */
    private $source;

    /**
     * @var integer
     *
     *
     * @ORM\ManyToOne(targetEntity="Tags")
     * @ORM\JoinColumn(nullable=true)
     */
    private $tags;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=false)
     */
    private $createdOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="changed_on", type="datetime", nullable=false)
     */
    private $changedOn;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set datedebut
     *
     * @param  string $datedebut
     * @return Chrono
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return string
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param  string $datefin
     * @return Chrono
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return string
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set mois
     *
     * @param  string $mois
     * @return Chrono
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return string
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set annee
     *
     * @param  integer $annee
     * @return Chrono
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set description
     *
     * @param  string $description
     * @return Chrono
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set source
     *
     * @param Qd\BlogBundle\Entity\Source $source
     */
    public function setSource(\Qd\BlogBundle\Entity\Source $source)
    {
        $this->source = $source;

        //return $this;
    }

    /**
     * Get source
     *
     * @return Qd\BlogBundle\Entity\Source
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set tags
     *
     * @param Qd\BlogBundle\Entity\Tags $tags
     */
    public function setTags(\Qd\BlogBundle\Entity\Tags $tags)
    {
        $this->tags = $tags;
    }

    /**
     * Get tags
     *
     * @return Qd\BlogBundle\Entity\Tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Get table
     *
     * @return integer
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Set table
     *
     * @param  integer $table
     * @return Chrono
     */
    public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Get idtable
     *
     * @return integer
     */
    public function getIdtable()
    {
        return $this->idtable;
    }

    /**
     * Set idtable
     *
     * @param  integer $idtable
     * @return Chrono
     */
    public function setIdtable($idtable)
    {
        $this->idtable = $idtable;

        return $this;
    }

    /**
     * Set createdOn
     *
     * @param  \DateTime $createdOn
     * @return Chrono
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set changedOn
     *
     * @param  \DateTime $changedOn
     * @return Chrono
     */
    public function setChangedOn($changedOn)
    {
        $this->changedOn = $changedOn;

        return $this;
    }

    /**
     * Get changedOn
     *
     * @return \DateTime
     */
    public function getChangedOn()
    {
        return $this->changedOn;
    }
}
