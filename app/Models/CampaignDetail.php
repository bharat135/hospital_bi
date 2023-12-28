<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignDetail extends Model
{
    protected $table = 'campaign_details';
    protected $primaryKey = 'id';
    public $timestamps = false;

    // Define the relationship with the marketing source
    public function marketingSource()
    {
        return $this->belongsTo(MarketingSource::class, 'marketing_source_id', 'id');
    }
}
