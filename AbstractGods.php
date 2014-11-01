<?php

abstract class AbstractGods
{
    public $gender;
    public $arms;
    public $side;

    public function __construct($gender, $arms, $side)
    {
        $this->gender = $gender;
        $this->arms = $arms;
        $this->side = $side;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getArms()
    {
        return $this->arms;
    }

    public function getSide()
    {
        return $this->side;
    }

    public function behaviour()
    {

    }
}

