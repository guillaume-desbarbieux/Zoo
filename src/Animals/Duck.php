<?php

namespace App\Animals;
use App\Animal;
use App\Interfaces\CanFly;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Duck extends Animal implements CanFly, CanWalk, CanSwim
{
	public function getNoise(): string
	{
		return 'Coincoin';
	}
}