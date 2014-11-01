<?php

class Perun extends AbstractGods implements GodsInterface
{
    public function behaviour()
    {
        $action = 'Perun is %s and has %s arms. %s';
        $gender = $this->getGender();
        $arms = $this->getArms();
        $side = $this->getSide();
        return sprintf($action, $gender, $arms, $side);
    }

    public function MakeMiracles()
    {
        echo "Boo! ";
    }
}

