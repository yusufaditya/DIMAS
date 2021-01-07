<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; 
    protected $table = 'produk';
    protected $fillable =  [ 'image', 'nama', 'harga', 'jenis', 'detail', 'deskripsi'. 'id_user'];

}
