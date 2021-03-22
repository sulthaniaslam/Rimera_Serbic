<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konsultan extends Model
{
    use HasFactory;

    protected $table = 'tbl_konsultan';

    protected $primaryKey = 'id_konsultan';
}
