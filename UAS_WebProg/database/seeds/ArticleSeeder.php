<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'user_id'=> '2',
                'category_id'=> '3',
                'title'=> 'Danau Toba',
                'description'=> 'Danau Toba adalah danau alami berukuran besar di Indonesia yang berada di kaldera Gunung Supervulkan. 
                Danau ini memiliki panjang 100 kilometer (62 mil), lebar 30 kilometer (19 mi), dan kedalaman 505 meter (1657 ft). 
                Danau ini terletak di tengah pulau Sumatra bagian utara dengan ketinggian permukaan sekitar 900 meter (2953 ft). 
                Ini adalah danau terbesar di Indonesia dan danau vulkanik terbesar di dunia.',
                'image' =>'../img/toba.jpg'
            ],

            [
                'user_id'=> '3',
                'category_id' => '1',
                'title'=> 'Pantai Pandawa',
                'description' => 'Hello sobat Balipedia. Pantai Pandawa merupakan salah satu pantai yang terkenal di Bali. 
                Seperti kita ketahui, Bali merupakan pulau seluas 5.000 kilometer persegi dengan pesona alam yang menjadi ikon wisata Indonesia yang terkenal di dunia.',
                'image'=> '../img/pandawa.jpg'
            ],[
                'user_id'=> '3',
                'category_id'=> '3',
                'title'=> 'Danau Tiga Warna',
                'description' => 'Seperti yang diketahui kalau Danau Tiga Warna memiliki keindahan dari warnanya yang bisa berubah-ubah. Warna Danau yang cenderung biru atau “Tiwu Nuwa Muri Koo Fai” 
                dipercaya para penduduk menjadi tempat berkumpulnya roh orang yang telah meninggal saat usia muda. Sedangkan, warna merah “Tiwu Ata Polo” dipercaya menjadi tempat berkumpulnya arwah tidak baik. 
                Kemudian saat danau berwarna putih “ Tiwu Ata Mbupu” dipercaya warga menjadi tempat berkumpulnya arwah tetua mereka.',
                'image'=> '../img/tigawarna.jpg'
            ],[
                'user_id'=>'2',
                'category_id'=>'2',
                'title'=> 'Gunung Bromo',
                'description' => 'Gunung Bromo (dari bahasa Sanskerta: Brahma, salah seorang Dewa Utama dalam agama Hindu) atau dalam bahasa Tengger dieja "Brama", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. 
                Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. 
                Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur.',
                'image' => '../img/bromo.jpg'
            ],[
                'user_id'=>'3',
                'category_id'=>'1',
                'title' => 'Pantai Anyer',
                'description' => 'Pantai Anyer, destinasi wisata bahari terindah di ujung barat Pulau Jawa. Berlokasi dekat dengan kota Jakarta, maka pantai ini menjadi tempat yang cocok untuk melepas penat. 
                Mulai dari melihat sunset hingga bersantai di pasir putih akan menjadi daya tarik tersendiri.',
                'image' => '../img/anyer.jpg'
            ]
        ]);
    }
}
