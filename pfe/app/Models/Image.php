<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_annonce',
        'url',
    ];

    /**
     * Get the annonce that owns the image.
     */
    public function annonce()
    {
        return $this->belongsTo(Annonce::class);
    }
}