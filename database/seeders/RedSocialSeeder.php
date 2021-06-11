<?php

namespace Database\Seeders;

use App\Models\Usuario\RedSocial;
use Illuminate\Database\Seeder;

class RedSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RedSocial::create([
            'nombre_Red' => 'LinkedIn',
            'url' => 'https://www.linkedin.com/',
        ]);

        RedSocial::create([
            'nombre_Red' => 'GitHub',
            'url' => 'https://github.com/',
        ]);

        RedSocial::create([
            'nombre_Red' => 'Facebook',
            'url' => 'https://www.facebook.com/',
        ]);

        RedSocial::create([
            'nombre_Red' => 'Twitter',
            'url' => 'https://twitter.com/',
        ]);

        RedSocial::create([
            'nombre_Red' => 'YouTube',
            'url' => 'https://www.youtube.com/',
        ]);

        RedSocial::create([
            'nombre_Red' => 'Instagram',
            'url' => 'https://www.instagram.com/',
        ]);

        RedSocial::create([
            'nombre_Red' => 'Pinterest',
            'url' => 'https://www.pinterest.com/',
        ]);
    }
}
