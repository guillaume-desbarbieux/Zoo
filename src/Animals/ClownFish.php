<?php

namespace App\Animals;
use App\Animal;
use App\Interfaces\CanSwim;

class ClownFish extends Animal implements CanSwim
{
	public function getNoise(): string
	{
		return 'HahaBloupBlip';
	}
}