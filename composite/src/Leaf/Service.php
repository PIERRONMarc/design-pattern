<?php

namespace App\Leaf;

use App\Component\Hierarchy;

class Service implements Hierarchy
{
    private $name;

    private $path;

    private $employeesCount;

    public function __construct(string $name, string $path, int $employeesCount)
    {
       $this->name = $name;
       $this->path = $path; 
       $this->employeesCount = $employeesCount;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of path
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Set the value of path
     */
    public function setPath($path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get the value of employeesCount
     */
    public function getEmployeesCount(): int
    {
        return $this->employeesCount;
    }

    /**
     * Set the value of employeesCount
     */
    public function setEmployeesCount($employeesCount): self
    {
        $this->employeesCount = $employeesCount;

        return $this;
    }

    public function getAllEmployeesCount(): int
    {
        return $this->employeesCount;
    }
}