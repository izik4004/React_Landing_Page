<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'path'
    ];

    /**
     * Get the owning mediable model.
     */
    public function mediable()
    {
        return $this->morphTo();
    }

    /**
     * Get all of the product's images.
     */
    public function media()
    {
        return $this->morphMany('App\Media', 'mediable');
    }
}
