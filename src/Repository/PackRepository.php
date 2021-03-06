<?php

namespace App\Repository;

use App\Entity\Pack;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pack|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pack|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pack[]    findAll()
 * @method Pack[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pack::class);
    }

    public function myPacks(int $id, OrdersRepository $ordersRepository){
        return $this->createQueryBuilder('p')
            ->where('p.id IN (:array)')
            ->setParameter('array', $ordersRepository->myOrders($id))
            ->getQuery()->getResult();
    }

    public function notMyPacks(int $id, OrdersRepository $ordersRepository){
        return $this->createQueryBuilder('p')
            ->where('p.id NOT IN (:array)')
            ->setParameter('array', $ordersRepository->myOrders($id))
            ->getQuery()->getResult();
    }

    public function getMyPacks(int $id, String $params, OrdersRepository $ordersRepository){
        return $this->createQueryBuilder('p')
            ->where('p.id IN (:array)')
            ->setParameter('array', $ordersRepository->showMyOrders($id, $params))
            ->getQuery()->getResult();
    }
}