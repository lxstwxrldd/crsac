<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'image',
        'address',
        'lat',
        'lng',
        'rating',
    ];

    /**
     * 
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getImageUrlAttribute(): string
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        
        return asset('images/no-image.jpg');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class)->latest();
    }

    public function images()
    {
        return $this->hasMany(PlaceImage::class);
    }
    
    public function averageRating()
    {
        $avg = $this->reviews()->avg('rating');
        return $avg ? round($avg, 1) : 0;
    }
}

