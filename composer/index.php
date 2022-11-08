<?php

require_once './vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create('id_ID');

for ($i=0; $i < 1000; $i++) {
        if (($faker->city) == 'Kediri') {
            echo $faker->name;
        }
        echo "<br>";
}

?>