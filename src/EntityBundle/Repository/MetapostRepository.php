<?php

namespace EntityBundle\Repository;

/**
 * MetapostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MetapostRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param $id
     * @return array
     */
    public function findMetaDQL($id)
    {
        $dqlresult = $this->getEntityManager()
            ->createQuery("SELECT c
                               FROM 
                                    EntityBundle:Metapost c
                               WHERE
                                    c.post = '$id'
                                    
                              ");
        return $dqlresult->getResult();
    }
}