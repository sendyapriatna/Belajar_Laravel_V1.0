<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nim' => '1900018205',
            'nama' => 'Sendy Apriatna',
            'tanggal_lahir' => '2004-04-20',
            'jenis_kelamin' => 'L',
            'prodi' => 'Teknik Informatika',
        ]);
    }
}