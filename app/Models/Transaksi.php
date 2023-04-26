<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Transaksi;

class Transaksi extends Authenticatable
{
    use Notifiable;

    protected $keyType = 'string';
    protected $table = 'transaksi';
    protected $fillable = ['idtransaksi','username','namalengkap','email','idbarang','alamat','alamat2','kodepos','tokopengirim','ekspedisi','paymentMethod','cc-name','cc-number','cc-expiration','cc-ccv','total'];
    public $primaryKey = 'idtransaksi';
    public $timestamps = false;
}