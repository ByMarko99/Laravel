<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ikasle extends Model
{
    use HasFactory;
    protected $table = "ikasles";

    protected $primaryKey = "id";

    protected $fillable = ['izen_abizen', 'adina', 'telefonoa', 'helbidea'];

    protected $hidden = ['id'];
}
