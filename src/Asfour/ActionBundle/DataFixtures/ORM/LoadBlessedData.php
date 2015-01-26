<?php

namespace Asfour\ActionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Asfour\ActionBundle\Entity\Blessed;
use Asfour\ActionBundle\Entity\Need;

class LoadBlessedData extends AbstractFixture implements OrderedFixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {
        $blessedMax = new Blessed();
        $blessedMax->setName('Ali one');
        $blessedMax->setAge(44);
        $blessedMax->setLastSeenLat(-22.4314142);
        $blessedMax->setLastSeenLon(34.2);
        $blessedMax->setImage('/path/to/blessedMax-image.png');
        
        $blessedMin = new Blessed();
        $blessedMin->setName('Ali two');

        $needMax = new Need();
        $needMax->setName('Health Care');
        $needMax->setDate(new \DateTime());
        $needMax->setIsFilled(false);
        $needMax->setFilledAt(new \DateTime());
        $needMax->setCategory($this->getReference('medical-care'));
        
        $needMin = new Need();
        $needMin->setName('Launch');
        $needMin->setCategory($this->getReference('food'));
        
        $needMax->setBlessed($blessedMax);
        $needMin->setBlessed($blessedMax);
        
        $blessedMax->addNeed($needMax);
        $blessedMax->addNeed($needMin);

        $manager->persist($blessedMax);
        $manager->persist($blessedMin);
        $manager->flush();
        
        $this->addReference('ali-one', $blessedMax);
        $this->addReference('ali-two', $blessedMin);
    }

    public function getOrder() {
        return 2;
    }

}
