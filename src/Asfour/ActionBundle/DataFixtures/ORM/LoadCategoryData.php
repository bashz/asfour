<?php

namespace Asfour\ActionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Asfour\ActionBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {
        $categoryMin = new Category();
        $categoryMax = new Category();
        
        $categoryMin->setName('Food');
        
        $categoryMax->setName('Medical care');
        $categoryMax->setImage('path/to/health-category.png');
        
        $manager->persist($categoryMax);
        $manager->persist($categoryMin);
        $manager->flush();
        
        $this->addReference('medical-care', $categoryMax);
        $this->addReference('food', $categoryMin);
    }

    public function getOrder() {
        return 1;
    }

}