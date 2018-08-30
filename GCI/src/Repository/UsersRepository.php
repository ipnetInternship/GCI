<?php

namespace App\Repository;

use App\Entity\Users;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

use Symfony\Bridge\Doctrine\RegistryInterface;

class UsersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Users::class);
    }

    /**
     * @param $mail
     * @return Users
     */
    public function findUserByMail($mail): Users
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('u')
            ->andWhere('u.mail = :mail')
            ->setParameter('mail', $mail)
            ->getQuery();

        $user = $qb->setMaxResults(1)->getOneOrNullResult();
		return $user;        
    }
}