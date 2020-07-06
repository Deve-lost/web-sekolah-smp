<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $table = 'berita_informasi';
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
