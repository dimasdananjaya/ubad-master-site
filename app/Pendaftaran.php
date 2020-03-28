<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    public $timestamps = true;
    public $primaryKey = 'id_pendaftaran';
}
