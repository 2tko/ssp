<?php

namespace Weapons;

class Paper implements WeaponInterface
{
    public function amIWin(WeaponInterface $weapon): bool
    {
        return $weapon instanceof Stone;
    }
}