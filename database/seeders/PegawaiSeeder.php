<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'name' => 'origami',
            'nip' => '02131392',
            'email' => 'origami@gmail.com',
            'address' => 'surabaya',
            'image' => '',
        ]);
    }
}
