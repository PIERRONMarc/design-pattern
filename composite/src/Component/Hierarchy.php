<?php

namespace App\Component;

Interface Hierarchy
{
    public function getEmployeesCount(): int;

    public function getAllEmployeesCount(): int;

    public function getName(): string;

    public function getPath(): string;
}