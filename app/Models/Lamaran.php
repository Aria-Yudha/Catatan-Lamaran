<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    /** @use HasFactory<\Database\Factories\LamaranFactory> */
    use HasFactory;

    protected $table = 'data_lamaran';
    protected $fillable = [
        'id_portal',
        'posisi_dilamar',
        'tanggal_lamar',
        'status',
        'keterangan',
        'nama_perusahaan'
    ];

    public function portal()
    {
        return $this->belongsTo(Portal::class, 'id_portal');
    }
}
