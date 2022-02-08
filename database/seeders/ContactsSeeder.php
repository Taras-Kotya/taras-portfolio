<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'welcome'           => 'ПРИВІТ!',
            'welcome_content'   => 'Я - PHP розробник, і ось трохи детальніше про мене',
            'name'      => 'Тарас Шпитко',
            'birthday'  => '04. 01. 1998',
            'specialty' => 'PHP Розробник',
            'email'     => 'taras.victorovich.96',
            'number'    => '+38-(099)-92-**-337',
            'site'      => 'botsu.su',
            'city'      => 'Херсон, Україна',
            'believer'  => 'Християнська',
            'hobby'     => 'Гітара, Спорт, Програмування, Мото',
            'soc_instagram' => 'https://instagram.com/taras_shpytko',
            'soc_twitter'   => '#',
            'soc_facebook'  => '#',
            'soc_youtube'   => '#',
            'soc_telegram'  => 'https://t.me/taras_shpytko',
            'age'           => '24',
            'year_in_special'       => '8',
            'clients_in_special'    => '10',
            'project_in_special'    => '3',
            'button_url'    => 'mailto:taras.victorovich.96@example.com',
            'button_name'   => 'Написати'
        ]);
    }
}
