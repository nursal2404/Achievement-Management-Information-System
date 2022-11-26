<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    use HasFactory;
    protected $fillable = ['name','npm','jurusan','lomba','penyelenggara','tingkat','tanggal','sertifikat_file'];

    public $timestamps = false;

    public function user(){

        return $this->belongsTo('App\Models\User');
        }
}
