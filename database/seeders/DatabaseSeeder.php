<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Fakultas;
use App\Models\Role;
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

        User::create([
            'name' => 'Woodie',
            'email' => 'woodiechek@gmail.com',
            'password' => bcrypt('woodiechek911'),
            'role' => '2',
            'fakultas_id' => '1',
            'jurusan_id' => '1',
            'status' => '1' 
        ]);

        Role::create([
            'name' => 'Super Admin',
            'status' => 'Aktif'
        ]);

        Role::create([
            'name' => 'Admin',
            'status' => 'Aktif'
        ]);

        Role::create([
            'name' => 'Dosen Pembimbing',
            'status' => 'Aktif'
        ]);


        Fakultas::create([
            'name' => 'Fakultas Teknik Informatika dan Komputer',
            'status' => 'Aktif'
        ]);

        Jurusan::create([
            'name' => 'Prodi Teknik Informatika Reguler (TI-Reg)',
            'fakultas_id' => '1',
            'status' => 'Aktif'
        ]);

        Jurusan::create([
            'name' => 'Prodi Teknik Informatika CCIT (TI-CCIT)',
            'fakultas_id' => '1',
            'status' => 'Aktif'
        ]);
        
        Jurusan::create([
            'name' => 'Prodi Teknik Multimedia Digital (TMD)',
            'fakultas_id' => '1',
            'status' => 'Aktif'
        ]);

        Jurusan::create([
            'name' => 'Prodi Teknik Multimedia dan Jaringan (TMJ)',
            'fakultas_id' => '1',
            'status' => 'Fakultas'
        ]);

        Jurusan::create([
            'name' => 'Prodi Teknik Komputer dan Jaringan (TKJ)',
            'fakultas_id' => '1',
            'status' => 'Aktif'
        ]);
        
    }
}
