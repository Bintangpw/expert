<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisGangguan extends Model
{
    use HasFactory;
    protected $table = 'jenis_gangguan';
    protected $guard = ["id"];
    protected $fillable = ['kode_gangguan', 'gangguan'];

    public function fillTable()
    {
        $gangguan = [
            [
                "kode_gangguan" => "P001",
                "gangguan" => "Gangguan Mood"
            ],
            [
                "kode_gangguan" => "P002",
                "gangguan" => "gangguan Ringan"
            ],
            [
                "kode_gangguan" => "P003",
                "gangguan" => "gangguan Sedang"
            ],
            [
                "kode_gangguan" => "P004",
                "gangguan" => "gangguan Berat"
            ],
        ];
        return $gangguan;
    }
}
