<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_siswa')->insert([
            'id_siswa' => '5332',
            'nama' => 'Akbar',
            'jenis_kelamin' => 'Laki-Laki',
            'tempat_lahir' => 'Malang',
            'tanggal_lahir' => '2002-12-06',
            'alamat' => 'Malang',
            'no_hp' => '082232862284',
            'agama' => 'Islam',
            'email' => 'akbarilham@gmail.com',
            'id_pengguna' => '5332',
        ]);
    }
}
