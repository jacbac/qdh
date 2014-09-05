<?php

namespace Qd\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JourBataille
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qd\BlogBundle\Entity\JourBatailleRepository")
 */
class JourBataille
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
     * @ORM\Column(name="descr", type="text")
     */
    private $descr;

    /**
     * @var integer
     *
     * @ORM\Column(name="photos", type="integer", length=255)
     */
    private $photos;


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
     * Set datedeb
     *
     * @param \DateTime $datedeb
     * @return JourBataille
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
     * @return JourBataille
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
     * Set descr
     *
     * @param string $descr
     * @return JourBataille
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
     * Set photos
     *
     * @param string $photos
     * @return JourBataille
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
}
