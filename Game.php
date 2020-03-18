<?php

use Weapons\Paper;
use Weapons\Stone;
use Weapons\Scissors;
use Weapons\WeaponFactory;


class Game
{
    public static function run()
    {
        $weaponFactory = new WeaponFactory();
        $weaponFactory->setWeapon(new Paper());
        $weaponFactory->setWeapon(new Stone());
        $weaponFactory->setWeapon(new Scissors());

        $userA = new User(new Paper(), 'Tim');
        $userB = new User($weaponFactory->getRandomWeapon(), 'Max');

        $result[$userA->getName()] = 0;
        $result[$userB->getName()] = 0;
        $result['withoutWinner'] = 0;
        $logText = "<p>UserA: %s; WeaponA: %s; --- UserB: %s; WeaponB: %s; --- Winner: %s;</p>";

        $referee = new Referee($userA, $userB);
        for ($i = 0; $i < 100; $i++) {
            $userB->setWeapon($weaponFactory->getRandomWeapon());
            $winner = $referee->getWinner();
            if (is_null($winner)) {
                $result['withoutWinner']++;
            } else {
                $result[$winner->getName()]++;
            }

            echo sprintf(
                $logText,
                $userA->getName(),
                get_class($userA->getWeapon()),
                $userB->getName(),
                get_class($userB->getWeapon()),
                $winner ? $winner->getName() : 'withoutWinner'
            );
        }

        print_r($result);
    }
}