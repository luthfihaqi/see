<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stok_kartu extends Model
{
    protected $table = 'stok_kartu';
    protected $primaryKey = 'id';
    protected $fillable = ['no_po','no_kartu','serial'];
}
