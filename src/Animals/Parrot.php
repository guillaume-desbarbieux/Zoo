<?php

namespace App\Animals;
use App\Animal;
use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;

class Parrot extends Animal implements CanFly, CanWalk
{
	public function getNoise(): string
	{
		return 'coco';
	}
}