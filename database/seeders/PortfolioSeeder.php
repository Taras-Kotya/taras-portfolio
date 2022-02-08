<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'title'     => 'Ігровий бот',
            'url'       => 'BOTSU.SU',
            'content'   => 'Сайт с ботами-программами, які грають онлайн в різних іграх, за різних людей, за невелику платню. Створений ще на початку 2018 року',
            'image'     => 'botsu-su.png',
            'button_url'    => 'http://botsu.su/',
            'button_name'   => 'Перейти'
        ]);
    }
}
