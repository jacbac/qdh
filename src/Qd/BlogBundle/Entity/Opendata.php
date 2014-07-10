<?php

namespace Qd\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opendata
 *
 * @ORM\Table(name="opendata")
 * @ORM\Entity(repositoryClass="Qd\BlogBundle\Entity\OpendataRepository")
 */
class Opendata
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
     * @ORM\Column(name="ref", type="string", length=255, nullable=true)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="nump", type="string", length=255, nullable=true)
     */
    private $nump;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255, nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="reg", type="string", length=255, nullable=true)
     */
    private $reg;

    /**
     * @var string
     *
     * @ORM\Column(name="dpt", type="string", length=255, nullable=true)
     */
    private $dpt;

    /**
     * @var string
     *
     * @ORM\Column(name="com", type="string", length=255, nullable=true)
     */
    private $com;

    /**
     * @var string
     *
     * @ORM\Column(name="insee", type="string", length=255, nullable=true)
     */
    private $insee;

    /**
     * @var string
     *
     * @ORM\Column(name="edif", type="string", length=255, nullable=true)
     */
    private $edif;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text", nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="leg", type="text", nullable=true)
     */
    private $leg;

    /**
     * @var string
     *
     * @ORM\Column(name="obj", type="text", nullable=true)
     */
    private $obj;

    /**
     * @var string
     *
     * @ORM\Column(name="lieucor", type="text", nullable=true)
     */
    private $lieucor;

    /**
     * @var string
     *
     * @ORM\Column(name="autp", type="text", nullable=true)
     */
    private $autp;

    /**
     * @var string
     *
     * @ORM\Column(name="autoeu", type="text", nullable=true)
     */
    private $autoeu;

    /**
     * @var string
     *
     * @ORM\Column(name="scle", type="text", nullable=true)
     */
    private $scle;

    /**
     * @var string
     *
     * @ORM\Column(name="datepv", type="text", nullable=true)
     */
    private $datepv;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="text", nullable=true)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="typdoc", type="text", nullable=true)
     */
    private $typdoc;

    /**
     * @var string
     *
     * @ORM\Column(name="lbase", type="text", nullable=true)
     */
    private $lbase;

    /**
     * @var string
     *
     * @ORM\Column(name="copy", type="text", nullable=true)
     */
    private $copy;

    /**
     * @var string
     *
     * @ORM\Column(name="videov", type="string", length=255, nullable=true)
     */
    private $videov;

    /**
     * @var string
     *
     * @ORM\Column(name="videop", type="string", length=255, nullable=true)
     */
    private $videop;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateQd", type="date", nullable=true)
     */
    private $dateqd;

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
     * Set ref
     *
     * @param string $ref
     * @return Opendata
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    
        return $this;
    }

    /**
     * Get ref
     *
     * @return string 
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set nump
     *
     * @param string $nump
     * @return Opendata
     */
    public function setNump($nump)
    {
        $this->nump = $nump;
    
        return $this;
    }

    /**
     * Get nump
     *
     * @return string 
     */
    public function getNump()
    {
        return $this->nump;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Opendata
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set reg
     *
     * @param string $reg
     * @return Opendata
     */
    public function setReg($reg)
    {
        $this->reg = $reg;
    
        return $this;
    }

    /**
     * Get reg
     *
     * @return string 
     */
    public function getReg()
    {
        return $this->reg;
    }

    /**
     * Set dpt
     *
     * @param string $dpt
     * @return Opendata
     */
    public function setDpt($dpt)
    {
        $this->dpt = $dpt;
    
        return $this;
    }

    /**
     * Get dpt
     *
     * @return string 
     */
    public function getDpt()
    {
        return $this->dpt;
    }

    /**
     * Set com
     *
     * @param string $com
     * @return Opendata
     */
    public function setCom($com)
    {
        $this->com = $com;
    
        return $this;
    }

    /**
     * Get com
     *
     * @return string 
     */
    public function getCom()
    {
        return $this->com;
    }

    /**
     * Set insee
     *
     * @param string $insee
     * @return Opendata
     */
    public function setInsee($insee)
    {
        $this->insee = $insee;
    
        return $this;
    }

    /**
     * Get insee
     *
     * @return string 
     */
    public function getInsee()
    {
        return $this->insee;
    }

    /**
     * Set edif
     *
     * @param string $edif
     * @return Opendata
     */
    public function setEdif($edif)
    {
        $this->edif = $edif;
    
        return $this;
    }

    /**
     * Get edif
     *
     * @return string 
     */
    public function getEdif()
    {
        return $this->edif;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Opendata
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set leg
     *
     * @param string $leg
     * @return Opendata
     */
    public function setLeg($leg)
    {
        $this->leg = $leg;
    
        return $this;
    }

    /**
     * Get leg
     *
     * @return string 
     */
    public function getLeg()
    {
        return $this->leg;
    }

    /**
     * Set obj
     *
     * @param string $obj
     * @return Opendata
     */
    public function setObj($obj)
    {
        $this->obj = $obj;
    
        return $this;
    }

    /**
     * Get obj
     *
     * @return string 
     */
    public function getObj()
    {
        return $this->obj;
    }

    /**
     * Set lieucor
     *
     * @param string $lieucor
     * @return Opendata
     */
    public function setLieucor($lieucor)
    {
        $this->lieucor = $lieucor;
    
        return $this;
    }

    /**
     * Get lieucor
     *
     * @return string 
     */
    public function getLieucor()
    {
        return $this->lieucor;
    }

    /**
     * Set autp
     *
     * @param string $autp
     * @return Opendata
     */
    public function setAutp($autp)
    {
        $this->autp = $autp;
    
        return $this;
    }

    /**
     * Get autp
     *
     * @return string 
     */
    public function getAutp()
    {
        return $this->autp;
    }

    /**
     * Set autoeu
     *
     * @param string $autoeu
     * @return Opendata
     */
    public function setAutoeu($autoeu)
    {
        $this->autoeu = $autoeu;
    
        return $this;
    }

    /**
     * Get autoeu
     *
     * @return string 
     */
    public function getAutoeu()
    {
        return $this->autoeu;
    }

    /**
     * Set scle
     *
     * @param string $scle
     * @return Opendata
     */
    public function setScle($scle)
    {
        $this->scle = $scle;
    
        return $this;
    }

    /**
     * Get scle
     *
     * @return string 
     */
    public function getScle()
    {
        return $this->scle;
    }

    /**
     * Set datepv
     *
     * @param string $datepv
     * @return Opendata
     */
    public function setDatepv($datepv)
    {
        $this->datepv = $datepv;
    
        return $this;
    }

    /**
     * Get datepv
     *
     * @return string 
     */
    public function getDatepv()
    {
        return $this->datepv;
    }

    /**
     * Set serie
     *
     * @param string $serie
     * @return Opendata
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;
    
        return $this;
    }

    /**
     * Get serie
     *
     * @return string 
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set typdoc
     *
     * @param string $typdoc
     * @return Opendata
     */
    public function setTypdoc($typdoc)
    {
        $this->typdoc = $typdoc;
    
        return $this;
    }

    /**
     * Get typdoc
     *
     * @return string 
     */
    public function getTypdoc()
    {
        return $this->typdoc;
    }

    /**
     * Set lbase
     *
     * @param string $lbase
     * @return Opendata
     */
    public function setLbase($lbase)
    {
        $this->lbase = $lbase;
    
        return $this;
    }

    /**
     * Get lbase
     *
     * @return string 
     */
    public function getLbase()
    {
        return $this->lbase;
    }

    /**
     * Set copy
     *
     * @param string $copy
     * @return Opendata
     */
    public function setCopy($copy)
    {
        $this->copy = $copy;
    
        return $this;
    }

    /**
     * Get copy
     *
     * @return string 
     */
    public function getCopy()
    {
        return $this->copy;
    }

    /**
     * Set videov
     *
     * @param string $videov
     * @return Opendata
     */
    public function setVideov($videov)
    {
        $this->videov = $videov;
    
        return $this;
    }

    /**
     * Get videov
     *
     * @return string 
     */
    public function getVideov()
    {
        return $this->videov;
    }

    /**
     * Set videop
     *
     * @param string $videop
     * @return Opendata
     */
    public function setVideop($videop)
    {
        $this->videop = $videop;
    
        return $this;
    }

    /**
     * Get videop
     *
     * @return string 
     */
    public function getVideop()
    {
        return $this->videop;
    }

    /**
     * Set dateqd
     *
     * @param \DateTime $dateqd
     * @return Opendata
     */
    public function setDateqd($dateqd)
    {
        $this->dateqd = $dateqd;
    
        return $this;
    }

    /**
     * Get dateqd
     *
     * @return \DateTime 
     */
    public function getDateqd()
    {
        return $this->dateqd;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return Opendata
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
     * @return Opendata
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