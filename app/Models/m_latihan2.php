<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_latihan2 extends Model
{
    use HasFactory;
    protected $table = 'latihan2';

    protected $fillable = [
    	'nama',
    	'nama_depan',
    	'alamat',
    	'umur',
    	'telepon',
    ];
}
