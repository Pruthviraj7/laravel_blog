<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name'];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_topic', 'blog_id', 'topic_id');
    }
}
