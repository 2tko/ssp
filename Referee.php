<?php

class Referee
{
    private $userA;
    private $userB;

    public function __construct(User $userA, User $userB)
    {
        $this->userA = $userA;
        $this->userB = $userB;
    }

    public function getWinner(): ?User
    {
        if ($this->userA->getWeapon() == $this->userB->getWeapon()) {
            return null;
        }

        if ($this->userA->getWeapon()->amIWin($this->userB->getWeapon())) {
            return $this->userA;
        }

        return $this->userB;
    }
}