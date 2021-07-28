<?php

namespace App\Command;

interface CommandInterface
{
    public function execute(): void;
    public function cancel(): void;
}