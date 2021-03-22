<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class struktur_organisasi extends Model
{
    use HasFactory;

    protected $table = 'tbl_so';

    protected $primaryKey = 'id_so';
}
