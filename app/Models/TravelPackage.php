<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TravelPackage extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'travel_packages';

    protected $fillable = [
        'title', 'slug', 'location', 'about', 'featured_event', 'language', 'foods',
        'departure_date', 'duration', 'type', 'price'
    ];
    

    protected $hidden = [];

    public function galleries() {
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }
}
