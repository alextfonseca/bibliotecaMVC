<?php
namespace Biblioteca\Infra;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManagerInterface;

class EntityManagerCreator {
    public static function getEntityManager(): EntityManagerInterface {
        $paths = ["src/Entity"];
        $isDevMode = true;
        
        $dbParams = array(
            'driver'   => 'pdo_mysql',
            'port' => 3306,
            'host' => '127.0.0.1',
            'user'     => 'root',
            'password' => '',
            'dbname'   => 'biblioteca',
        );
        
        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
        return EntityManager::create($dbParams, $config);
    }
}