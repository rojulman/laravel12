<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paramedik extends Model
{
    use HasFactory;
    protected $table = 'paramediks';
    protected $fillable = [
        'nama',
        'gender',
        'tgl_lahir',
        'tmp_lahir',
        'kategori',
        'alamat',
        'telpon',
        'unit_kerja_id',
    ];

    public function unitKerja()
    {
        return $this->belongsTo(UnitKerja::class, 'unit_kerja_id');
    }
}
