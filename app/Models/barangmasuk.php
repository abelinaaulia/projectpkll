<?php

namespace App\Models;

<<<<<<< HEAD
// use Alert;
=======
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangmasuk extends Model
{
    use HasFactory;
<<<<<<< HEAD

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
=======
    protected $visible =['nama_barang','jumlah','tgl_masuk'];
    protected $fillable =['nama_barang','jumlah','tgl_masuk'];
    public $timestamps = true;
    public function barang(){

        return $this->belongsTo('App\Models\barangmasuk','id_barangmasuk');
}
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
}
