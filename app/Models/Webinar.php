<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    use HasFactory;
    protected $fillable = [
      'namaSekolah',
      'alamatSekolah',
      'namaKepalaSekolah',
      'notelpKapsek',
      'email',
      'from',
      'jenjang',
      'kabupaten',
      'jabatan'
    ];
}
