<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['user_id','npm', 'tanggal_lahir', 'tempat_lahir', 'telepon', 'alamat', 'gender'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
