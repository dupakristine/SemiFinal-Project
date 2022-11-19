<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Visitor;
use Faker\Generator as Faker;

$factory->define(Visitor::class, function (Faker $faker) {

    $purpose = ['visiting friend','Leisure','visiting family','participating in a tour', 'to apply'];

    return [
        'name'=>$faker->name,
        'phone'=>$faker->numerify('###########'),
        'purpose'=>$faker->randomElement($purpose),
        'time'=>$faker->time(),

    ];
});
