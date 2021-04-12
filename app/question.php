<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $table = 'questions';
    protected $fillable = ['judul', 'isi', 'profil_id', 'jawabantepat', 'created_at',  'updated_at',];

}
