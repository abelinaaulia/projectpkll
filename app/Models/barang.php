<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $visible = ['id_barangmasuk', 'nama_barang', 'stok', 'kondisi'];
    protected $fillable = ['id_barangmasuk', 'nama_barang', 'stok', 'kondisi'];
    public $timestamps = true;

    public function barangmasuk()
    {

        return $this->belongsTo('App\Models\barangmasuk', 'id_barangmasuk');
    }
    public function peminjaman()
    {

        return $this->belongsTo('App\Models\peminjaman', 'id_barang');
    }
=======
    protected $visible =['id_barangmasuk','nama_barang','stok','kondisi'];
    protected $fillable =['id_barangmasuk','nama_barang','stok','kondisi'];
    public $timestamps = true;
    public function barangmasuk(){

        return $this->belongsTo('App\Models\barangmasuk','id_barangmasuk');
}
public function peminjaman(){

    return $this->belongsTo('App\Models\peminjaman','id_barang');
}
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
}
