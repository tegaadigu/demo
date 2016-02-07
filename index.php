<?php
/**
 * Created by PhpStorm.
 * User: tega
 * Date: 09/01/2016
 * Time: 7:31 PM
 */

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name();

echo "<pre>";

for($i = 0; $i < 100; $i++)
	echo ($i % 3 == 0 && $i % 5 == 0) ? 'FizzBuzz<br/>' :( ($i % 3 == 0 ) ? "Fizz<br/>" : (($i % 5 == 0) ? "Buzz<br/>" : $i."<br/>" ));


