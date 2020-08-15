<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarketerModel extends Model
{
    protected $table = 'marketers';
    public $timestamps = false;
    public $primaryKey = 'id_marketer';
}
