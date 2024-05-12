<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Attachments extends Model
{
    use HasFactory;
    protected int $cache_lifetime = 60; // Cache for temporary url

    protected $fillable = [
        'filename',
        'size',
        'mime'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function visitor()
    {
        return $this->hasMany(Visitor::class);
    }
}
