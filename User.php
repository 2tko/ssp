<?php

use Weapons\WeaponInterface;

class User
{
    private $weapon;
    private $name;

    public function __construct(WeaponInterface $weapon, string $name)
    {
        $this->weapon = $weapon;
        $this->name = $name;
    }

    public function setWeapon(WeaponInterface $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function getWeapon(): WeaponInterface
    {
        return $this->weapon;
    }

    public function getName(): string
    {
        return $this->name;
    }
}