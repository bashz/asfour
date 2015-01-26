<?php

namespace Asfour\ActionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Asfour\ActionBundle\Entity\Badge;
use Asfour\ActionBundle\Entity\Title;

class LoadAchivementData extends AbstractFixture implements OrderedFixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {
        $badgeMax = new Badge();
        $badgeMin = new Badge();
        $titleMax = new Title();
        
        $badgeMax->setName('batman');
        $badgeMax->setConditions('help at night');
        $badgeMax->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae tincidunt justo, ut elementum magna.');
        $badgeMax->setImage('path/to/batman.png');
        $badgeMax->setIsActive(true);
        $badgeMax->setThumbnail('path/to/thumb.png');
        
        $badgeMin->setName('water proof');
        $badgeMin->setConditions('help at rain');
        $badgeMin->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae tincidunt justo, ut elementum magna.');
        $badgeMin->setImage('path/to/water.png');
        $badgeMin->setThumbnail('path/to/thumb.png');
        
        $titleMax->setName('level 50');
        $titleMax->setConditions('Colonel');
        $titleMax->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae tincidunt justo, ut elementum magna.');
        $titleMax->setIsActive(true);
        $titleMax->setScore(3000);
        
//        $badgeMax->addAquired($this->getReference('doctor'));
//        $badgeMax->addAquired($this->getReference('launch'));
//        
//        $titleMax->addAquired($this->getReference('launch'));
        
        $manager->persist($badgeMax);
        $manager->persist($badgeMin);
        $manager->persist($titleMax);
        $manager->flush();
        
        $this->addReference('batman', $badgeMax);
        $this->addReference('water-proof', $badgeMin);
        $this->addReference('level', $titleMax);
        
        $badges = $manager->getRepository('AsfourActionBundle:Badge')->findAll();
        $titles = $manager->getRepository('AsfourActionBundle:Title')->findAll();
        $badgeNames = "";
        foreach ($badges as $badge){
            $badgeNames.= $badge->getName()."\n";
        }
        $titleNames = "";
        foreach ($titles as $title){
            $titleNames.= $title->getName()."\n";
        }
        echo ("titles are :\n".$titleNames."badges are :\n".$badgeNames);
    }

    public function getOrder() {
        return 4;
    }

}
