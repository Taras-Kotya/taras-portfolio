<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Portfolio',
            'title_user' => 'Taras Shpytko',
            'welcome_content' => 'Радий тебе бачити на на моїй сторінці. Тут ми можемо з тобою познайомитися, ти побачиш мої роботи, та зможеш знайти мої контакти',
            'specialty' => 'PHP Розробник'
        ];
    }
}
