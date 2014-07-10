<?php

namespace Qd\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bataille
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qd\BlogBundle\Entity\BatailleRepository")
 */
class Bataille
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedeb", type="date")
     */
    private $datedeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="date")
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="pres", type="text")
     */
    private $pres;

    /**
     * @var string
     *
     * @ORM\Column(name="descr", type="text")
     */
    private $descr;

    /**
     * @var string
     *
     * @ORM\Column(name="bilan", type="text")
     */
    private $bilan;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Photos")
     * @ORM\JoinColumn(nullable=true)
     */
    //@ORM\Column(name="photo", type="integer")
    private $photos;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var integer
     *
     * @ORM\Column(name="tags", type="integer")
     */
    private $tags;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Source")
     * @ORM\JoinColumn(nullable=true)
     */
     //@ORM\Column(name="source", type="integer")

    private $source;


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
     * Set titre
     *
     * @param string $titre
     * @return Bataille
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set datedeb
     *
     * @param \DateTime $datedeb
     * @return Bataille
     */
    public function setDatedeb($datedeb)
    {
        $this->datedeb = $datedeb;
    
        return $this;
    }

    /**
     * Get datedeb
     *
     * @return \DateTime 
     */
    public function getDatedeb()
    {
        return $this->datedeb;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Bataille
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    
        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set pres
     *
     * @param string $pres
     * @return Bataille
     */
    public function setPres($pres)
    {
        $this->pres = $pres;
    
        return $this;
    }

    /**
     * Get pres
     *
     * @return string 
     */
    public function getPres()
    {
        return $this->pres;
    }

    /**
     * Set descr
     *
     * @param string $descr
     * @return Bataille
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;
    
        return $this;
    }

    /**
     * Get descr
     *
     * @return string 
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * Set bilan
     *
     * @param string $bilan
     * @return Bataille
     */
    public function setBilan($bilan)
    {
        $this->bilan = $bilan;
    
        return $this;
    }

    /**
     * Get bilan
     *
     * @return string 
     */
    public function getBilan()
    {
        return $this->bilan;
    }

    /**
     * Set photos
     *
     * @param string $photos
     * @return Bataille
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    
        return $this;
    }

    /**
     * Get photos
     *
     * @return string 
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Bataille
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    
        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set tags
     *
     * @param integer $tags
     * @return Bataille
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    
        return $this;
    }

    /**
     * Get tags
     *
     * @return integer 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set source
     *
     * @param \Qd\BlogBundle\Entity\Source $source
     * @return Bataille
     */
    public function setSource(\Qd\BlogBundle\Entity\Source $source = null)
    {
        $this->source = $source;
    
        return $this;
    }

    /**
     * Get source
     *
     * @return \Qd\BlogBundle\Entity\Source 
     */
    public function getSource()
    {
        return $this->source;
    }
}