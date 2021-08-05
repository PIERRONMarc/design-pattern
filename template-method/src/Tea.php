<?php

namespace App;

class Tea extends CaffeineDrink
{
    public function prepare()
    {
        return "prepare in another way";
    }

    public function addExtras()
    {
        array_push($this->extras, 'honey');
    }
}
