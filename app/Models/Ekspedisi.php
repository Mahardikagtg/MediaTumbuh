<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ekspedisi;

class Ekspedisi extends Model
{
    protected $table = 'ekspedisi';
    protected $fillable = ['id','NamaEkspedisi', 'KontakEkspedisi', 'AlamatEkspedisi'];
    protected $keyType = 'string';
    public $timestamps = false;
}
