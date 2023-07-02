<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $fillable = ["isi", "judul", "kode_gangguan", "id_gambar", "url_gambar"];

    public function gangguan()
    {
        return $this->belongsTo(JenisGangguan::class, 'kode_gangguan', 'kode_gangguan');
    }

    public function fillTabel()
    {
        $artikel = [
            [
                "kode_gangguan" => "P001",
                "url_gambar" => 'https://plus.unsplash.com/premium_photo-1668062843172-0129f25a1276?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
                "judul" => 'Gangguan Mood',
                "isi" => 'Ganggguan mood yang terjadi pada seseorang ini umumnya terjadi karena banyaknya tekanan yang menimpa dirinya dan cenderung terlarut dalam tekanan dapat meningkatkan resiko berkembangnya gangguan mood yang kemudian dapat berubah menjadi gangguan terutama gangguan mayor. Hal ini terbukti pada suatu penelitian yang menemukan bahwa dalam sekitar empat dari lima kasus, gangguan mayor diawali oleh peristiwa kehidupan yang penuh tekanan.'
            ],
            [
                "kode_gangguan" => "P002",
                "url_gambar" => 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/04084507/Ini-Ciri-Ciri-gangguan-Ringan-yang-Masih-Sering-Diabaikan.jpg',
                "judul" => 'gangguan Minor / gangguan Ringan',
                "isi" => 'gangguan ringan ini di identikkan dengan gangguan minor yang merupakan perasaan melankolis yang berlangsung sebentar dan disebabkan oleh sebuah kejadian yang tragis atau mengandung ancaman, atau kehilangan sesuatu yang penting dalam kehidupan si penderita (Meier, 2000: 20-21). Orang dengan gangguan ringan ini setidaknya memiliki 2 dari gejala lainnya dan 2-3 dari gejala utama. (Maslim, 2003, 64).'
            ],
            [
                "kode_gangguan" => "P003",
                "url_gambar" => 'https://soc-phoenix.s3-ap-southeast-1.amazonaws.com/wp-content/uploads/2017/09/22173906/mental-illness-and-disorders.jpg',
                "judul" => 'gangguan Sedang',
                "isi" => 'gangguan sedang ini di alami oleh penderita selama kurang 2 minggu, dan orang dengan gangguan sedang ini mengalami kesulitan nyata untuk meneruskan kegiatan social, pekerjaan dan urusan rumah tangga. Orang dengan gangguan sedang ini setidaknya memiliki 2-3 dari gejala utama dan 3-4 dari gejala lainnya (Maslim,  2003: 64).'
            ],
            [
                "kode_gangguan" => "P004",
                "url_gambar" => 'https://soc-phoenix.s3-ap-southeast-1.amazonaws.com/wp-content/uploads/2017/09/22173906/mental-illness-and-disorders.jpg',
                "judul" => 'gangguan mayor / gangguan Berat',
                "isi" => 'gangguan mayor merupakan salah satu gangguan yang prevalensinya paling tinggi di antara berbagai gangguan (Davidson, 2006: 374). gangguan mayor adalah kemurungan yang dalam dan menyebar luas. Perasaan murung ini mampu menyedot semangat dan energy serta menyelubungi kehidupan si penderita seperti asap yang tebak dan menyesakkan dada. gangguan mayor ini dapat berlangsung cukup lama mulai dari empat belas hari sampai beberapa tahun. Hal ini menyebabkan penderita akan sangat sulit utnuk berfungsi dengan baik di lingkungannya. Orang dengan gangguan mayor ini juga terkadang disertai dengan keinginan untuk bunuh diri atau bahkan keinginan untuk mati. Orang yang sangat tertekan, mereka akan mengalami dampak hal-hal yang mengganggu kejiwaan mereka seperti gila, paranoia atau halusinasi pendengaran (Meier, 2000: 25-26).'
            ]
        ];
        return $artikel;
    }
}
