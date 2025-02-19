<?php

	namespace Database\Seeders;

	use App\Models\User;
	use Illuminate\Database\Seeder;
	use Illuminate\Support\Facades\Hash;

	class UserSeeder extends Seeder {
		public function run(): void {
			User::factory()->create([
				'firstname' => 'Matheus Henrique',
				'lastname' => 'Conceição Bonore',
				'email' => 'matheus.bonore@gmail.com',
				'email_verified_at' => now(),
				'password' => Hash::make('root@cashtrack'),
			]);

			User::factory(5)->create();
		}
	}