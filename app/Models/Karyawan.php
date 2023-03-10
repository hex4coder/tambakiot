<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ssid',
        'password',
        'nama',
        'kode',
        'ipAddress'
    ];

    public function bos()
    {
        return $this->belongsTo(User::class);
    }
}
