Car-Faker
==========

Car-Faker is a PHP library that generates fake car data for you.

Faker requires PHP >= 5.3.3.

## Installation

```sh
composer require iamraccoon/car-faker
```
or add 
```sh
"iamraccoon/car-faker": "^1.0"
```

## Basic Usage

Use `Faker\Factory::create()` to create and initialize a faker generator, which can generate data by accessing properties named after the type of data you want.

```php
$faker = (new \Faker\Factory())::create();
$faker->addProvider(new \carfaker\provider\Car($faker));

// generate automobile manufacturer and model of car
echo $faker->car;     //Mercedes-Benz CLC 220

// generate only automobile manufacturer
echo $faker->brand;   //Lotus
```