<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendaftaranModel extends Model
{
    protected $table = 'pendaftaran';
    public $timestamps = false;
    public $primaryKey = 'id_pendaftaran';
}
