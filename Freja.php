<?php

class Freja extends AbstractGods implements GodsInterface
{
    public function behaviour()
    {
        $action = 'Freja is %s and has %s arms. %s';
        $gender = $this->getGender();
        $arms = $this->getArms();
        $side = $this->getSide();
        return sprintf($action, $gender, $arms, $side);
    }

    public function makeMiracles()
    {
        echo "Even more Boo! ";
    }

}
