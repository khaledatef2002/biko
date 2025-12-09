<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $appends = ['display_logo', 'display_cover', 'display_favicon'];

    public function getDisplayLogoAttribute()
    {
        return asset($this->logo);
    }

    public function getDisplayCoverAttribute()
    {
        return asset($this->cover);
    }

    public function getDisplayFaviconAttribute()
    {
        return asset($this->favicon);
    }
}
