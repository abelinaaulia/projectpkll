<?php

namespace App\Models;

// use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangmasuk extends Model
{
    use HasFactory;

    protected $visible = ['nama_barang', 'jumlah', 'tgl_masuk'];
    protected $fillable = ['nama_barang', 'jumlah', 'tgl_masuk'];
    public $timestamps = true;

    public function barang()
    {
        return $this->hasMany('App\Models\barang', 'id_barangmasuk');
    }
//     public static function boot()
//     {
//         parent::boot();
//         self::deleting(function ($parent) {
//             if ($parent->barang->count() > 0) {
//                 Alert::error('Failed', 'Data not deleted');
//                 return false;
//             }
//         });
//     }
}
