<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id','title', 'content', 'state'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
