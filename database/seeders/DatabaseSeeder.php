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
            'jawaban'=>'porsi dana kurang dari 10 % ',
            'pertanyaan'=>'P3',
        ]);

        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P3-B',
            'jawaban'=>'porsi dana antara 10-20 %',
            'pertanyaan'=>'P3',
        ]);

        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P3-C',
            'jawaban'=>'porsi dana antara 20-30%',
            'pertanyaan'=>'P3',
        ]);
        
        DB::table('jawaban')->insert([
            'kode_jawaban' => 'P3-D',
            'jawaban'=>'porsi dana antara 30-40%',
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

        DB::table('reksadanas')->insert([
            'nama_reksadana'=>'reksadana pasar uang',
            'deskripsi'=>'
            Reksadana pasar uang adalah jenis investasi di mana dana dari berbagai investor dikumpulkan dan dikelola oleh manajer investasi profesional. Dana tersebut diinvestasikan pada instrumen pasar uang yang cenderung memiliki risiko rendah, seperti deposito berjangka, surat berharga komersial, sertifikat deposito, dan instrumen pasar uang lainnya. Reksadana pasar uang cocok untuk investor dengan tujuan investasi jangka pendek, mencari instrumen investasi yang aman dan likuid. Reksadana pasar uang memberikan stabilitas dan pertumbuhan modal yang cukup baik dalam jangka pendek, namun tetap perlu memperhatikan risiko investasi yang ada.',
        ]);

        DB::table('reksadanas')->insert([
            'nama_reksadana'=>'reksadana pendapatan tetap',
            'deskripsi'=>'Reksadana pendapatan tetap adalah jenis reksadana di mana dana dari investor dikumpulkan dan dikelola oleh manajer investasi profesional. Dana tersebut diinvestasikan pada instrumen pendapatan tetap, seperti obligasi pemerintah, obligasi perusahaan, dan surat utang lainnya. Reksadana pendapatan tetap bertujuan untuk memberikan pendapatan tetap kepada investor melalui bunga atau kupon yang dihasilkan dari instrumen pendapatan tetap tersebut. Reksadana ini cocok untuk investor yang mencari pendapatan rutin dan lebih stabil daripada reksadana saham, dengan risiko yang relatif lebih rendah. Meskipun demikian, perlu diperhatikan bahwa nilai investasi reksadana pendapatan tetap dapat berfluktuasi seiring dengan perubahan suku bunga dan risiko kredit penerbit instrumen pendapatan tetap.',
        ]);

        DB::table('reksadanas')->insert([
            'nama_reksadana'=>'reksadana campuran',
            'deskripsi'=>'Reksadana campuran adalah jenis reksadana yang memiliki portofolio investasi yang terdiri dari kombinasi instrumen saham dan instrumen pendapatan tetap. Tujuan dari reksadana campuran adalah mencapai keseimbangan antara pertumbuhan modal jangka panjang yang lebih tinggi yang biasanya terkait dengan saham, dan pendapatan yang stabil yang biasanya berasal dari instrumen pendapatan tetap. Dengan adanya kombinasi ini, reksadana campuran cocok untuk investor yang mencari pertumbuhan modal jangka panjang namun juga ingin menjaga risiko dengan memiliki alokasi dana pada instrumen yang lebih stabil.',
        ]);

        DB::table('reksadanas')->insert([
            'nama_reksadana'=>'reksadana saham',
            'deskripsi'=>'Reksadana saham adalah jenis reksadana yang menginvestasikan dana dari para investor pada saham-saham perusahaan yang terdaftar di bursa efek. Manajer investasi yang profesional akan mengelola portofolio investasi dengan tujuan mencapai pertumbuhan modal jangka panjang. Reksadana saham cocok untuk investor yang memiliki toleransi risiko yang lebih tinggi dan mencari potensi pertumbuhan modal yang lebih tinggi. Dalam reksadana saham, dana investor dialokasikan pada berbagai saham dari berbagai sektor dan perusahaan yang berbeda. Dengan demikian, investor dapat mendapatkan diversifikasi yang lebih baik daripada membeli saham individual secara langsung.',
        ]);

        DB::table('rules')->insert([
            'profil'=>'sangat konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-A',
            'jawaban_4'=>'P4-A',
            'jenis_reksadana'=>1
        ]);

        DB::table('rules')->insert([
            'profil'=>'sangat konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-A',
            'jawaban_4'=>'P4-B',
            'jenis_reksadana'=>1
        ]);
        DB::table('rules')->insert([
            'profil'=>'sangat konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-A',
            'jawaban_4'=>'P4-C',
            'jenis_reksadana'=>1
        ]);
        DB::table('rules')->insert([
            'profil'=>'sangat konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-A',
            'jawaban_4'=>'P4-D',
            'jenis_reksadana'=>1
        ]);
        DB::table('rules')->insert([
            'profil'=>'sangat konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-A',
            'jawaban_4'=>'P4-A',
            'jenis_reksadana'=>1
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-B',
            'jawaban_4'=>'P4-B',
            'jenis_reksadana'=>2
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-B',
            'jawaban_4'=>'P4-B',
            'jenis_reksadana'=>2
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-B',
            'jawaban_4'=>'P4-C',
            'jenis_reksadana'=>2
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-B',
            'jawaban_4'=>'P4-D',
            'jenis_reksadana'=>2
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-D',
            'jawaban_4'=>'P4-A',
            'jenis_reksadana'=>2
        ]);

        DB::table('rules')->insert([
            'profil'=>'moderat',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-D',
            'jawaban_4'=>'P4-B',
            'jenis_reksadana'=>3
        ]);

        DB::table('rules')->insert([
            'profil'=>'moderat',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-D',
            'jawaban_4'=>'P4-C',
            'jenis_reksadana'=>3
        ]);

        DB::table('rules')->insert([
            'profil'=>'moderat',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-D',
            'jawaban_4'=>'P4-D',
            'jenis_reksadana'=>3
        ]);

        DB::table('rules')->insert([
            'profil'=>'sangat konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-A',
            'jawaban_4'=>'P4-A',
            'jenis_reksadana'=>1
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-A',
            'jawaban_4'=>'P4-B',
            'jenis_reksadana'=>2
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-A',
            'jawaban_4'=>'P4-B',
            'jenis_reksadana'=>2
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-A',
            'jawaban_4'=>'P4-C',
            'jenis_reksadana'=>2
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-A',
            'jawaban_4'=>'P4-D',
            'jenis_reksadana'=>2
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-B',
            'jawaban_4'=>'P4-A',
            'jenis_reksadana'=>2
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-B',
            'jawaban_4'=>'P4-B',
            'jenis_reksadana'=>2
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-B',
            'jawaban_4'=>'P4-C',
            'jenis_reksadana'=>2
        ]);

        
        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-B',
            'jawaban_4'=>'P4-D',
            'jenis_reksadana'=>2
        ]);

        
        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-C',
            'jawaban_4'=>'P4-A',
            'jenis_reksadana'=>2
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-C',
            'jawaban_4'=>'P4-B',
            'jenis_reksadana'=>2
        ]);

        DB::table('rules')->insert([
            'profil'=>'moderat',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-C',
            'jawaban_4'=>'P4-C',
            'jenis_reksadana'=>3
        ]);

        DB::table('rules')->insert([
            'profil'=>'moderat',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-C',
            'jawaban_4'=>'P4-D',
            'jenis_reksadana'=>3
        ]);

        DB::table('rules')->insert([
            'profil'=>'moderat',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-D',
            'jawaban_4'=>'P4-A',
            'jenis_reksadana'=>3
        ]);

        DB::table('rules')->insert([
            'profil'=>'konservatif',
            'jawaban_1'=>'P1-B',
            'jawaban_2'=>'P2-B',
            'jawaban_3'=>'P3-B',
            'jawaban_4'=>'P4-B',
            'jenis_reksadana'=>2
        ]);

        DB::table('rules')->insert([
            'profil'=>'moderat',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-C',
            'jawaban_4'=>'P4-B',
            'jenis_reksadana'=>3
        ]);

        DB::table('rules')->insert([
            'profil'=>'moderat',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-C',
            'jawaban_4'=>'P4-C',
            'jenis_reksadana'=>3
        ]);

        DB::table('rules')->insert([
            'profil'=>'moderat',
            'jawaban_1'=>'P1-A',
            'jawaban_2'=>'P2-A',
            'jawaban_3'=>'P3-C',
            'jawaban_4'=>'P4-D',
            'jenis_reksadana'=>3
        ]);

        

        DB::table('rules')->insert([
            'profil'=>'moderat',
            'jawaban_1'=>'P1-C',
            'jawaban_2'=>'P2-C',
            'jawaban_3'=>'P3-C',
            'jawaban_4'=>'P4-C',
            'jenis_reksadana'=>3
        ]);

        DB::table('rules')->insert([
            'profil'=>'agresif',
            'jawaban_1'=>'P1-D',
            'jawaban_2'=>'P2-D',
            'jawaban_3'=>'P3-D',
            'jawaban_4'=>'P4-A',
            'jenis_reksadana'=>4
        ]);
        DB::table('rules')->insert([
            'profil'=>'agresif',
            'jawaban_1'=>'P1-D',
            'jawaban_2'=>'P2-D',
            'jawaban_3'=>'P3-D',
            'jawaban_4'=>'P4-B',
            'jenis_reksadana'=>4
        ]);
        DB::table('rules')->insert([
            'profil'=>'agresif',
            'jawaban_1'=>'P1-D',
            'jawaban_2'=>'P2-D',
            'jawaban_3'=>'P3-D',
            'jawaban_4'=>'P4-C',
            'jenis_reksadana'=>4
        ]);

        DB::table('rules')->insert([
            'profil'=>'agresif',
            'jawaban_1'=>'P1-D',
            'jawaban_2'=>'P2-D',
            'jawaban_3'=>'P3-D',
            'jawaban_4'=>'P4-D',
            'jenis_reksadana'=>4
        ]);


    }
}
