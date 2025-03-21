<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'category',
        'content',
        'document',
        'link',
        'posted_by',
        'image',
        'status', 
    ];
    
    protected $casts = [
        'image' => 'array',
    ];

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = $value ? json_encode($value) : null;
    }

    public function getImageAttribute($value)
    {
        return $value ? json_decode($value, true) : null;
    }
    /**
     * Get the user who created the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'posted_by');
    }
}