<?php

namespace Plugin\DoctrineExample\Setup;

use Plugin\DoctrineExample\Entity\Product;

class Worker extends \Ip\SetupWorker
{

    public function activate()
    {
        $em = \Plugin\Doctrine\Service::getEntityManager();
        $classes = array(
            $em->getClassMetadata(Product::class)
        );
        $tool = new \Doctrine\ORM\Tools\SchemaTool($em);
        $tool->createSchema($classes);
    }

    public function deactivate()
    {
        $em = \Plugin\Doctrine\Service::getEntityManager();
        $classes = [
            $em->getClassMetadata(Product::class)
        ];
        $tool = new \Doctrine\ORM\Tools\SchemaTool($em);
        $tool->dropSchema($classes);
    }

    public function remove()
    {

    }

}
