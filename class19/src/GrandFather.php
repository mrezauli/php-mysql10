<?php

namespace Application;

class GrandFather
{
    private $land = 25;

    /**
     * Get the value of land
     */ 
    public function getLand()
    {
        return $this->land;
    }

    /**
     * Set the value of land
     *
     * @return  self
     */ 
    public function setLand($land)
    {
        $this->land = $land;

        return $this;
    }
}