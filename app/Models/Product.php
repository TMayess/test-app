<?php

namespace App\Models;

use App\Models\Meuble;
use App\Models\Literie;
use App\Models\Position;
use App\Models\Accessoire;
use App\Models\categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'image_principal',
        'reference_product',
        'slug',
    ];

    public function meuble()
    {
        return $this->hasOne(Meuble::class);
    }

    public function literie()
    {
        return $this->hasOne(Literie::class);
    }

    public function accessoire()
    {
        return $this->hasOne(Accessoire::class);
    }

    public function categorie()
    {
        return $this->hasOne(categories::class);
    }

    public function positions()
    {
        return $this->belongsToMany(Position::class);
    }
}
