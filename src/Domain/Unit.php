<?php

namespace Domain\Model\Unit;

class Unit extends Struct
{
	protected $name;
	protected $hp;
	protected $skills;

	public function skills()
	{
		return decode($this->skills)->mapInto(Skill::class);
	}
}

function create($arg1)
{
	return function ($arg2) {
		new Unit($arg1);
	};
}

function grow($unit, $arg2)
{
	return function ($arg2) {
		($arg1)($arg2);
	};
}
