<?php

namespace Qd\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soldat
 *
 * @ORM\Table(name="soldat")
 * @ORM\Entity(repositoryClass="Qd\BlogBundle\Entity\SoldatRepository")
 */
class Soldat
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \string
     *
     * @ORM\Column(name="datenais", type="string", length=255)
     */
    private $datenais;

    /**
     * @var \string
     *
     * @ORM\Column(name="datedec", type="string", length=255)
     */
    private $datedec;

    /**
     * @var string
     *
     * @ORM\Column(name="pres", type="text")
     */
    private $pres;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Source")
     * @ORM\JoinColumn(nullable=true)
     */
    //@ORM\Column(name="source", type="integer")
    private $source;

    /**
     * @var integer
     *
     *
     * @ORM\ManyToOne(targetEntity="Photos")
     * @ORM\JoinColumn(nullable=true)
     */
    //@ORM\Column(name="photo", type="integer")
    private $photo;

    /**
     * @var integer
     *
     *
     * @ORM\ManyToOne(targetEntity="Carnet")
     * @ORM\JoinColumn(nullable=true)
     */
    //@ORM\Column(name="photo", type="integer")
    private $carnet;


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
     * Set nom
     *
     * @param string $nom
     * @return Soldat
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Soldat
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datenais
     *
     * @param \DateTime $datenais
     * @return Soldat
     */
    public function setDatenais($datenais)
    {
        $this->datenais = $datenais;
    
        return $this;
    }

    /**
     * Get datenais
     *
     * @return \DateTime 
     */
    public function getDatenais()
    {
        return $this->datenais;
    }

    /**
     * Set datedec
     *
     * @param \DateTime $datedec
     * @return Soldat
     */
    public function setDatedec($datedec)
    {
        $this->datedec = $datedec;
    
        return $this;
    }

    /**
     * Get datedec
     *
     * @return \DateTime 
     */
    public function getDatedec()
    {
        return $this->datedec;
    }

    /**
     * Set pres
     *
     * @param string $pres
     * @return Soldat
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
     * Set source
     *
     * @param integer $source
     * @return Soldat
     */
    public function setSource($source)
    {
        $this->source = $source;
    
        return $this;
    }

    /**
     * Get source
     *
     * @return Qd\BlogBundle\Entity\Source
     */
    // @return integer
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Get carnet
     *
     * @return Qd\BlogBundle\Entity\carnet
     */
    // @return integer
    public function getCarnet()
    {
        return $this->carnet;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Soldat
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     *
     * @return Qd\BlogBundle\Entity\Photos
     */
    //@return string
    public function getPhoto()
    {
        return $this->photo;
    }
}
