<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Faker\factory as Faker;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('tb_pegawai')->insert([
        //     'nama_pegawai'=>'Febi Nuari Safana',
        //     'jabatan_pegawai'=>'Admin',
        //     'umur_pegawai'=>25,
        //     'alamat_pegawai'=>'Pekanbaru'
        // ]);

        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++){
            DB::table('tb_pegawai')->insert([
                'nama_pegawai'=> $faker->name,
                'jabatan_pegawai'=> $faker->jobTitle,
                'umur_pegawai'=> $faker->numberBetween(25,40),
                'alamat_pegawai'=>$faker->address
            ]);
        }
    }
}
