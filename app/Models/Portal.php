<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portal extends Model
{
    /** @use HasFactory<\Database\Factories\PortalFactory> */
    use HasFactory;

    protected $table = 'data_portal';
    protected $fillable = [
        'nama_portal',       
    ];

    public function lamaran()
    {
        return $this->hasMany(Lamaran::class, 'id_portal');
    }
}
