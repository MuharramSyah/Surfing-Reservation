<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'flag',
        'country',
        'code'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function visitor()
    {
        return $this->hasMany(Visitor::class);
    }
}
