<?php

namespace Weapons;

class Stone implements WeaponInterface
{
    public function amIWin(WeaponInterface $weapon): bool
    {
        return $weapon instanceof Scissors;
    }
}