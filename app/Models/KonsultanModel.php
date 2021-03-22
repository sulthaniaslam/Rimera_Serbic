<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultanModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_konsultan';

    protected $primaryKey = 'id_konsultan';
}
