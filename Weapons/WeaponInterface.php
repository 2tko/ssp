<?php

namespace Weapons;

interface WeaponInterface
{
    public function amIWin(WeaponInterface $weapon): bool;
}