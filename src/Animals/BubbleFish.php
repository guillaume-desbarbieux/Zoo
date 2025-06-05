<?php

namespace App\Animals;
use App\Animal;
use App\Interfaces\CanSwim;


class BubbleFish extends Animal implements CanSwim
{
	public function getNoise(): string
	{
		return 'BlipBlopBloup';
	}
}