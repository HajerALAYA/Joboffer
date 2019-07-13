<?php // src/Repository/JobRepository.php
namespace App\Repository;

use DateTime;
use Doctrine\ORM\EntityRepository;
use App\Entity\Category;


class JobRepository extends EntityRepository
{ 
    public function findActive(DateTime $date)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.createdAt > :date')
            ->setParameter('date', $date)
            ->getQuery()
            ->getResult();
    }
    
    public function findActiveByCategory(Category $category)
    {
        return $this->createQueryBuilder('j')
            ->where('j.category = :category')
            ->andWhere('j.expiresAt >= :date')
            ->setParameter('category', $category)
            ->setParameter('date', new DateTime())
            ->getQuery()
            ->getResult();
    }
    
    }
