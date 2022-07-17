<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['topic_id','body'];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}