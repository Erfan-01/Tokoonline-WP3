<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '089693612443',
            'password' => bcrypt('P@55word'),
        ]);
        #untuk record berikutnya silahkan, beri nilai berbeda pada nilai: nama, email, hp dengan nilai masing-masing anggota kelompok
        User::create([
            'nama' => 'Julius Bernardino Erfanda',
            'email' => 'juliusbernardinoerfanda@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '085752356036',
            'password' => bcrypt('19231679'),
        ]);

        #data kategori
        Kategori::create([
            'nama_kategori' => 'MLBB',
        ]);
        Kategori::create([
            'nama_kategori' => 'COC',
        ]);
        Kategori::create([
            'nama_kategori' => 'PUBG',
        ]);
        Kategori::create([
            'nama_kategori' => 'HOK',
        ]);
        Kategori::create([
            'nama_kategori' => 'FREE FIRE',
        ]);
    }
}
