<?php

namespace Weapons;

class WeaponFactory
{
    private $weapons;

    public function setWeapon(WeaponInterface $weapon): void
    {
        $this->weapons[] = $weapon;
    }

    public function getRandomWeapon(): WeaponInterface
    {
        if (empty($this->weapons)) {
            throw new \Exception('There are no weapon in list of weapons');
        }

        return $this->weapons[array_rand($this->weapons)];
    }
}