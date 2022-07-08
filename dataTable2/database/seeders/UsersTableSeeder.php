
<?php
// namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use Faker\Factory;
class UsersTableSeeder extends Seeder {

    public function run() {
   $faker = Factory::create();
    User::truncate();
    foreach(range(1, 100) as $i) {
    User::create([
     'name' => $faker->name,
     'email' => $faker->unique()->email,
     'email_verified_at' => now(),
     'password' => bcrypt('password'),
     'remember_token' => Str::random(10),
   ]);
  }
 }
}