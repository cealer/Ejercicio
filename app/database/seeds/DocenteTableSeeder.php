<?php
use RegistroDocente\Entities\Docente;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DocenteTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		foreach(range(1, 20) as $index)
		{
			Docente::create([
				'full_name'=>$faker->name,
				'Amount'=>$faker->numberBetween,
				'StartMonth'=>$faker->randomDigit,
				'Number'=>$faker->randomDigit
			]);
		}
	}

}