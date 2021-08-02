<?php

namespace App\Facade;

use App\Subsystem\Light;
use App\Subsystem\SoundAmplifier;
use App\Subsystem\Screen;

class HomeCinemaFacade
{
    private $light;
    private $soundAmplifier;
    private $screen;

    public function __construct(
        Light $light,
        SoundAmplifier $soundAmplifier,
        Screen $screen
    )
    {
        $this->light = $light;
        $this->soundAmplifier = $soundAmplifier;
        $this->screen = $screen;
    }

    public function watchMovie(): void
    {
        // obviously, there could be much more methods than that
        $this->light->setLuminosity(Light::LUMINOSITY_LOW);
        $this->soundAmplifier->turnOn();
        $this->screen->lower();
    }

    public function isScreenLowered(): bool
    {
        return $this->screen->isLowered();
    }

    public function isLightLow(): bool
    {
        return $this->light->getLuminosity() == Light::LUMINOSITY_LOW;
    }

    public function isSoundAmplifierTurnedOn(): bool
    {
        return $this->soundAmplifier->isTurnedOn();
    }

}