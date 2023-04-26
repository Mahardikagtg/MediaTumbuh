<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['id','NamaBarang', 'DeskripsiBarang', 'StokBarang','FotoBarang'];
    protected $keyType = 'string';
    public $timestamps = false;
}
