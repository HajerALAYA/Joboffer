<?php // src/Repository/JobRepository.php
namespace App\Repository;
use DateTime;
use Doctrine\ORM\EntityRepository;
class JobRepository extends EntityRepository
{  public function findActive(DateTime $date)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.createdAt > :date')
            ->setParameter('date', $date)
            ->getQuery()
            ->getResult();
    }}
