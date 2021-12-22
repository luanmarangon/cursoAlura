<?php
namespace Alura\Doctrine\Helper;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class EntityManagerFactory
{
    public function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';
        $config = Setup::createAnnotationMetadataConfiguration([
            $rootDir . '/src'], 
            true
        );

        // SQLite
        // $connection = [
        //     'driver' => 'pdo_sqlite', 
        //     'path' => $rootDir.'/var/data/banco.sqlite'
        // ];

        $connection = [
            'driver' => 'pdo_mysql',
            'host' => 'localhost',
            'dbname' => 'curso_doctrine',
            'user' => 'root',
            'password' => ''
        ];
        return EntityManager::create($connection, $config);
    }
}