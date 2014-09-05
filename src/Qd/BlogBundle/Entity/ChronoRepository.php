<?php

namespace Qd\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * ChronoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ChronoRepository extends EntityRepository
{
    public function myFindByAll()
    {
        //$queryBuilder = $this->createQueryBuilder('a');
        $queryBuilder = $this->_em->createQueryBuilder()
            ->select('c')
            ->from($this->_entityName, 'c')
            ->where('c.datefin = 0000-00-00')
            ->orderBy('c.datedebut', 'ASC');

        $query = $queryBuilder->getQuery();
        $resultats = $query->getResult();

        return $resultats;
    }

    public function myFindByChrono($madate)
    {
        //$queryBuilder = $this->createQueryBuilder('a');
        $query = $this->_em->createQuery(
            'SELECT c FROM QdBlogBundle:Chrono c where ?1 = c.datedebut and c.datefin = 0000-00-00 order by c.datedebut');
        $query->setParameter(1, $madate);

        //$query = $queryBuilder->getQuery();
        $resultats = $query->getResult();

        return $resultats;
    }

    public function myFindByEvents($madate)
    {
        //$queryBuilder = $this->createQueryBuilder('a');
        $query = $this->_em->createQuery(
            'SELECT c FROM QdBlogBundle:Chrono c where ?1 between c.datedebut and c.datefin order by c.datedebut');
        $query->setParameter(1, $madate);

        //$query = $queryBuilder->getQuery();
        $resultats = $query->getResult();

        return $resultats;
    }
}
