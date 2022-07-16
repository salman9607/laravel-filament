<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'image'];

    public function tags(): belongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
