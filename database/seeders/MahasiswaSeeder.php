<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data dummy untuk table mahasiswa
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++){
            DB::table('table_mahasiswa')->insert([
                'nama_mahasiswa'=> $faker->name,
                'alamat_mahasiswa'=> $faker->numberBetween(25,40),
                'alamat_pegawai'=>$faker->address
            ]);
        }
    }
}
