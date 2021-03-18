<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'kode_barang' => "K" .sprintf('%08d',$faker->unique()->numberBetween(1,99999999)),
        'produk_id' => $faker->randomElement(App\Model\Produk::select('id')->get()),
        'nama_barang' => $faker->randomElement(['Mie sedap ayam bawang','Sabun Lifebuoy']),
        'satuan' => $faker->randomElement(['pcs','item','kardus']),
        'harga_jual' => $faker->numberElement(1000,100000),
        'stok' => $faker->numberElement(1,1000),
        'user_id' => '1'
    ];
});
