<?php

namespace Database\Seeders;

use Illuminate\Database\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeatherDatabaseSeeder extends Seeder
{
    public function run(): void 
    {
       DB::table('weather')->insert([
           'city' => 'London',
           'state' => 'GB',
           'country' => 'UK',
           'max_temp' => 60,
           'min_temp' => 40,
           'current_temp' => 59,
           '1day_date' => 'February 28',
           '2day_date' => 'February 29',
           '3day_date' => 'March 1',
           '4day_date' => 'March 2',
           '5day_date' => 'March 3',
           '1day_max_temp' => 70,
           '1day_min_temp' => 55,
           '1day_conditions' => 'Sunny',
           '2day_max_temp' => 55,
           '2day_min_temp' => 35,
           '2day_conditions' => 'Rainy',
           '3day_max_temp' => 67,
           '3day_min_temp' => 50,
           '3day_conditions' => 'Cloudy',
           '4day_max_temp' => 68,
           '4day_min_temp' => 54,
           '4day_conditions' => 'Partly Cloudy',
           '5day_max_temp' => 70,
           '5day_min_temp' => 55,
           '5day_conditions' => 'Sunny',
       ]);

       DB::table('weather')->insert([
        'city' => 'Lakeland',
        'state' => 'FL',
        'country' => 'US',
        'max_temp' => 80,
        'min_temp' => 60,
        'current_temp' => 78,
        '1day_date' => 'February 28',
        '2day_date' => 'February 29',
        '3day_date' => 'March 1',
        '4day_date' => 'March 2',
        '5day_date' => 'March 3',
        '1day_max_temp' => 82,
        '1day_min_temp' => 67,
        '1day_conditions' => 'Sunny',
        '2day_max_temp' => 88,
        '2day_min_temp' => 69,
        '2day_conditions' => 'Sunny',
        '3day_max_temp' => 87,
        '3day_min_temp' => 62,
        '3day_conditions' => 'Cloudy',
        '4day_max_temp' => 85,
        '4day_min_temp' => 64,
        '4day_conditions' => 'Sunny',
        '5day_max_temp' => 82,
        '5day_min_temp' => 67,
        '5day_conditions' => 'Sunny',
        ]);
        
        DB::table('weather')->insert([
            'city' => 'Jackson',
            'state' => 'MS',
            'country' => 'US',
            'max_temp' => 75,
            'min_temp' => 55,
            'current_temp' => 73,
            '1day_date' => 'February 28',
            '2day_date' => 'February 29',
            '3day_date' => 'March 1',
            '4day_date' => 'March 2',
            '5day_date' => 'March 3',
            '1day_max_temp' => 80,
            '1day_min_temp' => 65,
            '1day_conditions' => 'Sunny',
            '2day_max_temp' => 74,
            '2day_min_temp' => 62,
            '2day_conditions' => 'Cloudy',
            '3day_max_temp' => 68,
            '3day_min_temp' => 54,
            '3day_conditions' => 'Rainy',
            '4day_max_temp' => 76,
            '4day_min_temp' => 62,
            '4day_conditions' => 'Sunny',
            '5day_max_temp' => 80,
            '5day_min_temp' => 65,
            '5day_conditions' => 'Overcast',
        ]);
    }
}