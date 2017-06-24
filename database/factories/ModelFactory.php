<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'verified' => true
    ];
});

$factory->state(App\User::class, 'employer', function ($faker) {
    return [
        'email' => 'info+employer@hiredbase.ba',
        'phone' => $faker->e164PhoneNumber,
        'job_title' => $faker->jobTitle,
        'company_name' => $faker->company,
        'company_url' => $faker->domainName,
        'company_size' => $faker->randomDigitNotNull,
        'street_name' => $faker->streetName,
        'building_number' => $faker->buildingNumber,
        'postal_code' => $faker->postcode,
        'city' => $faker->city,
        'country' => $faker->country
    ];
});

$factory->state(App\User::class, 'candidate', function ($faker) {
    return [
        'email' => 'info+candidate@hiredbase.ba',
    ];
});