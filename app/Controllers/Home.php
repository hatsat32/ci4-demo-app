<?php namespace App\Controllers;

use CodeIgniter\Config\Factories;
use Myth\Auth\Models\UserModel as MythUserModel;
use App\Models\UserModel as AppUserModel;

class Home extends BaseController
{
	public function index()
	{
		echo("Class Names");
		d(MythUserModel::class);
		d(AppUserModel::class);


		echo("Models with helper");
		d(model(MythUserModel::class));
		d(model(AppUserModel::class));


		echo("Models with factories");
		d(Factories::models(MythUserModel::class));
		d(Factories::models(AppUserModel::class));

		echo("Models with factories (str)");
		d(Factories::models('\App\Models\UserModel'));
		d(Factories::models('\Myth\Auth\Models\UserModel'));

		dd();
		// return view('welcome_message');
	}
}
