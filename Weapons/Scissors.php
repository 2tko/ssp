<?php

namespace Weapons;

class Scissors implements WeaponInterface
{
    public function amIWin(WeaponInterface $weapon): bool
    {
        return $weapon instanceof Paper;
    }
}