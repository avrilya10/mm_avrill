<?php

use Illuminate\Database\Seeder;
use App\Model\Pemasok;
use Illuminate\Support\Str;

class PemasokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Pemasok::class,50)->create(); 
    }
}
