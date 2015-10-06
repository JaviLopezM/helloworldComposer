<?php

/**
 * Created by PhpStorm.
 * User: javi
 * Date: 6/10/15
 * Time: 19:32
 */

namespace Com\Iesebre\Dam2\javilopez\helloworldcomposer;

use Faker\Factory;

require __DIR__ . "/../vendor/autoload.php";

class Hello
{
    public $faker;
    public function  __construct()
    {
        $this->faker = Factory::create();
    }

    public function sayHello()
    {
        echo "hola " . $this->faker->name . "\n";
    }

}