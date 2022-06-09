<?php
require_once "vendor/autoload.php";
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Biblioteca\Infra\EntityManagerCreator;

return ConsoleRunner::createHelperSet(EntityManagerCreator::getEntityManager());