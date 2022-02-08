<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert([
            'title' => 'Portfolio',
            'title_user'        => 'Taras Shpytko',
            'welcome_content'   => 'Радий тебе бачити на на моїй сторінці. Тут ми можемо з тобою познайомитися, ти побачиш мої роботи, та зможеш знайти мої контакти',
            'specialty'         => 'PHP Розробник',
            'photo_colo'        => 'Screenshotfrom2022-02-0502-44-25.png',
            'photo_back'        => 'Screenshotfrom2022-02-0502-44-25.png',
            'photo1'            => 'photo_2022-02-07_10-23-56.jpg',
            'photo2'            => 'photo_2022-02-07_10-23-59.jpg',
            'portfolio_content' => 'Нумо тепер поглянемо на мої роботи',
            'portfolio_view'    => 'дивитись портфоліо'
        ]);
    }
}
