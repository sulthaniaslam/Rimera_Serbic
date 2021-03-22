<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sejarah extends Model
{
    use HasFactory;

    protected $table = 'tbl_sejarah';

    protected $primaryKey = 'id_sejarah';
}
