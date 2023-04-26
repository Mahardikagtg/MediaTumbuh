<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Toko;

class Toko extends Model
{
    protected $table = 'toko';
    protected $fillable = ['idtoko','NamaToko', 'AlamatToko', 'NoPengaduanToko', 'NoRekeningToko','IsActive'];
    protected $primaryKey = 'idtoko';
    public $timestamps = false;
}
