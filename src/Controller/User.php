<?php

namespace Controller;

class User {
	public function index () {
		return query('select * from users')->map(User::class);
	}

	public function create () {
		command(
			Model\User::create(['name'=> 'aieru'])->save(),
			Model\User\Summary::create(['won'=> 0])->save()
		);
	}
}

namespace Controller\User;

class Session
{
	public function create ($params) {
		command(
			Model\User\Session::create(['id' => id($params)])->save(),
			info([
				'event' => Event\Session::Created,
				'data' => [
					'user' => [
						'id' => id($params)
					]
				]
			])
		);
	}
}
