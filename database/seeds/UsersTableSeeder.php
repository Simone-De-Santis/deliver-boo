<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Address as FakerAddress;
use Faker\Provider\en_US\PhoneNumber as FakerNumber;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker, FakerAddress $faker_address, FakerNumber $faker_number)
    {
        //generate our personal user for access
        $user  = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.it';
        $user->password = bcrypt('password');
        $user->activity_name = 'Ristorante6';
        $user->province = 'FIRENZE';
        $user->municipality = 'FIRENZE';
        $user->address = 'Via Grande, 28';
        $user->city = 'FIRENZE';
        $user->zip = '50121';
        $user->vat = '11111111111';
        $user->telephone = '3333333333';
        $user->description = 'Siamo il ristorante piu bello di tutti!!!!';
        $user->url = 'ttps://via.placeholder.com/640x680.png/00ff33?text=animals+deleniti';
        $user->longitude = '43.76954';
        $user->latitude = '11.23788';
        $user->save();

        //for cycle to generate faker data for 'users' table
        for ($i = 0; $i < 10; $i++) {
            $new_user  = new User();
            $new_user->name = $faker->userName();
            $new_user->email = $faker->companyEmail();
            $new_user->password = bcrypt($faker->password());
            $new_user->activity_name = $faker->word();
            $new_user->province = 'FIRENZE';
            $new_user->municipality = 'FIRENZE';
            $new_user->address = $faker_address->streetAddress();
            $new_user->city = 'FIRENZE';
            $new_user->zip = $faker_address->numberBetween(50121, 50145);
            $new_user->vat = $faker->numberBetween(10000000000, 99999999999);
            $new_user->telephone = $faker_number->phoneNumber();
            $new_user->description = $faker->paragraph(2);
            $new_user->url = $faker->imageUrl(640, 680, 'animals', true);
            $new_user->longitude = $faker_address->latitude(-90, 90);
            $new_user->latitude = $faker_address->longitude(-180, 180);;
            $new_user->save();
        }
    }
}
