<?php

namespace App\Factory;

use Doctrine\ORM\EntityManager;

class EntityFactory
{
    protected EntityManager $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function save(object $entity): void
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();
    }

    public function remove(object $entity)
    {
        $this->entityManager->remove($entity);
        $this->entityManager->flush();
    }


}
