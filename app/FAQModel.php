<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQModel extends Model
{
    protected $table = 'faq';
    public $timestamps = false;
    public $primaryKey = 'id_faq';
}
