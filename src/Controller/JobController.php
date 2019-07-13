<?php // src/Controller/JobController.php

namespace App\Controller;

use App\Entity\Job;
use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use DateTime;
use Symfony\Component\HttpFoundation\Response;

class JobController extends AbstractController
{
    public function index(EntityManagerInterface $em): Response
    {
//        $jobs = $em->getRepository(Job::class)->findActive(new DateTime('-30 day'));
//
//        return $this->render('job/index.html.twig', [
//            'jobs' => $jobs,
//        ]);
        
        $categories = $em->getRepository(Category::class)->findCategoriesWithJobs();

        $jobsCategories = [];
        foreach ($categories as $category) {
            $jobsCategories[$category->getName()] = $em->getRepository(Job::class)->findActiveByCategory($category);
        }
        return $this->render('job/index.html.twig', [
            'categories' => $jobsCategories,
        ]); 

    }
    
}