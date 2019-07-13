<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Category
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var Job[] */
    private $jobs;

 

    /**
     * Constructor
     */
  public function __construct()
    {
        $this->jobs = new ArrayCollection();
       
    }

    /**
     * Get ID
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get jobs
     *
     * @return array
     */
    public function getJobs(): array
    {
        return $this->jobs;
    }

    /**
     * Get jobs
     *
     * @param array $jobs
     * @return Category
     */
    public function setJobs(array $jobs): self
    {
        $this->jobs = $jobs;

        return $this;
    }

    /**
     * Get affiliates
     *
     * @return Affiliate[]
     */
    
    /**
     * Set affiliates
     *
     * @param Affiliate[] $affiliates
     * @return Category
     */
 
}
