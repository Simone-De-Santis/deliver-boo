<?php

use Illuminate\Database\Seeder;
use App\Models\Order;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Address as FakerAddress;
use Faker\Provider\en_US\Person as FakerPerson;
use Faker\Provider\en_US\PhoneNumber as FakerNumber;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker, FakerAddress $faker_address, FakerPerson $faker_person, FakerNumber $faker_number)
    {
        //for cycle to generate faker data for 'orders' table
        for ($i = 0; $i < 20; $i++) {
            $new_order = new Order();

            $new_order->first_name = $faker_person->firstNameMale();
            $new_order->last_name = $faker_person->lastName();
            $new_order->address = $faker_address->streetAddress();
            $new_order->city = $faker_address->city();
            $new_order->zip = $faker_address->randomNumber(5, true);
            $new_order->phone_number = $faker_number->phoneNumber();
            $new_order->discount = $faker->randomFloat(2, 0, 99);
            $new_order->total_price = $faker->randomFloat(2, 0, 9999);
            $new_order->message_to_users = $faker->paragraph(2);

            $new_order->save();
        }
    }
}
