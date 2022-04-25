<?php

namespace Application;

use Application\Father;

class Human extends Father
{
    public function doNothing()
    {
        $this->business();

        $land = $this->getLand() - 10;
        $this->setLand($land);

        echo $this->getLand();

    }    
}