<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin'.'@test.com',
            'password' => Hash::make('admin123'),
        ]);

        DB::table('users')->insert([
            'name' => 'joe',
            'email' => 'joe'.'@test.com',
            'password' => Hash::make('joe12345'),
        ]);

        DB::table('pertanyaan')->insert([
            'kode_pertanyaan' => 'P1',
            'pertanyaan' => 'tujuan nnvestasi',
        ]);

        DB::table('pertanyaan')->insert([
            'kode_pertanyaan' => 'P2',
            'pertanyaan' => 'jangka waktu investasi',
        ]);

        DB::table('pertanyaan')->insert([
            'kode_pertanyaan' => 'P3',
            'pertanyaan' => 'porsi dana investasi',
        ]);

        DB::table('pertanyaan')->insert([
            'kode_pertanyaan' => 'P4',
            'pertanyaan' => 'toleransi kerugian',
        ]);

        //pertanyaan 1
        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P1-A',
            'jawaban'=>'memperoleh keamanan dan pertumbuhan nilai investasi',
            'pertanyaan'=>'P1',
        ]);

        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P1-B',
            'jawaban'=>'sebagian kecil ditujukan untuk peningkatan nilai investasi dan sebagian besar untuk pendapatan',
            'pertanyaan'=>'P1',
        ]);

        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P1-C',
            'jawaban'=>'tujuan utama adalah untuk peningkatan nilai investasi, Sebagian untuk pendapatan',
            'pertanyaan'=>'P1',
        ]);
        
        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P1-D',
            'jawaban'=>'Investasi jangka panjang',
            'pertanyaan'=>'P1',
        ]);


        //pertanyyan 2
        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P2-A',
            'jawaban'=>'berinvestasi kurang dari 1 tahun',
            'pertanyaan'=>'P2',
        ]);

        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P2-B',
            'jawaban'=>'berinvestasi 1-3 tahun ',
            'pertanyaan'=>'P2',
        ]);

        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P2-C',
            'jawaban'=>'berinvestasi 3-5 tahun',
            'pertanyaan'=>'P2',
        ]);
        
        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P2-D',
            'jawaban'=>'berinvestasi lebih dari 5 tahun',
            'pertanyaan'=>'P2',
        ]);

        // pertanyaan 3
        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P3-A',
            'jawaban'=>'porsi dana kurang dari 25 % ',
            'pertanyaan'=>'P3',
        ]);

        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P3-B',
            'jawaban'=>'porsi dana antara 25-50 %',
            'pertanyaan'=>'P3',
        ]);

        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P3-C',
            'jawaban'=>'porsi dana antara 50-75%',
            'pertanyaan'=>'P3',
        ]);
        
        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P3-D',
            'jawaban'=>'porsi dana lebih dari 75%',
            'pertanyaan'=>'P3',
        ]);

        // pertanyaan 4 
        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P4-A',
            'jawaban'=>'menerima kerugian 0 % ',
            'pertanyaan'=>'P4',
        ]);

        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P4-B',
            'jawaban'=>'menerima kerugian 0-5 %',
            'pertanyaan'=>'P4',
        ]);

        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P4-C',
            'jawaban'=>'menerima kerugian 5-15 %',
            'pertanyaan'=>'P4',
        ]);
        
        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P4-D',
            'jawaban'=>'menerima kerugian lebih dari 15%',
            'pertanyaan'=>'P4',
        ]);

        DB::table('rules')->insert([
            'profil'=>'sangat konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-A',
            'jawaban_4'=>'P4-A',
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-B',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-B',
            'jawaban_4'=>'P4-B',
        ]);

        DB::table('rules')->insert([
            'profil'=>'moderat',
            'jawaban_1'=>'P1-C',
            'jawaban_2'=>'P2-C',
            'jawaban_3'=>'P3-C',
            'jawaban_4'=>'P4-C',
        ]);
        DB::table('rules')->insert([
            'profil'=>'agresif',
            'jawaban_1'=>'P1-D',
            'jawaban_2'=>'P2-D',
            'jawaban_3'=>'P3-D',
            'jawaban_4'=>'P4-D',
        ]);


    }
}
