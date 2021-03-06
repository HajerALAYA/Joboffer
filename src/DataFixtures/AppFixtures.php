<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Job;
use App\Entity\Category;


class AppFixtures extends Fixture 
{
   
    public function load(ObjectManager $manager)
    {
             
         $design = new Category();
        $design->setName('Design');
        $manager->persist($design);

        $programming = new Category();
        $programming->setName('Programming');
        $manager->persist($programming);

        $managing = new Category();
        $managing->setName('Manager');
        $manager->persist($managing);

        $administrator = new Category();
        $administrator->setName('Administrator');
        $manager->persist($administrator);

        $manager->flush();

        $this->setReference('category-design', $design);
        $this->setReference('category-programming', $programming);
        $this->setReference('category-managing', $managing);
        $this->setReference('category-administrator', $administrator);
        
         $categoryProgramming = $this->getReference('category-programming');
        $categoryDesign = $this->getReference('category-design');

        $jobSensioLabs = new Job();
        $jobSensioLabs->setCategory($categoryProgramming);
        $jobSensioLabs->setType('full-time');
        $jobSensioLabs->setCompany('Sensio Labs');
        $jobSensioLabs->setLogo('sensio-labs.gif');
        $jobSensioLabs->setUrl('http://www.sensiolabs.com/');
        $jobSensioLabs->setPosition('Web Developer');
        $jobSensioLabs->setLocation('Paris, France');
        $jobSensioLabs->setDescription("You've already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.");
        $jobSensioLabs->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $jobSensioLabs->setIsPublic(true);
        $jobSensioLabs->setIsActivated(true);
        $jobSensioLabs->setToken('job_sensio_labs');
        $jobSensioLabs->setEmail('job@example.com');
        $manager->persist($jobSensioLabs);

        $jobExtremeSensio = new Job();
        $jobExtremeSensio->setCategory($categoryDesign);
        $jobExtremeSensio->setType('part-time');
        $jobExtremeSensio->setCompany('Extreme Sensio');
        $jobExtremeSensio->setLogo('extreme-sensio.gif');
        $jobExtremeSensio->setUrl('http://www.extreme-sensio.com/');
        $jobExtremeSensio->setPosition('Web Designer');
        $jobExtremeSensio->setLocation('Paris, France');
        $jobExtremeSensio->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $jobExtremeSensio->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $jobExtremeSensio->setIsPublic(true);
        $jobExtremeSensio->setIsActivated(true);
        $jobExtremeSensio->setToken('job_extreme_sensio');
        $jobExtremeSensio->setEmail('job@example.com');
        $manager->persist($jobExtremeSensio);

        $jobSensioExpired = new Job();
        $jobSensioExpired->setCategory($categoryProgramming);
        $jobSensioExpired->setType('full-time');
        $jobSensioExpired->setCompany('Extreme Sensio');
        $jobSensioExpired->setLogo('extreme-sensio.gif');
        $jobSensioExpired->setUrl('http://www.extreme-sensio.com/');
        $jobSensioExpired->setPosition('Software engineer');
        $jobSensioExpired->setLocation('Paris, France');
        $jobSensioExpired->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $jobSensioExpired->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $jobSensioExpired->setIsPublic(true);
        $jobSensioExpired->setIsActivated(true);
        $jobSensioExpired->setToken('job_extreme_sensio_disable');
        $jobSensioExpired->setEmail('job@example.com');
        $jobSensioExpired->setExpiresAt(new \DateTime('2019-07-07'));
        $manager->persist($jobSensioExpired);

        $manager->flush();
        
        
    }
}

