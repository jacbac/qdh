<?php

namespace Qd\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * OpendataRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OpendataRepository extends EntityRepository
{
    public function myFindByAll()
    {
        $queryBuilder = $this->_em->createQueryBuilder()
            ->select('o.pays', 'o.reg', 'o.edif', 'o.leg', 'o.obj', 'o.lieucor', 'o.autp', 'o.serie')
            ->from($this->_entityName, 'o');

        $query = $queryBuilder->getQuery();

        return $query->getResult();
    }

    public function myFindData($madate)
    {
        $query = $this->_em->createQuery(
            'SELECT c.videov, c.videop, c.adresse, c.leg
            FROM QdBlogBundle:Opendata c
            WHERE c.datepv = ?1'
        );

        $query->setParameter(1, $madate);

        return $query->getResult();
    }

    public function myFindByReq($cat, $req)
    {
        $query = $this->_em->createQuery(
           'SELECT c.videov, c.videop, c.leg FROM QdBlogBundle:Opendata c WHERE c.'.$cat .'= ?2'
        );

        $query->setParameter(2 , $req);

        return $query->getResult();
    }

    public function myDistinctPays()
    {
        $query = $this->_em->createQuery(
            'SELECT DISTINCT(c.pays) as title FROM QdBlogBundle:Opendata c  ORDER BY c.pays ASC'
        );

        return $query->getResult();
    }
    public function myDistinctRegion()
    {
        $query = $this->_em->createQuery(
            'SELECT DISTINCT(c.reg) as title FROM QdBlogBundle:Opendata c  ORDER BY c.reg ASC'
        );

        return $query->getResult();
    }
    public function myDistinctDpt()
    {
        $query = $this->_em->createQuery(
            'SELECT DISTINCT(c.dpt) as title FROM QdBlogBundle:Opendata c  ORDER BY c.dpt ASC'
        );

        return $query->getResult();
    }
    public function myDistinctCom()
    {
        $query = $this->_em->createQuery(
            'SELECT DISTINCT(c.com) as title FROM QdBlogBundle:Opendata c ORDER BY c.com ASC'
        );

        return $query->getResult();
    }
    public function myDistinctLeg()
    {
        $query = $this->_em->createQuery(
            'SELECT DISTINCT(c.leg) as title FROM QdBlogBundle:Opendata c ORDER BY c.leg ASC'
        );

        return $query->getResult();
    }
    public function myDistinctAutp()
    {
        $query = $this->_em->createQuery(
            'SELECT DISTINCT(c.autp) as title FROM QdBlogBundle:Opendata c ORDER BY c.autp ASC'
        );

        return $query->getResult();
    }
    public function myDistinctAutoeu()
    {
        $query = $this->_em->createQuery(
            'SELECT DISTINCT(c.autoeu) as title FROM QdBlogBundle:Opendata c  ORDER BY c.autoeu ASC'
        );

        return $query->getResult();
    }
    public function myDistinctSerie()
    {
        $query = $this->_em->createQuery(
            'SELECT DISTINCT(c.serie) as title FROM QdBlogBundle:Opendata c  ORDER BY c.serie ASC'
        );

        return $query->getResult();
    }
}
