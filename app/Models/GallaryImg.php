<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GallaryImg extends Model
{
    use HasFactory;
    protected $fillable=['title','photo','tag_id'];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}


