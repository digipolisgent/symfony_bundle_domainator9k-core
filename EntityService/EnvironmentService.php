<?php

namespace DigipolisGent\Domainator9k\CoreBundle\EntityService;

use Ctrl\Common\EntityService\AbstractDoctrineService;
use DigipolisGent\Domainator9k\CoreBundle\Entity\Environment;

class EnvironmentService extends AbstractDoctrineService
{
    /**
     * {@inheritdoc}
     */
    public function getEntityClass()
    {
        return Environment::class;
    }
}
