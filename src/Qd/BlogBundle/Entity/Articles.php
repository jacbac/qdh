<?php

namespace Qd\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity
 */
class Articles
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
     * @ORM\Column(name="dateparution", type="string", length=255, nullable=false)
     */
    private $dateparution;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", length=255, nullable=false)
     */
    private $journal;

    /**
     * @var integer
     *
     * @ORM\Column(name="journalid", type="integer", nullable=false)
     */
    private $journalid;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=false)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="permalien", type="string", length=255, nullable=false)
     */
    private $permalien;

    /**
     * @var string
     *
     * @ORM\Column(name="vignette_export", type="text", nullable=false)
     */
    private $vignetteExport;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

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
     * Set dateparution
     *
     * @param string $dateparution
     * @return Articles
     */
    public function setDateparution($dateparution)
    {
        $this->dateparution = $dateparution;
    
        return $this;
    }

    /**
     * Get dateparution
     *
     * @return string
     */
    public function getDateparution()
    {
        return $this->dateparution;
    }

    /**
     * Set journal
     *
     * @param string $journal
     * @return Articles
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;
    
        return $this;
    }

    /**
     * Get journal
     *
     * @return string 
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * Set journalid
     *
     * @param integer $journalid
     * @return Articles
     */
    public function setJournalid($journalid)
    {
        $this->journalid = $journalid;
    
        return $this;
    }

    /**
     * Get journalid
     *
     * @return integer 
     */
    public function getJournalid()
    {
        return $this->journalid;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return Articles
     */
    public function setImg($img)
    {
        $this->img = $img;
    
        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set permalien
     *
     * @param string $permalien
     * @return Articles
     */
    public function setPermalien($permalien)
    {
        $this->permalien = $permalien;
    
        return $this;
    }

    /**
     * Get permalien
     *
     * @return string 
     */
    public function getPermalien()
    {
        return $this->permalien;
    }

    /**
     * Set vignetteExport
     *
     * @param string $vignetteExport
     * @return Articles
     */
    public function setVignetteExport($vignetteExport)
    {
        $this->vignetteExport = $vignetteExport;
    
        return $this;
    }

    /**
     * Get vignetteExport
     *
     * @return string 
     */
    public function getVignetteExport()
    {
        return $this->vignetteExport;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Articles
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
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return Articles
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
     * @param \DateTime $changedOn
     * @return Articles
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