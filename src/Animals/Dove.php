<?php

namespace App\Animals;
use App\Animal;
use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;

class Dove extends Animal implements CanFly, CanWalk
{
	public function getNoise(): string
	{
		return 'Rou Rouuu';
	}
}