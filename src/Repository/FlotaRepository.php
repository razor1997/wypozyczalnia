<?php

namespace App\Repository;

use App\Entity\Flota;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Flota|null find($id, $lockMode = null, $lockVersion = null)
 * @method Flota|null findOneBy(array $criteria, array $orderBy = null)
 * @method Flota[]    findAll()
 * @method Flota[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FlotaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Flota::class);
    }
    public function transform(Flota $Flota)
    {
        return [
                'id'    => (int) $Flota->getId(),
                'Model' => (string) $Model->getTitle(),
                'Marka' => (string) $Marka->getCount()
        ];
    }

    public function transformAll()
    {
        $Flota = $this->findAll();
        $FlotaArray = [];

        foreach ($Flotas as $Flota) {
            $FlotaArray[] = $this->transform($Flota);
        }

        return $FlotaArray;
    }

    // /**
    //  * @return Flota[] Returns an array of Flota objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Flota
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
