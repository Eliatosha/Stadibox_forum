<?php

use App\Channel;

use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         Channel::create ([

            'name' => 'KUHESABU',
            'slug' => Str::slug('KUHESABU')

        ]);


        Channel::create ([

            'name' => 'KUANDKA',
            'slug' => Str::slug('KUANDIKA')

        ]);


        Channel::create ([

            'name' => 'KUSOMA',
            'slug' => Str::slug('KUSOMA')

        ]);


        Channel::create ([

            'name' => 'HAIBA NA MICHEZO',
            'slug' => Str::slug('HAIBA NA MICHEZO')

        ]);


    }
}
