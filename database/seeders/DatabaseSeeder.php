<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Fakultas;
use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin1234'),
            'role' => '1',
            'fakultas_id' => '1',
            'jurusan_id' => '1',
            'status' => '1' 
        ]);

        Fakultas::create([
            'name' => 'Fakultas Teknik Informatika dan Komputer',
            'status' => '1'
        ]);

        Jurusan::create([
            'name' => 'Prodi Teknik Informatika Reguler (TI-Reg)',
            'fakultas_id' => '1',
            'status' => '1'
        ]);

        Jurusan::create([
            'name' => 'Prodi Teknik Informatika CCIT (TI-CCIT)',
            'fakultas_id' => '1',
            'status' => '1'
        ]);
        
        Jurusan::create([
            'name' => 'Prodi Teknik Multimedia Digital (TMD)',
            'fakultas_id' => '1',
            'status' => '1'
        ]);

        Jurusan::create([
            'name' => 'Prodi Teknik Multimedia dan Jaringan (TMJ)',
            'fakultas_id' => '1',
            'status' => '1'
        ]);

        Jurusan::create([
            'name' => 'Prodi Teknik Komputer dan Jaringan (TKJ)',
            'fakultas_id' => '1',
            'status' => '1'
        ]);
        
    }
}
