<?php

namespace EntityBundle\Repository;
use EntityBundle\Entity\Post;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Query;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{
    public function findEntitiesByString($str){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM EntityBundle:Post p
                WHERE p.title LIKE :str'
            )
            ->setParameter('str', '%'.$str.'%')
            ->getResult();
    }
}
