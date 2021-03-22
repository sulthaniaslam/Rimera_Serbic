<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visi_misi extends Model
{
    use HasFactory;

    protected $table = 'tbl_visi_misi';

    protected $primaryKey = 'id_vm';
}
