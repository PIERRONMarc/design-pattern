<?php

namespace App;

class Coffee extends CaffeineDrink
{
    public function prepare()
    {
        return "prepare in a certain way";
    }

    public function addExtras()
    {
        array_push($this->extras, 'sugar');
    }
}
