<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class testTableModel extends Model
{
    protected $table = 'testTable';
    protected $fillable = [
        'name', 'address', 'g_Map',
    ];
}
