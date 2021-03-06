<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Projet;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function projets()
	{
		return $this->hasMany(Projet::class);
	}

	public static function liens()
	{	
		$user = User::first();
		$liens = collect([
			'lien_github'   => $user->lien_github,
			'lien_linkedin' => $user->lien_linkedin,
			'lien_youtube'  => $user->lien_youtube
		]);

		return $liens;

	}

}
