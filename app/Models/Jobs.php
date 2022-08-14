<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Jobs extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    public function city()
    {
        return $this->belongsTo(Cities::class, 'city_id');
    }

    public function company()
    {
        return $this->belongsTo(Companies::class, 'company_id');
    }

    public $translatable = ['name', 'details'];
}
