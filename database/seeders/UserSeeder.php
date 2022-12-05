<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = ['kode_pendf' => '0001',
        'name' => 'chandra karim',
        'email' => 'chandrakarim27@gmail.com',
        'password' => bcrypt('rahasia'),
        'asal_kota' => 'Sorong,Papua Barat Daya',
        'tempat_lahir' => 'Dili',
        'tgl_lahir' =>'1994-06-27',
        'jk' => 'Laki-laki',
        'no_tlp' => '081211103079',
        'alamat' => 'jl.janti',
        'file_img' => 'foto.JPG',
    ];
        User::insert($data);
    }
}
