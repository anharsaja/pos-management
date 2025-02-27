<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_Pesanan extends Model
{
    // Inisialisasi Tabel
    protected $table = 'tbl_pesanan';

    // Inisialisasi Primary Key
    protected $primaryKey = 'id';

    // Inisialisasi nama field yang akan diisi
    protected $fillable = [
        'id_user',
        'total_item',
        'total_harga',
        'diskon',
        'bayar',
        'diterima',
        'kembali',
        'status',
    ];

    // Inisialisasi field created_at dan updated_at secara otomatis
    public $timestamps = true;

    // Get All Data
    public static function getAll()
    {
        return self::all();
    }

    // Get Data By ID
    public static function getById($id)
    {
        return self::where('id_pesanan', $id)->first();
    }

    // Insert Data
    public static function insert($data)
    {
        return self::create($data);
    }

    // Update Data
    public static function updateData($id, $data)
    {
        return self::where('id_pesanan', $id)->update($data);
    }

    // Delete Data
    public static function deleteData($id)
    {
        return self::where('id_pesanan', $id)->delete();
    }

    // Relasi One to Many
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
}
