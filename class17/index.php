<?php

// $rahim = new Human();
// $frade500 = new Iron();
// $fajli = new Mango();
// $reverseOsmosis = new Water();

class Human 
{
    private $birthDate;

    private $deathDate;

    private $name;

    public function eat()
    {
        echo "I'm eating <br />";
    }

    public function walk()
    {
        echo "I'm walking <br />";
    }

    /**
     * Get the value of birthDate
     */ 
    public function getBirthDate()
    {
        echo $this->birthDate;
    }

    /**
     * Set the value of birthDate
     *
     * @return  self
     */ 
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get the value of deathDate
     */ 
    public function getDeathDate()
    {
        echo $this->deathDate;
    }

    /**
     * Set the value of deathDate
     *
     * @return  self
     */ 
    public function setDeathDate($deathDate)
    {
        $this->deathDate = $deathDate;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        echo $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}

$rahim = new Human();
$rahim->eat();
$rahim->walk();
$rahim->setName("Rahim");
$rahim->getName();
$rahim->setBirthDate("01/01/2000");
$rahim->getBirthDate();
$rahim->setDeathDate("01-01-2080");
$rahim->getDeathDate();