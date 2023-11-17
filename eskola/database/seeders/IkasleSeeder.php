<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ikasle;

class IkasleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $ikasle = new Ikasle();
        $ikasle->izen_abizen = 'Jone Martinez';
        $ikasle->adina = 20;
        $ikasle->telefonoa = '69988544';
        $ikasle->helbidea = 'Gran Via, 2';

        $ikasle->save();


        $ikasle = new Ikasle();

        $ikasle->izen_abizen = 'Pepe M';
        $ikasle->adina = 19;
        $ikasle->telefonoa = '652211477';
        $ikasle->helbidea = 'Ornilla, 2';

        $ikasle->save();

        $ikasle = new Ikasle();

        $ikasle->izen_abizen = 'Lorea';
        $ikasle->adina = 19;
        $ikasle->telefonoa = '652211477';
        $ikasle->helbidea = 'Ornilla, 2';

        $ikasle->save();
    }
}
