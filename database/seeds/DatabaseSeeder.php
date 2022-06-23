<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        for ($i=0; $i < 50; $i++) { 
            DB::table('pesertas')->insert([
                'nama_peserta' =>  Str::random(10),
                'institusi' =>  Str::random(10),
                'jabatan' =>  Str::random(10),
                'pangkat' =>  Str::random(10),
                'email' =>  Str::random(10),
                'nohp' =>  Str::random(10),
                'ttd' => Str::random(10),
                'kegiatan_id' => 6
            ]);
        }
    }
}
