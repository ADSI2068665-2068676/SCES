<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;
    protected $table = 'sc_ficha';
    protected $primaryKey = 'SC_Ficha_PK_ID';
}
