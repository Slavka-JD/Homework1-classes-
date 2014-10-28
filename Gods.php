<?php

abstract class Gods
{
    public $gender;
    public $arms;
    public $side;

    public function  behaviour($action)
    {
        if ($this->side = "dark") {
            echo "Will kill you";
        } elseif ($this->side = "light") {
            echo "Will love you";
        } else {
            echo "Very unpredictable guy";
        }
    }

    public function initialization($gender, $arms, $side)
    {
        $this->gender = $gender;
        $this->arms = $arms;
        $this->side = $side;
    }
}
