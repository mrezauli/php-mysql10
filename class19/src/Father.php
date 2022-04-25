<?php

namespace Application;
use Application\GrandFather;

class Father extends GrandFather
{
    public function business()
    {
        $land = $this->getLand();
        //echo $this->getLand();
        
        $land = $land + 100;

        $this->setLand($land);
    }
}