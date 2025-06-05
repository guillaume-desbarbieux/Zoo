<?php

namespace App\Animals;
use App\Animal;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Zebra extends Animal implements CanWalk, CanSwim
{
	public function getNoise(): string
	{
		return 'hiiiii';
	}
}