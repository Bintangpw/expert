<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keputusan extends Model
{
    use HasFactory;
    protected $table = 'keputusan';
    protected $guard = ["id"];

    public function gangguan()
    {
        return $this->hasMany(JenisGangguan::class, 'kode_gangguan', 'kode_gangguan');
    }
    public function gejala()
    {
        return $this->hasMany(Gejala::class, 'kode_gejala' /* tbl gejala */, 'kode_gejala');
    }

    public function fillTable()
    {
        $rule = [
            // PICA
            [
                'kode_gangguan' => 'P001',
                'kode_gejala' => 'G001',
                'mb' => 1.0,
                'md' => 0.0
            ],
            [
                'kode_gangguan' => 'P001',
                'kode_gejala' => 'G002',
                'mb' => 0.4,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P001',
                'kode_gejala' => 'G003',
                'mb' => 0.4,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P001',
                'kode_gejala' => 'G004',
                'mb' => 0.6,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P001',
                'kode_gejala' => 'G005',
                'mb' => 0.6,
                'md' => 0.2
            ],

            // RUMINATION DISORDER
            [
                'kode_gangguan' => 'P002',
                'kode_gejala' => 'G006',
                'mb' => 1.0,
                'md' => 0.0
            ],
            [
                'kode_gangguan' => 'P002',
                'kode_gejala' => 'G007',
                'mb' => 0.6,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P002',
                'kode_gejala' => 'G008',
                'mb' => 0.6,
                'md' => 0.0
            ],
            [
                'kode_gangguan' => 'P002',
                'kode_gejala' => 'G009',
                'mb' => 0.2,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P002',
                'kode_gejala' => 'G010',
                'mb' => 0.2,
                'md' => 0.2
            ],

            // ARFID
            [
                'kode_gangguan' => 'P003',
                'kode_gejala' => 'G003',
                'mb' => 0.4,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P003',
                'kode_gejala' => 'G011',
                'mb' => 0.8,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P003',
                'kode_gejala' => 'G012',
                'mb' => 0.8,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P003',
                'kode_gejala' => 'G013',
                'mb' => 0.2,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P003',
                'kode_gejala' => 'G014',
                'mb' => 0.8,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P003',
                'kode_gejala' => 'G015',
                'mb' => 0.6,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P003',
                'kode_gejala' => 'G016',
                'mb' => 0.6,
                'md' => 0.2
            ],
            
            //  ANOREXIA NERVOSA
            [
                'kode_gangguan' => 'P004',
                'kode_gejala' => 'G009',
                'mb' => 0.2,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P004',
                'kode_gejala' => 'G010',
                'mb' => 0.2,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P004',
                'kode_gejala' => 'G013',
                'mb' => 0.2,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P004',
                'kode_gejala' => 'G017',
                'mb' => 1.0,
                'md' => 0.0
            ],
            [
                'kode_gangguan' => 'P004',
                'kode_gejala' => 'G018',
                'mb' => 0.6,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P004',
                'kode_gejala' => 'G019',
                'mb' => 0.6,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P004',
                'kode_gejala' => 'G020',
                'mb' => 0.6,
                'md' => 0.2
            ],
            //  BULIMIA NERVOSA
            [
                'kode_gangguan' => 'P005',
                'kode_gejala' => 'G020',
                'mb' => 0.6,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P005',
                'kode_gejala' => 'G021',
                'mb' => 0.2,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P005',
                'kode_gejala' => 'G023',
                'mb' => 0.8,
                'md' => 0.0
            ],
            [
                'kode_gangguan' => 'P005',
                'kode_gejala' => 'G024',
                'mb' => 0.2,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P005',
                'kode_gejala' => 'G025',
                'mb' => 0.2,
                'md' => 0.2
            ],
            
            //  BINGE-EATING
            [
                'kode_gangguan' => 'P006',
                'kode_gejala' => 'G021',
                'mb' => 0.2,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P006',
                'kode_gejala' => 'G024',
                'mb' => 0.2,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P006',
                'kode_gejala' => 'G025',
                'mb' => 0.2,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P006',
                'kode_gejala' => 'G026',
                'mb' => 0.6,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P006',
                'kode_gejala' => 'G027',
                'mb' => 0.8,
                'md' => 0.2
            ],
            [
                'kode_gangguan' => 'P006',
                'kode_gejala' => 'G028',
                'mb' => 0.6,
                'md' => 0.2
            ],
        
        ];
        return $rule;
    }
}
