<?php

use Faker\Factory;

$data = [];
$faker = Factory::create();
$params = require('_config.php');

for ($i = 0; $i < $params['bannerCount']; $i++) {
    $data[] = [
        'title' => 'Banner: title - ' . $faker->words($nb = rand(3, 6), $asText = true),
        'description' => 'Banner description starts here - ' . $faker->words($nb = rand(10, 15), $asText = true),
        'photo' => 'https://picsum.photos/id/' . $i . '/525/525/',
        'link' => $faker->url,
        'sort' => null,
        'is_publish' => round(rand(2, 10) / 10, 0),
        'status' => 10,
        'created_at' => '1581434317',
        'updated_at' => '1581434317',
    ];
}

return $data;