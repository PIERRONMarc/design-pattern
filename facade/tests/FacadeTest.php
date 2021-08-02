<?php

namespace App\Adapter\Tests;

use PHPUnit\Framework\TestCase;
use App\Facade\HomeCinemaFacade;
use App\Subsystem\Screen;
use App\Subsystem\SoundAmplifier;
use App\Subsystem\Light;

class FacadeTest extends TestCase
{
    public function testFacade()
    {
        $homeCinema = new HomeCinemaFacade(
            new Light(),
            new SoundAmplifier(),
            new Screen()
        );
        $homeCinema->watchMovie();

        $this->assertEquals(true, $homeCinema->isLightLow());
        $this->assertEquals(true, $homeCinema->isScreenLowered());
        $this->assertEquals(true, $homeCinema->isSoundAmplifierTurnedOn());
    }
}