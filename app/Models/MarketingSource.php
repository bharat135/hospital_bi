<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarketingSource extends Model
{
 
    protected $fillable = [
        'name',
        'old_id',
        'parent_branch',
        'level',
        'updated_at',
        'created_at',
        'is_active',
        'is_deleted',
    ];

    public function parent()
    {
        return $this->belongsTo(MarketingSource::class, 'parent_branch');
    }

    public function children()
    {
        return $this->hasMany(MarketingSource::class, 'parent_branch');
    }

    public static function getAllMarketingSources()
    {        
        return self::all();
    }
}